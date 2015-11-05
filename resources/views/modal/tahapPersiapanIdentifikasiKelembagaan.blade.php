@section('tahap1.identifikasi.modal.id', 'modal-tahap-1-identifikasi-kelembagaan')
@section('tahap1.identifikasi.modal.title', 'Identifikasi Kelembagaan')
@section('tahap1.identifikasi.modal.form.action', nusp_asset('api/tahap-1/identifikasi-kelembagaan'))

@section('tahap1.identifikasi.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@include('modal.formPlain')
			{!! nusp_forms(array_only($formTahapPersiapanIdentifikasiKelembagaan, ['nama_bkm', 'tanggal_pembentukan', 'nama_koordinator', 'jumlah_pengurus_bkm', 'jumlah_perempuan_pengurus_bkm'])) !!}
		</div>
		<div class="col-md-6">
			{!! nusp_forms(array_only($formTahapPersiapanIdentifikasiKelembagaan, ['alamat_bkm', 'telepon_hp', 'tanggal_pengesahan_notaris', 'nomor_pengesahan', 'nama_notaris', 'nama_bank' , 'no_rekening_bank'])) !!}
		</div>
	</div>
@endsection

@section('tahap1.identifikasi.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-persiapan"')
@section('reportOnly.tahap1.identifikasi.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-persiapan"')


@section('reportOnly.tahap1.identifikasi.modal.id', 'modal-report-tahap-1-identifikasi-kelembagaan')
@section('reportOnly.tahap1.identifikasi.modal.title', 'Identifikasi Kelembagaan')
@section('reportOnly.tahap1.identifikasi.modal.form.action', nusp_asset('api/tahap-1/identifikasi-kelembagaan'))
@section('reportOnly.tahap1.identifikasi.modal.close', 'Kembali')
@section('reportOnly.tahap1.identifikasi.modal.submit.class', 'hide')

@section('reportOnly.tahap1.identifikasi.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@include('modal.formPlain')
			{!! nusp_staticForms(array_only($formTahapPersiapanIdentifikasiKelembagaan, ['nama_bkm', 'tanggal_pembentukan', 'nama_koordinator', 'jumlah_pengurus_bkm', 'jumlah_perempuan_pengurus_bkm'])) !!}
		</div>
		<div class="col-md-6">
			{!! nusp_staticForms(array_only($formTahapPersiapanIdentifikasiKelembagaan, ['alamat_bkm', 'telepon_hp', 'tanggal_pengesahan_notaris', 'nomor_pengesahan', 'nama_notaris', 'nama_bank' , 'no_rekening_bank'])) !!}
		</div>
	</div>
@endsection




@include('modal_large', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap1.identifikasi' : 'reportOnly.tahap1.identifikasi'])


 
