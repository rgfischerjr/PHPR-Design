Runner.buttonEvents['12272'] = function( pageObj, proxy, pageid ) {
	var gid = '12272';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			// Put your code here.

// Collect selected subphase IDs
var ids = runner.getSelectedKeys();
if (!ids.length) {
  swal('Select at least one subphase row first');
  return false; // cancel button action
}

// Send to Server event (below)
ajaxRequest({
  action: 'markDone',          // label for your action
  table: 'design_subphase',    // <-- change if your table name differs
  keys: ids                    // PHPR passes these to $keys on the Server side
}, function(resp){
  if (resp && resp.ok) {
    // simplest refresh; replace with a partial grid reload if you have one
    location.reload();
  } else {
    swal(resp && resp.message ? resp.message : 'Update failed');
  }
});

// prevent default submit
return false;
			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			// Put your code here.

var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}

	$('a[data-event=' + gid + ']').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		var rowId = Runner.genId();
		var eventId = gid + "_" + rowId;
		$(this).attr( 'data-event', eventId );
		this.id = this.id + "_" + Runner.genId();
		var buttonObj = new Runner.form.Button({
			id: eventId,
			btnName: gid
		});
		buttonObj.init( {args: [ pageObj, proxy, pageid ]} );
	});

};

