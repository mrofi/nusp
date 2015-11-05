@section('data-kontrak.modal.id', 'modal-data-kontrak')
@section('data-kontrak.modal.title', 'Data Kontrak')
@section('data-kontrak.modal.form.action', nusp_asset('api/data-kontrak'))

@section('data-kontrak.modal.form.body')
	<div class="row">
		<div class="col-md-6">
			@include('modal.formPlain')
			{!! nusp_forms(array_only($formDataKontrak, ['kode_wilayah', 'no_kontrak', 'tanggal_kontrak'])) !!}
		</div>
		<div class="col-md-6">
			<div class="row">
				<label class="control-label col-md-4">Pelaksanaan :</label>
				<div class="col-md-8"><hr></div>
			</div>	
			{!! nusp_forms(array_only($formDataKontrak, ['pelaksanaan_tanggal_mulai', 'pelaksanaan_tanggal_selesai', 'pelaksanaan_jenis_infrastruktur', 'pelaksanaan_volume_unit'])) !!}
			<div class="row">
				<label class="control-label col-md-4">Dana :</label>
				<div class="col-md-8"><hr></div>
			</div>	
			{!! nusp_forms(array_only($formDataKontrak, ['dana_nilai_blm', 'dana_nilai_swadaya'])) !!}
		</div>
	</div>
@endsection



@section('reportOnly.data-kontrak.modal.id', 'modal-report-data-kontrak')
@section('reportOnly.data-kontrak.modal.title', 'Data Kontrak')
@section('reportOnly.data-kontrak.modal.form.action', nusp_asset('api/data-kontrak'))
@section('reportOnly.data-kontrak.modal.close', 'Tutup')
@section('reportOnly.data-kontrak.modal.submit.class', 'hide')

@section('reportOnly.data-kontrak.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@include('modal.formPlain')
			{!! nusp_staticForms(array_only($formDataKontrak, ['no_kontrak', 'tanggal_kontrak'])) !!}
		</div>
		<div class="col-md-6">
			<div class="row">
				<label class="control-label col-md-4">Pelaksanaan :</label>
				<div class="col-md-8"><hr></div>
			</div>	
			{!! nusp_staticForms(array_only($formDataKontrak, ['pelaksanaan_tanggal_mulai', 'pelaksanaan_tanggal_selesai', 'pelaksanaan_jenis_infrastruktur', 'pelaksanaan_volume_unit'])) !!}
			<div class="row">
				<label class="control-label col-md-4">Dana :</label>
				<div class="col-md-8"><hr></div>
			</div>	
			{!! nusp_staticForms(array_only($formDataKontrak, ['dana_nilai_blm', 'dana_nilai_swadaya'])) !!}
		</div>
	</div>
@endsection




@include('modal_large_no_delete', ['namespace' => (isset($allowed) && $allowed == true) ? 'data-kontrak' : 'reportOnly.data-kontrak'])


 
