@section($namespace.'.modal.form.body')
<div class="row hide">
  <label for="" class="control-label col-sm-4">Desa / Kelurahan</label>
  <div class="col-sm-8">
    <p class="form-control-static" id="desaKel"></p>
  </div>
</div>
<div class="row hide">
  <label for="" class="control-label col-sm-4">Kecamatan</label>
  <div class="col-sm-8">
    <p class="form-control-static" id="kec"></p>
  </div>
</div>
<div class="row hide">
  <label for="" class="control-label col-sm-4">Kabupaten / Kota</label>
  <div class="col-sm-8">
    <p class="form-control-static" id="kabKota"></p>
  </div>
</div>
<div class="row hide">
  <label for="" class="control-label col-sm-4">Propinsi</label>
  <div class="col-sm-8">
    <p class="form-control-static" id="propinsi"></p>
  </div>
</div>
@yield($namespace.'.modal.body')  
@endsection


<div class="modal modal-nusp text-black fade" id="@yield($namespace.'.modal.id')">
  <div class="modal-dialog @yield($namespace.'.modal.class')">
    <div class="modal-content">
      <div class="modal-header bg-yellow-v2">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">@yield($namespace.'.modal.title')</h4>
      </div>
      <form id="form-edit-product" class="form-horizontal" action="@yield($namespace.'.modal.form.action')" method="post">
        <input type="hidden" name="_method" value="post">
        <div class="modal-body hide">
          <div class="alert alert-warning alert-dismissable hide">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Alert!</h4>
            <span class="message"></span>
          </div>
          @yield($namespace.'.modal.form.body')
          <div class="row">&nbsp;</div>
        </div>
        <div class="modal-footer bg-navy">
          <button type="reset" class="btn btn-default pull-left" data-dismiss="modal">@yield($namespace.'.modal.close', 'Batal')</button>
          <button type="submit" class="btn btn-primary @yield($namespace.'.modal.submit.class')">@yield($namespace.'.modal.submit', 'Simpan')</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
