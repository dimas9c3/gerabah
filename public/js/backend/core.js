
// Datepicker
var flatpickr = $('.flatpickr').flatpickr({
	altInput: true,
	altFormat: "d M, Y",
	dateFormat: "Y-m-d",
	defaultDate: new Date(),
});

function swalSuccess() {
	swal("Good job!", "Data Berhasil Disimpan", "success");
}

function swalError() {
	swal("Error!", "Gagal Simpan Data", "error");
}

