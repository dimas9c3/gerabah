<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>GERABAH ADMIN</title>

	<!-- Bootstrap -->
	<link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{ asset('backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
	<!-- FLatpickr -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.css"/>
	<!-- Custom Theme Style -->
	<link href="{{ asset('backend/build/css/custom.css') }}" rel="stylesheet">
</head>
<script>
	var base_url 			= '{{ url('/') }}';
	var token 				= '{{ csrf_token() }}';
</script>