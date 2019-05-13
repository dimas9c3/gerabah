
// Datepicker
var flatpickr = $('.flatpickr').flatpickr({
	altInput: true,
	altFormat: "d M, Y",
	dateFormat: "Y-m-d",
});

function swalSuccess() {
	swal("Good job!", "Data Berhasil Disimpan", "success");
}

function swalError() {
	swal("Error!", "Gagal Simpan Data", "error");
}

