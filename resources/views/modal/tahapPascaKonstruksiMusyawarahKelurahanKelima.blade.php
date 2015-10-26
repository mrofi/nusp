@section('tahap4.musyawarah.kelurahan5.modal.id', 'modal-tahap-4-musyawarah-kelurahan-5')
@section('tahap4.musyawarah.kelurahan5.modal.title', 'Musyawarah Kelurahan 5')
@section('tahap4.musyawarah.kelurahan5.modal.form.action', nusp_asset('api/tahap-4-musyawarah-kelurahan-5'))

@section('tahap4.musyawarah.kelurahan5.modal.body')	
	{!! nusp_forms($formTahapPascaKonstruksiMusyawarahKelurahanKelima) !!}
@endsection



@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.id', 'modal-report-tahap-4-musyawarah-kelurahan-5')
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.title', 'Musyawarah Kelurahan 5')
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.form.action', nusp_asset('api/tahap-4-musyawarah-kelurahan-5'))
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.close', 'Tutup')
@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.submit.class', 'hide')

@section('reportOnly.tahap4.musyawarah.kelurahan5.modal.body')	
	{!! nusp_staticForms($formTahapPascaKonstruksiMusyawarahKelurahanKelima) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap4.musyawarah.kelurahan5' : 'reportOnly.tahap4.musyawarah.kelurahan5'])


 
