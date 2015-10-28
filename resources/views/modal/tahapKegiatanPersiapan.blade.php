@section('tahap.persiapan.modal.id', 'modal-tahap-persiapan')
@section('tahap.persiapan.modal.title', 'Tahap Persiapan')
@section('tahap.persiapan.modal.form.action', nusp_asset('api/tahap-persiapan'))

@section('tahap.persiapan.modal.body')	
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<label class="control-label">Klik salah satu tahapan di bawah :</label>
		</div>
	</div>		
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappersiapansosialisasikelurahan" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-1-sosialisasi-kelurahan" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Sosialisasi Kelurahan <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappersiapanidentifikasikelembagaan" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-1-identifikasi-kelembagaan" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Identifikasi Kelembagaan <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappersiapanrembugkhususperempuanpertama" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-1-rembug-perempuan-1" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Rembug Perempuan I <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappersiapanmusyawarahkelurahanpertama" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-1-musyawarah-kelurahan-1" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Musyawarah Kelurahan I <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
@endsection

@section('tahap.persiapan.modal.close', '<i class="fa fa-arrow-left"></i> Kembali Ke Tahap Kegiatan')
@section('tahap.persiapan.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-kegiatan"')
@section('tahap.persiapan.modal.submit.class', 'hide')

@section('reportOnly.tahap.persiapan.modal.id', 'modal-report-tahap-persiapan')
@section('reportOnly.tahap.persiapan.modal.title', 'Tahap Persiapan')
@section('reportOnly.tahap.persiapan.modal.form.action', nusp_asset('api/tahap-persiapan'))

@section('reportOnly.tahap.persiapan.modal.body')	
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<label class="control-label">Klik salah satu tahapan di bawah :</label>
		</div>
	</div>		
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappersiapansosialisasikelurahan" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-report-tahap-1-sosialisasi-kelurahan" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Sosialisasi Kelurahan <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappersiapanidentifikasikelembagaan" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-report-tahap-1-identifikasi-kelembagaan" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Identifikasi Kelembagaan <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappersiapanrembugkhususperempuanpertama" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-report-tahap-1-rembug-perempuan-1" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Rembug Perempuan I <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappersiapanmusyawarahkelurahanpertama" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-report-tahap-1-musyawarah-kelurahan-1" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Musyawarah Kelurahan I <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
@endsection

@section('reportOnly.tahap.persiapan.modal.close', '<i class="fa fa-arrow-left"></i> Kembali Ke Tahap Kegiatan')
@section('reportOnly.tahap.persiapan.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-kegiatan"')
@section('reportOnly.tahap.persiapan.modal.submit.class', 'hide')





@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap.persiapan' : 'reportOnly.tahap.persiapan'])


 
