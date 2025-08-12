
Runner.pages.PageSettings.addPageEvent( 
	"phases", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

(function(){
  // Grab current phase code from a read-only field on the form
  var codeEl = document.querySelector('[data-field="phase_code"] input, [data-field="phase_code"] span');
  var code = codeEl ? (codeEl.value || codeEl.textContent || "").trim() : "";

  function show(fieldName, show){
    var holder = document.querySelector('[data-field="'+fieldName+'"]');
    if(holder){ holder.style.display = show ? "" : "none"; }
  }

  // Approval phases: TF, SD, QA_QC1, QA_QC2
  var isApproval = ["TF","SD","QA_QC1","QA_QC2"].indexOf(code) >= 0;
  // Submission phases: DD, PP
  var isSubmission = ["DD","PP"].indexOf(code) >= 0;

  // Due date is calculated; keep visible (read-only) if you prefer
  // Toggle approval/submission fields
  show("approval_date", isApproval);
  show("submission_date", isSubmission);

  // Optional helper text
  var ap = document.querySelector('[data-field="approval_date"] .rnr-label');
  if(ap && isApproval){ ap.title = "Enter the approval/completion date for this phase"; }
  var sb = document.querySelector('[data-field="submission_date"] .rnr-label');
  if(sb && isSubmission){ sb.title = "Enter the date this phase was submitted"; }
})();

});


Runner.pages.PageSettings.addPageEvent( 
	"phases", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

(function(){
  function todayYMD(){
    var d=new Date(), y=d.getFullYear(), m=('0'+(d.getMonth()+1)).slice(-2), dd=('0'+d.getDate()).slice(-2);
    return y+'-'+m+'-'+dd; // DATE column format
  }

  // Get record id (recId) for the row that contains `el`
  function getRecId(el){
    try { if (window.Runner && Runner.getRecId){ var r=Runner.getRecId(el); if (r) return r; } } catch(e){}
    var $tr = $(el).closest("tr");
    return $tr.data("recordId") || $tr.attr("data-record-id") || (function(){
      var id = (el.id||""); var m=id.match(/_(\d+)$/); return m?m[1]:"";
    })();
  }

  // Set a date value using PHPR API if possible; otherwise force both hidden+visible inputs
  function setDate(field, recId, ymd){
    // 1) Preferred: control API (keeps widget + hidden in sync)
    try{
      if (window.pageObj && pageObj.getControl){
        var c = pageObj.getControl(field, recId);
        if (c && c.setValue){ c.setValue(ymd || ""); return true; }
      }
    }catch(e){}

    // 2) Fallback: set hidden post value + visible text input in that row/cell
    var $cell = $("tr[data-record-id='"+recId+"'] td[data-field='"+field+"']");
    if (!$cell.length) { // try without data-record-id
      $cell = $("#value_"+field+"_"+recId).closest("td[data-field='"+field+"']");
    }
    var $hid = $cell.find("input[type='hidden'][name='value_"+field+"_"+recId+"'], input[name='value_"+field+"_"+recId+"']");
    var $txt = $cell.find("input[type='text']");

    if ($hid.length) $hid.val(ymd || "");
    if ($txt.length) { $txt.val(ymd || "").trigger("change").trigger("blur"); }

    return ($hid.length || $txt.length) > 0;
  }

  // START checkbox handler
  $(document).on("change", "td[data-field='start_checked'] input[type=checkbox], input[id^='value_start_checked_']", function(){
    var recId = getRecId(this);
    if (this.checked) setDate("start_date", recId, todayYMD());
    else              setDate("start_date", recId, "");
  });

  // COMPLETED checkbox handler
  $(document).on("change", "td[data-field='completed_checked'] input[type=checkbox], input[id^='value_completed_checked_']", function(){
    var recId = getRecId(this);
    if (this.checked) setDate("completed_date", recId, todayYMD());
    else              setDate("completed_date", recId, "");
  });

  // Sync any already-open inline rows on load or after row (re)creation
  function initialSync(){
    $("td[data-field='start_checked'] input[type=checkbox], input[id^='value_start_checked_']").each(function(){
      var recId = getRecId(this);
      var $hid = $("input[name='value_start_date_"+recId+"']");
      if (this.checked && (!$hid.val())) setDate("start_date", recId, todayYMD());
    });
    $("td[data-field='completed_checked'] input[type=checkbox], input[id^='value_completed_checked_']").each(function(){
      var recId = getRecId(this);
      var $hid = $("input[name='value_completed_date_"+recId+"']");
      if (this.checked && (!$hid.val())) setDate("completed_date", recId, todayYMD());
    });
  }
  initialSync();
  $(document).on("click", ".rnr-inlinestart, .rnr-inlineedit, .rnr-inlineadd, .rnr-inlinecancel", function(){
    setTimeout(initialSync, 80);
  });
})();

});






