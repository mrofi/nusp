@section('tahap4.pemanfaatan.modal.id', 'modal-tahap-4-pemanfaatan')
@section('tahap4.pemanfaatan.modal.title', 'Pemanfaatan')
@section('tahap4.pemanfaatan.modal.form.action', nusp_asset('api/tahap-4-pemanfaatan'))

@section('tahap4.pemanfaatan.modal.body')	
	{!! nusp_forms($formTahapPascaKonstruksiPemanfaatan) !!}
@endsection



@section('reportOnly.tahap4.pemanfaatan.modal.id', 'modal-report-tahap-4-pemanfaatan')
@section('reportOnly.tahap4.pemanfaatan.modal.title', 'Pemanfaatan')
@section('reportOnly.tahap4.pemanfaatan.modal.form.action', nusp_asset('api/tahap-4-pemanfaatan'))
@section('reportOnly.tahap4.pemanfaatan.modal.close', 'Tutup')
@section('reportOnly.tahap4.pemanfaatan.modal.submit.class', 'hide')

@section('reportOnly.tahap4.pemanfaatan.modal.body')	
	{!! nusp_staticForms($formTahapPascaKonstruksiPemanfaatan) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap4.pemanfaatan' : 'reportOnly.tahap4.pemanfaatan'])


 
