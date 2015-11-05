@section('tahap3.musyawarah-kelurahan4.modal.id', 'modal-tahap-3-musyawarah-kelurahan-4')
@section('tahap3.musyawarah-kelurahan4.modal.title', 'Musyawarah Kelurahan IV')
@section('tahap3.musyawarah-kelurahan4.modal.form.action', nusp_asset('api/tahap-3/musyawarah-kelurahan-4'))

@section('tahap3.musyawarah-kelurahan4.modal.body')	
	{!! nusp_forms($formTahapKonstruksiMusyawarahKelurahanKeempat) !!}
@endsection

@section('tahap3.musyawarah-kelurahan4.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-konstruksi"')


@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.id', 'modal-report-tahap-3-musyawarah-kelurahan-4')
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.title', 'Musyawarah Kelurahan IV')
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.form.action', nusp_asset('api/tahap-3/musyawarah-kelurahan-4'))
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.close', 'Kembali')
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.submit.class', 'hide')

@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.body')	
	{!! nusp_staticForms($formTahapKonstruksiMusyawarahKelurahanKeempat) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.musyawarah-kelurahan4' : 'reportOnly.tahap3.musyawarah-kelurahan4'])


 
