@extends('master')

@section('contentMain')

<div id="regional-wrapper" class="">  
  <ul class="list-unstyled content-propinsi text-white"></ul>
</div>

<div id="dropdown-kab-kota">
<ul class="dropdown-menu" role="menu">
  <li class="active"><a href="javascript:;"></a></li>
  <li><a href="#">Sosialisasi Kab / Kota</a></li>
  <li><a href="#">Penetapan Lokasi</a></li>
</ul>
</div>

<div id="dropdown-desa-kel">
<ul class="dropdown-menu" role="menu">
  <li class="active"><a href="javascript:;"></a></li>
  <li><a href="#">Profil Kelurahan</a></li>
  <li><a href="#">Tahapan Kegiatan</a></li>
  <li><a href="#">Kontrak, Lahan &amp; Pemanfaat</a></li>
  <li><a href="#">Fisik &amp; Keuangan</a></li>
</ul>
</div>

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
  item: '<li class="col-lg-3 col-sm-6"> <div class="small-box"> <div class="inner"> <h2><a href="#" class="dropdown-toggle nusp-data-link" data-toggle="dropdown" data-target="#dropdown-kab-kota"><span class="kabKota"></span> <span class="caret"></span></a></h2> <hr> <p></p> </div> <div class="inner inner-kab-kota"> <ul class="list-unstyled content-desa-kel"> </ul> </div> </div> </li>',
  listClass: 'list-unstyled'
};

var options3 = {
  item: '<li><a href="#" class="dropdown-toggle nusp-data-link" data-toggle="dropdown" data-target="#dropdown-desa-kel"><span class="desaKel"></span><span class="caret"></span></a></li>',
  listClass: 'list-unstyled'
}


var regionalList = [
  { 
    propinsi: 'Jawa Tengah', 
    slug: 'content-jawa-tengah',
    kabKotas: [
      {
        kabKota: 'Kota Semarang',
        slug: 'content-kota-semarang',
        desaKels: [
          {
            desaKel: 'Desa Gemuk',
            slug: 'content-desa-gemuk'
          },
          {
            desaKel: 'Desa Podoudan',
            slug: 'content-desa-podoudan'
          },
        ]
      },
      {
        kabKota: 'Kota Pekalongan',
        slug: 'content-kota-pekalongan',
        desaKels:  [
          {
            desaKel: 'Desa Kandang Panjang',
            slug: 'content-desa-kandang-panjang'
          },
          {
            desaKel: 'Desa Kraton Pasir Sari',
            slug: 'content-desa-kraton-pasir-sari'
          },
        ]
      }
    ]
  },
  { 
    propinsi: 'Jawa Barat', 
    slug: 'content-jawa-barat',
    kabKotas: [
      {
        kabKota: 'Kota Bandung',
        slug: 'content-kota-bandung',
        desaKels: [
          {
            desaKel: 'Desa Anyar',
            slug: 'content-desa-anyar'
          },
          {
            desaKel: 'Desa Lama',
            slug: 'content-desa-lama'
          },
        ]
      },
      {
        kabKota: 'Kota Sukabumi',
        slug: 'content-kota-sukabumi',
        desaKels:  [
          {
            desaKel: 'Desa SUka sari',
            slug: 'content-desa-suka-sari'
          },
          {
            desaKel: 'Desa Prambanan',
            slug: 'content-desa-prambanan'
          },
        ]
      }
    ]
  }
];

var regional = new List('regional-wrapper', options1);

var propinsis = [];
for (x in regionalList) {
  propinsi = regionalList[x];
  propinsis.push({propinsi: propinsi.propinsi, slug: propinsi.slug});
}

regional.add(propinsis, function(lists) {
  for (x in lists) {
    slugPropinsi = lists[x]._values.slug;
    $(lists[x].elm).find('.content-body').attr('id', slugPropinsi);
  }
});

for (x in regionalList) {
  propinsi = regionalList[x];
  propinsi.func = new List(propinsi.slug, options2);

  kabKotas = [];
  for (y in propinsi.kabKotas) {
    kabKota = propinsi.kabKotas[y];
    kabKotas.push({kabKota: kabKota.kabKota, slug: kabKota.slug});
  }

  propinsi.func.add(kabKotas, function(lists) {
    for (x in lists) {
      slugKabKota = lists[x]._values.slug;
      $(lists[x].elm).find('.inner-kab-kota').attr('id', slugKabKota)
      .end().find('.small-box').addClass(getBoxColor());
    }
  })

  for (y in propinsi.kabKotas) {
    kabKota = propinsi.kabKotas[y];
    kabKota.func = new List(kabKota.slug, options3);

    desaKels = [];
    for (z in kabKota.desaKels) {
      desaKel = kabKota.desaKels[z];
      desaKels.push({desaKel: desaKel.desaKel, slug: desaKel.slug});
    }

    kabKota.func.add(desaKels);

  }



}
  console.log(regionalList);

$(function() {
$('.nusp-data-link').click(function(e) {
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
</script>

@endpush