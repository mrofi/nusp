@extends('modal')

@section('modal.id', 'modal-sosialisasi')
@section('modal.title', 'Sosialisasi Kabupaten / Kota')
@section('modal.form.action', nusp_asset('api/sosialisasi'))

@section('modal.body')
	{!! nusp_forms(array_except($forms, ['foto_id'])) !!}
	<div class="form-group">
		<label for="foto_id" class="control-label col-sm-4">Foto</label>
		<div class="col-sm-6">
			<input type="file" name="foto_id" id="foto_id" class="form-control">
			<img src="" alt="Foto Sosialisasi" style="width: 100%" class="file-place img-thumbnail hide">
		</div>
	</div>
@endsection
