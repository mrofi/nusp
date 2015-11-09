
@section('unverify.modal.id', 'modal-unverify')
@section('unverify.modal.title', 'Batalkan Verifikasi')
@section('unverify.modal.form.action', nusp_asset('api/unverify'))

@section('unverify.modal.submit', 'Ya')
@section('unverify.modal.close', 'Tidak')
@section('unverify.modal.form.body')
	<div class="row">
		<input type="hidden" name="kode_wilayah" id="kode_wilayah">
		<input type="hidden" name="verify" value="false">
		<label class="form-label col-md-12">Apakah Anda yakin akan membatalkan verifikasi entry tersebut ?</label>	
	</div>		
@endsection

@section('unverify.modal.close.prop', 'data-toggle="modal"')


@include('modal_special', ['namespace' => 'unverify'])


