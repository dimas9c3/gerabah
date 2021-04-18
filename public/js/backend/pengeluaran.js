function init() {
	initComponent();
}

function initComponent() {
	autonumeric();

	var table_pengeluaran =  $('#table-pengeluaran').DataTable
	({
		ajax            : 
		{
			url         : base_url + '/pengeluaran/getData',
			type        : 'POST',
			data 		: {_token: token},
			dataSrc     : 'data',
		},
		fixedHeader     : true,
		paging          : true,
		pageLength      : 10,
		lengthChange    : true,
		searching       : true,
		search          : 
		{
			smart       : false,
			regex       : true,
			caseInsen       : true,
		},
		aaSorting       : [],
		ordering        : true,
		info            : true,
		dom             : 'Bfrtip',
		buttons: 
		[
		{
			extend: 'pdfHtml5',
			orientation: 'portrait',
			pageSize: 'A4',
			title: 'Laporan Pengeluaran Gerabah',
			text: 'Export As PDF',
			exportOptions:
			{
				columns: [0,1,2,3,4,5]
			},
			customize: function ( doc ) {
				doc.content[1].table.widths = [
				'5%',
				'10%',
				'10%',
				'20%',
				'35%',
				'20%',
				]
			},
			footer: true
		},
		]
	})

	$('div.dataTables_filter input').addClass('form-control input-sm');

	$('#table-data').on('click','.item-hapus',function()
	{
		var id      = $(this).attr('data');
		swal({
			title: "Apakah anda yakin akan menghapus data ini?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.post(base_url + '/pengeluaran/destroy', {
					id: id,
					_token: token
				},
				function(response) {
					if (response.result == 1) {
						table_pengeluaran.ajax.reload();
						swal("Good job !", response.message, "success");
					}else {
						swal(" Error !", response.message, "error");
					}
					
				}
				);
			}
		});
	})

	function autonumeric() {
		new AutoNumeric('.autonumeric-input', {currencySymbol : 'Rp.', decimalPlaces : '0', unformatOnSubmit : true});
	}
}

function disableButtonForm() {
	$('.btnSubmit').prop('disabled', true);
	$('.btnSubmit').html("Please wait...");
	return true;
}