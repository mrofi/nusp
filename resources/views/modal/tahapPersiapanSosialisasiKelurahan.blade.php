
@section('tahap1.sosialisasi.modal.id', 'modal-tahap-1-sosialisasi-kelurahan')
@section('tahap1.sosialisasi.modal.title', 'Sosialisasi Kelurahan')
@section('tahap1.sosialisasi.modal.form.action', nusp_asset('api/tahap-1-sosialisasi-kelurahan'))

@section('tahap1.sosialisasi.modal.body')	
	{!! nusp_forms($formTahapPersiapanSosialisasiKelurahan) !!}
@endsection



@section('reportOnly.tahap1.sosialisasi.modal.id', 'modal-report-tahap-1-sosialisasi-kelurahan')
@section('reportOnly.tahap1.sosialisasi.modal.title', 'Sosialisasi Kelurahan')
@section('reportOnly.tahap1.sosialisasi.modal.form.action', nusp_asset('api/tahap-1-sosialisasi-kelurahan'))
@section('reportOnly.tahap1.sosialisasi.modal.close', 'Tutup')
@section('reportOnly.tahap1.sosialisasi.modal.submit.class', 'hide')

@section('reportOnly.tahap1.sosialisasi.modal.body')	
	{!! nusp_staticForms($formTahapPersiapanSosialisasiKelurahan) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap1.sosialisasi' : 'reportOnly.tahap1.sosialisasi'])


 
