
@section('sosialisasi.modal.id', 'modal-sosialisasi')
@section('sosialisasi.modal.title', 'Sosialisasi Kabupaten / Kota')
@section('sosialisasi.modal.form.action', nusp_asset('api/sosialisasi'))

@section('sosialisasi.modal.body')
	<div class="row hide">
		<label for="" class="control-label col-sm-4">Desa / Kelurahan</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="desaKel"></p>
		</div>
	</div>
	<div class="row hide">
		<label for="" class="control-label col-sm-4">Kecamatan</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="kec"></p>
		</div>
	</div>
	<div class="row hide">
		<label for="" class="control-label col-sm-4">Kabupaten / Kota</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="kabKota"></p>
		</div>
	</div>
	<div class="row hide">
		<label for="" class="control-label col-sm-4">Propinsi</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="propinsi"></p>
		</div>
	</div>
	{!! nusp_forms(array_except($formSosialisasi, ['foto_id'])) !!}
	<div class="form-group">
		<label for="foto_id" class="control-label col-sm-4">Foto</label>
		<div class="col-sm-6">
			<div class="fileinput fileinput-new" data-provides="fileinput">
			  <div class="fileinput-preview thumbnail hide" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
			  <div>
			    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists hide">Change</span><input type="file" name="..."></span>
			    <a href="#" class="btn btn-default fileinput-exists hide" data-dismiss="fileinput">Remove</a>
			  </div>
		      <div class="progress progress-xxs fileinput-exists btn-block">
			    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
			      <span class="sr-only">60% Complete</span>
			    </div>
			  </div>
			</div>
		</div>
	</div>
@endsection



@section('reportOnly.sosialisasi.modal.id', 'modal-report-sosialisasi')
@section('reportOnly.sosialisasi.modal.title', 'Sosialisasi Kabupaten / Kota')
@section('reportOnly.sosialisasi.modal.form.action', nusp_asset(''))

@section('reportOnly.sosialisasi.modal.body')
	<div class="row hide">
		<label for="" class="control-label col-sm-4">Desa / Kelurahan</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="desaKel"></p>
		</div>
	</div>
	<div class="row hide">
		<label for="" class="control-label col-sm-4">Kecamatan</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="kec"></p>
		</div>
	</div>
	<div class="row hide">
		<label for="" class="control-label col-sm-4">Kabupaten / Kota</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="kabKota"></p>
		</div>
	</div>
	<div class="row hide">
		<label for="" class="control-label col-sm-4">Propinsi</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="propinsi"></p>
		</div>
	</div>
	{!! nusp_forms(array_except($formSosialisasi, ['foto_id'])) !!}
	<div class="form-group">
		<label for="foto_id" class="control-label col-sm-4">Foto</label>
		<div class="col-sm-6">
			<input type="file" name="foto_id" id="foto_id" class="form-control">
			<img src="" alt="Foto Sosialisasi" style="height: 200px" class="file-place img-thumbnail hide">
		</div>
	</div>
@endsection

@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'sosialisasi' : 'reportOnly.sosialisasi'])
