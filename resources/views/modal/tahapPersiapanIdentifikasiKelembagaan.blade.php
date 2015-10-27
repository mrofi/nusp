@section('tahap1.identifikasi.modal.id', 'modal-tahap-1-identifikasi-kelembagaan')
@section('tahap1.identifikasi.modal.title', 'Identifikasi Kelembagaan')
@section('tahap1.identifikasi.modal.form.action', nusp_asset('api/tahap-1/identifikasi-kelembagaan'))

@section('tahap1.identifikasi.modal.body')	
	{!! nusp_forms($formTahapPersiapanIdentifikasiKelembagaan) !!}
@endsection

@section('tahap1.identifikasi.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-persiapan"')
@section('reportOnly.tahap1.identifikasi.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-persiapan"')


@section('reportOnly.tahap1.identifikasi.modal.id', 'modal-report-tahap-1-identifikasi-kelembagaan')
@section('reportOnly.tahap1.identifikasi.modal.title', 'Identifikasi Kelembagaan')
@section('reportOnly.tahap1.identifikasi.modal.form.action', nusp_asset('api/tahap-1/identifikasi-kelembagaan'))
@section('reportOnly.tahap1.identifikasi.modal.close', 'Tutup')
@section('reportOnly.tahap1.identifikasi.modal.submit.class', 'hide')

@section('reportOnly.tahap1.identifikasi.modal.body')	
	{!! nusp_staticForms($formTahapPersiapanIdentifikasiKelembagaan) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap1.identifikasi' : 'reportOnly.tahap1.identifikasi'])


 
