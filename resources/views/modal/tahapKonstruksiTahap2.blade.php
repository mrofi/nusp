
@section('tahap3.tahap-2.modal.id', 'modal-tahap-3-tahap-2')
@section('tahap3.tahap-2.modal.title', 'Tahap 2')
@section('tahap3.tahap-2.modal.form.action', nusp_asset('api/tahap-3/tahap-2'))

@section('tahap3.tahap-2.modal.body')	
	{!! nusp_forms($formTahapKonstruksiTahap2) !!}
@endsection

@section('tahap3.tahap-2.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')
@section('reportOnly.tahap3.tahap-2.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')


@section('reportOnly.tahap3.tahap-2.modal.id', 'modal-report-tahap-3-tahap-2')
@section('reportOnly.tahap3.tahap-2.modal.title', 'Tahap 2')
@section('reportOnly.tahap3.tahap-2.modal.form.action', nusp_asset('api/tahap-3/tahap-2'))
@section('reportOnly.tahap3.tahap-2.modal.close', 'Tutup')
@section('reportOnly.tahap3.tahap-2.modal.submit.class', 'hide')

@section('reportOnly.tahap3.tahap-2.modal.body')	
	{!! nusp_staticForms($formTahapKonstruksiTahap2) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.tahap-2' : 'reportOnly.tahap3.tahap-2'])


 
