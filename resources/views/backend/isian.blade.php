@extends('master')

@section('contentMain')

<div class="propinsi-content-wrapper">
  <section id="propinsi-jawa-tengah" class="content-propinsi">
    <div class="content-header">
      <h1 class="propinsi">Jawa Tengah</h1>
    </div>
    <div id="content-jawa-tengah" class="content-body">
      <ul class="list-unstyled row list">
        <li class="col-lg-3 col-sm-6">
          <!-- small box -->
          <a href="#">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h4  class="kab-kota">Kota Semarang</h4>
                <p></p>
              </div>
            </div>
          </a>
        </li><!-- ./col -->
        <li class="col-lg-3 col-sm-6">
          <!-- small box -->
          <a href="#">
            <div class="small-box bg-green">
              <div class="inner">
                <h4  class="kab-kota">Kabupaten Semarang</h4>
                <p></p>
              </div>
            </div>
          </a>
        </li><!-- ./col -->
        <li class="col-lg-3 col-sm-6">
          <!-- small box -->
          <a href="#">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h4  class="kab-kota">Kota Pekalongan</h4>
                <p></p>
              </div>
            </div>
          </a>
        </li><!-- ./col -->
        <li class="col-lg-3 col-sm-6">
          <!-- small box -->
          <a href="#">
            <div class="small-box bg-red">
              <div class="inner">
                <h4  class="kab-kota">Kabupaten Kendal</h4>
                <p></p>
              </div>
            </div>
          </a>
        </li><!-- ./col -->
      </ul><!-- /.row -->
      
    </div>
  </section>
</div>

<div id="hacker-list">
  <ul class="list">
    <li>
       <h3 class="name">Jonny</h3>
       <p class="city">Stockholm</p>
    </li>
    <li>
      <h3 class="name">Jonas</h3>
      <p class="city">Berlin</p>
    </li>
  </ul>
</div>
<!-- Main content -->

@endsection