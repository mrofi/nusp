
@section('profil.modal.id', 'modal-profil-desa-kel')
@section('profil.modal.title', 'Profil Desa / Kelurahan')
@section('profil.modal.form.action', nusp_asset('api/profil-desa-kelurahan'))

@section('profil.modal.body')
	<div class="row">
		<label for="" class="control-label col-sm-4">Desa / Kelurahan</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="desaKel"></p>
		</div>
	</div>
	<div class="row">
		<label for="" class="control-label col-sm-4">Kecamatan</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="kec"></p>
		</div>
	</div>
	<div class="row">
		<label for="" class="control-label col-sm-4">Kabupaten / Kota</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="kabKota"></p>
		</div>
	</div>
	<div class="row">
		<label for="" class="control-label col-sm-4">Propinsi</label>
		<div class="col-sm-8">
			<p class="form-control-static" id="propinsi"></p>
		</div>
	</div>
	{!! nusp_forms($formProfilDesaKel) !!}
@endsection

@include('modal', ['namespace' => 'profil'])
