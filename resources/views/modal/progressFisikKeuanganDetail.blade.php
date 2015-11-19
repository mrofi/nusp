@section('fisik-keuangan-detail.modal.topclass', 'laporan-detail')
@section('reportOnly.fisik-keuangan-detail.modal.topclass', 'laporan-detail')

@section('fisik-keuangan-detail.modal.id', 'modal-fisik-keuangan-detail')
@section('fisik-keuangan-detail.modal.title', 'Laporan Progress Fisik &amp; Keuangan')
@section('fisik-keuangan-detail.modal.form.action', nusp_asset('api/fisik-keuangan-detail'))
@section('fisik-keuangan-detail.modal.close', 'Tutup')
@section('fisik-keuangan-detail.modal.submit.class', 'hide')

@section('fisik-keuangan-detail.modal.form.body')
<div class="row report-area">
	<div class="col-sm-6 col-sm-4 col-md-2">
		<a href="#" class="btn btn-lg btn-block btn-default data-transport" data-target="#modal-laporan-fisik-keuangan" data-toggle="modal"><span class="fa fa-plus"></span></a>
	</div>
</div>
@endsection


@section('reportOnly.fisik-keuangan-detail.modal.id', 'modal-report-fisik-keuangan-detail')
@section('reportOnly.fisik-keuangan-detail.modal.title', 'Laporan Progress Fisik &amp; Keuangan')
@section('reportOnly.fisik-keuangan-detail.modal.form.action', nusp_asset('api/fisik-keuangan-detail'))
@section('reportOnly.fisik-keuangan-detail.modal.close', 'Tutup')
@section('reportOnly.fisik-keuangan-detail.modal.submit.class', 'hide')

@section('reportOnly.fisik-keuangan-detail.modal.form.body')
<div class="row report-area">

</div>
@endsection

@include('modal_large_no_delete', ['namespace' => (isset($allowed) && $allowed == true) ? 'fisik-keuangan-detail' : 'reportOnly.fisik-keuangan-detail'])