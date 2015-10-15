@extends(nusp_getThemeView()) 

@section('menubar')
            <li class="active"><a href="{{ nusp_asset('') }}"><i class="fa-fw ion ion-home"></i> <span class="hidden-sm">Beranda</span></a></li>
            @if(auth()->user()->isAdmin())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-fw ion ion-edit"></i> <span class="hidden-sm">Isian Data <span class="caret"></span></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ nusp_asset('dashboard/isian/sosialisasi') }}">Sosialisasi Kab / Kota</a></li>
                <li><a href="{{ nusp_asset('') }}">Penetapan Lokasi</a></li>
                <li><a href="{{ nusp_asset('') }}">Profil Kelurahan</a></li>
                <li class="divider"></li>
                <li><a href="{{ nusp_asset('') }}">Tahapan Kegiatan</a></li>
                <li><a href="{{ nusp_asset('') }}">Kontrak, Lahan &amp; Pemanfaat</a></li>
                <li><a href="{{ nusp_asset('') }}">Fisik &amp; Keuangan</a></li>
              </ul>
            </li>
            @endif
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-fw ion ion-android-clipboard"></i> <span class="hidden-sm">Laporan / Monitoring <span class="caret"></span></span></a>
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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-fw ion ion-android-download"></i> <span class="hidden-sm">Download <span class="caret"></span></span></a>
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
            <li><a href="#" data-target="#modal-sosialisasi" data-toggle="modal">Tess</a></li>
          
@endsection

<?php if (!isset($thePage)) $thePage = ''; ?>  

@section('pageTitle', $thePage)
@section('subTitle') @yield('theTagline', null) @endsection