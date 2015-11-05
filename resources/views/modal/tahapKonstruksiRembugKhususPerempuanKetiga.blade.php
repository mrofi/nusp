@section('tahap3.rembug.prempuan3.modal.id', 'modal-tahap-3-rembug-perempuan-3')
@section('tahap3.rembug.prempuan3.modal.title', 'Rembug Perempuan III')
@section('tahap3.rembug.prempuan3.modal.form.action', nusp_asset('api/tahap-3/rembug-perempuan-3'))

@section('tahap3.rembug.prempuan3.modal.body')	
	{!! nusp_forms($formTahapKonstruksiRembugKhususPerempuanKetiga) !!}
@endsection

@section('tahap3.rembug.prempuan3.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-konstruksi"')
@section('reportOnly.tahap3.rembug.prempuan3.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-konstruksi"')


@section('reportOnly.tahap3.rembug.prempuan3.modal.id', 'modal-report-tahap-3-rembug-perempuan-3')
@section('reportOnly.tahap3.rembug.prempuan3.modal.title', 'Rembug Perempuan III')
@section('reportOnly.tahap3.rembug.prempuan3.modal.form.action', nusp_asset('api/tahap-3/rembug-perempuan-3'))
@section('reportOnly.tahap3.rembug.prempuan3.modal.close', 'Kembali')
@section('reportOnly.tahap3.rembug.prempuan3.modal.submit.class', 'hide')

@section('reportOnly.tahap3.rembug.prempuan3.modal.body')	
	{!! nusp_staticForms($formTahapKonstruksiRembugKhususPerempuanKetiga) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap3.rembug.prempuan3' : 'reportOnly.tahap3.rembug.prempuan3'])


 
