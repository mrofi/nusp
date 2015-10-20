@extends('master')

@section('contentHeader', ' ')

@section('contentMain')
<style>
	.box-body.row.box-report {
	    margin: 0;
	    padding: 0;
	}

	#report-content {
	    background-color: #f7f7f7;
	    min-height: 800px;
	    color: #333;
	}

	#report-content hr {
		border-color: #333;
	}

	#nav-sidebar {
	    padding: 0;
	}

	#nav-sidebar a:hover,
	#nav-sidebar a:focus,
	#nav-sidebar .active > a {
		color: #001F3F;
		background-color: #f7f7f7;
		font-weight: 600;
	}

	#nav-sidebar a {
		color: #f7f7f7;
		border-bottom: 1px solid #629DBF;
		font-size: 1.3em;
		padding: 15px;
	}

	.report-header {
	    border-bottom: 2px solid;
	}

	.report-header .header-item {
	    border-left: 1px dotted;
	    display: block;
	    min-height: 140px;
	    text-align: center;
	    font-size: 1.4em;
	    font-weight: 600;
	    padding-top: 20px;
	}

	.no-left-border {
		border-left: none!important;
		border-right: none!important;
	}

	.report-row .report-item {
	    border-top: 1px dotted;
	    height: 50px;
	    border-right: 1px dotted;
	    font-size: 1.4em;
	    text-align: left;
	    border-left: 1px dotted;
	    padding-top: 10px;
	    padding-bottom: 10px;
	}

	.text-left {
		text-align: left!important;
	}

	.report-item .col-xs-5 {
		font-weight: 600;
		text-align: right;
	}

	.report-row {
	    border-bottom: 1px dotted;
	}

	.report-header.affix {
	    position: fixed!important;
	    width: 66.33%;
	    top: 51px;
	    z-index: 9999;
	}

	.navsidebar.affix {
	    position: fixed!important;
	    width: 13.8%;
    	top: 60px;
	}

@media (min-width: 992px) {

	
	.report-row .report-item {
	    text-align: center;
	    height: 100px;
	    border-top: none; 
	    border-right: none; 
	}

}


</style>
<section class="content">
  	<h1>Laporan / Monitoring <i class="ion ion-ios-pulse"></i></h1>
	<div class="box bg-blue">
	    <div class="box-body row box-report">
	  		<div id="nav-sidebar" class="col-md-2">
		  		<nav class="navsidebar hidden-print hidden-xs hidden-sm"  data-spy="affix" data-offset-top="120" data-offset-bottom="100">
		            <ul class="nav sidenav">
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/sosialisasi') }}" href="#sosialisasi-kabupaten-kota">Sosialisasi Kabupaten / Kota</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#penetapan-lokasi">Penetapan Lokasi</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#profil-desa-kelurahan">Profil Desa / Kelurahan</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#tahapan-kegiatan">Tahapan Kegiatan</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#kontrak-lahan-pemanfaat">Kontrak, Lahan &amp; Pemanfaat</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#fisik-keuangan">Fisik &amp; Keuangan</a></li>
					</ul>
				</nav>  			
	  		</div>
	  		<div class="col-md-10 tab-content content" id="report-content">
	  			<div id="sosialisasi-kabupaten-kota" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-users fa-2x"></i><br>Peserta</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-female fa-2x"></i><br>Peserta Perempuan</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-image fa-2x"></i><br>Foto</li>
						</li>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-2 hide">
		  				<li class="report-item-propinsi">
		  					<h2 class="propinsi"></h2>
		  					<ul class="list-unstyled report-row row">
		  					</ul>
		  				</li>
		  			</div>
		  			<div class="list-format hide">
	  					<li>
	  						<div class="col-md-4 report-item text-left no-left-border kabkota"></div>	
	  						<div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12 tanggal"></div></div></div>	
	  						<div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Peserta</div><div class="col-xs-7 col-md-12 peserta"></div></div></div>	
	  						<div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Peserta Perempuan</div><div class="col-xs-7 col-md-12 peserta_perempuan"></div></div></div>	
	  						<div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Foto</div><div class="col-xs-7 col-md-12 foto_id"></div></div></div>	
  						</li>
		  			</div>
	  			</div>
	  			<div id="penetapan-lokasi" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal</li>
						</li>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  				<li class="report-item-propinsi">
		  					<h2>Jawa Tengah</h2>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Pekalongan</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Semarang</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  				</li>
		  			</ul>
	  			</div>
	  			<div id="profil-desa-kelurahan" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-users fa-2x"></i><br>Peserta</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-female fa-2x"></i><br>Peserta Perempuan</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-image fa-2x"></i><br>Foto</li>
						</li>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  				<li class="report-item-propinsi">
		  					<h2>Jawa Tengah</h2>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Pekalongan</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Semarang</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  				</li>
		  			</ul>
	  			</div>
	  			<div id="tahapan-kegiatan" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-users fa-2x"></i><br>Peserta</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-female fa-2x"></i><br>Peserta Perempuan</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-image fa-2x"></i><br>Foto</li>
						</li>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  				<li class="report-item-propinsi">
		  					<h2>Jawa Tengah</h2>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Pekalongan</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Semarang</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  				</li>
		  			</ul>
	  			</div>
	  			<div id="kontrak-lahan-pemanfaat" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-users fa-2x"></i><br>Peserta</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-female fa-2x"></i><br>Peserta Perempuan</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-image fa-2x"></i><br>Foto</li>
						</li>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  				<li class="report-item-propinsi">
		  					<h2>Jawa Tengah</h2>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Pekalongan</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Semarang</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  				</li>
		  			</ul>
	  			</div>
	  			<div id="fisik-keuangan" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-users fa-2x"></i><br>Peserta</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-female fa-2x"></i><br>Peserta Perempuan</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-image fa-2x"></i><br>Foto</li>
						</li>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  				<li class="report-item-propinsi">
		  					<h2>Jawa Tengah</h2>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Pekalongan</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  					<ul class="list-unstyled report-row row">
			  					<li class="col-md-4 report-item text-left no-left-border">Kota Semarang</li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
			  					<li class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12">2 Okt 2015</div></div></li>	
		  					</ul>
		  				</li>
		  			</ul>
	  			</div>
	  			
	  		</div>
	    </div><!-- /.box-body -->
	    <div class="box-footer">
	      Footer
	    </div><!-- /.box-footer-->
	</div><!-- /.box -->
  <div class="container">
  </div>
  <div class="container">
  </div>

@endsection

@push('scriptJs')
<script>
	$(function() {

		var affixChanged = function() {
			var headerAffix = $('.report-header');
			var w = headerAffix.parents('#report-content')[0].clientWidth;
			headerAffix.css('width', w - 30);

			var sidebarAffix = $('.navsidebar');
			var b = $('.box-body')[0].clientWidth;
			sidebarAffix.css('width', b - w);
		}
		
		$(window).resize(function() {
			affixChanged()
		}).resize();


		$('ul.sidenav li > a').click(function(e) {
			$(this).tab('show');
		}).on('show.bs.tab', function(e) {
			var cur = $(e.target);
			$.get(cur.data('action'), {}, function(data) {
				if (data.length) {
					
				}
			}, 'json')
		})

		$('ul.sidenav li:first > a').tab('show');
	})
</script>
@endpush
