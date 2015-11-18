@section('fisik-keuangan.modal.id', 'modal-fisik-keuangan')
@section('fisik-keuangan.modal.title', 'Data Kontrak')
@section('fisik-keuangan.modal.form.action', nusp_asset('api/fisik-keuangan'))

@section('fisik-keuangan.modal.form.body')
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



@section('reportOnly.fisik-keuangan.modal.id', 'modal-report-fisik-keuangan')
@section('reportOnly.fisik-keuangan.modal.title', 'Data Kontrak')
@section('reportOnly.fisik-keuangan.modal.form.action', nusp_asset('api/fisik-keuangan'))
@section('reportOnly.fisik-keuangan.modal.close', 'Tutup')
@section('reportOnly.fisik-keuangan.modal.submit.class', 'hide')

@section('reportOnly.fisik-keuangan.modal.form.body')	
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




@include('modal_large', ['namespace' => (isset($allowed) && $allowed == true) ? 'fisik-keuangan' : 'reportOnly.fisik-keuangan'])


 
