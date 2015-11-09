
@section('verify.modal.id', 'modal-verify')
@section('verify.modal.title', 'Verifikasi Entry')
@section('verify.modal.form.action', nusp_asset('api/verify'))

@section('verify.modal.submit', 'Ya')
@section('verify.modal.close', 'Tidak')
@section('verify.modal.form.body')
	<div class="row">
		<input type="hidden" name="kode_wilayah" id="kode_wilayah">
		<input type="hidden" name="verify" value="true">
		<label class="form-label col-md-12">Apakah Anda yakin akan mem-verifikasi entry tersebut ?</label>	
	</div>		
@endsection

@section('verify.modal.close.prop', 'data-toggle="modal"')


@include('modal_special', ['namespace' => 'verify'])


