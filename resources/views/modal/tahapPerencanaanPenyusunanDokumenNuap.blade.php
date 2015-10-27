@section('tahap2.penyusunan.nuap.modal.id', 'modal-tahap-2-penyusunan-dokumen-nuap')
@section('tahap2.penyusunan.nuap.modal.title', 'Penyusunan Dokumen NUAP')
@section('tahap2.penyusunan.nuap.modal.form.action', nusp_asset('api/tahap-2/penyusunan-dokumen-nuap'))

@section('tahap2.penyusunan.nuap.modal.body')	
	{!! nusp_forms($formTahapPerencanaanPenyusunanDokumenNuap) !!}
@endsection

@section('tahap2.penyusunan.nuap.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.penyusunan.nuap.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')


@section('reportOnly.tahap2.penyusunan.nuap.modal.id', 'modal-report-tahap-2-penyusunan-dokumen-nuap')
@section('reportOnly.tahap2.penyusunan.nuap.modal.title', 'Penyusunan Dokumen NUAP')
@section('reportOnly.tahap2.penyusunan.nuap.modal.form.action', nusp_asset('api/tahap-2/penyusunan-dokumen-nuap'))
@section('reportOnly.tahap2.penyusunan.nuap.modal.close', 'Tutup')
@section('reportOnly.tahap2.penyusunan.nuap.modal.submit.class', 'hide')

@section('reportOnly.tahap2.penyusunan.nuap.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanPenyusunanDokumenNuap) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.penyusunan.nuap' : 'reportOnly.tahap2.penyusunan.nuap'])


 
