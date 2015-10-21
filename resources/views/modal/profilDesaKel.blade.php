
@section('profil.modal.id', 'modal-profil-desa-kel')
@section('profil.modal.title', 'Profil Desa / Kelurahan')
@section('profil.modal.form.action', nusp_asset('api/profil-desa-kelurahan'))

@section('profil.modal.body')	
	{!! nusp_forms($formProfilDesaKel) !!}
@endsection



@section('reportOnly.profil.modal.id', 'modal-report-profil-desa-kel')
@section('reportOnly.profil.modal.title', 'Profil Desa / Kelurahan')
@section('reportOnly.profil.modal.form.action', nusp_asset('api/profil-desa-kelurahan'))
@section('reportOnly.profil.modal.close', 'Tutup')
@section('reportOnly.profil.modal.submit.class', 'hide')

@section('reportOnly.profil.modal.body')	
	{!! nusp_staticForms($formProfilDesaKel) !!}
@endsection




@include('modal', ['namespace' => (isset($allowed) && $allowed == true) ? 'profil' : 'reportOnly.profil'])


 
