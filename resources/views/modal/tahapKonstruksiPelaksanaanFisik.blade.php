@section('tahap3.pelaksanaan-fisik.modal.id', 'modal-tahap-3-pelaksanaan-fisik')
@section('tahap3.pelaksanaan-fisik.modal.title', 'Pelaksanaan Fisik')
@section('tahap3.pelaksanaan-fisik.modal.form.action', nusp_asset('api/tahap-3/pelaksanaan-fisik'))

@section('tahap3.pelaksanaan-fisik.modal.body')	
	{!! nusp_forms($formTahapKonstruksiPelaksanaanFisik) !!}
@endsection

@section('tahap3.pelaksanaan-fisik.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')
@section('reportOnly.tahap3.pelaksanaan-fisik.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-konstruksi"')


@section('reportOnly.tahap3.pelaksanaan-fisik.modal.id', 'modal-report-tahap-3-pelaksanaan-fisik')
@section('reportOnly.tahap3.pelaksanaan-fisik.modal.title', 'Pelaksanaan Fisik')
@section('reportOnly.tahap3.pelaksanaan-fisik.modal.form.action', nusp_asset('api/tahap-3/pelaksanaan-fisik'))
@section('reportOnly.tahap3.pelaksanaan-fisik.modal.close', 'Kembali')
@section('reportOnly.tahap3.pelaksanaan-fisik.modal.submit.class', 'hide')

@section('reportOnly.tahap3.pelaksanaan-fisik.modal.body')	
	{!! nusp_staticForms($formTahapKonstruksiPelaksanaanFisik) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.pelaksanaan-fisik' : 'reportOnly.tahap3.pelaksanaan-fisik'])


 
