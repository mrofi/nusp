
@section('fisik-keuangan.modal.id', 'modal-fisik-keuangan')
@section('fisik-keuangan.modal.title', 'Progress Fisik &amp; Keuangan')
@section('fisik-keuangan.modal.form.action', nusp_asset('api/fisik-keuangan'))

@section('fisik-keuangan.modal.body')
	{!! nusp_forms($formProgressFisikKeuangan) !!}
@endsection


@section('reportOnly.fisik-keuangan.modal.id', 'modal-report-fisik-keuangan')
@section('reportOnly.fisik-keuangan.modal.title', 'Progress Fisik &amp; Keuangan')
@section('reportOnly.fisik-keuangan.modal.form.action', nusp_asset('api/fisik-keuangan'))
@section('reportOnly.fisik-keuangan.modal.close', 'Tutup')
@section('reportOnly.fisik-keuangan.modal.submit.class', 'hide')

@section('reportOnly.fisik-keuangan.modal.body')
	{!! nusp_staticForms($formProgressFisikKeuangan) !!}
@endsection

@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'fisik-keuangan' : 'reportOnly.fisik-keuangan'])