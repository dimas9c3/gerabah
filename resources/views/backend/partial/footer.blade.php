			<!-- footer content -->
			<footer>
				<div class="pull-right">
					GERABAH - BETA VERSION 
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ asset('backend/vendors/fastclick/lib/fastclick.js') }}"></script>
	<!-- NProgress -->
	<script src="{{ asset('backend/vendors/nprogress/nprogress.js') }}"></script>
	<!-- Flatpickr -->
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<!-- Sweetalert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Datatables -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.js"></script>
	<!-- CHARTJS -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<!-- Custom Theme Scripts -->
	<script src="{{ asset('backend/build/js/custom.js') }}"></script>
	<script src="{{ asset('js/backend/core.js') }}"></script>
	@if (session()->has('response'))
	<script>{{ session()->get('response') }}</script>
	@endif
	@if(!empty($jsInclude))
	<!-- Init -->
	<script src="{{ $jsInclude }}"></script>
	<script>
		init();
	</script>
	@endif