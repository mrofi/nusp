@section($namespace.'.modal.form.body')
@include('modal.formPlain')  
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
          <input type="hidden" class="input-mask-numeric" name="numeric">
          <button type="reset" class="btn btn-default data-transport pull-left"  @yield($namespace.'.modal.close.prop', 'data-dismiss="modal"') >@yield($namespace.'.modal.close', 'Batal')</button>
          <a href="#" class="btn btn-danger data-transport pull-left @yield($namespace.'.modal.delete')" data-action="@yield($namespace.'.modal.form.action')" data-target="#modal-hapus" data-toggle="modal">Hapus Entry</a>
          <button type="submit" class="btn btn-primary @yield($namespace.'.modal.submit.class')">@yield($namespace.'.modal.submit', 'Simpan')</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
