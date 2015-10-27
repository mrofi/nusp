@section('tahap2.verifikasi.finalisasi.rkm.modal.id', 'modal-tahap-2-verifikasi-finalisasi-rkm')
@section('tahap2.verifikasi.finalisasi.rkm.modal.title', 'Verifikasi dan Finalisasi Dokumen RKM')
@section('tahap2.verifikasi.finalisasi.rkm.modal.form.action', nusp_asset('api/tahap-2/verifikasi-finalisasi-rkm'))

@section('tahap2.verifikasi.finalisasi.rkm.modal.body')	
	{!! nusp_forms($formTahapPerencanaanVerifikasiFinalisasiDokumenRkm) !!}
@endsection

@section('tahap2.verifikasi.finalisasi.rkm.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.verifikasi.finalisasi.rkm.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')


@section('reportOnly.tahap2.verifikasi.finalisasi.rkm.modal.id', 'modal-report-tahap-2-verifikasi-finalisasi-rkm')
@section('reportOnly.tahap2.verifikasi.finalisasi.rkm.modal.title', 'Verifikasi dan Finalisasi Dokumen RKM')
@section('reportOnly.tahap2.verifikasi.finalisasi.rkm.modal.form.action', nusp_asset('api/tahap-2/verifikasi-finalisasi-rkm'))
@section('reportOnly.tahap2.verifikasi.finalisasi.rkm.modal.close', 'Tutup')
@section('reportOnly.tahap2.verifikasi.finalisasi.rkm.modal.submit.class', 'hide')

@section('reportOnly.tahap2.verifikasi.finalisasi.rkm.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanVerifikasiFinalisasiDokumenRkm) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.verifikasi.finalisasi.rkm' : 'reportOnly.tahap2.verifikasi.finalisasi.rkm'])


 
