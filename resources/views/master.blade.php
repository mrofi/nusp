@extends(nusp_getThemeView()) 

@section('menubar')
            <li class="@if(request()->is('/')) dropdown @endif {{ nusp_activeMenu(true, request()->is('/')) }}">
              <a href="{{ nusp_asset('') }}"  @if(request()->is('/')) class="dropdown-toggle" data-toggle="dropdown" @endif><i class="fa-fw fa-lg ion ion-ios-location"></i> <span class="hidden-sm">Semua Wilayah</span> @if(request()->is('/')) <span class="caret"></span> @endif</a>
              @if(request()->is('/'))
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-submenu"><a href="#"><strong>Propinsi (A-Z)</strong></a>
                  @if($propinsis = auth()->user()->propinsi)
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" class="search-button">Cari Propinsi <i class="fa fa-search"></i></a></li>
                    <li class="divider"></li>
                    @foreach($propinsis as $propinsi)
                    <li><a href="{{ nusp_asset('/') }}#{{ $propinsi['slug'] }}">{{ $propinsi['propinsi'] }}</a></li>
                    @endforeach
                  </ul>
                  @endif
                </li>
                <li class="dropdown-submenu"><a href="#"><strong>Kabupaten / Kota (A-Z)</strong></a>
                  @if($kabKotas = auth()->user()->kabKota)
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" class="search-button">Cari Kabupaten / Kota <i class="fa fa-search"></i></a></li>
                    <li class="divider"></li>
                    @foreach($kabKotas as $kabKota)
                    <li><a href="{{ nusp_asset('/') }}#{{ $kabKota['slug'] }}">{{ $kabKota['kabKota'] }}</a></li>
                    @endforeach
                  </ul>
                  @endif
                </li>
                <li class="dropdown-submenu"><a href="#"><strong>Desa / Kelurahan (A-Z)</strong></a>
                  @if($desaKels = auth()->user()->desaKel)
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" class="search-button">Cari Kelurahan / Desa <i class="fa fa-search"></i></a></li>
                    <li class="divider"></li>
                    @foreach($desaKels as $desaKel)
                    <li><a href="{{ nusp_asset('/') }}#{{ $desaKel['slug'] }}">{{ $desaKel['desaKel'] }}</a></li>
                    @endforeach
                  </ul>
                  @endif
                </li>
              </ul>
              @endif
            </li>
            <li class="{{ nusp_activeMenu(true, request()->is('report')) }}">
              <a href="@if(request()->is('report'))javascript:;@else{{ nusp_asset('report') }}@endif" ><i class="fa-fw fa-lg ion ion-ios-pulse"></i> <span class="hidden-sm">Laporan / Monitoring</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-fw fa-lg ion ion-android-download"></i> <span class="hidden-sm">Download</span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ nusp_asset('download/sosialisasi-kabupaten-kota') }}">Sosialisasi Kab / Kota</a></li>
                <li><a href="{{ nusp_asset('download/penetapan-lokasi') }}">Penetapan Lokasi</a></li>
                <li class="divider"></li>
                <li><a href="{{ nusp_asset('download/profil-desa-kelurahan') }}">Profil Kelurahan</a></li>
                <li><a href="{{ nusp_asset('download/tahap-persiapan') }}">Tahapan Persiapan</a></li>
                <li><a href="{{ nusp_asset('download/tahap-perencanaan') }}">Tahapan Perencanaan</a></li>
                <li><a href="{{ nusp_asset('download/tahap-konstruksi') }}">Tahapan Konstruksi</a></li>
                <li><a href="{{ nusp_asset('download/tahap-pasca-konstruksi') }}">Tahapan Pasca Konstruksi</a></li>
                <li><a href="{{ nusp_asset('download/kontrak-lahan-pemanfaat') }}">Kontrak, Lahan &amp; Pemanfaat</a></li>
                <li><a href="{{ nusp_asset('') }}">Fisik &amp; Keuangan</a></li>
              </ul>
            </li>
          
@endsection

<?php if (!isset($thePage)) $thePage = ''; ?>

@section('pageTitle', $thePage)
@section('subTitle') @yield('theTagline', null) @endsection