@section('tahap2.musyawarah.kelurahan2.modal.id', 'modal-tahap-2-musyawarah-kelurahan-2')
@section('tahap2.musyawarah.kelurahan2.modal.title', 'Musyawarah Kelurahan Kedua')
@section('tahap2.musyawarah.kelurahan2.modal.form.action', nusp_asset('api/tahap-2/musyawarah-kelurahan-2'))

@section('tahap2.musyawarah.kelurahan2.modal.body')	
	{!! nusp_forms($formTahapPerencanaanMusyawarahKelurahanKedua) !!}
@endsection

@section('tahap2.musyawarah.kelurahan2.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.musyawarah.kelurahan2.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')


@section('reportOnly.tahap2.musyawarah.kelurahan2.modal.id', 'modal-report-tahap-2-musyawarah-kelurahan-2')
@section('reportOnly.tahap2.musyawarah.kelurahan2.modal.title', 'Musyawarah Kelurahan Kedua')
@section('reportOnly.tahap2.musyawarah.kelurahan2.modal.form.action', nusp_asset('api/tahap-2/musyawarah-kelurahan-2'))
@section('reportOnly.tahap2.musyawarah.kelurahan2.modal.close', 'Tutup')
@section('reportOnly.tahap2.musyawarah.kelurahan2.modal.submit.class', 'hide')

@section('reportOnly.tahap2.musyawarah.kelurahan2.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanMusyawarahKelurahanKedua) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.musyawarah.kelurahan2' : 'reportOnly.tahap2.musyawarah.kelurahan2'])


 
