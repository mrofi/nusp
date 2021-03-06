@section('tahap2.revisi.nuap.modal.id', 'modal-tahap-2-revisi-dokumen-nuap')
@section('tahap2.revisi.nuap.modal.title', 'Revisi Dokumen NUAP')
@section('tahap2.revisi.nuap.modal.form.action', nusp_asset('api/tahap-2/revisi-dokumen-nuap'))

@section('tahap2.revisi.nuap.modal.body')	
	{!! nusp_forms($formTahapPerencanaanRevisiDokumenNuap) !!}
@endsection

@section('tahap2.revisi.nuap.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.revisi.nuap.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-perencanaan"')


@section('reportOnly.tahap2.revisi.nuap.modal.id', 'modal-report-tahap-2-revisi-dokumen-nuap')
@section('reportOnly.tahap2.revisi.nuap.modal.title', 'Revisi Dokumen NUAP')
@section('reportOnly.tahap2.revisi.nuap.modal.form.action', nusp_asset('api/tahap-2/revisi-dokumen-nuap'))
@section('reportOnly.tahap2.revisi.nuap.modal.close', 'Kembali')
@section('reportOnly.tahap2.revisi.nuap.modal.submit.class', 'hide')

@section('reportOnly.tahap2.revisi.nuap.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanRevisiDokumenNuap) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.revisi.nuap' : 'reportOnly.tahap2.revisi.nuap'])


 
