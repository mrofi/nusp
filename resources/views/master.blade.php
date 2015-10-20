@extends(nusp_getThemeView()) 

@section('menubar')
            <li class=" @if(request()->is('dashboard')) dropdown @endif {{ nusp_activeMenu(true, request()->is('dashboard')) }}">
              <a href="{{ nusp_asset('dashboard') }}"  @if(request()->is('dashboard')) class="dropdown-toggle" data-toggle="dropdown" @endif><i class="fa-fw fa-lg ion ion-ios-location"></i> <span class="hidden-sm">Semua Wilayah</span></a>
              @if(request()->is('dashboard'))
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-submenu"><a href="#"><strong>Propinsi (A-Z)</strong></a>
                  @if($propinsis = auth()->user()->propinsi)
                  <ul class="dropdown-menu" role="menu">
                    @foreach($propinsis as $propinsi)
                    <li><a href="{{ nusp_asset('dashboard') }}#{{ $propinsi['slug'] }}">{{ $propinsi['propinsi'] }}</a></li>
                    @endforeach
                  </ul>
                  @endif
                </li>
                <li class="dropdown-submenu"><a href="#"><strong>Kabupaten / Kota (A-Z)</strong></a>
                  @if($kabKotas = auth()->user()->kabKota)
                  <ul class="dropdown-menu" role="menu">
                    @foreach($kabKotas as $kabKota)
                    <li><a href="{{ nusp_asset('dashboard') }}#{{ $kabKota['slug'] }}">{{ $kabKota['kabKota'] }}</a></li>
                    @endforeach
                  </ul>
                  @endif
                </li>
                <li class="dropdown-submenu"><a href="#"><strong>Desa / Kelurahan (A-Z)</strong></a>
                  @if($desaKels = auth()->user()->desaKel)
                  <ul class="dropdown-menu" role="menu">
                    @foreach($desaKels as $desaKel)
                    <li><a href="{{ nusp_asset('dashboard') }}#{{ $desaKel['slug'] }}">{{ $desaKel['desaKel'] }}</a></li>
                    @endforeach
                  </ul>
                  @endif
                </li>
              </ul>
              @endif
            </li>
            <li class="dropdown {{ nusp_activeMenu(true, request()->is('dashboard/sosialisasi-kabupaten-kota')) }}">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-fw fa-lg ion ion-ios-pulse"></i> <span class="hidden-sm">Laporan / Monitoring</span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ nusp_asset('dashboard/sosialisasi-kabupaten-kota') }}">Sosialisasi Kab / Kota</a></li>
                <li><a href="{{ nusp_asset('') }}">Penetapan Lokasi</a></li>
                <li><a href="{{ nusp_asset('') }}">Profil Kelurahan</a></li>
                <li class="divider"></li>
                <li><a href="{{ nusp_asset('') }}">Tahapan Kegiatan</a></li>
                <li><a href="{{ nusp_asset('') }}">Kontrak, Lahan &amp; Pemanfaat</a></li>
                <li><a href="{{ nusp_asset('') }}">Fisik &amp; Keuangan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-fw fa-lg ion ion-android-download"></i> <span class="hidden-sm">Download</span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ nusp_asset('') }}">Sosialisasi Kab / Kota</a></li>
                <li><a href="{{ nusp_asset('') }}">Penetapan Lokasi</a></li>
                <li><a href="{{ nusp_asset('') }}">Profil Kelurahan</a></li>
                <li class="divider"></li>
                <li><a href="{{ nusp_asset('') }}">Tahapan Kegiatan</a></li>
                <li><a href="{{ nusp_asset('') }}">Kontrak, Lahan &amp; Pemanfaat</a></li>
                <li><a href="{{ nusp_asset('') }}">Fisik &amp; Keuangan</a></li>
              </ul>
            </li>
          
@endsection

<?php if (!isset($thePage)) $thePage = ''; ?>

@section('pageTitle', $thePage)
@section('subTitle') @yield('theTagline', null) @endsection