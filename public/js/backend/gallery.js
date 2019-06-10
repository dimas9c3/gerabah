function init() {
	initComponent();
}

function initComponent() {

	$('#table-data').on('click','.item-hapus',function()
	{
		var id      = $(this).attr('data');
		var file 	= $(this).attr('file');
		swal({
			title: "Apakah anda yakin akan menghapus data ini?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
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

				axios.post(base_url + '/gallery/destroy', {
					id: id,
					file: file,
				})
				.then(function (response) {
					if (response.data.result == 1) {
						swal("Good job !", response.data.message, "success")
						.then((ok) => {
							window.location = base_url + "/gallery";
						});
					}else {
						swal("error !", response.data.message, "error")
					}
					$.unblockUI();

				})
				.catch(function (error) {
					if (error.data.result == 1) {
						swal("Good job !", error.data.message, "success")
						.then((ok) => {
							window.location = base_url + "/gallery";
						});
					}else {
						swal(" Error !", error.data.message, "error");
					}
					$.unblockUI();
					console.log(error);
				});
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
			swal("Good job !", response.data.message, "success")
			.then((ok) => {
				window.location = base_url + "/gallery";
			});
		}else {
			swal(" Error !", response.data.message, "error");
		}
		$.unblockUI();
		
		document.getElementById("form-tambah").reset();
	})
	.catch(function (error) {
		if (error.data.result == 1) {
			swal("Good job !", response.data.message, "success")
			.then((ok) => {
				window.location = base_url + "/gallery";
			});
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