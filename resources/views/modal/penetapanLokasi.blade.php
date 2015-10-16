
@section('penetapanLokasi.modal.id', 'modal-penetapan-lokasi')
@section('penetapanLokasi.modal.title', 'Penetapan Lokasi')
@section('penetapanLokasi.modal.form.action', nusp_asset('api/penetapan-lokasi'))

@section('penetapanLokasi.modal.body')
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
	{!! nusp_forms(array_except($formPenetapanLokasi, ['file_id'])) !!}
	<div class="form-group">
		<label for="file_id" class="control-label col-sm-4">File</label>
		<div class="col-sm-4">
			<p class="form-control-static file-placer hide" id="file"></p>
			<input type="hidden" name="file_id" id="file_id">			
			<div class="fileinput fileinput-new" data-provides="fileinput" data-action="{{ nusp_asset('api/file') }}" data-target="#file_id">
			  <div class="fileinput-preview thumbnail hide" data-trigger="fileinput" style="max-height: 150px;"></div>
			  <div>
			    <span class="btn btn-default btn-file" style="background-color: #fff; border: 0"><span class="fileinput-new">Pilih File</span><span class="fileinput-exists hide">Ganti</span><input type="file"></span>
			    <a href="#" class="btn btn-default fileinput-exists hide" data-dismiss="fileinput">Hapus</a>
			  </div>
			</div>
			<div class="progress-upload hide">
		        <div class="progress progress-xxs">
			      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
			        <span class="sr-only">60% Complete</span>
			      </div>
			    </div>
			    <div class="text-center progress-status">Sedang mengupload...</div>
			</div>
		</div>
	</div>
@endsection


@section('reportOnly.penetapanLokasi.modal.id', 'modal-report-penetapan-lokasi')
@section('reportOnly.penetapanLokasi.modal.title', 'PenetapanLokasi Kabupaten / Kota')
@section('reportOnly.penetapanLokasi.modal.form.action', nusp_asset('api/penetapan-lokasi'))

@section('reportOnly.penetapanLokasi.modal.body')
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
	{!! nusp_staticForms(array_except($formPenetapanLokasi, ['file_id'])) !!}
	<div class="form-group">
		<label for="foto_id" class="control-label col-sm-4">File</label>
		<div class="col-sm-6">
			<p class="form-control-static file-placer hide" id="file"></p>
		</div>
	</div>
@endsection

@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'penetapanLokasi' : 'reportOnly.penetapanLokasi'])
