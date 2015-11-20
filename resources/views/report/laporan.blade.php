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

	.report-header .row {
		overflow: hidden;
	}

	.report-header .header-item {
	    border-left: 1px dotted;
	    display: block;
	    text-align: center;
	    font-size: 1.4em;
	    font-weight: 600;
	    padding-top: 20px;
	    padding-bottom: 99999px;
	    margin-bottom: -99979px;
	}

	.no-left-border {
		border-left: none!important;
		border-right: none!important;
		cursor: auto!important;
	}

	.report-row > li {
		width: 100%;
		overflow: hidden;
		border-bottom: 1px dotted;
	}

	.no-top-border {
		border-top: none!important;
	}

	.report-row .report-item {
	    border-top: 1px dotted;
	    border-bottom: 1px dotted;
		display: block;
	    vertical-align: middle;
	    border-right: 1px dotted;
	    font-size: 1.4em;
	    text-align: left;
	    border-left: 1px dotted;
	    padding-top: 10px;
	    padding-bottom: 99999px;
	    margin-bottom: -99979px;
	}

	.text-left {
		text-align: left!important;
	}

	.report-item .col-xs-5 {
		font-weight: 600;
		text-align: right;
	}

	.report-item .col-xs-5.text-center {
		text-align: center;
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

	.header-item.active {
	    background-color: #ddd;
	}

	small.bold {
		font-weight: 700;
	}

	#profil-desa-kelurahan .tab-content {
	    background-color: #ddd;
	    padding: 0;
	}

	#profil-desa-kelurahan .tab-pane {
		overflow: hidden;
	}
	
	#profil-desa-kelurahan .tab-content .tab-pane>div {
	    font-size: 1.3em;
	    text-align: center;
	    padding: 10px;
	    padding-bottom: 99999px;
	    margin-bottom: -99989px;
	    border-left: 1px dotted;
	    font-weight: 600;
	}

	#profil-desa-kelurahan .header-item {
	    border: none;
	    cursor: pointer;
	}

	#profil-desa-kelurahan .report-item .desakel,
	#data-kontrak .report-item .desakel,
	#data-lahan-pemanfaat .report-item .desakel,
	#penyerapan-blm .report-item .desakel,
	#fisik-keuangan .report-item .desakel {
		font-size: 1.1em;
		font-weight: 600;
	}

	#profil-desa-kelurahan .report-item .koordinat,
	#data-kontrak .report-item .koordinat,
	#data-lahan-pemanfaat .report-item .koordinat,
	#penyerapan-blm .report-item .koordinat {
		font-size: 0.9em;
	}

	#fisik-keuangan .report-item .list-unstyled {
		font-size: 0.9em;
	}

	.panel small {
	    font-size: .7em;
	    line-height: .5em;
	}

	.header-item.small {
	    font-size: 1em!important;
	}

	#tahapan-kegiatan .header-item, 
	#tahapan-kegiatan .knob-tab {
	    cursor: pointer!important;
	}

@media (min-width: 992px) {

	.navsidebar.affix {
	    position: fixed!important;
	    width: 13.8%;
    	top: 60px;
    	display: block;
	}
	
	.report-row .report-item {
	    border-bottom: none;
	    text-align: center;
	    vertical-align: top;
	    border-top: none; 
	    border-right: none!important; 
	}

	.koordinat > a {
		display: block;
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
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/profil-desa-kelurahan') }}" data-deep="3" data-name="profil" data-attrs="kode_wilayah,luas_wilayah,jumlah_penduduk,jumlah_penduduk_laki_laki,jumlah_penduduk_perempuan,jumlah_kk,jumlah_kk_miskin,jumlah_rw_dusun_lingkungan,jumlah_rt,jumlah_jamban_kk,jumlah_septik_tank,jumlah_mck_unit,jumlah_mck_bilik,jumlah_sumur_gali_unit,jumlah_sumur_pompa_unit,jumlah_kran_umum_unit,jumlah_pah_unit,nama_bkm,status_keberdayaan_bkm,luas_kawasan,tipografi_karakteristik,koordinat_latitude,koordinat_longitude,pendidikan_sd,pendidikan_smp,pendidikan_sma,pendidikan_perguruan_tinggi"  href="#profil-desa-kelurahan">Profil Desa / Kelurahan</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/tahap-kegiatan') }}" href="#tahapan-kegiatan" data-deep="3" data-name="tahapan" data-attrs="kode_wilayah,persiapan,perencanaan,konstruksi,pasca_konstruksi,persentase">Tahapan Kegiatan</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/data-kontrak') }}" href="#data-kontrak"  data-name="data_kontrak" data-deep="3" data-attrs="kode_wilayah,no_kontrak,tanggal_kontrak,pelaksanaan_tanggal_mulai,pelaksanaan_tanggal_selesai,pelaksanaan_jenis_infrastruktur,pelaksanaan_volume_unit,dana_nilai_blm,dana_nilai_swadaya">Data Kontrak</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/data-lahan') }}" href="#data-lahan-pemanfaat"  data-name="data_lahan" data-deep="3" data-attrs="kode_wilayah,nama_rt_rw,jenis_infrastruktur,lahan_luas,lahan_status,lahan_surat_hibah,lahan_akses_jalan,koordinat_latitude,koordinat_longitude,pemanfaat_jumlah_kk,pemanfaat_jumlah_kk_miskin,pemanfaat_jumlah_jiwa,pemanfaat_jumlah_perempuan,pemanfaat_jumlah_miskin">Data Lahan &amp; Pemanfaat</a></li>
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/penyerapan-blm') }}" href="#penyerapan-blm" data-name="penyerapan_blm" data-deep="3" data-attrs="kode_wilayah,data1_nama_bkm,data2_paket_pekerjaan,data2_no_kontrak,data2_tanggal_kontrak,data2_nilai_kontrak,data2_tanggal_mulai,data2_tanggal_selesai,data3_no_spm,data3_tanggal_spm,data3_no_sp2d,data3_tanggal_sp2d,data3_jumlah,data4_no_spm,data4_tanggal_spm,data4_no_sp2d,data4_tanggal_sp2d,data4_jumlah,data5_no_spm,data5_tanggal_spm,data5_no_sp2d,data5_tanggal_sp2d,data5_jumlah,">Penyerapan BLM</a></li> 
		            	<li><a data-toggle="tab" data-action="{{ nusp_asset('api/fisik-keuangan') }}" href="#fisik-keuangan" data-name="fisik_keuangan" data-deep="3" data-attrs="kode_wilayah,jenis_infrastruktur,dimensi,rab_blm_operasional,rab_blm_pekerjaan_sipil,rab_swadaya_operasional,rab_swadaya_pekerjaan_sipil,detail">Fisik &amp; Keuangan</a></li>
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
						</ul>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-2 hide"><li><div class="col-md-4 report-item text-left no-left-border no-top-border kabkota"></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal</div><div class="col-xs-7 col-md-12 tanggal"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Peserta</div><div class="col-xs-7 col-md-12 peserta"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Peserta Perempuan</div><div class="col-xs-7 col-md-12 peserta_perempuan"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Foto</div><div class="col-xs-7 col-md-12 foto_id"></div></div></div> </li> </div>
	  			</div>
	  			<div id="penetapan-lokasi" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal SK</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-leaf fa-2x"></i><br>Nomor SK</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-globe fa-2x"></i><br>Jumlah Lokasi</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-file fa-2x"></i><br>File SK</li>
						</ul>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-2 hide"><li><div class="col-md-4 report-item text-left no-left-border  no-top-border kabkota"></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tanggal SK</div><div class="col-xs-7 col-md-12 tanggal_sk"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Nomor SK</div><div class="col-xs-7 col-md-12 nomor_sk"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Jumlah Lokasi</div><div class="col-xs-7 col-md-12 jumlah_lokasi"></div></div></div><div class="col-md-2 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">File SK</div><div class="col-xs-7 col-md-12 file_id"></div></div></div> </li> </div>
	  			</div>
	  			<div id="profil-desa-kelurahan" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-8 row">
			  					<ul class="list-unstyled">
					  				<li data-target="#profil-w-p" data-toggle="tab" class="col-md-2 header-item small"><i class="fa fa-pie-chart fa-2x"></i><br>Wilayah &amp; Penduduk</li>
					  				<li data-target="#profil-kk" data-toggle="tab" class="col-md-2 header-item small"><i class="fa fa-users fa-2x"></i><br>KK</li>
					  				<li data-target="#profil-s" data-toggle="tab" class="col-md-2 header-item small"><i class="fa fa-leaf fa-2x"></i><br>Sanitasi</li>
					  				<li data-target="#profil-a" data-toggle="tab" class="col-md-2 header-item small"><i class="fa fa-tint fa-2x"></i><br>Air</li>
					  				<li data-target="#profil-e" data-toggle="tab" class="col-md-2 header-item small"><i class="fa fa-graduation-cap fa-2x"></i><br>Pendidikan</li>
					  				<li data-target="#profil-dll" data-toggle="tab" class="col-md-2 header-item small"><i class="fa fa-asterisk fa-2x"></i><br>BKM, DLL</li>
			  					</ul>
			  				</li>
						</ul>
						<div class="tab-content col-md-12">
							<div class="tab-pane fade" id="profil-w-p">
								<div class="col-md-2 col-md-offset-4"><p>Luas Wilayah</p></div>
								<div class="col-md-2"><p>&sum; Penduduk</p></div>
								<div class="col-md-2"><p>&sum; Penduduk Laki-laki</p></div>
								<div class="col-md-2"><p>&sum; Penduduk Perempuan</p></div>
							</div>
							<div class="tab-pane fade" id="profil-kk">
								<div class="col-md-2 col-md-offset-4">&sum; KK</div>
								<div class="col-md-2">&sum; KK Miskin</div>
								<div class="col-md-2">&sum; RW / Dusun / Lingkungan</div>
								<div class="col-md-2">&sum; RT</div>
							</div>
							<div class="tab-pane fade" id="profil-s">
								<div class="col-md-2 col-md-offset-4">&sum; Jamban (KK)</div>
								<div class="col-md-2">&sum; Septic Tank (KK)</div>
								<div class="col-md-2">&sum; MCK (unit)</div>
								<div class="col-md-2">&sum; MCK (Bilik)</div>
							</div>
							<div class="tab-pane fade" id="profil-a">
								<div class="col-md-2 col-md-offset-4">&sum; Sumur Gali (Unit)</div>
								<div class="col-md-2">&sum; Sumur Pompa (Unit)</div>
								<div class="col-md-2">&sum; Kran Umum (Unit)</div>
								<div class="col-md-2">&sum; Penampungan Air Hujan (PAH) (Unit)</div>
							</div>
							<div class="tab-pane fade" id="profil-e">
								<div class="col-md-2 col-md-offset-4">&sum; SD (jiwa)</div>
								<div class="col-md-2">&sum; SMP (jiwa)</div>
								<div class="col-md-2">&sum; SMA (jiwa)</div>
								<div class="col-md-2">&sum; &gt; SMA (jiwa)</div>
							</div>
							<div class="tab-pane fade" id="profil-dll">
								<div class="col-md-2 col-md-offset-4">Nama BKM</div>
								<div class="col-md-2">Status Keberdayaan BKM</div>
								<div class="col-md-2">Luas Kawasan (Ha)</div>
								<div class="col-md-2">Tipografi / Karakteristik</div>
							</div>
						</div>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-2 hide"><li class="report-item-kabkota"><h2 class="kabkota"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-3 hide"><li>
		  				<div class="col-md-4 report-item text-left no-left-border no-top-border">
		  					<div class="desakel"></div>
		  					<div class="koordinat">
		  						Koordinat : 	
		  							<a href="#">
				  						Lat : <span class="koordinat_latitude"></span> | 
				  						Long : <span class="koordinat_longitude"></span>
		  							</a>
		  					</div>
		  				</div>
	  					<div class="col-md-8 detail-content">
	  						<div class="row profil-w-p">
			  					<div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Luas Wilayah (m<sup>2</sup>)</div><div class="col-xs-7 col-md-12 luas_wilayah"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Penduduk</div><div class="col-xs-7 col-md-12 jumlah_penduduk"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Penduduk Laki-laki</div><div class="col-xs-7 col-md-12 jumlah_penduduk_laki_laki"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Penduduk Perempuan</div><div class="col-xs-7 col-md-12 jumlah_penduduk_perempuan"></div></div></div> 
	  						</div>
	  						<div class="row visible-xs visible-sm profil-kk">
			  					<div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; KK</div><div class="col-xs-7 col-md-12 jumlah_kk"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; KK Miskin</div><div class="col-xs-7 col-md-12 jumlah_kk_miskin"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; RW / Dusun / Lingkungan</div><div class="col-xs-7 col-md-12 jumlah_rw_dusun_lingkungan"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; RT</div><div class="col-xs-7 col-md-12 jumlah_rt"></div></div></div> 
	  						</div>
	  						<div class="row visible-xs visible-sm profil-s">
			  					<div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Jamban (KK)</div><div class="col-xs-7 col-md-12 jumlah_jamban_kk"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Septik Tank (KK)</div><div class="col-xs-7 col-md-12 jumlah_septik_tank"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; MCK (Unit)</div><div class="col-xs-7 col-md-12 jumlah_mck_unit"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; MCK (Bilik)</div><div class="col-xs-7 col-md-12 jumlah_mck_bilik"></div></div></div> 
	  						</div>
	  						<div class="row visible-xs visible-sm profil-a">
			  					<div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Sumur Gali (Unit)</div><div class="col-xs-7 col-md-12 jumlah_sumur_gali_unit"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Sumur Pompa (Unit)</div><div class="col-xs-7 col-md-12 jumlah_sumur_pompa_unit"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Kran Umum (Unit)</div><div class="col-xs-7 col-md-12 jumlah_kran_umum_unit"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; Penampungan Air hujan (PAH) (Unit)</div><div class="col-xs-7 col-md-12 jumlah_pah_unit"></div></div></div> 
	  						</div>
	  						<div class="row visible-xs visible-sm profil-e">
			  					<div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; SD (jiwa)</div><div class="col-xs-7 col-md-12 pendidikan_sd"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; SMP (jiwa)</div><div class="col-xs-7 col-md-12 pendidikan_smp"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; SMA (jiwa)</div><div class="col-xs-7 col-md-12 pendidikan_sma"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">&sum; &gt; SMA</div><div class="col-xs-7 col-md-12 pendidikan_perguruan_tinggi"></div></div></div> 
	  						</div>
	  						<div class="row visible-xs visible-sm profil-dll">
			  					<div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Nama BKM</div><div class="col-xs-7 col-md-12 nama_bkm"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Status Keberdayaan BKM</div><div class="col-xs-7 col-md-12 status_keberdayaan_bkm"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Luas Kawasan (Ha)</div><div class="col-xs-7 col-md-12 luas_kawasan"></div></div></div><div class="col-md-3 report-item"><div class="row"><div class="col-xs-5 visible-xs visible-sm">Tipografi / Karakteristik</div><div class="col-xs-7 col-md-12 tipografi_karakteristik"></div></div></div> 
	  						</div>
		  				</div>
	  					<div class="row visible-xs visible-sm">&nbsp;</div>
		  			</li></div>

	  			</div>
	  			<div id="tahapan-kegiatan" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li data-target="#tahap-rekap" data-toggle="tab" class="col-md-4 header-item no-left-border"><i class="fa fa-eye fa-2x"></i><br>Summary</li>
			  				<li data-target="#tahap-persiapan" data-toggle="tab" class="col-md-2 header-item"><i class="fa fa-pie-chart fa-2x"></i><br>Persiapan</li>
			  				<li data-target="#tahap-perencanaan" data-toggle="tab" class="col-md-2 header-item"><i class="fa fa-users fa-2x"></i><br>Perencanaan</li>
			  				<li data-target="#tahap-konstruksi" data-toggle="tab" class="col-md-2 header-item"><i class="fa fa-leaf fa-2x"></i><br>Konstruksi</li>
			  				<li data-target="#tahap-pasca_konstruksi" data-toggle="tab" class="col-md-2 header-item"><i class="fa fa-tint fa-2x"></i><br>Pasca Konstruksi</li>
						</ul>
						<div class="tab-pane row hide">
							<div class="col-md-4 text-center"><p><i class="ion ion-ios-location"></i> Wilayah</p></div>
							<div class="col-md-8 text-center"><p class="title">Tahapan Kegiatan yang Sudah Dikerjakan</p></div>
						</div>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-2 hide"><li class="report-item-kabkota"><h2 class="kabkota"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-3 hide"><li>
		  				<div class="col-md-4 text-left report-item no-left-border">
		  					<div class="desakel"></div>
		  				</div>
	  					<div class="col-md-8 detail-content">
	  						<div class="row report-item tahap-rekap active">
	  						</div>
	  						<div class="row report-item tahap-persiapan hide">
	  						</div>
	  						<div class="row report-item tahap-perencanaan hide">
	  						</div>
	  						<div class="row report-item tahap-konstruksi hide">
	  						</div>
	  						<div class="row report-item tahap-pasca_konstruksi hide">
	  						</div>
		  				</div>
	  					<div class="row visible-xs visible-sm">&nbsp;</div>
		  			</li></div>
	  			</div>
	  			<div id="data-kontrak" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-file-o fa-2x"></i><br>Kontrak</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-calendar fa-2x"></i><br>Tanggal</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-refresh fa-2x"></i><br>Pelaksanaan</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-money fa-2x"></i><br>Dana</li>
						</ul>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
					<div class="list-format-2 hide"><li class="report-item-kabkota"><h2 class="kabkota"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-3 hide"><li>
		  				<div class="col-md-4 report-item text-left no-left-border no-top-border">
		  					<div class="desakel"></div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content data-kontrak">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Kontrak</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12">
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small>No. Kontrak</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 no_kontrak"></div>
		  							</div>
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small>Tanggal Kontrak</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 tanggal_kontrak"></div>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content data-tanggal">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Tanggal</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12">
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small>Tanggal Mulai</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 pelaksanaan_tanggal_mulai"></div>
		  							</div>
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small>Tanggal Selesai</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 pelaksanaan_tanggal_selesai"></div>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content data-pelaksanaan">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Pelaksanaan</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12">
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small>Jenis Infrastruktur</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 pelaksanaan_jenis_infrastruktur"></div>
		  							</div>
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small>Volume (Unit)</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 pelaksanaan_volume_unit"></div>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content data-dana">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Dana</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12">
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small>BLM</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 dana_nilai_blm"></div>
		  							</div>
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small>Swadaya</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 dana_nilai_swadaya"></div>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
	  					<div class="row visible-xs visible-sm">&nbsp;</div>
		  			</li></div>

	  			</div>
	  			<div id="penyerapan-blm" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-globe fa-2x"></i><br>Tahap 1</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-users fa-2x"></i><br>Tahap 2</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-female fa-2x"></i><br>Tahap 3</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-user fa-2x"></i><br>Total</li>
						</ul>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
					<div class="list-format-2 hide"><li class="report-item-kabkota"><h2 class="kabkota"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-3 hide"><li>
		  				<div class="col-md-4 report-item text-left no-left-border no-top-border">
		  					<div class="desakel"></div>
		  					<div class="koordinat">
		  						<small>	Nama BKM :</small> <span class="data1_nama_bkm"></span>
		  					</div>
		  					<div class="koordinat">
		  						<small>	Nilai Kontrak :</small> <span class="data2_nilai_kontrak"></span>		  						
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Tahap 1</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12 area-tahap_1"></div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Tahap 2</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12 area-tahap_2"></div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Tahap 3</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12 area-tahap_3"></div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Total</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12 area-total"></div>
		  					</div>
		  				</div>
	  					<div class="row visible-xs visible-sm">&nbsp;</div>
		  			</li></div>

	  			</div>
	  			<div id="data-lahan-pemanfaat" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-globe fa-2x"></i><br>Lahan</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-users fa-2x"></i><br>KK Miskin</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-female fa-2x"></i><br>Perempuan</li>
			  				<li class="col-md-2 header-item"><i class="fa fa-user fa-2x"></i><br>Warga Miskin</li>
						</ul>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
					<div class="list-format-2 hide"><li class="report-item-kabkota"><h2 class="kabkota"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-3 hide"><li>
		  				<div class="col-md-4 report-item text-left no-left-border no-top-border">
		  					<div class="desakel"></div>
		  					<div class="koordinat">
		  						<small>	RT / RW :</small> <span class="nama_rt_rw"></span>
		  					</div>
		  					<div class="koordinat">
		  						<small>	Jenis Infrastruktur :</small> <span class="jenis_infrastruktur"></span>		  						
		  					</div>
		  					<div class="koordinat">
		  						Koordinat : 	
		  							<a href="#">
				  						Lat : <span class="koordinat_latitude"></span> | 
				  						Long : <span class="koordinat_longitude"></span>
		  							</a>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content area-lahan">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Lahan</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12">
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small class="bold">Luas (Ha) :</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 lahan_luas"></div>
		  							</div>
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small class="bold">Status :</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 lahan_status"></div>
		  							</div>
		  							<div class="row">
			  							<div class="col-xs-12 col-sm-4 col-md-12"><small class="bold">Akses Jalan :</small></div>
			  							<div class="col-xs-12 col-sm-8 col-md-12 lahan_akses_jalan"></div>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">KK Miskin</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12 area-kk_miskin"></div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Perempuan</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12 area-perempuan"></div>
		  					</div>
		  				</div>
		  				<div class="col-md-2 report-item detail-content">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Warga Miskin</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12 area-warga_miskin"></div>
		  					</div>
		  				</div>
	  					<div class="row visible-xs visible-sm">&nbsp;</div>
		  			</li></div>

	  			</div>	  

	  			<div id="fisik-keuangan" class="tab-pane fade">	  				
		  			<div class="report-header bg-gray-light text-navy hidden-xs hidden-sm" data-spy="affix" data-offset-top="120" data-offset-bottom="100">
						<ul class="row list-unstyled">
			  				<li class="col-md-4 header-item no-left-border"><i class="fa fa-2x ion ion-ios-location"></i> <br>Wilayah</li>
			  				<li class="col-md-8 header-item"><i class="fa fa-globe fa-2x"></i><br>Progress</li>
						</ul>
		  			</div>
		  			<ul class="report-content list-unstyled">
		  			</ul>
		  			<div class="list-format-1 hide"><li class="report-item-propinsi"><h2 class="propinsi"></h2><ul class="list-unstyled report-row row"></ul></li></div>
					<div class="list-format-2 hide"><li class="report-item-kabkota"><h2 class="kabkota"></h2><ul class="list-unstyled report-row row"></ul></li></div>
		  			<div class="list-format-3 hide"><li>
		  				<div class="col-md-4 report-item text-left no-left-border no-top-border">
		  					<div class="desakel"></div>
		  				</div>
		  				<div class="col-md-8 report-item detail-content">
		  					<div class="row">
		  						<div class="col-xs-5 col-sm-4 visible-xs visible-sm">Progress Fisik &amp; Keuangan</div>
		  						<div class="col-xs-7 col-sm-8 col-md-12">
		  							<div class="row">
		  								<div class="col-md-7 area-keterangan text-left">
		  									<ul class="list-unstyled">
		  										<li><strong>Jenis Insfrastruktur</strong> : <span class="jenis_infrastruktur"></span></li>
		  										<li><strong>Dimensi</strong> : <span class="dimensi"></span></li>
		  										<li><strong>BLM (RAB)</strong> : <span class="rab_blm"></span></li>
		  										<li><strong>Swadaya (RAB)</strong> : <span class="rab_swadaya"></span></li>
		  									</ul>
		  								</div>
		  								<div class="col-md-5 area-knob"></div>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
	  					<div class="row visible-xs visible-sm">&nbsp;</div>
		  			</li></div>

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

		window.sosialisasiAction = function(elm, item) {
			var foto_id = item.foto_id;
			// if (foto_id != '-') $(elm).find('.foto_id').html('<img src="{{ nusp_asset('api/foto/') }}'+foto_id+'" style="max-height:100%; max-width: 90%;">');
			if (foto_id != '-' && foto_id != '0') $(elm).find('.foto_id').html('<a target="_blank" href="{{ nusp_asset('api/foto/') }}'+foto_id+'" >Lihat Foto</a>');
			else $(elm).find('.foto_id').html('-');
		}

		window.penetapanAction = function(elm, item) {
			var file_id = item.file_id;
			if (file_id != '-' && file_id != '0') $(elm).find('.file_id').html('<a href="{{ nusp_asset('api/file/') }}'+file_id+'">Download</a>');
			else $(elm).find('.file_id').html('-');
		}

		$('#profil-desa-kelurahan .header-item').on('show.bs.tab', function(e) {
			var cur = $(e.target);
			var classCur = cur.data('target').substr(1);

			$('.report-content .detail-content > .active').addClass('visible-sm visible-xs').removeClass('active');
			$('.report-content .'+classCur).addClass('active').removeClass('visible-sm visible-xs');
		})

		window.profilAction = function(elm, item) {
			$('#profil-desa-kelurahan .header-item').eq(1).tab('show');

			if (item.nama_bkm == '-' && item.luas_wilayah == '-' && item.koordinat_latitude == '-' && item.koordinat_longitude == '-') {
				$(elm).find('.koordinat').html('');
			}
		}

		$('#tahapan-kegiatan .header-item').on('show.bs.tab', function(e) {
			var cur = $(e.target);
			var classCur = cur.data('target').substr(1);

			$('.report-content .detail-content > .active').addClass('hide').removeClass('active');
			$('.report-content .'+classCur).addClass('active').removeClass('hide');
		})

		window.tahapanAction = function(elm, item) {
			var titles = ['Persiapan', 'Perencanaan', 'Konstruksi', 'Pasca Konstruksi'];
			var tahapans = ['persiapan', 'perencanaan', 'konstruksi', 'pasca_konstruksi'];
			for (t in tahapans) {
				var tt = tahapans[t];
				if (item[tt] == '-') item[tt] = null;

				var i = '<div class="col-sm-6 col-md-3 visible-xs visible-sm"><a href="#" class="knob-tab" data-target="#tahap-rekap" data-toggle="tab"><div class="panel panel-info text-center"><small>Tampilkan Semua Tahapan</small></div></a> </div> ';
				var ii = $(i);
				$(elm).find('.detail-content > .tahap-'+tt).append(ii);

				for (x in item[tt]) {
					var p = item[tt][x];
					var c = '<ul>';
					for (s in p) {
						if (s != 'id' && s != 'kode_wilayah' && s != 'created_at' && s != 'updated_at' && s != 'file_id' && s != 'foto_id' && s != 'title') c += '<li><strong>'+s+'</strong> : '+p[s]+'</li>';
					}
					c += '</ul>';
					var i = '<div class="col-sm-6 col-md-3"> <a href="#" tabindex="0" role="button" data-trigger="focus" data-placement="top" data-toggle="popover" data-html="true" data-title="'+p.title+'" data-content="'+c+'"><div class="panel panel-info"><small>'+p.title+'</small></div></a> </div> ';
					var ii = $(i);
					if (p.length) ii.data(p);
					$(elm).find('.detail-content > .tahap-'+tt).append(ii);
					ii.find('a').on('shown.bs.popover', function(e) {
						$(this).parent().find('.popover').css('top', '0');
					})
				}

				var ps = (item.persentase == undefined || item.persentase.length == 0 || item.persentase[tt] == undefined) ? '0%' : item.persentase[tt]+'%';
				var f = '<div class="col-sm-6 col-md-3 knob-tab" data-target="#tahap-'+tt+'" data-toggle="tab"><div class="row"><div class="col-xs-5 col-md-12 text-center"><input type="text" class="knob" value="'+ps+'" data-width="60" data-height="60" readonly="readonly" data-fgColor="#f56954" data-bg-color="#333333"></div><div class="col-xs-7 col-md-12"><h3 class="knob-label">'+titles[t]+'</h3></div></div></div>';
				var ff = $(f);
				$(elm).find('.detail-content > .tahap-rekap').append(ff);

				$(elm).find('.knob').knob().trigger('change').each(function(){
					$(this).val($(this).val()+'%');
				});


			}
			$('[data-toggle=popover]').popover();

			$('#tahapan-kegiatan .header-item').eq(0).tab('show');

			$(elm).find('.knob-tab').each(function(i, e) {
				var k = $(this);
				var t = k.data('target');
				k.click(function(e) {
					$('#tahapan-kegiatan').find('li[data-target='+t+']').tab('show');
				})

			})

		}

		window.data_kontrakAction = function(elm, item) {
			if (item.no_kontrak == '-' && item.tanggal_kontrak == '-') {
				$(elm).find('.detail-content.data-kontrak').html('-');
			}

			if (item.pelaksanaan_tanggal_mulai == '-' && item.pelaksanaan_tanggal_selesai == '-') {
				$(elm).find('.detail-content.data-tanggal').html('-');
			}

			if (item.pelaksanaan_jenis_infrastruktur == '-' && item.pelaksanaan_volume_unit == '-') {
				$(elm).find('.detail-content.data-pelaksanaan').html('-');
			}

			if (item.dana_nilai_blm == '-' && item.dana_nilai_swadaya == '-') {
				$(elm).find('.detail-content.data-dana').html('-');
			}
		}

		window.data_lahanAction = function(elm, item) {
			// keterangan
			if (item.nama_rt_rw == '-' && item.jenis_infrastruktur == '-' && item.koordinat_latitude == '-' && item.koordinat_longitude == '-') {
				$(elm).find('.koordinat').html('');
			}

			// lahan
			if (item.lahan_luas == '-' && item.lahan_status == '-' && item.lahan_akses_jalan == '-') {
				$(elm).find('.detail-content.area-lahan').html('-');
			}

			// kk miskin
			if (item.pemanfaat_jumlah_kk_miskin !=  '-') {
				var knob = '<input type="text" class="knob" data-min="0" data-max="'+item.pemanfaat_jumlah_kk+'" value="'+item.pemanfaat_jumlah_kk_miskin+'" data-width="60" data-height="60" readonly="readonly" data-fgColor="#f56954" data-bg-color="#333333"> <div><small>Jumlah KK Miskin : <br>'+item.pemanfaat_jumlah_kk_miskin+' dari '+item.pemanfaat_jumlah_kk+' KK</small></div>';
				$(elm).find('.area-kk_miskin').append(knob);

				$(elm).find('.area-kk_miskin .knob').knob().trigger('change');
			} else {
				$(elm).find('.detail-content.area-kk_miskin').html('-');
			}

			// warga perempuan
			if (item.pemanfaat_jumlah_perempuan !=  '-') {
				var knob = '<input type="text" class="knob" data-min="0" data-max="'+item.pemanfaat_jumlah_jiwa+'" value="'+item.pemanfaat_jumlah_perempuan+'" data-width="60" data-height="60" readonly="readonly" data-fgColor="#f56954" data-bg-color="#333333"> <div><small>Jumlah Perempuan : <br>'+item.pemanfaat_jumlah_perempuan+' dari '+item.pemanfaat_jumlah_jiwa+' Warga</small></div>';
				$(elm).find('.area-perempuan').append(knob);

				$(elm).find('.area-perempuan .knob').knob().trigger('change');
			} else {
				$(elm).find('.detail-content.area-perempuan').html('-');
			}

			// warga miskin
			if (item.pemanfaat_jumlah_perempuan !=  '-') {
				var knob = '<input type="text" class="knob" data-min="0" data-max="'+item.pemanfaat_jumlah_jiwa+'" value="'+item.pemanfaat_jumlah_miskin+'" data-width="60" data-height="60" readonly="readonly" data-fgColor="#f56954" data-bg-color="#333333"> <div><small>Jumlah Warga Miskin : <br>'+item.pemanfaat_jumlah_miskin+' dari '+item.pemanfaat_jumlah_jiwa+' Warga</small></div>';
				$(elm).find('.area-warga_miskin').append(knob);

				$(elm).find('.area-warga_miskin .knob').knob().trigger('change');
			} else {
				$(elm).find('.detail-content.area-warga_miskin').html('-');
			}
		}

		window.penyerapan_blmAction = function(elm, item) {
			if (item.data1_nama_bkm == '-' && item.data2_nilai_kontrak == '-') {
				$(elm).find('.koordinat').html('');
			}

			// tahap 1
			if (item.data3_jumlah != '-') {
				var knob = '<input type="text" class="knob" data-min="0" data-max="'+item.data2_nilai_kontrak+'" value="'+item.data3_jumlah+'" data-width="60" data-height="60" readonly="readonly" data-fgColor="#f56954" data-bg-color="#333333"> <div><small>Dana Terserap : <br>'+item.data3_jumlah+'</small></div>';
				$(elm).find('.area-tahap_1').append(knob);

				$(elm).find('.area-tahap_1 .knob').knob().trigger('change');
			} else {
				$(elm).find('.detail-content.area-tahap_1').html('-');
			}

			// tahap 2
			if (item.data4_jumlah != '-') {
				var knob = '<input type="text" class="knob" data-min="0" data-max="'+item.data2_nilai_kontrak+'" value="'+item.data4_jumlah+'" data-width="60" data-height="60" readonly="readonly" data-fgColor="#f56954" data-bg-color="#333333"> <div><small>Dana Terserap : <br>'+item.data4_jumlah+'</small></div>';
				$(elm).find('.area-tahap_2').append(knob);

				$(elm).find('.area-tahap_2 .knob').knob().trigger('change');
			} else {
				$(elm).find('.detail-content.area-tahap_2').html('-');
			}

			// tahap 3
			if (item.data5_jumlah != '-') {
				var knob = '<input type="text" class="knob" data-min="0" data-max="'+item.data2_nilai_kontrak+'" value="'+item.data5_jumlah+'" data-width="60" data-height="60" readonly="readonly" data-fgColor="#f56954" data-bg-color="#333333"> <div><small>Dana Terserap : <br>'+item.data5_jumlah+'</small></div>';
				$(elm).find('.area-tahap_3').append(knob);

				$(elm).find('.area-tahap_3 .knob').knob().trigger('change');
			} else {
				$(elm).find('.detail-content.area-tahap_3').html('-');
			}
		}

		window.fisik_keuanganAction = function(elm, item) {
			if (item.rab_blm_operasional == '-' && item.rab_swadaya_operasional == '-' && item.rab_blm_pekerjaan_sipil == '-' && item.rab_swadaya_pekerjaan_sipil == '-') {
				$(elm).find('.area-keterangan').addClass('hide');
			} else {
				$(elm).find('.area-keterangan').removeClass('hide');
				$(elm).find('.rab_blm').text(item.rab_blm_operasional + item.rab_blm_pekerjaan_sipil);
				$(elm).find('.rab_swadaya').text(item.rab_swadaya_operasional + item.rab_swadaya_pekerjaan_sipil);
			}

			if (item.detail[0] != undefined && item.detail[0].progress_fisik_persentase != undefined) {
				$(elm).find('.area-knob').removeClass('hide');
				var knob = '<input type="text" class="knob" data-min="0" data-max="100" value="'+item.detail[0].progress_fisik_persentase+'" data-width="60" data-height="60" readonly="readonly" data-fgColor="#f56954" data-bg-color="#333333"> <div><small>Progress : <br>'+item.detail[0].progress_fisik_persentase+'%</small></div>';
				$(elm).find('.area-knob').append(knob);

				$(elm).find('.area-knob .knob').knob().trigger('change');
				$(elm).find('.area-knob .knob').val($(elm).find('.area-knob .knob').val() + '%');
			} else {
				$(elm).find('.area-knob').addClass('hide');
			}

		}

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
			    var dx1 = {propinsi: 'Propinsi '+propinsi.propinsi, slug: propinsi.slug, role_id: propinsi.role_id, id: propinsi.id}
			    if (deep == '1') {
			    	for (a in attrs) {
				    	var attr = attrs[a];
			    		dx1[attr] =  (propinsi[name] != null && propinsi[name][attr] != null) ? propinsi[name][attr] : '-';
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

			  	if (deep == '1') { 
			  		window[name+'Action'] && window[name+'Action']();
			  		return;
			  	}

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
				    		dx2[attr] =  (kabKota[name] != null && kabKota[name][attr] != null) ? kabKota[name][attr] : '-';
				    	}	
					}
			      	kabKotas.push(dx2);
			    }


			    propinsi.func.add(kabKotas, function(lists) {
			      for (x in lists) {
			        slugKabKota = lists[x]._values.slug;
			        role_id = lists[x]._values.role_id;
			        idKabKota = lists[x]._values.id;
			        $(lists[x].elm).attr('id', slugKabKota);
			  		
			  		if (deep == '2') window[name+'Action'] && window[name+'Action'](lists[x].elm, lists[x]._values);
			      }
			    })

			  	if (deep == '2') continue;

			    for (y in propinsi.kabKotas) {
			      kabKota = propinsi.kabKotas[y];
			      kabKota.func = new List(kabKota.slug, {item: $('#'+target).find('.list-format-3').html(), listClass: 'list-unstyled'});
				  window.allList.push(kabKota.func);

			      desaKels = [];
			      for (z in kabKota.desaKels) {
			        desaKel = kabKota.desaKels[z];
			        var dx3 = {desakel: desaKel.desaKel, slug: desaKel.slug, role_id: desaKel.role_id, id: desaKel.id}
			        if (deep == '3') {
				    	for (a in attrs) {
				    		var attr = attrs[a];
				    		dx3[attr] =  (desaKel[name] != null && desaKel[name][attr] != null) ? desaKel[name][attr] : '-';
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
			  		  if (deep == '3') window[name+'Action'] && window[name+'Action'](lists[x].elm, lists[x]._values);
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
