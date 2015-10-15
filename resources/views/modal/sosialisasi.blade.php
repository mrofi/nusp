
@section('sosialisasi.modal.id', 'modal-sosialisasi')
@section('sosialisasi.modal.title', 'Sosialisasi Kabupaten / Kota')
@section('sosialisasi.modal.form.action', nusp_asset('api/sosialisasi'))

@section('sosialisasi.modal.body')
	{!! nusp_forms(array_except($formSosialisasi, ['foto_id'])) !!}
	<div class="form-group">
		<label for="foto_id" class="control-label col-sm-4">Foto</label>
		<div class="col-sm-6">
			<input type="file" name="foto_id" id="foto_id" class="form-control">
			<img src="" alt="Foto Sosialisasi" style="width: 100%" class="file-place img-thumbnail hide">
		</div>
	</div>
@endsection

@include('modal', ['namespace' => 'sosialisasi'])
