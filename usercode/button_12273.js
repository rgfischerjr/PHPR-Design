Runner.buttonEvents['12273'] = function( pageObj, proxy, pageid ) {
	var gid = '12273';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			// Put your code here.

// For a row button, get that row's key
var id = runner.getSelectedKeys()[0]; // PHPR sets the row as selected when you click the row button
if (!id) { return false; }

ajaxRequest({
  action: 'markDone',
  table: 'design_subphase',
  keys: [ id ] // single row
}, function(resp){
  if (resp && resp.ok) {
    location.reload();
  } else {
    swal(resp && resp.message ? resp.message : 'Update failed');
  }
});
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

