@section('tahap2.verifikasi.konsolidasi.nuap.modal.id', 'modal-tahap-2-verifikasi-konsolidasi-nuap')
@section('tahap2.verifikasi.konsolidasi.nuap.modal.title', 'Verifikasi dan Konsolidasi NUAP')
@section('tahap2.verifikasi.konsolidasi.nuap.modal.form.action', nusp_asset('api/tahap-2-verifikasi-konsolidasi-nuap'))

@section('tahap2.verifikasi.konsolidasi.nuap.modal.body')	
	{!! nusp_forms($formTahapPerencanaanVerifikasiDanKonsolidasiNuap) !!}
@endsection



@section('reportOnly.tahap2.verifikasi.konsolidasi.nuap.modal.id', 'modal-report-tahap-2-verifikasi-konsolidasi-nuap')
@section('reportOnly.tahap2.verifikasi.konsolidasi.nuap.modal.title', 'Verifikasi dan Konsolidasi NUAP')
@section('reportOnly.tahap2.verifikasi.konsolidasi.nuap.modal.form.action', nusp_asset('api/tahap-2-verifikasi-konsolidasi-nuap'))
@section('reportOnly.tahap2.verifikasi.konsolidasi.nuap.modal.close', 'Tutup')
@section('reportOnly.tahap2.verifikasi.konsolidasi.nuap.modal.submit.class', 'hide')

@section('reportOnly.tahap2.verifikasi.konsolidasi.nuap.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanVerifikasiDanKonsolidasiNuap) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.verifikasi.konsolidasi.nuap' : 'reportOnly.tahap2.verifikasi.konsolidasi.nuap'])


 
