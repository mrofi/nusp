@section('tahap3.musyawarah-kelurahan4.modal.id', 'modal-tahap-3-musyawarah-kelurahan-4')
@section('tahap3.musyawarah-kelurahan4.modal.title', 'Musyawarah Kelurahan IV')
@section('tahap3.musyawarah-kelurahan4.modal.form.action', nusp_asset('api/tahap-3-musyawarah-kelurahan-4'))

@section('tahap3.musyawarah-kelurahan4.modal.body')	
	{!! nusp_forms($formTahapKonstruksiMusyawarahKelurahanKeempat) !!}
@endsection



@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.id', 'modal-report-tahap-3-musyawarah-kelurahan-4')
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.title', 'Musyawarah Kelurahan IV')
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.form.action', nusp_asset('api/tahap-3-musyawarah-kelurahan-4'))
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.close', 'Tutup')
@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.submit.class', 'hide')

@section('reportOnly.tahap3.musyawarah-kelurahan4.modal.body')	
	{!! nusp_staticForms($formTahapKonstruksiMusyawarahKelurahanKeempat) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.musyawarah-kelurahan4' : 'reportOnly.tahap3.musyawarah-kelurahan4'])


 
