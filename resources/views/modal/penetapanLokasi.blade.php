
@section('penetapanLokasi.modal.id', 'modal-penetapan-lokasi')
@section('penetapanLokasi.modal.title', 'Penetapan Lokasi')
@section('penetapanLokasi.modal.form.action', nusp_asset('api/penetapan-lokasi'))

@section('penetapanLokasi.modal.body')
	{!! nusp_forms($formPenetapanLokasi) !!}
@endsection


@section('reportOnly.penetapanLokasi.modal.id', 'modal-report-penetapan-lokasi')
@section('reportOnly.penetapanLokasi.modal.title', 'PenetapanLokasi Kabupaten / Kota')
@section('reportOnly.penetapanLokasi.modal.form.action', nusp_asset('api/penetapan-lokasi'))
@section('reportOnly.penetapanLokasi.modal.close', 'Tutup')
@section('reportOnly.penetapanLokasi.modal.submit.class', 'hide')

@section('reportOnly.penetapanLokasi.modal.body')
	{!! nusp_staticForms($formPenetapanLokasi) !!}
@endsection

@include('modal_no_delete', ['namespace' => (isset($allowed) && $allowed == true) ? 'penetapanLokasi' : 'reportOnly.penetapanLokasi'])
