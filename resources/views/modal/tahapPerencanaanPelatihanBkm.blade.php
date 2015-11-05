@section('tahap2.pelatihan.bkm.modal.id', 'modal-tahap-2-pelatihan-bkm')
@section('tahap2.pelatihan.bkm.modal.title', 'Pelatihan BKM')
@section('tahap2.pelatihan.bkm.modal.form.action', nusp_asset('api/tahap-2/pelatihan-bkm'))

@section('tahap2.pelatihan.bkm.modal.body')	
	{!! nusp_forms($formTahapPerencanaanPelatihanBkm) !!}
@endsection

@section('tahap2.pelatihan.bkm.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.pelatihan.bkm.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-perencanaan"')


@section('reportOnly.tahap2.pelatihan.bkm.modal.id', 'modal-report-tahap-2-pelatihan-bkm')
@section('reportOnly.tahap2.pelatihan.bkm.modal.title', 'Pelatihan BKM')
@section('reportOnly.tahap2.pelatihan.bkm.modal.form.action', nusp_asset('api/tahap-2/pelatihan-bkm'))
@section('reportOnly.tahap2.pelatihan.bkm.modal.close', 'Kembali')
@section('reportOnly.tahap2.pelatihan.bkm.modal.submit.class', 'hide')

@section('reportOnly.tahap2.pelatihan.bkm.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanPelatihanBkm) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.pelatihan.bkm' : 'reportOnly.tahap2.pelatihan.bkm'])


 
