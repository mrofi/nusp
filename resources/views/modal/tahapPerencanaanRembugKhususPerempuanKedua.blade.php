@section('tahap2.rembug.prempuan2.modal.id', 'modal-tahap-2-rembug-perempuan-2')
@section('tahap2.rembug.prempuan2.modal.title', 'Rembug Perempuan II')
@section('tahap2.rembug.prempuan2.modal.form.action', nusp_asset('api/tahap-2/rembug-perempuan-2'))

@section('tahap2.rembug.prempuan2.modal.body')	
	{!! nusp_forms($formTahapPerencanaanRembugKhususPerempuanKedua) !!}
@endsection

@section('tahap2.rembug.prempuan2.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-perencanaan"')
@section('reportOnly.tahap2.rembug.prempuan2.modal.close.prop', 'data-toggle="modal" data-target="#modal-report-tahap-perencanaan"')


@section('reportOnly.tahap2.rembug.prempuan2.modal.id', 'modal-report-tahap-2-rembug-perempuan-2')
@section('reportOnly.tahap2.rembug.prempuan2.modal.title', 'Rembug Perempuan II')
@section('reportOnly.tahap2.rembug.prempuan2.modal.form.action', nusp_asset('api/tahap-2/rembug-perempuan-2'))
@section('reportOnly.tahap2.rembug.prempuan2.modal.close', 'Kembali')
@section('reportOnly.tahap2.rembug.prempuan2.modal.submit.class', 'hide')

@section('reportOnly.tahap2.rembug.prempuan2.modal.body')	
	{!! nusp_staticForms($formTahapPerencanaanRembugKhususPerempuanKedua) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap2.rembug.prempuan2' : 'reportOnly.tahap2.rembug.prempuan2'])


 
