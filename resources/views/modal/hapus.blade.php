
@section('hapus.modal.id', 'modal-hapus')
@section('hapus.modal.title', 'Hapus Entry')
@section('hapus.modal.form.action', nusp_asset('api/hapus'))

@section('hapus.modal.body')
	<div class="row">
		<label class="form-label col-md-12">Apakah Anda yakin akan menghapus entry tersebut ?</label>	
	</div>		
@endsection


@include('modal', ['namespace' => 'hapus'])


