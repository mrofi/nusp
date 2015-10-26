@section('tahap1.musyawarah.kelurahan1.modal.id', 'modal-tahap-1-musyawarah-kelurahan-1')
@section('tahap1.musyawarah.kelurahan1.modal.title', 'Musyawarah Kelurahan I')
@section('tahap1.musyawarah.kelurahan1.modal.form.action', nusp_asset('api/tahap-1-musyawarah-kelurahan-1'))

@section('tahap1.musyawarah.kelurahan1.modal.body')	
	{!! nusp_forms($formTahapPersiapanMusyawarahKelurahanPertama) !!}
@endsection



@section('reportOnly.tahap1.musyawarah.kelurahan1.modal.id', 'modal-report-tahap-1-musyawarah-kelurahan-1')
@section('reportOnly.tahap1.musyawarah.kelurahan1.modal.title', 'Musyawarah Kelurahan I')
@section('reportOnly.tahap1.musyawarah.kelurahan1.modal.form.action', nusp_asset('api/tahap-1-musyawarah-kelurahan-1'))
@section('reportOnly.tahap1.musyawarah.kelurahan1.modal.close', 'Tutup')
@section('reportOnly.tahap1.musyawarah.kelurahan1.modal.submit.class', 'hide')

@section('reportOnly.tahap1.musyawarah.kelurahan1.modal.body')	
	{!! nusp_staticForms($formTahapPersiapanMusyawarahKelurahanPertama) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap1.musyawarah.kelurahan1' : 'reportOnly.tahap1.musyawarah.kelurahan1'])


 
