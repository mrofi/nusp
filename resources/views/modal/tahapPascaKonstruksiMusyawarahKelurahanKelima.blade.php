@section('tahap4.musyawarah.kelurahan5.modal.id', 'modal-tahap-4-musyawarah-kelurahan-5')
@section('tahap4.musyawarah.kelurahan5.modal.title', 'Musyawarah Kelurahan V')
@section('tahap4.musyawarah.kelurahan5.modal.form.action', nusp_asset('api/tahap-4/musyawarah-kelurahan-5'))

@section('tahap4.musyawarah.kelurahan5.modal.body')	
	{!! nusp_forms($formTahapPascaKonstruksiMusyawarahKelurahanKelima) !!}
@endsection

@section('tahap4.musyawarah.kelurahan5.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-pasca-konstruksi"')
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-pasca-konstruksi"')


@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.id', 'modal-report-tahap-4-musyawarah-kelurahan-5')
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.title', 'Musyawarah Kelurahan V')
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.form.action', nusp_asset('api/tahap-4/musyawarah-kelurahan-5'))
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.close', 'Kembali')
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.submit.class', 'hide')

@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.body')	
	{!! nusp_staticForms($formTahapPascaKonstruksiMusyawarahKelurahanKelima) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap4.musyawarah.kelurahan5' : 'reportOnly.tahap4.musyawarah.kelurahan5'])


 
