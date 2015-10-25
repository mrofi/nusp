@section('profil.modal.form.plain')
<a data-target="#modal-sosialisasi" class="data-transport" data-toggle="modal">ijkjkjk</a>						
<div class="row hide">
  <label for="" class="control-label col-sm-4">Desa / Kelurahan</label>
  <div class="col-sm-8">
    <p class="form-control-static" id="desaKel"></p>
  </div>
</div>
<div class="row hide">
  <label for="" class="control-label col-sm-4">Kecamatan</label>
  <div class="col-sm-8">
    <p class="form-control-static" id="kec"></p>
  </div>
</div>
<div class="row hide">
  <label for="" class="control-label col-sm-4">Kabupaten / Kota</label>
  <div class="col-sm-8">
    <p class="form-control-static" id="kabKota"></p>
  </div>
</div>
<div class="row hide">
  <label for="" class="control-label col-sm-4">Propinsi</label>
  <div class="col-sm-8">
    <p class="form-control-static" id="propinsi"></p>
  </div>
</div>
@endsection


@section('profil.modal.id', 'modal-profil-desa-kel')
@section('profil.modal.title', 'Profil Desa / Kelurahan')
@section('profil.modal.form.action', nusp_asset('api/profil-desa-kelurahan'))

@section('profil.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@yield('profil.modal.form.plain')
			{!! nusp_forms(array_only($formProfilDesaKel, ['kode_wilayah', 'luas_wilayah', 'jumlah_penduduk_laki_laki', 'jumlah_penduduk_perempuan', 'jumlah_kk', 'jumlah_kk_miskin', 'jumlah_rw_dusun_lingkungan', 'jumlah_rt', 'jumlah_jamban_kk', 'jumlah_septik_tank'])) !!}
		</div>
		<div class="col-md-6">
			{!! nusp_forms(array_only($formProfilDesaKel, ['jumlah_mck_unit', 'jumlah_mck_bilik', 'jumlah_sumur_gali_unit', 'jumlah_sumur_pompa_unit', 'jumlah_kran_umum_unit', 'jumlah_pah_unit', 'nama_bkm', 'status_keberdayaan_bkm', 'luas_kawasan', 'tipografi_karakteristik', 'koordinat_latitude', 'koordinat_longitude'])) !!}
		</div>
	</div>
@endsection



@section('reportOnly.profil.modal.id', 'modal-report-profil-desa-kel')
@section('reportOnly.profil.modal.title', 'Profil Desa / Kelurahan')
@section('reportOnly.profil.modal.form.action', nusp_asset('api/profil-desa-kelurahan'))
@section('reportOnly.profil.modal.close', 'Tutup')
@section('reportOnly.profil.modal.submit.class', 'hide')

@section('reportOnly.profil.modal.form.body')	
	<div class="row">
		<div class="col-md-6">
			@yield('profil.modal.form.plain')
			{!! nusp_staticForms(array_only($formProfilDesaKel, ['kode_wilayah', 'luas_wilayah', 'jumlah_penduduk_laki_laki', 'jumlah_penduduk_perempuan', 'jumlah_kk', 'jumlah_kk_miskin', 'jumlah_rw_dusun_lingkungan', 'jumlah_rt', 'jumlah_jamban_kk', 'jumlah_septik_tank'])) !!}
		</div>
		<div class="col-md-6">
			{!! nusp_staticForms(array_only($formProfilDesaKel, ['jumlah_mck_unit', 'jumlah_mck_bilik', 'jumlah_sumur_gali_unit', 'jumlah_sumur_pompa_unit', 'jumlah_kran_umum_unit', 'jumlah_pah_unit', 'nama_bkm', 'status_keberdayaan_bkm', 'luas_kawasan', 'tipografi_karakteristik', 'koordinat_latitude', 'koordinat_longitude'])) !!}
		</div>
	</div>
@endsection




@include('modal_large', ['namespace' => (isset($allowed) && $allowed == true) ? 'profil' : 'reportOnly.profil'])


 
