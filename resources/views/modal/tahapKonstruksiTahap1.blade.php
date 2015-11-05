@section('tahap3.tahap-1.modal.id', 'modal-tahap-3-tahap-1')
@section('tahap3.tahap-1.modal.title', 'Tahap 1')
@section('tahap3.tahap-1.modal.form.action', nusp_asset('api/tahap-3/tahap-1'))

@section('tahap3.tahap-1.modal.body')	
	{!! nusp_forms($formTahapKonstruksiTahap1) !!}
@endsection

@section('tahap3.tahap-1.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')
@section('reportOnly.tahap3.tahap-1.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-konstruksi"')


@section('reportOnly.tahap3.tahap-1.modal.id', 'modal-report-tahap-3-tahap-1')
@section('reportOnly.tahap3.tahap-1.modal.title', 'Tahap 1')
@section('reportOnly.tahap3.tahap-1.modal.form.action', nusp_asset('api/tahap-3/tahap-1'))
@section('reportOnly.tahap3.tahap-1.modal.close', 'Kembali')
@section('reportOnly.tahap3.tahap-1.modal.submit.class', 'hide')

@section('reportOnly.tahap3.tahap-1.modal.body')	
	{!! nusp_staticForms($formTahapKonstruksiTahap1) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.tahap-1' : 'reportOnly.tahap3.tahap-1'])


 
