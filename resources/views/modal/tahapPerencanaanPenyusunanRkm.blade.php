@section('tahap2.penyusunan.rkm.modal.id', 'modal-tahap-2-penyusunan-rkm')
@section('tahap2.penyusunan.rkm.modal.title', 'Penyusunan Dokumen RKM')
@section('tahap2.penyusunan.rkm.modal.form.action', nusp_asset('api/tahap-2/penyusunan-rkm'))

@section('tahap2.penyusunan.rkm.modal.body')	
	{!! nusp_forms($formTahapPerencanaanPenyusunanRkm) !!}
@endsection

@section('tahap2.penyusunan.rkm.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.penyusunan.rkm.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-perencanaan"')


@section('reportOnly.tahap2.penyusunan.rkm.modal.id', 'modal-report-tahap-2-penyusunan-rkm')
@section('reportOnly.tahap2.penyusunan.rkm.modal.title', 'Penyusunan Dokumen RKM')
@section('reportOnly.tahap2.penyusunan.rkm.modal.form.action', nusp_asset('api/tahap-2/penyusunan-rkm'))
@section('reportOnly.tahap2.penyusunan.rkm.modal.close', 'Kembali')
@section('reportOnly.tahap2.penyusunan.rkm.modal.submit.class', 'hide')

@section('reportOnly.tahap2.penyusunan.rkm.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanPenyusunanRkm) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.penyusunan.rkm' : 'reportOnly.tahap2.penyusunan.rkm'])


 
