@section('tahap4.pemeliharaan.modal.id', 'modal-tahap-4-pemeliharaan')
@section('tahap4.pemeliharaan.modal.title', 'Pemeliharaan')
@section('tahap4.pemeliharaan.modal.form.action', nusp_asset('api/tahap-4-pemeliharaan'))

@section('tahap4.pemeliharaan.modal.body')	
	{!! nusp_forms($formTahapPascaKonstruksiPemeliharaan) !!}
@endsection



@section('reportOnly.tahap4.pemeliharaan.modal.id', 'modal-report-tahap-4-pemeliharaan')
@section('reportOnly.tahap4.pemeliharaan.modal.title', 'Pemeliharaan')
@section('reportOnly.tahap4.pemeliharaan.modal.form.action', nusp_asset('api/tahap-4-pemeliharaan'))
@section('reportOnly.tahap4.pemeliharaan.modal.close', 'Tutup')
@section('reportOnly.tahap4.pemeliharaan.modal.submit.class', 'hide')

@section('reportOnly.tahap4.pemeliharaan.modal.body')	
	{!! nusp_staticForms($formTahapPascaKonstruksiPemeliharaan) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap4.serah.terima.pekerjaan' : 'reportOnly.tahap4.serah.terima.pekerjaan'])


 
