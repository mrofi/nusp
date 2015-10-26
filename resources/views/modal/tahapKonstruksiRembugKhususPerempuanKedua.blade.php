@section('tahap3.rembug.prempuan2.modal.id', 'modal-tahap-3-rembug-perempuan-2')
@section('tahap3.rembug.prempuan2.modal.title', 'Rembug Perempuan II')
@section('tahap3.rembug.prempuan2.modal.form.action', nusp_asset('api/tahap-3-rembug-perempuan-2'))

@section('tahap3.rembug.prempuan2.modal.body')	
	{!! nusp_forms($formTahapKonstruksiRembugKhususPerempuanKedua) !!}
@endsection



@section('reportOnly.tahap3.rembug.prempuan2.modal.id', 'modal-report-tahap-3-rembug-perempuan-2')
@section('reportOnly.tahap3.rembug.prempuan2.modal.title', 'Rembug Perempuan II')
@section('reportOnly.tahap3.rembug.prempuan2.modal.form.action', nusp_asset('api/tahap-3-rembug-perempuan-2'))
@section('reportOnly.tahap3.rembug.prempuan2.modal.close', 'Tutup')
@section('reportOnly.tahap3.rembug.prempuan2.modal.submit.class', 'hide')

@section('reportOnly.tahap3.rembug.prempuan2.modal.body')	
	{!! nusp_staticForms($formTahapKonstruksiRembugKhususPerempuanKedua) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.rembug.prempuan2' : 'reportOnly.tahap3.rembug.prempuan2'])


 
