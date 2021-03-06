@section('tahap4.serah.terima.pekerjaan.modal.id', 'modal-tahap-4-serah-terima-pekerjaan')
@section('tahap4.serah.terima.pekerjaan.modal.title', 'Serah Terima Pekerjaan')
@section('tahap4.serah.terima.pekerjaan.modal.form.action', nusp_asset('api/tahap-4/serah-terima-pekerjaan'))

@section('tahap4.serah.terima.pekerjaan.modal.body')	
	{!! nusp_forms($formTahapPascaKonstruksiSerahTerimaPekerjaan) !!}
@endsection

@section('tahap4.serah.terima.pekerjaan.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-pasca-konstruksi"')
@section('reportOnly.tahap4.serah.terima.pekerjaan.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-pasca-konstruksi"')


@section('reportOnly.tahap4.serah.terima.pekerjaan.modal.id', 'modal-report-tahap-4-serah-terima-pekerjaan')
@section('reportOnly.tahap4.serah.terima.pekerjaan.modal.title', 'Serah Terima Pekerjaan')
@section('reportOnly.tahap4.serah.terima.pekerjaan.modal.form.action', nusp_asset('api/tahap-4/serah-terima-pekerjaan'))
@section('reportOnly.tahap4.serah.terima.pekerjaan.modal.close', 'Kembali')
@section('reportOnly.tahap4.serah.terima.pekerjaan.modal.submit.class', 'hide')

@section('reportOnly.tahap4.serah.terima.pekerjaan.modal.body')	
	{!! nusp_staticForms($formTahapPascaKonstruksiSerahTerimaPekerjaan) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap4.serah.terima.pekerjaan' : 'reportOnly.tahap4.serah.terima.pekerjaan'])


 
