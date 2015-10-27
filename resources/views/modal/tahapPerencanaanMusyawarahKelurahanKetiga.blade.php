@section('tahap2.musyawarah.kelurahan3.modal.id', 'modal-tahap-2-musyawarah-kelurahan-3')
@section('tahap2.musyawarah.kelurahan3.modal.title', 'Musyawarah Kelurahan Ketiga')
@section('tahap2.musyawarah.kelurahan3.modal.form.action', nusp_asset('api/tahap-2/musyawarah-kelurahan-3'))

@section('tahap2.musyawarah.kelurahan3.modal.body')	
	{!! nusp_forms($formTahapPerencanaanMusyawarahKelurahanKetiga) !!}
@endsection

@section('tahap2.musyawarah.kelurahan3.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.musyawarah.kelurahan3.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')


@section('reportOnly.tahap2.musyawarah.kelurahan3.modal.id', 'modal-report-tahap-2-musyawarah-kelurahan-3')
@section('reportOnly.tahap2.musyawarah.kelurahan3.modal.title', 'Musyawarah Kelurahan Ketiga')
@section('reportOnly.tahap2.musyawarah.kelurahan3.modal.form.action', nusp_asset('api/tahap-2/musyawarah-kelurahan-3'))
@section('reportOnly.tahap2.musyawarah.kelurahan3.modal.close', 'Tutup')
@section('reportOnly.tahap2.musyawarah.kelurahan3.modal.submit.class', 'hide')

@section('reportOnly.tahap2.musyawarah.kelurahan3.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanMusyawarahKelurahanKetiga) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.musyawarah.kelurahan3' : 'reportOnly.tahap2.musyawarah.kelurahan3'])


 
