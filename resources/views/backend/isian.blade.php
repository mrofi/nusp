@extends('master')

@section('contentHeader', ' ')

@section('contentMain')

<div id="search-wrapper" class="hide">
  <div class="col-md-8">
      <h1>
        <i class="fa fa-search"></i> Mencari 
        <abbr title="" class="initialism"></abbr>
        <small class="pull-right"><a href="#" class="text-white show-all-wilayah"><i class="fa fa-times"></i> <span class="hidden-xs hidden-sm">Hapus Pencarian</span></a></small>
      </h1>
  </div>
  <div class="col-md-4"></div>
  <div class="row"></div>
  <hr>
</div>

<div id="search-no-result" class="content hide">
  <div class="col-md-12">
    <h1><i class="fa fa-search"></i> Tidak Menemukan Hasil</h1>
    <hr>
    <h3>Untuk mendapatkan hasil yang tepat : </h3>
    <ul class="list">
      <li><h3>Pastikan Anda mempunyai hak untuk mengakses wilayah tersebut</h3></li>
      <li><h3>Ketikkan minimal 1 kata dengan tepat</h3></li>
      <li><h3>Pencarian ini Mendukung semua nama wilayah (propinsi, kabupaten, kota, desa dan kelurahan)</h3></li>
      <li><h3>Jika tidak berhasil, coba pencarian dengan browser Anda (ketik Ctrl + F)</h3></li>
    </ul>
    <a href="#" class="show-all-wilayah btn btn-lg bg-blue">Tampilkan Semua Wilayah</a>
  </div>
</div>



<div id="regional-wrapper" class="">  
  <ul class="list-unstyled row content-propinsi text-white"></ul>
  <div class="content">&nbsp;</div>
</div>

<div id="dropdown-kab-kota">
<ul class="dropdown-menu" role="menu">
  <li class="active"><a href="javascript:;"></a></li>
  <li><a href="#" data-target_1="#modal-sosialisasi"  data-target_2="#modal-report-sosialisasi" data-toggle="modal">Sosialisasi Kab / Kota</a></li>
  <li><a href="#" data-target_1="#modal-penetapan-lokasi" data-target_2="#modal-report-penetapan-lokasi" data-toggle="modal">Penetapan Lokasi</a></li>
</ul>
</div>

<div id="dropdown-desa-kel">
<ul class="dropdown-menu" role="menu">
  <li class="active"><a href="javascript:;"></a></li>
  <li><a href="#" data-target_1="#modal-profil-desa-kel" data-target_2="#modal-report-profil-desa-kel" data-toggle="modal">Profil Kelurahan</a></li>
  <li><a href="#" data-target_1="#modal-tahap-kegiatan" data-target_2="#modal-report-tahap-kegiatan" data-toggle="modal">Tahap Kegiatan</a></li>
  <li><a href="#" data-target_1="#modal-data-kontrak" data-target_2="#modal-report-data-kontrak" data-toggle="modal">Data Kontrak</a></li>
  <li><a href="#" data-target_1="#modal-data-lahan" data-target_2="#modal-report-data-lahan" data-toggle="modal">Data Lahan</a></li>
  <li><a href="#">Fisik &amp; Keuangan</a></li>
</ul>
</div>

@include('modalScript')


@include('modal.sosialisasi')
@include('modal.penetapanLokasi')
@include('modal.profilDesaKel')
@include('modal.tahapKegiatan')
@include('modal.tahapKegiatanPersiapan')
@include('modal.tahapKegiatanPerencanaan')
@include('modal.tahapKegiatanKonstruksi')
@include('modal.tahapKegiatanPascaKonstruksi')
@include('modal.tahapPersiapanSosialisasiKelurahan')
@include('modal.tahapPersiapanIdentifikasiKelembagaan')
@include('modal.tahapPersiapanRembugKhususPerempuanPertama')
@include('modal.tahapPersiapanMusyawarahKelurahanPertama')
@include('modal.tahapPerencanaanPelatihanBkm')
@include('modal.tahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis')
@include('modal.tahapPerencanaanRembugKhususPerempuanKedua')
@include('modal.tahapPerencanaanMusyawarahKelurahanKedua')
@include('modal.tahapPerencanaanPenyusunanDokumenNuap')
@include('modal.tahapPerencanaanVerifikasiDanKonsolidasiNuap')
@include('modal.tahapPerencanaanRevisiDokumenNuap')
@include('modal.tahapPerencanaanMusyawarahKelurahanKetiga')
@include('modal.tahapPerencanaanPenyusunanRkm')
@include('modal.tahapPerencanaanVerifikasiFinalisasiDokumenRkm')
@include('modal.tahapPerencanaanPembentukanTppi')
@include('modal.tahapPerencanaanPembentukanKPP')
@include('modal.tahapKonstruksiKontrakSp3')
@include('modal.tahapKonstruksiRembugKhususPerempuanKetiga')
@include('modal.tahapKonstruksiMusyawarahKelurahanKeempat')
@include('modal.tahapKonstruksiPelaksanaanFisik')
@include('modal.tahapKonstruksiTahap1')
@include('modal.tahapKonstruksiTahap2')
@include('modal.tahapPascaKonstruksiMusyawarahKelurahanKelima')
@include('modal.tahapPascaKonstruksiSerahTerimaPekerjaan')
@include('modal.tahapPascaKonstruksiPemanfaatan')
@include('modal.tahapPascaKonstruksiPemeliharaan')
@include('modal.tahapPascaKonstruksiTahap3')
@include('modal.dataKontrak')
@include('modal.dataLahan')
@include('modal.hapus')


@include('modal.sosialisasi', ['allowed' => true])
@include('modal.penetapanLokasi', ['allowed' => true])
@include('modal.profilDesaKel', ['allowed' => true])
@include('modal.tahapKegiatan', ['allowed' => true])
@include('modal.tahapKegiatanPersiapan', ['allowed' => true])
@include('modal.tahapKegiatanPerencanaan', ['allowed' => true])
@include('modal.tahapKegiatanKonstruksi', ['allowed' => true])
@include('modal.tahapKegiatanPascaKonstruksi', ['allowed' => true])
@include('modal.tahapPersiapanSosialisasiKelurahan', ['allowed' => true])
@include('modal.tahapPersiapanIdentifikasiKelembagaan', ['allowed' => true])
@include('modal.tahapPersiapanRembugKhususPerempuanPertama', ['allowed' => true])
@include('modal.tahapPersiapanMusyawarahKelurahanPertama', ['allowed' => true])
@include('modal.tahapPerencanaanPelatihanBkm', ['allowed' => true])
@include('modal.tahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis', ['allowed' => true])
@include('modal.tahapPerencanaanRembugKhususPerempuanKedua', ['allowed' => true])
@include('modal.tahapPerencanaanMusyawarahKelurahanKedua', ['allowed' => true])
@include('modal.tahapPerencanaanPenyusunanDokumenNuap', ['allowed' => true])
@include('modal.tahapPerencanaanVerifikasiDanKonsolidasiNuap', ['allowed' => true])
@include('modal.tahapPerencanaanRevisiDokumenNuap', ['allowed' => true])
@include('modal.tahapPerencanaanMusyawarahKelurahanKetiga', ['allowed' => true])
@include('modal.tahapPerencanaanPenyusunanRkm', ['allowed' => true])
@include('modal.tahapPerencanaanVerifikasiFinalisasiDokumenRkm', ['allowed' => true])
@include('modal.tahapPerencanaanPembentukanTppi', ['allowed' => true])
@include('modal.tahapPerencanaanPembentukanKpp', ['allowed' => true])
@include('modal.tahapKonstruksiKontrakSp3', ['allowed' => true])
@include('modal.tahapKonstruksiRembugKhususPerempuanKetiga', ['allowed' => true])
@include('modal.tahapKonstruksiMusyawarahKelurahanKeempat', ['allowed' => true])
@include('modal.tahapKonstruksiPelaksanaanFisik', ['allowed' => true])
@include('modal.tahapKonstruksiTahap1', ['allowed' => true])
@include('modal.tahapKonstruksiTahap2', ['allowed' => true])
@include('modal.tahapPascaKonstruksiMusyawarahKelurahanKelima', ['allowed' => true])
@include('modal.tahapPascaKonstruksiSerahTerimaPekerjaan', ['allowed' => true])
@include('modal.tahapPascaKonstruksiPemanfaatan', ['allowed' => true])
@include('modal.tahapPascaKonstruksiPemeliharaan', ['allowed' => true])
@include('modal.tahapPascaKonstruksiTahap3', ['allowed' => true])
@include('modal.dataKontrak', ['allowed' => true])
@include('modal.dataLahan', ['allowed' => true])


<!-- Main content -->

@endsection

@push('scriptJs')

<script>

var boxs = ['bg-maroon', 'bg-purple', 'bg-orange', 'bg-olive', 'bg-yellow', 'bg-red', 'bg-green', 'bg-aqua'];
// var boxs = ['bg-blue'];

var getBoxColor = function() {
  return boxs[Math.floor(Math.random() * 100) % boxs.length];
};

var options1 = {
  item: '<li><div class="content-header"><h2 class="propinsi"></h2></div><div class="content-body"><ul class="list-unstyled content-kab-kota"></ul></div></li>',
  listClass: 'list-unstyled'
};

var options2 = {
  item: '<li> <div class="small-box"> <div class="inner"> <h2><a href="#" class="dropdown-toggle nusp-data-link kab-kota-link" data-toggle="dropdown" data-target="#dropdown-kab-kota"><span class="kabKota"></span> <span class="caret"></span></a></h2> <hr> </div> <div class="inner inner-kab-kota"> <ul class="list-unstyled content-desa-kel"> </ul> </div> </div> </li>',
  listClass: 'list-unstyled'
};

var options3 = {
  item: '<li><a href="#" class="dropdown-toggle nusp-data-link desa-kel-link" data-toggle="dropdown" data-target="#dropdown-desa-kel"><span class="desaKel"></span><span class="caret"></span></a></li>',
  listClass: 'list-unstyled'
}

$('.show-all-wilayah').click(function(e) {
  e.preventDefault();
  $('#navbar-search-input').val('').keyup().focus();
})

$.get('{{ nusp_asset("api/all") }}', {}, function(regionalList){

  var regional = new List('regional-wrapper', options1);

  var propinsis = [];
  for (x in regionalList) {
    propinsi = regionalList[x];
    propinsis.push({propinsi: propinsi.propinsi, slug: propinsi.slug, role_id: propinsi.role_id, id: propinsi.id});
  }

  regional.add(propinsis, function(lists) {
    for (x in lists) {
      slugPropinsi = lists[x]._values.slug;
      role_id = lists[x]._values.role_id;
      idPropinsi = lists[x]._values.id;
      $(lists[x].elm).find('.content-body').attr('id', slugPropinsi).attr('data-role_id', role_id);
    }
  });


  for (x in regionalList) {
    propinsi = regionalList[x];
    propinsi.func = new List(propinsi.slug, options2);

    kabKotas = [];
    for (y in propinsi.kabKotas) {
      kabKota = propinsi.kabKotas[y];
      kabKotas.push({kabKota: kabKota.kabKota, slug: kabKota.slug, role_id: kabKota.role_id, id: kabKota.id});
    }

    propinsi.func.add(kabKotas, function(lists) {
      var jumlahKabKota = lists.length;
      var colLg = 'col-lg-' + ((jumlahKabKota > 4) ? 3 : 12 / jumlahKabKota); // 1 -> 12, 2 -> 6, 3 -> 4, 4 -> 3, 5 -> 3
      var colSm = 'col-sm-' + ((jumlahKabKota > 2) ? 6 : 12 / jumlahKabKota); // 1 -> 12, 2 -> 6, 3 -> 6, 4 -> 6, 5 -> 6 
      var colLgParent = 'col-lg-' + ((jumlahKabKota > 4) ? 12 : jumlahKabKota * 3); // 1 -> 12, 2 -> 6, 3 -> 4, 4 -> 3, 5 -> 3
      var colSmParent = 'col-sm-' + ((jumlahKabKota > 2) ? 12 : jumlahKabKota * 6); // 1 -> 12, 2 -> 6, 3 -> 6, 4 -> 6, 5 -> 6 
      for (x in lists) {
        slugKabKota = lists[x]._values.slug;
        role_id = lists[x]._values.role_id;
        idKabKota = lists[x]._values.id;
        $(lists[x].elm).addClass(colLg).addClass(colSm).find('.inner-kab-kota').attr('id', slugKabKota)
        .end().find('.kab-kota-link').attr('data-id', idKabKota).attr('data-role_id', role_id).attr('data-kab-kota-id', idKabKota).attr('data-propinsi-id', propinsi.id)
        .end().find('.small-box').addClass(getBoxColor())
        .end().parents('li').addClass(colLgParent).addClass(colSmParent);
      }
    })


    for (y in propinsi.kabKotas) {
      kabKota = propinsi.kabKotas[y];
      kabKota.func = new List(kabKota.slug, options3);

      desaKels = [];
      for (z in kabKota.desaKels) {
        desaKel = kabKota.desaKels[z];
        desaKels.push({desaKel: desaKel.desaKel, slug: desaKel.slug, role_id: desaKel.role_id, id: desaKel.id});
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
    
  window.saveSearchP = {};
  window.saveSearchK = {};
  window.saveSearchD = {};

  var searchList = function(keyword) {
    window.saveSearchP.search  && window.saveSearchP.search('');
    window.saveSearchK.search  && window.saveSearchK.search('');
    window.saveSearchD.search  && window.saveSearchD.search('');

    $('#search-wrapper').addClass('hide');
    $('#search-no-result').addClass('hide');

    if (keyword == '') return;

    $('#search-wrapper abbr').text(keyword);

    hasilP = regional.search(keyword);
    if (hasilP.length) {
      window.saveSearchP = regional;
      return;
    }

    regional.search('');
    for (p in regionalList) {
      rPropinsi = regionalList[p];
      hasilK = rPropinsi.func.search(keyword);

      if (hasilK.length) {
        window.saveSearchP = regional;
        window.saveSearchP.search(rPropinsi.propinsi);

        window.saveSearchK = rPropinsi.func;
        window.saveSearchK.search(keyword);

        return;
      }

      rPropinsi.func.search('');
      for (k in rPropinsi.kabKotas) {
        rKabKota = rPropinsi.kabKotas[k];
        hasilD = rKabKota.func.search(keyword);

        if (hasilD.length) {
          window.saveSearchP = regional;
          window.saveSearchP.search(rPropinsi.propinsi);

          window.saveSearchK = rPropinsi.func;
          window.saveSearchK.search(rKabKota.kabKota);

          window.saveSearchD = rKabKota.func;
          window.saveSearchD.search(keyword);

          return;
        }

        rKabKota.func.search('');
      }
    }

    window.saveSearchP = regional;
    regional.search('no result');

  }

  regional.on('updated', function(list) {
    $('#search-wrapper').addClass('hide');
    $('#search-no-result').addClass('hide');
    if (list.searched == true) {
      if (list.matchingItems.length) $('#search-wrapper').removeClass('hide');
      else $('#search-no-result').removeClass('hide');
    }
    var all = $('.content-propinsi>li');
    var top = [];
    var topObj = [];
    var height = [];
    all.each(function(i, e) {
      var b = $(e);
      top.push(b.offset().top);
      if (topObj[b.offset().top]) topObj[b.offset().top].push(e);
      else topObj[b.offset().top] = [e];
      height.push(b[0].clientHeight);
    })

    for (t in topObj) {
      var oo = topObj[t];
      var oi = {};
      for (o in oo) {
        var ooo = oo[o];
        if (oi.clientHeight == undefined || (oi.clientHeight > 0 && oi.clientHeight < ooo.clientHeight)) {
          oi = ooo;
          continue;
        }
      }
      var h = $(oi).find('.small-box')[0].clientHeight;
      for (o in oo) {
        var ooo = oo[o];
        $(ooo).find('.small-box').height(h);
      }
    }
  })

  regional.search('');

  $('#navbar-search-input').on('keyup', function(e) {
    val = $(this).val();
    if (val.length < 2) return searchList('');
    searchList(val);
  }).focus();

}, 'json')

$(function() {

$('#dropdown-kab-kota').on('show.bs.dropdown', function(e) {
  var button = $(e.relatedTarget);
  $(this).data(button.data());
  var role_id = $(this).data('role_id');
  var link = $(this).find('[data-toggle]'); 
  link.each(function(i, e) {
    $(this).attr('data-target', $(this).data('target_'+role_id));
  })
})

$('#dropdown-desa-kel').on('show.bs.dropdown', function(e) {
  var button = $(e.relatedTarget);
  $(this).data(button.data());
  var role_id = $(this).data('role_id');
  var link = $(this).find('a[data-toggle]'); 
  link.each(function(i, e) {
    $(this).attr('data-target', $(this).data('target_'+role_id));
  })
})

$('#regional-wrapper').on('click', '.nusp-data-link', function(e) {
    e.preventDefault();
    var that = $(this);
    var p = that.offset();
    var $target = $(that.data('target'));
    var $targetMenu = $target.find('.dropdown-menu');
        
    //check if open
    isOpen = $target.hasClass('open');
      
    if( isOpen ) {
        that.dropdown('toggle');
    }

    $targetMenu.find('.active a').html('<h4>'+that.text() + ' :</h4>').css('background-color', that.parents('.small-box').css('background-color'));

    var pLeft = e.pageX + $targetMenu.width() > $(window).width();
    leftX = (pLeft) ? p.left : e.pageX - 10;
    $target.offset({ top: (p.top + 2 + that[0].offsetHeight), left: leftX });
    if (pLeft) $targetMenu.css('min-width', that[0].offsetWidth);

});


})

// var regionalList = [
//   { 
//     propinsi: 'Jawa Tengah', 
//     slug: 'content-jawa-tengah',
//     id: '1',
//     kabKotas: [
//       {
//         kabKota: 'Kota Semarang',
//         slug: 'content-kota-semarang',
//         id: '1',
//         desaKels: [
//           {
//             desaKel: 'Desa Gemuk',
//             slug: 'content-desa-gemuk',
//             id: '1',
//           },
//           {
//             desaKel: 'Desa Podoudan',
//             slug: 'content-desa-podoudan',
//             id: '1',
//           },
//         ]
//       },
//       {
//         kabKota: 'Kota Pekalongan',
//         slug: 'content-kota-pekalongan',
//         id: '1',
//         desaKels:  [
//           {
//             desaKel: 'Desa Kandang Panjang',
//             slug: 'content-desa-kandang-panjang',
//             id: '1',
//           },
//           {
//             desaKel: 'Desa Kraton Pasir Sari',
//             slug: 'content-desa-kraton-pasir-sari',
//             id: '1',
//           },
//         ]
//       }
//     ]
//   },
//   { 
//     propinsi: 'Jawa Barat', 
//     slug: 'content-jawa-barat',
//     id: '1',
//     kabKotas: [
//       {
//         kabKota: 'Kota Bandung',
//         slug: 'content-kota-bandung',
//         id: '1',
//         desaKels: [
//           {
//             desaKel: 'Desa Anyar',
//             slug: 'content-desa-anyar',
//             id: '1',
//           },
//           {
//             desaKel: 'Desa Lama',
//             slug: 'content-desa-lama',
//             id: '1',
//           },
//         ]
//       },
//       {
//         kabKota: 'Kota Sukabumi',
//         slug: 'content-kota-sukabumi',
//         id: '1',
//         desaKels:  [
//           {
//             desaKel: 'Desa SUka sari',
//             slug: 'content-desa-suka-sari',
//             id: '1',
//           },
//           {
//             desaKel: 'Desa Prambanan',
//             slug: 'content-desa-prambanan',
//             id: '1',
//           },
//         ]
//       }
//     ]
//   }
// ];
</script>

@endpush