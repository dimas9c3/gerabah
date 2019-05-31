@extends('backend.partial.app')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Halaman Pengeluaran</h3>
			</div>

			<!--<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div>
				</div>
			</div>-->

		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						@if (session()->has('error_message'))
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong>Error!</strong> {{ session()->get('error_message') }}
						</div>
						@endif
						<h2>Data Pengeluaran</h2>
						<ul class="nav navbar-right panel_toolbox">
							<button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Tambah Data</button>
						</ul>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="table-responsive">
							<table id="table-pengeluaran" class="table table-bordered table-striped" style="height: auto;">
								<thead>
									<th>No</th>
									<th>Tanggal</th>
									<th>Debet</th>
									<th>Kredit</th>
									<th>Saldo</th>
									<th>Keterangan</th>
									<th>Admin</th>
									<th>Aksi</th>
								</thead>
								<tbody id="table-data">

								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal form-label-left" method="POST" action="{{ url('pengeluaran/store') }}" onsubmit="return disableButtonForm();">
				@csrf
				<div class="modal-body">

					<div class="form-group">
						<label>Tanggal</label>
						<input type="text" name="tanggal" class="form-control flatpickr" required>
					</div>
					<div class="form-group">
						<label>Jenis</label>
						<select name="jenis" class="form-control">
							<option value="0" selected="selected">Kredit</option>
							<option value="1">Debit</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah Nominal *</label>
						<input type="text" name="jumlah" class="form-control autonumeric-input" min="0" placeholder="Input Jumlah Nominal" required>
					</div>
					<div class="form-group">
						<label>Keterangan *</label>
						<input type="text" name="keterangan" class="form-control" placeholder="Input Keterangan" required>
					</div>
					

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="btnSubmit" class="btn btn-primary btnSubmit">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /page content -->
@endsection