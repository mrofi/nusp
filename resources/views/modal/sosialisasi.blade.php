
@section('sosialisasi.modal.id', 'modal-sosialisasi')
@section('sosialisasi.modal.title', 'Sosialisasi Kabupaten / Kota')
@section('sosialisasi.modal.form.action', nusp_asset('api/sosialisasi'))

@section('sosialisasi.modal.body')
	{!! nusp_forms($formSosialisasi) !!}
@endsection


@section('reportOnly.sosialisasi.modal.id', 'modal-report-sosialisasi')
@section('reportOnly.sosialisasi.modal.title', 'Sosialisasi Kabupaten / Kota')
@section('reportOnly.sosialisasi.modal.form.action', nusp_asset('api/sosialisasi'))
@section('reportOnly.sosialisasi.modal.close', 'Tutup')
@section('reportOnly.sosialisasi.modal.submit.class', 'hide')

@section('reportOnly.sosialisasi.modal.body')
	{!! nusp_staticForms($formSosialisasi) !!}
@endsection

@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'sosialisasi' : 'reportOnly.sosialisasi'])
