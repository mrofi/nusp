
@section('sosialisasi.modal.id', 'modal-sosialisasi')
@section('sosialisasi.modal.title', 'Sosialisasi Kabupaten / Kota')
@section('sosialisasi.modal.form.action', nusp_asset('api/sosialisasi'))

@section('sosialisasi.modal.body')
	{!! nusp_forms(array_except($formSosialisasi, ['foto_id'])) !!}
	<div class="form-group">
		<label for="foto_id" class="control-label col-sm-4">Foto</label>
		<div class="col-sm-4">
			<input type="hidden" name="foto_id" id="foto_id">			
			<div class="fileinput fileinput-new" data-provides="fileinput" data-action="{{ nusp_asset('api/foto') }}" data-target="#foto_id">
			  	<div class="fileinput-preview thumbnail hide" data-trigger="fileinput" style="max-height: 150px;"> </div>
				<div>
				    <span class="btn btn-default btn-file" style="background-color: #fff; border: 0">
				    	<span class="fileinput-new">Pilih Foto</span>
				    	<span class="fileinput-exists hide">Ganti</span>
				    	<input type="file">
				    </span>
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


@section('reportOnly.sosialisasi.modal.id', 'modal-report-sosialisasi')
@section('reportOnly.sosialisasi.modal.title', 'Sosialisasi Kabupaten / Kota')
@section('reportOnly.sosialisasi.modal.form.action', nusp_asset('api/sosialisasi'))
@section('reportOnly.sosialisasi.modal.close', 'Tutup')
@section('reportOnly.sosialisasi.modal.submit.class', 'hide')

@section('reportOnly.sosialisasi.modal.body')
	{!! nusp_staticForms(array_except($formSosialisasi, ['foto_id'])) !!}
	<div class="form-group">
		<label for="foto_id" class="control-label col-sm-4">Foto</label>
		<div class="col-sm-6">
			<div class="form-control-static fileinput-preview hide" data-trigger="fileinput" style="max-height: 150px;"></div>
		</div>
	</div>
@endsection

@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'sosialisasi' : 'reportOnly.sosialisasi'])
