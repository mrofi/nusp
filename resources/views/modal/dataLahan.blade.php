@section('data-lahan.modal.id', 'modal-data-lahan')
@section('data-lahan.modal.title', 'Data Lahan')
@section('data-lahan.modal.form.action', nusp_asset('api/data-lahan'))

@section('data-lahan.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@include('modal.formPlain')
			{!! nusp_forms(array_only($formDataLahan, ['kode_wilayah', 'nama_rt_rw', 'jenis_infrastruktur'])) !!}
			<div class="row">
				<label class="control-label col-md-4">Lahan :</label>
			<div class="col-md-8"><hr></div>
			</div>
			{!! nusp_forms(array_only($formDataLahan, ['lahan_luas_m2', 'lahan_status', 'lahan_surat_hibah', 'lahan_akses_jalan'])) !!}
		</div>
		<div class="col-md-6">
			<div class="row">	
				<label class="col-md-4 control-label">Koordinat :</label>
				<div class="col-md-8"><hr></div>
			</div>
			{!! nusp_forms(array_only($formDataLahan, ['koordinat_latitude', 'koordinat_longitude'])) !!}
			<div class="row">	
				<label class="col-md-4 control-label">Pemanfaat :</label>
				<div class="col-md-8"><hr></div>
			</div>
			{!! nusp_forms(array_only($formDataLahan, ['pemanfaat_jumlah_kk', 'pemanfaat_jumlah_kk_miskin', 'pemanfaat_jumlah_jiwa', 'pemanfaat_jumlah_perempuan', 'pemanfaat_jumlah_miskin'])) !!}
		</div>
	</div>
@endsection



@section('reportOnly.data-lahan.modal.id', 'modal-report-data-lahan')
@section('reportOnly.data-lahan.modal.title', 'Data Lahan')
@section('reportOnly.data-lahan.modal.form.action', nusp_asset('api/data-lahan'))
@section('reportOnly.data-lahan.modal.close', 'Tutup')
@section('reportOnly.data-lahan.modal.submit.class', 'hide')

@section('reportOnly.data-lahan.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@include('modal.formPlain')
			{!! nusp_staticForms(array_only($formDataLahan, ['kode_wilayah', 'nama_rt_rw', 'jenis_infrastruktur'])) !!}
			<div class="row">
				<label class="control-label col-md-4">Lahan :</label>
				<div class="col-md-8"><hr></div>
			</div>
			{!! nusp_staticForms(array_only($formDataLahan, ['lahan_luas_m2', 'lahan_status', 'lahan_surat_hibah', 'lahan_akses_jalan'])) !!}
		</div>
		<div class="col-md-6">
			<div class="row">	
				<label class="col-md-4 control-label">Koordinat :</label>
				<div class="col-md-8"><hr></div>
			</div>
			{!! nusp_staticForms(array_only($formDataLahan, ['koordinat_latitude', 'koordinat_longitude'])) !!}
			<div class="row">	
				<label class="col-md-4 control-label">Pemanfaat :</label>
				<div class="col-md-8"><hr></div>
			</div>
			{!! nusp_staticForms(array_only($formDataLahan, ['pemanfaat_jumlah_kk', 'pemanfaat_jumlah_kk_miskin', 'pemanfaat_jumlah_jiwa', 'pemanfaat_jumlah_perempuan', 'pemanfaat_jumlah_miskin'])) !!}
		</div>
	</div>
@endsection




@include('modal_large_no_delete', ['namespace' => (isset($allowed) && $allowed == true) ? 'data-lahan' : 'reportOnly.data-lahan'])