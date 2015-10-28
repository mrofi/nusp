@section('tahap2.pembentukan.kpp.modal.id', 'modal-tahap-2-pembentukan-kpp')
@section('tahap2.pembentukan.kpp.modal.title', 'Pembentukan KPP')
@section('tahap2.pembentukan.kpp.modal.form.action', nusp_asset('api/tahap-2/pembentukan-kpp'))

@section('tahap2.pembentukan.kpp.modal.body')	
	{!! nusp_forms($formTahapPerencanaanPembentukanKpp) !!}
@endsection

@section('tahap2.pembentukan.kpp.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.pembentukan.kpp.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')


@section('reportOnly.tahap2.pembentukan.kpp.modal.id', 'modal-report-tahap-2-pembentukan-kpp')
@section('reportOnly.tahap2.pembentukan.kpp.modal.title', 'Pembentukan KPP')
@section('reportOnly.tahap2.pembentukan.kpp.modal.form.action', nusp_asset('api/tahap-2/pembentukan-kpp'))
@section('reportOnly.tahap2.pembentukan.kpp.modal.close', 'Tutup')
@section('reportOnly.tahap2.pembentukan.kpp.modal.submit.class', 'hide')

@section('reportOnly.tahap2.pembentukan.kpp.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanPembentukanKpp) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.pembentukan.kpp' : 'reportOnly.tahap2.pembentukan.kpp'])


 
