@extends('backend.partial.app')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Halaman Dokumentasi</h3>
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
						<h2>Data Dokumentasi Foto</h2>
						<ul class="nav navbar-right panel_toolbox">
							<button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Tambah Data</button>
						</ul>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="table-responsive">
							<table class="table table-bordered table-striped" style="height: auto;">
								<thead>
									<th>No</th>
									<th>Image</th>
									<th>Caption</th>
									<th>Aksi</th>
								</thead>
								<tbody id="table-data">
								@if($Qgallery->isEmpty())
									<tr>
										<td colspan="4">Data is empty</td>
									</tr>
								@else
								@php $no = 1; @endphp
								@foreach($Qgallery as $key=> $gallery)
									<tr>
										<td>{{ $key+ $Qgallery->firstItem() }}</td>
										<td><img style="width: auto; height:150px" src="{{ asset('storage/images/gallery/gerabah2019/thumbnail/'.$gallery->file) }}" alt="{{ $gallery->caption }}"></td>
										<td>{{ $gallery->caption }}</td>
										<td><button type="button" data="{{ base64_encode($gallery->id) }}" file="images/gallery/gerabah2019/thumbnail/{{ $gallery->file }}" class="btn btn-danger item-hapus"><i class="fa fa-trash"></i> Hapus</button></td>
									</tr>
								@endforeach
								@endif
								</tbody>
								
							</table>
							{{ $Qgallery->links() }}
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
			<form class="form-horizontal form-label-left" id="form-tambah" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">

					<div class="form-group">
						<label>Caption</label>
						<input type="text" name="caption" id="caption" class="form-control" placeholder="Input Caption Foto">
					</div>
					<div class="form-group">
						<label>File Foto *</label>
						<input type="file" name="image" id="image" class="form-control" required>
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