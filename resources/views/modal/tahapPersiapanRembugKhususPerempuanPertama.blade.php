@section('tahap1.rembug.perempuan1.modal.id', 'modal-tahap-1-rembug-perempuan-1')
@section('tahap1.rembug.perempuan1.modal.title', 'Rembug Perempuan I')
@section('tahap1.rembug.perempuan1.modal.form.action', nusp_asset('api/tahap-1/rembug-perempuan-1'))

@section('tahap1.rembug.perempuan1.modal.body')	
	{!! nusp_forms($formTahapPersiapanRembugKhususPerempuanPertama) !!}
@endsection

@section('tahap1.rembug.perempuan1.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-persiapan"')
@section('reportOnly.tahap1.rembug.perempuan1.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-persiapan"')


@section('reportOnly.tahap1.rembug.perempuan1.modal.id', 'modal-report-tahap-1-rembug-perempuan-1')
@section('reportOnly.tahap1.rembug.perempuan1.modal.title', 'Rembug Perempuan I')
@section('reportOnly.tahap1.rembug.perempuan1.modal.form.action', nusp_asset('api/tahap-1/rembug-perempuan-1'))
@section('reportOnly.tahap1.rembug.perempuan1.modal.close', 'Tutup')
@section('reportOnly.tahap1.rembug.perempuan1.modal.submit.class', 'hide')

@section('reportOnly.tahap1.rembug.perempuan1.modal.body')	
	{!! nusp_staticForms($formTahapPersiapanRembugKhususPerempuanPertama) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap1.rembug.perempuan1' : 'reportOnly.tahap1.rembug.perempuan1'])


 
