@extends('master')

@section('contentHeader', ' ')

@section('contentMain')
<style>

	h2.propinsi {
		border-bottom: none;
	}

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
	    /*border-top: 1px dotted;*/
	    border-bottom: 1px dotted;
		display: block;
	    vertical-align: middle;
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
	    z-index: 99;
	}

	.navsidebar.affix {
		display: none;
	}


	.report-title > a {
	    display: block;
	    font-size: 1.6em!important;
	}


@media (min-width: 992px) {

	.navsidebar.affix {
	    position: fixed!important;
	    width: 13.8%;
    	top: 60px;
    	display: block;
	}
	
	.report-row .report-item {
	    text-align: center;
	    height: 100px;
	    vertical-align: top;
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
	  			<div class="report-title visible-xs visible-sm">
	  				<a href="#">
	  					<span class="title">Judul Laporan</span>
						<span class="caret"></span>
	  				</a>
	  			</div>
		  		<nav class="navsidebar"  data-spy="affix" data-offset-top="80" data-offset-bottom="100">
		            <ul class="nav sidenav">
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/sosialisasi/') }}" data-deep="2" data-name="sosialisasi" data-attrs="kode_wilayah,tanggal,peserta,peserta_perempuan,foto_id" href="#sosialisasi-kabupaten-kota">Sosialisasi Kabupaten / Kota</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/penetapan-lokasi') }}" data-deep="2" data-name="penetapan" data-attrs="kode_wilayah,tanggal_sk,nomor_sk,jumlah_lokasi,file_id" href="#penetapan-lokasi">Penetapan Lokasi</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#profil-desa-kelurahan">Profil Desa / Kelurahan</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#tahapan-kegiatan">Tahapan Kegiatan</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#kontrak-lahan-pemanfaat">Kontrak, Lahan &amp; Pemanfaat</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/') }}" href="#fisik-keuangan">Fisik &amp; Keuangan</a></li>
					</ul>
				</nav>  			
	  		</div>
	  		<div class="col-md-10 tab-content content" id="report-content">
	  			<div id="sosialisasi-kabupaten-kota" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="100" data-offset-bottom="100">
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
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-2 hide"><li><div class="col-md-4 report-item text-left no-left-border kabkota"></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12 tanggal"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Peserta</div><div class="col-xs-7 col-md-12 peserta"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Peserta Perempuan</div><div class="col-xs-7 col-md-12 peserta_perempuan"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Foto</div><div class="col-xs-7 col-md-12 foto_id"></div></div></div> </li> </div>
	  			</div>
	  			<div id="penetapan-lokasi" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal SK</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-leaf fa-2x"></i><br>Nomor SK</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-globe fa-2x"></i><br>Jumlah Lokasi</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-file fa-2x"></i><br>File SK</li>
						</li>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-2 hide"><li><div class="col-md-4 report-item text-left no-left-border kabkota"></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal SK</div><div class="col-xs-7 col-md-12 tanggal_sk"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Nomor SK</div><div class="col-xs-7 col-md-12 nomor_sk"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Jumlah Lokasi</div><div class="col-xs-7 col-md-12 jumlah_lokasi"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">File SK</div><div class="col-xs-7 col-md-12 file_id"></div></div></div> </li> </div>
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
			sidebarAffix.css('width', (0 == b - w) ? '100%' : b - w);
		}
		
		$(window).resize(function() {
			affixChanged()
		}).resize();

		$('.report-title > a').click(function(e) {
			e.preventDefault();
			$('.navsidebar').removeClass('affix');
		})

		window.allList = [];

		$('ul.sidenav li > a').click(function(e) {
			$('.report-header').removeClass('affix');
			var top = ($(window).width() < 992) ? $('#report-content').offset().top - $('.navsidebar').height() - 60 : 0;
			$('html,body').animate({
              scrollTop: top
            }, 1000);

			$(this).tab('show');
		}).on('show.bs.tab', function(e) {
			for (l in window.allList) {
				window.allList[l].clear();
			}
			window.allList = [];
			var cur = $(e.target);
			var target = cur.attr('href').substr(1);
			var deep = cur.data('deep');
			var name = cur.data('name');
			var attrs = cur.data('attrs').split(',');
			$('.report-title .title').text(cur.text());
			$.get(cur.data('action'), {}, function(regionalList){

			  var regional = new List(target, {item: $('#'+target).find('.list-format-1').html(), listClass: 'report-content'});
			  window.allList.push(regional);

			  var propinsis = [];
			  for (x in regionalList) {
			    propinsi = regionalList[x];
			    var dx1 = {propinsi: propinsi.propinsi, slug: propinsi.slug, role_id: propinsi.role_id, id: propinsi.id}
			    if (deep == '1') {
			    	for (a in attrs) {
				    	var attr = attrs[a];
			    		dx1[attr] =  (propinsi[name] != null) ? propinsi[name][attr] : '-';
			    	}	
				}
		    	propinsis.push(dx1);
			  }	


			  regional.add(propinsis, function(lists) {
			    for (x in lists) {
			      slugPropinsi = lists[x]._values.slug;
			      role_id = lists[x]._values.role_id;
			      idPropinsi = lists[x]._values.id;
			      $(lists[x].elm).attr('id', slugPropinsi).attr('data-role_id', role_id);
			    }
			  });

			  if (deep == '1') return;

			  for (x in regionalList) {
			    propinsi = regionalList[x];
			    propinsi.func = new List(propinsi.slug, {item: $('#'+target).find('.list-format-2').html(), listClass: 'list-unstyled'});
			  	window.allList.push(propinsi.func);
			    
			    kabKotas = [];
			    for (y in propinsi.kabKotas) {
			      	kabKota = propinsi.kabKotas[y];
			      	var dx2 = {kabkota: kabKota.kabKota, slug: kabKota.slug, role_id: kabKota.role_id, id: kabKota.id}
			      	if (deep == '2') {
				    	for (a in attrs) {
				    		var attr = attrs[a];
				    		dx2[attr] =  (kabKota[name] != null) ? kabKota[name][attr] : '-';
				    	}	
					}
			      	kabKotas.push(dx2);
			    }


			    propinsi.func.add(kabKotas, function(lists) {
			      for (x in lists) {
			        slugKabKota = lists[x]._values.slug;
			        role_id = lists[x]._values.role_id;
			        idKabKota = lists[x]._values.id;
			        $(lists[x].elm).find('.inner-kab-kota').attr('id', slugKabKota)
			        .end().find('.kab-kota-link').attr('data-id', idKabKota).attr('data-role_id', role_id).attr('data-kab-kota-id', idKabKota).attr('data-propinsi-id', propinsi.id);
			      }
			    })

			  	if (deep == '2') continue;

			    for (y in propinsi.kabKotas) {
			      kabKota = propinsi.kabKotas[y];
			      kabKota.func = new List(kabKota.slug, options3);
				  window.allList.push(kabKota.func);

			      desaKels = [];
			      for (z in kabKota.desaKels) {
			        desaKel = kabKota.desaKels[z];
			        var dx3 = {desakel: desaKel.desaKel, slug: desaKel.slug, role_id: desaKel.role_id, id: desaKel.id}
			        if (deep == '3') {
				    	for (a in attrs) {
				    		var attr = attrs[a];
				    		dx3[attr] =  (desaKel[name] != null) ? desaKel[name][attr] : '-';
				    	}	
					}
			        desaKels.push(dx3);
			      }

			      kabKota.func.add(desaKels, function(lists) {
			        for (x in lists) {
			          slugDesaKel = lists[x]._values.slug;
			          role_id = lists[x]._values.role_id;
			          idDesaKel = lists[x]._values.id;
			          $(lists[x].elm).find('.desa-kel-link').attr('id', slugDesaKel).attr('data-role_id', role_id).attr('data-id', idDesaKel).attr('data-desa-kel-id', idDesaKel)
			          .attr('data-kab-kota-id', kabKota.id).attr('data-propinsi-id', propinsi.id)
			        }
			      });

			    }

			  }
			    
			  

			}, 'json')
		})

		$('ul.sidenav li:first > a').tab('show');
	})
</script>
@endpush
