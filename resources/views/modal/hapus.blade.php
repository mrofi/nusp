
@section('hapus.modal.id', 'modal-hapus')
@section('hapus.modal.title', 'Hapus Entry')
@section('hapus.modal.form.action', nusp_asset('api/hapus'))

@section('hapus.modal.submit', 'Ya')
@section('hapus.modal.close', 'Tidak')
@section('hapus.modal.form.body')
	<div class="row">
		<input type="hidden" name="kode_wilayah" id="kode_wilayah">
		<input type="hidden" name="delete_entry" value="true">
		<label class="form-label col-md-12">Apakah Anda yakin akan menghapus entry tersebut ?</label>	
	</div>		
@endsection

@section('hapus.modal.close.prop', 'data-toggle="modal"')


@include('modal_special', ['namespace' => 'hapus'])


