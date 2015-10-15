
@section('profil.modal.id', 'modal-profil-desa-kel')
@section('profil.modal.title', 'Profil Desa / Kelurahan')
@section('profil.modal.form.action', nusp_asset('api/profil-desa-kelurahan'))

@section('profil.modal.body')
	{!! nusp_forms($formProfilDesaKel) !!}
@endsection

@include('modal', ['namespace' => 'profil'])
