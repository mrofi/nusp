@extends('master')

@section('contentHeader', ' ')

@section('contentMain')

<div id="regional-wrapper" class="">  
  <ul class="list-unstyled content-propinsi text-white"></ul>
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
  <li><a href="#">Tahapan Kegiatan</a></li>
  <li><a href="#">Kontrak, Lahan &amp; Pemanfaat</a></li>
  <li><a href="#">Fisik &amp; Keuangan</a></li>
</ul>
</div>

@include('modal.profilDesaKel')
@include('modal.profilDesaKel', ['allowed' => true])

@include('modal.sosialisasi')
@include('modal.sosialisasi', ['allowed' => true])

@include('modal.penetapanLokasi')
@include('modal.penetapanLokasi', ['allowed' => true])

<!-- Main content -->

@endsection

@push('scriptJs')

<script>

var boxs = ['bg-maroon', 'bg-purple', 'bg-orange', 'bg-olive', 'bg-yellow', 'bg-red', 'bg-green', 'bg-aqua'];

var getBoxColor = function() {
  return boxs[Math.floor(Math.random() * 100) % boxs.length];
};

var options1 = {
  item: '<li><div class="content-header"><h2 class="propinsi"></h2></div><div class="content-body"><ul class="list-unstyled row content-kab-kota"></ul></div></li>',
  listClass: 'list-unstyled'
};

var options2 = {
  item: '<li class="col-lg-3 col-sm-6"> <div class="small-box"> <div class="inner"> <h2><a href="#" class="dropdown-toggle nusp-data-link kab-kota-link" data-toggle="dropdown" data-target="#dropdown-kab-kota"><span class="kabKota"></span> <span class="caret"></span></a></h2> <hr> <p></p> </div> <div class="inner inner-kab-kota"> <ul class="list-unstyled content-desa-kel"> </ul> </div> </div> </li>',
  listClass: 'list-unstyled'
};

var options3 = {
  item: '<li><a href="#" class="dropdown-toggle nusp-data-link desa-kel-link" data-toggle="dropdown" data-target="#dropdown-desa-kel"><span class="desaKel"></span><span class="caret"></span></a></li>',
  listClass: 'list-unstyled'
}

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
      for (x in lists) {
        slugKabKota = lists[x]._values.slug;
        role_id = lists[x]._values.role_id;
        idKabKota = lists[x]._values.id;
        $(lists[x].elm).find('.inner-kab-kota').attr('id', slugKabKota)
        .end().find('.kab-kota-link').attr('data-id', idKabKota).attr('data-role_id', role_id).attr('data-kab-kota-id', idKabKota).attr('data-propinsi-id', propinsi.id)
        .end().find('.small-box').addClass(getBoxColor());
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

}, 'json')

$(function() {

$('#dropdown-kab-kota').on('show.bs.dropdown', function(e) {
  var button = $(e.relatedTarget);
  $(this).data(button.data());
  var role_id = $(this).data('role_id');
  var link = $(this).find('[data-toggle]'); 
  link.each(function(i, e) {
    console.log($(this).data());
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