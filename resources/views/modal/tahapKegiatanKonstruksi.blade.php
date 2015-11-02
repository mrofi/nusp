@section('tahap.konstruksi.modal.id', 'modal-tahap-konstruksi')
@section('tahap.konstruksi.modal.title', 'Tahap Konstruksi')
@section('tahap.konstruksi.modal.form.action', nusp_asset('api/tahap-konstruksi'))

@section('tahap.konstruksi.modal.form.body')	
	<div class="row">
		<div class="col-md-5">
			@include('modal.formPlain')
			<div class="row">&nbsp;</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<label class="control-label hidden-sm hidden-xs">Klik salah satu tahapan di samping :</label>
					<label class="control-label visible-sm visible-xs">Klik salah satu tahapan di bawah :</label>
				</div>
			</div>		
		</div>
		<div class="col-md-7">	
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksikontraksp3" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-kontrak-sp3" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Kontrak SP3 <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksirembugkhususperempuanketiga" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-rembug-perempuan-3" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Rembug Perempuan III <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksimusyawarahkelurahankeempat" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-musyawarah-kelurahan-4" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Musyawarah Kelurahan IV <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksitahap1" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-tahap-1" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Tahap 1 <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksipelaksanaanfisik" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-pelaksanaan-fisik" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Pelaksanaan Fisik <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksitahap2" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-tahap-2" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Tahap 2 <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
		</div>
	</div>	
@endsection

@section('tahap.konstruksi.modal.close', '<i class="fa fa-arrow-left"></i> Kembali Ke Tahap Kegiatan')
@section('tahap.konstruksi.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-kegiatan"')
@section('tahap.konstruksi.modal.submit.class', 'hide')


@section('reportOnly.tahap.konstruksi.modal.id', 'modal-report-tahap-konstruksi')
@section('reportOnly.tahap.konstruksi.modal.title', 'Tahap Konstruksi')
@section('reportOnly.tahap.konstruksi.modal.form.action', nusp_asset('api/tahap-konstruksi'))

@section('reportOnly.tahap.konstruksi.modal.body')	
	<div class="row">
		<div class="col-md-5">
			@include('modal.formPlain')
			<div class="row">&nbsp;</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<label class="control-label hidden-sm hidden-xs">Klik salah satu tahapan di samping :</label>
					<label class="control-label visible-sm visible-xs">Klik salah satu tahapan di bawah :</label>
				</div>
			</div>		
		</div>
		<div class="col-md-7">	
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksikontraksp3" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-kontrak-sp3" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Kontrak SP3 <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksirembugkhususperempuanketiga" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-rembug-perempuan-3" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Rembug Perempuan III <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksimusyawarahkelurahankeempat" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-musyawarah-kelurahan-4" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Musyawarah Kelurahan IV <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksitahap1" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-tahap-1" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Tahap 1 <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksipelaksanaanfisik" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-pelaksanaan-fisik" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Pelaksanaan Fisik <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div id="tahapkonstruksitahap2" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-3-tahap-2" data-toggle="modal">
						<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
							Tahap 2 <strong class="date pull-right"></strong>
					</div>
				</div>
			</div>
		</div>
	</div>	
@endsection

@section('reportOnly.tahap.konstruksi.modal.close', '<i class="fa fa-arrow-left"></i> Kembali Ke Tahap Kegiatan')
@section('reportOnly.tahap.konstruksi.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-kegiatan"')
@section('reportOnly.tahap.konstruksi.modal.submit.class', 'hide')





@include('modal_large', ['namespace' => (isset($allowed) && $allowed == true) ? 'tahap.konstruksi' : 'reportOnly.tahap.konstruksi'])


 
