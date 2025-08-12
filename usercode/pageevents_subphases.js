
Runner.pages.PageSettings.addPageEvent( 
	"subphases", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		(function(){
  // ---------- date helpers ----------
  function pad(n){ return (n<10?'0':'')+n; }
  function today(){ var d=new Date(); return {y:d.getFullYear(), m:d.getMonth()+1, d:d.getDate()}; }
  function toYMD(p){ return p.y+'-'+pad(p.m)+'-'+pad(p.d); }     // hidden
  function toMDY(p){ return pad(p.m)+'/'+pad(p.d)+'/'+p.y; }     // visible

  function getRecId(el){
    try{ if(window.Runner && Runner.getRecId){ var r=Runner.getRecId(el); if(r) return r; } }catch(e){}
    var id = el && el.id ? el.id : '';
    var m = id.match(/_(\d+)$/); if(m) return m[1];
    var $tr = jQuery(el).closest('tr');
    return $tr.attr('data-record-id') || $tr.data('recordId') || '';
  }

  // set date via control API + force visible/hidden inputs
  function setDateBoth(field, recId, partsOrNull){
    var ymd='', mdy='';
    if(partsOrNull){ ymd = toYMD(partsOrNull); mdy = toMDY(partsOrNull); }

    try{
      if(window.pageObj && pageObj.getControl){
        var c = pageObj.getControl(field, recId);
        if(c && c.setValue){ c.setValue(partsOrNull ? {year:partsOrNull.y, month:partsOrNull.m, day:partsOrNull.d} : ''); }
      }
    }catch(e){}

    var $cell = jQuery("tr[data-record-id='"+recId+"'] td[data-field='"+field+"']");
    if(!$cell.length){ $cell = jQuery("#value_"+field+"_"+recId).closest("td[data-field='"+field+"']"); }

    var $vis = $cell.find("input[type='text'][id='value_"+field+"_"+recId+"']");
    if($vis.length){ $vis.val(mdy).trigger('change'); }

    var $hid = $cell.find("input[type='hidden'][name='value_"+field+"_"+recId+"'], input[type='hidden'][id='value_"+field+"_"+recId+"']");
    if(!$hid.length){ $hid = jQuery("input[type='hidden'][name='value_"+field+"_"+recId+"'], input[type='hidden'][id='value_"+field+"_"+recId+"']"); }
    if($hid.length){ $hid.val(ymd); }
  }

  // ---------- row color helpers (zebra-safe) ----------
  function setRowBg($tr, hexOrNull){
    var s = ($tr.attr('style') || '');
    s = s.replace(/background-color\s*:\s*[^;]+;?/gi, '').trim();
    if(hexOrNull){
      if (s && s.charAt(s.length-1)!==';') s += ';';
      s += ' background-color: '+hexOrNull+' !important;';
    }
    $tr.attr('style', s);
  }

  function paintFromAttrs($tr){
    var started   = String($tr.attr('data-started')||'0')==='1';
    var completed = String($tr.attr('data-completed')||'0')==='1';
    if (completed)      setRowBg($tr, '#c8e6c9');
    else if (started)   setRowBg($tr, '#e8f5e9');
    else                setRowBg($tr, null);
  }

  function repaintLive($tr){
    var started   = $tr.find("td[data-field='start_checked'] input[type='checkbox']").is(':checked');
    var completed = $tr.find("td[data-field='completed_checked'] input[type='checkbox']").is(':checked');
    if (completed)      setRowBg($tr, '#c8e6c9');
    else if (started)   setRowBg($tr, '#e8f5e9');
    else                setRowBg($tr, null);
    // keep attrs in sync for later repaints
    $tr.attr('data-started',   started ? '1':'0');
    $tr.attr('data-completed', completed? '1':'0');
  }

  // ---------- bind checkbox → date + color ----------
  jQuery(document).on('change', "td[data-field='start_checked'] input[type='checkbox'], input[id^='value_start_checked_']", function(){
    var recId = getRecId(this);
    if (this.checked) setDateBoth('start_date', recId, today()); else setDateBoth('start_date', recId, null);
    repaintLive(jQuery(this).closest('tr'));
  });

  jQuery(document).on('change', "td[data-field='completed_checked'] input[type='checkbox'], input[id^='value_completed_checked_']", function(){
    var recId = getRecId(this);
    if (this.checked) setDateBoth('completed_date', recId, today()); else setDateBoth('completed_date', recId, null);
    repaintLive(jQuery(this).closest('tr'));
  });

  // ---------- initial paint from server-stamped data-* ----------
  function resweep(){ jQuery("table.rnr-gridtable tr").each(function(){ paintFromAttrs(jQuery(this)); }); }
  resweep();
  jQuery(document).on('click', '.rnr-inlinestart, .rnr-inlineedit, .rnr-inlineadd, .rnr-inlinecancel', function(){
    setTimeout(resweep, 60);
  });
})();

});




Runner.registerFieldEvent( 
	'12275', 
	function( params, ctrl, pageObj, ajax, pageid ) {
		
// Sample:
params["value"] = this.getValue();

// Uncomment the following line to skip "Server" and "Client After" steps.
// return false;

	}, 
	function( result, ctrl, pageObj, ajax, params, pageid ) {
		(function(ctrl, pageObj){
  function todayParts(){
    var d = new Date();
    return {year: d.getFullYear(), month: d.getMonth()+1, day: d.getDate()};
  }

  var recId  = ctrl.getId();
  var pageid = pageObj.pageid || pageObj.id;
  var dateCtrl = Runner.getControl(pageid, 'start_date', recId);
  if(!dateCtrl) return;

  // ctrl.getValue() returns 1/0 or '1'/'0'
  var v = ctrl.getValue();
  var isChecked = (v===1 || v==='1' || v===true || v==='on' || v==='ON');

  if(isChecked){
    // Best for “Short date” editors:
    dateCtrl.setValue( todayParts() );
  } else {
    // Clear when unchecked
    dateCtrl.setValue('');
  }
})(this, pageObj);

	}
);


Runner.registerFieldEvent( 
	'12276', 
	function( params, ctrl, pageObj, ajax, pageid ) {
		(function(ctrl, pageObj){
  function todayParts(){
    var d = new Date();
    return {year: d.getFullYear(), month: d.getMonth()+1, day: d.getDate()};
  }

  var recId  = ctrl.getId();
  var pageid = pageObj.pageid || pageObj.id;
  var dateCtrl = Runner.getControl(pageid, 'completed_date', recId);
  if(!dateCtrl) return;

  var v = ctrl.getValue();
  var isChecked = (v===1 || v==='1' || v===true || v==='on' || v==='ON');

  if(isChecked){
    dateCtrl.setValue( todayParts() );
  } else {
    dateCtrl.setValue('');
  }
})(this, pageObj);

	}, 
	function( result, ctrl, pageObj, ajax, params, pageid ) {
		

// Smaple:
ctrl.setValue( result["upper"] );

	}
);




