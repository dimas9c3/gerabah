function init() {
	initComponent();
}

function initComponent() {
	var table_donasi =  $('#table-donasi').DataTable
	({
		ajax            : 
		{
			url         : base_url + '/donasi/getData',
			type        : 'POST',
			data 		: {_token: token},
			dataSrc     : 'data',
		},
		initComplete 	: function(settings, json){
			$('#table-foot').html(json.tot);
		},
		fixedHeader     : true,
		paging          : true,
		pageLength      : 5,
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
			title: 'Laporan Pengumpulan Donasi Gerabah',
			text: 'Export As PDF',
			exportOptions:
			{
				columns: [0,1,2,3]
			},
			customize: function ( doc ) {
				doc.content[1].table.widths = [
				'10%',
				'20%',
				'35%',
				'35%',
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
				$.post(base_url + '/donasi/destroy', {
					id: id,
					_token: token
				},
				function(data) {
					table_donasi.ajax.reload();
					swal("Good job!", "Data Berhasil Dihapus", "success");
				}
				);
			}
		});
	})

	$('#table-data').on('click', '.item-edit', function() {
		var id 		= $(this).attr('data');
		var donatur = $(this).attr('nama');
		var jenis 	= $(this).attr('jenis');
		var nominal = $(this).attr('nominal');
		var tanggal = $(this).attr('tanggal');

		$('#edit-id').val(id);
		$('#edit-nama').val(donatur);
		$('#edit-jenis').val(jenis).trigger('change');
		$('#edit-jumlah').val(nominal);
		let cal = $('#edit-tanggal').flatpickr({
			altInput: true,
			altFormat: "d M, Y",
			dateFormat: "Y-m-d",
		});

		cal.setDate(tanggal);
		$('#modal-edit').modal('show');
	})
}

function disableButtonForm(form) {

	form.btnSubmit.disabled = true;
	$('#btnSubmit').html("Please wait...");
	return true;
}