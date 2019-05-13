@extends('backend.partial.app')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Halaman Donasi</h3>
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
						<h2>Data Donasi</h2>
						<ul class="nav navbar-right panel_toolbox">
							<button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Tambah Data</button>
						</ul>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="table-responsive">
							<table id="table-donasi" class="table table-bordered table-striped" style="height: auto;">
								<thead>
									<th>No</th>
									<th>Tanggal</th>
									<th>Nama Donatur</th>
									<th>Nominal</th>
									<th>Admin</th>
									<th>Aksi</th>
								</thead>
								<tbody id="table-data">

								</tbody>
								<tfoot>
									<tr>
										<td>Total Donasi</td>
										<td></td>
										<td></td>
										<td colspan="3"><p id="table-foot"></p></td>
									</tr>
								</tfoot>

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
			<form class="form-horizontal form-label-left" method="POST" action="{{ url('donasi/store') }}">
				@csrf
				<div class="modal-body">

					<div class="form-group">
						<label>Nama Donatur *</label>
						<input type="text" name="nama" class="form-control" placeholder="Input Donatur" required>
					</div>
					<div class="form-group">
						<label>Tampilkan Donatur Sebagai Anonymous ?</label>
						<select name="jenis" class="form-control">
							<option value="1" selected="selected">Ya</option>
							<option value="0">Tidak</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah Nominal Donasi *</label>
						<input type="number" name="jumlah" class="form-control" placeholder="Input Jumlah Donasi" required>
					</div>
					<div class="form-group">
						<label>Tanggal Donasi</label>
						<input type="text" name="tanggal" class="form-control flatpickr" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal form-label-left" method="POST" action="{{ url('donasi/update') }}">
				@csrf
				<div class="modal-body">

					<div class="form-group">
						<label>Nama Donatur *</label>
						<input type="hidden" name="id" id="edit-id">
						<input type="text" name="nama" id="edit-nama" class="form-control" value="" required>
					</div>
					<div class="form-group">
						<label>Tampilkan Donatur Sebagai Anonymous ?</label>
						<select name="jenis" id="edit-jenis" class="form-control">
							<option value="1" selected="selected">Ya</option>
							<option value="0">Tidak</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah Nominal Donasi *</label>
						<input type="number" name="jumlah" id="edit-jumlah" class="form-control" placeholder="Input Jumlah Donasi" required>
					</div>
					<div class="form-group">
						<label>Tanggal Donasi</label>
						<input type="text" name="tanggal" id="edit-tanggal" value="" class="form-control flatpickr" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /page content -->
@endsection