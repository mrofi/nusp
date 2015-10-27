@section('tahap3.kontrak.sp3.modal.id', 'modal-tahap-3-kontrak-sp3')
@section('tahap3.kontrak.sp3.modal.title', 'Kontrak SP3')
@section('tahap3.kontrak.sp3.modal.form.action', nusp_asset('api/tahap-3/kontrak-sp3'))

@section('tahap3.kontrak.sp3.modal.body')	
	{!! nusp_forms($formTahapKonstruksiKontrakSp3) !!}
@endsection

@section('tahap3.kontrak.sp3.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')
@section('reportOnly.tahap3.kontrak.sp3.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')


@section('reportOnly.tahap3.kontrak.sp3.modal.id', 'modal-report-tahap-3-kontrak-sp3')
@section('reportOnly.tahap3.kontrak.sp3.modal.title', 'Kontrak SP3')
@section('reportOnly.tahap3.kontrak.sp3.modal.form.action', nusp_asset('api/tahap-3/kontrak-sp3'))
@section('reportOnly.tahap3.kontrak.sp3.modal.close', 'Tutup')
@section('reportOnly.tahap3.kontrak.sp3.modal.submit.class', 'hide')

@section('reportOnly.tahap3.kontrak.sp3.modal.body')	
	{!! nusp_staticForms($formTahapKonstruksiKontrakSp3) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.kontrak.sp3' : 'reportOnly.tahap3.kontrak.sp3'])


 
