@section('tahap2.pembentukan.tppi.modal.id', 'modal-tahap-2-pembentukan-tppi')
@section('tahap2.pembentukan.tppi.modal.title', 'Pembentukan TPPI')
@section('tahap2.pembentukan.tppi.modal.form.action', nusp_asset('api/tahap-2/pembentukan-tppi'))

@section('tahap2.pembentukan.tppi.modal.body')	
	{!! nusp_forms($formTahapPerencanaanPembentukanTppi) !!}
@endsection

@section('tahap2.pembentukan.tppi.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.pembentukan.tppi.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-perencanaan"')


@section('reportOnly.tahap2.pembentukan.tppi.modal.id', 'modal-report-tahap-2-pembentukan-tppi')
@section('reportOnly.tahap2.pembentukan.tppi.modal.title', 'Pembentukan TPPI')
@section('reportOnly.tahap2.pembentukan.tppi.modal.form.action', nusp_asset('api/tahap-2/pembentukan-tppi'))
@section('reportOnly.tahap2.pembentukan.tppi.modal.close', 'Kembali')
@section('reportOnly.tahap2.pembentukan.tppi.modal.submit.class', 'hide')

@section('reportOnly.tahap2.pembentukan.tppi.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanPembentukanTppi) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.pembentukan.tppi' : 'reportOnly.tahap2.pembentukan.tppi'])


 
