@section('tahap3.tahap-4.modal.id', 'modal-tahap-4-tahap-3')
@section('tahap3.tahap-4.modal.title', 'Tahap 3')
@section('tahap3.tahap-4.modal.form.action', nusp_asset('api/tahap-4/tahap-3'))

@section('tahap3.tahap-4.modal.body')	
	{!! nusp_forms($formTahapPascaKonstruksiTahap3) !!}
@endsection

@section('tahap3.tahap-4.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')
@section('reportOnly.tahap3.tahap-4.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')


@section('reportOnly.tahap3.tahap-4.modal.id', 'modal-report-tahap-4-tahap-3')
@section('reportOnly.tahap3.tahap-4.modal.title', 'Tahap 3')
@section('reportOnly.tahap3.tahap-4.modal.form.action', nusp_asset('api/tahap-4/tahap-3'))
@section('reportOnly.tahap3.tahap-4.modal.close', 'Tutup')
@section('reportOnly.tahap3.tahap-4.modal.submit.class', 'hide')

@section('reportOnly.tahap3.tahap-4.modal.body')	
	{!! nusp_staticForms($formTahapPascaKonstruksiTahap3) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.tahap-4' : 'reportOnly.tahap3.tahap-4'])


 
