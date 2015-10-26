@section('tahap2.penyusunan.rkm.modal.id', 'modal-tahap-2-penyusunan-rkm')
@section('tahap2.penyusunan.rkm.modal.title', 'Penyusunan RKM')
@section('tahap2.penyusunan.rkm.modal.form.action', nusp_asset('api/tahap-2-penyusunan-rkm'))

@section('tahap2.penyusunan.rkm.modal.body')	
	{!! nusp_forms($formTahapPerencanaanPenyusunanRkm) !!}
@endsection



@section('reportOnly.tahap2.penyusunan.rkm.modal.id', 'modal-report-tahap-2-penyusunan-rkm')
@section('reportOnly.tahap2.penyusunan.rkm.modal.title', 'Penyusunan RKM')
@section('reportOnly.tahap2.penyusunan.rkm.modal.form.action', nusp_asset('api/tahap-2-penyusunan-rkm'))
@section('reportOnly.tahap2.penyusunan.rkm.modal.close', 'Tutup')
@section('reportOnly.tahap2.penyusunan.rkm.modal.submit.class', 'hide')

@section('reportOnly.tahap2.penyusunan.rkm.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanPenyusunanRkm) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.penyusunan.rkm' : 'reportOnly.tahap2.penyusunan.rkm'])


 
