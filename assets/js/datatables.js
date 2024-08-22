$.extend( true, $.fn.dataTable.defaults, {
	"ordering": false
} );

$(document).ready( function () {
	$('#table_id').DataTable();
} );