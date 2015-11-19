@section('fisik-keuangan.modal.topclass', 'laporan-detail')
@section('reportOnly.fisik-keuangan.modal.topclass', 'laporan-detail')

@section('fisik-keuangan.modal.id', 'modal-fisik-keuangan')
@section('fisik-keuangan.modal.title', 'Progress Fisik &amp; Keuangan')
@section('fisik-keuangan.modal.form.action', nusp_asset('api/fisik-keuangan'))

@section('fisik-keuangan.modal.form.body')
	<div class="row">
		<div class="col-md-6">
		{!! nusp_forms($formProgressFisikKeuangan) !!}
		</div>
		<div class="col-md-6">
			<div class="row report-area">
				<div class="col-sm-6 col-sm-4">
					<a href="#" class="btn btn-lg btn-block btn-default data-transport" data-target="#modal-laporan-fisik-keuangan" data-toggle="modal"><span class="fa fa-plus"></span></a>
				</div>
			</div>
		</div>	
	</div>
@endsection


@section('reportOnly.fisik-keuangan.modal.id', 'modal-report-fisik-keuangan')
@section('reportOnly.fisik-keuangan.modal.title', 'Progress Fisik &amp; Keuangan')
@section('reportOnly.fisik-keuangan.modal.form.action', nusp_asset('api/fisik-keuangan'))
@section('reportOnly.fisik-keuangan.modal.close', 'Tutup')
@section('reportOnly.fisik-keuangan.modal.submit.class', 'hide')

@section('reportOnly.fisik-keuangan.modal.form.body')
	<div class="row">
		<div class="col-md-6">
		{!! nusp_staticForms($formProgressFisikKeuangan) !!}
		</div>
		<div class="col-md-6">
			<div class="row report-area">
			</div>
		</div>	
	</div>
@endsection

@include('modal_large', ['namespace' => (isset($allowed) && $allowed == true) ? 'fisik-keuangan' : 'reportOnly.fisik-keuangan'])