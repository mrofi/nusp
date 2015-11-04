@section('tahap.pasca-konstruksi.modal.id', 'modal-tahap-pasca-konstruksi')
@section('tahap.pasca-konstruksi.modal.title', 'Tahap Pasca Konstruksi')
@section('tahap.pasca-konstruksi.modal.form.action', nusp_asset('api/tahap-pasca-konstruksi'))

@section('tahap.pasca-konstruksi.modal.body')	
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<label class="control-label">Klik salah satu tahapan di bawah :</label>
		</div>
	</div>		
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappascakonstruksimusyawarahkelurahankelima" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-4-musyawarah-kelurahan-5" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Musyawarah Kelurahan V <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappascakonstruksiserahterimapekerjaan" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-4-serah-terima-pekerjaan" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Serah Terima Pekerjaan <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappascakonstruksipemanfaatan" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-4-pemanfaatan" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Pemanfaatan <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div id="tahappascakonstruksipemeliharaan" class="btn-input btn btn-lg btn-block data-transport bg-gray-light" data-target="#modal-tahap-4-pemeliharaan" data-toggle="modal">
				<span class="pull-left check hide"><i class="fa fa-lg fa-check"></i></span>
					Pemeliharaan <strong class="date pull-right"></strong>
			</div>
		</div>
	</div>
@endsection

@section('tahap.pasca-konstruksi.modal.close', '<i class="fa fa-arrow-left"></i> Kembali Ke Tahap Kegiatan')
@section('tahap.pasca-konstruksi.modal.close.prop', 'data-toggle="modal" data-target="#modal-tahap-kegiatan"')
@section('tahap.pasca-konstruksi.modal.submit.class', 'hide')





@include('modal_no_delete', ['namespace' => 'tahap.pasca-konstruksi'])


 
