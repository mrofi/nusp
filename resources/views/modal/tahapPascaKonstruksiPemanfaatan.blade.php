@section('tahap4.pemanfaatan.modal.id', 'modal-tahap-4-pemanfaatan')
@section('tahap4.pemanfaatan.modal.title', 'Pemanfaatan')
@section('tahap4.pemanfaatan.modal.form.action', nusp_asset('api/tahap-4/pemanfaatan'))

@section('tahap4.pemanfaatan.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@include('modal.formPlain')
			{!! nusp_forms(array_only($formTahapPascaKonstruksiPemanfaatan, ['jenis_kegiatan', 'jumlah_kk', 'jumlah_kk_miskin', 'jumlah_pemanfaat', 'jumlah_perempuan', 'jumlah_warga_miskin'])) !!}
		</div>
		<div class="col-md-6">
			{!! nusp_forms(array_only($formTahapPascaKonstruksiPemanfaatan, [ 'realisasi_jenis_kegiatan', 'realisasi_jumlah_kk', 'realisasi_jumlah_kk_miskin', 'realisasi_jumlah_pemanfaat', 'realisasi_jumlah_perempuan', 'realisasi_jumlah_warga_miskin'])) !!}
		</div>
	</div>
@endsection

@section('tahap4.pemanfaatan.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-pasca-konstruksi"')
@section('reportOnly.tahap4.pemanfaatan.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-pasca-konstruksi"')


@section('reportOnly.tahap4.pemanfaatan.modal.id', 'modal-report-tahap-4-pemanfaatan')
@section('reportOnly.tahap4.pemanfaatan.modal.title', 'Pemanfaatan')
@section('reportOnly.tahap4.pemanfaatan.modal.form.action', nusp_asset('api/tahap-4/pemanfaatan'))
@section('reportOnly.tahap4.pemanfaatan.modal.close', 'Kembali')
@section('reportOnly.tahap4.pemanfaatan.modal.submit.class', 'hide')

@section('reportOnly.tahap4.pemanfaatan.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@include('modal.formPlain')
			{!! nusp_staticForms(array_only($formTahapPascaKonstruksiPemanfaatan, ['jenis_kegiatan', 'jumlah_kk', 'jumlah_kk_miskin', 'jumlah_pemanfaat', 'jumlah_perempuan', 'jumlah_warga_miskin'])) !!}
		</div>
		<div class="col-md-6">
			{!! nusp_staticForms(array_only($formTahapPascaKonstruksiPemanfaatan, [ 'realisasi_jenis_kegiatan', 'realisasi_jumlah_kk', 'realisasi_jumlah_kk_miskin', 'realisasi_jumlah_pemanfaat', 'realisasi_jumlah_perempuan', 'realisasi_jumlah_warga_miskin'])) !!}
		</div>
	</div>
@endsection




@include('modal_large', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap4.pemanfaatan' : 'reportOnly.tahap4.pemanfaatan'])


 
