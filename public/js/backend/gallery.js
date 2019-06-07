function init() {
	initComponent();
}

function initComponent() {

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
}

$('#form-tambah').on('submit', function(e) {
	e.preventDefault();
	$('#modal-tambah').modal('hide');
	$.blockUI({ css: {
		zIndex: 20000,
		border: 'none', 
		padding: '15px', 
		backgroundColor: '#000', 
		'-webkit-border-radius': '10px', 
		'-moz-border-radius': '10px', 
		opacity: .5, 
		color: '#fff' 
	} }); 

	let formData = new FormData();
	formData.append('image', document.getElementById('image').files[0]);
	formData.append('caption', $('#caption').val());

	axios.post(base_url + '/gallery/store', formData, {
		headers: {
			'Content-Type': 'multipart/form-data'
		},
	})
	.then(function (response) {
		if (response.data.result == 1) {
			swal("Good job !", response.data.message, "success");
		}else {
			swal(" Error !", response.data.message, "error");
		}
		$.unblockUI();
		
		document.getElementById("form-tambah").reset();
	})
	.catch(function (error) {
		if (error.data.result == 1) {
			swal("Good job !", error.data.message, "success");
		}else {
			swal(" Error !", error.data.message, "error");
		}
		$.unblockUI();
		document.getElementById("form-tambah").reset();
		console.log(error);
	});
})

	

function disableButtonForm() {
	$('.btnSubmit').prop('disabled', true);
	$('.btnSubmit').html("Please wait...");
	return true;
}