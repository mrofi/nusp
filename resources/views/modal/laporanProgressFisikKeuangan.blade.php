
@section('laporan-fisik-keuangan.modal.id', 'modal-laporan-fisik-keuangan')
@section('laporan-fisik-keuangan.modal.title', 'Progress Fisik &amp; Keuangan')
@section('laporan-fisik-keuangan.modal.form.action', nusp_asset('api/laporan-fisik-keuangan'))

@section('laporan-fisik-keuangan.modal.body')
	<input type="hidden" name="id" id="id">
	{!! nusp_forms($formLaporanProgressFisikKeuangan) !!}
@endsection

@section('reportOnly.laporan-fisik-keuangan.modal.id', 'modal-report-laporan-fisik-keuangan')
@section('reportOnly.laporan-fisik-keuangan.modal.title', 'Progress Fisik &amp; Keuangan')
@section('reportOnly.laporan-fisik-keuangan.modal.form.action', nusp_asset('api/laporan-fisik-keuangan'))
@section('reportOnly.laporan-fisik-keuangan.modal.close', 'Tutup')
@section('reportOnly.laporan-fisik-keuangan.modal.submit.class', 'hide')

@section('reportOnly.laporan-fisik-keuangan.modal.body')
	{!! nusp_staticForms($formLaporanProgressFisikKeuangan) !!}
@endsection

@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'laporan-fisik-keuangan' : 'reportOnly.laporan-fisik-keuangan'])