@extends('backend.partial.app')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="row top_tiles">
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-dollar"></i></div>
					<div class="count">Total</div>
					<h3>Rp. {{ number_format($totalDonasi) }}</h3>
					<p>Total Donasi Terkumpul.</p>
				</div>
			</div>
			@foreach($donasiAdmin as $donasi)
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-user"></i></div>
					<div class="count">{{ strtoupper($donasi->create_user) }}</div>
					<h3>Rp. {{ number_format($donasi->tot) }}</h3>
					<p>Donasi Masuk Ke Rekening {{ strtoupper($donasi->create_user) }}.</p>
				</div>
			</div>
			@endforeach
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-users"></i></div>
					<div class="count">Donatur</div>
					<h3>{{ $donatur }} Orang</h3>
					<p>Telah Menjadi Donatur Anda.</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-title">
							<h3 class="text-center">Rangkuman Donasi</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<canvas id="myChart" style="min-height:150px;" class="table"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>     
		</div>

	</div>
</div>
<!-- /page content -->
@endsection

@section('js')
<script>
	var ctx = $('#myChart')[0].getContext('2d');
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
    	labels: [

    	<?php 
    	foreach($charts as $chart) :
    		echo "'".$chart['tanggal']."'";
    		echo ",";
    	endforeach; ?>
    	],
    	
    	datasets: [{
    		label: 'Nominal Donasi',
    		backgroundColor: 'rgb(26,187,156)',
    		borderColor: 'rgb(255, 99, 132)',
    		data: [
    		@foreach($charts as $chart)
    		{{ $chart['tot']. ',' }}
    		@endforeach
    		]
    	}]
    },

    // Configuration options go here
    options: {
    	responsive :true,
    }
});
</script>
@endsection


