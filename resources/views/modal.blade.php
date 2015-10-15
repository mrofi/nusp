@section($namespace.'.modal.on.hide')
  $("#@yield($namespace.'.modal.id')").on('hide.bs.modal', function(e) {
    var form = $(this).find('form');
    form[0].reset();
  });
@endsection

@section($namespace.'.modal.on.show')
  $("#@yield($namespace.'.modal.id')").on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget);
    var form = $(this).find('form');
    
    var dropdown = button.parents('.dropdown-menu').parent();
    if (dropdown) button = dropdown;

    if (button.data()) {
      $.get('@yield($namespace.".modal.form.action")/'+button.data().id, function( data ) {
        for (x in data.wilayah) {
          $('#'+x).text(data.wilayah[x].nama_wilayah);
        }
        for (x in data) {
          var value = data[x];
          var input = form.find('#'+ x);
          if (input.is('[type=file]')) {
            var placer = input.parents('form-group').find('.file-place');
            if (placer.is('img')) placer.prop('src', value);
            else placer.text(value);
          }
          if (input.is(':input')) input.val(value);
        }
        
      }, 'json');
    }

  })
@endsection

@section($namespace.'.modal.form.on.submit')
  $("#@yield($namespace.'.modal.id')").find('form').on('submit', function(e) {
    e.preventDefault();
    form = $(this);
    $.post(form.attr('action'), form.autoNumeric('getString'), function( data ) {
      if (data.message == 'ok') {
        $("#@yield($namespace.'.modal.id')").modal('hide');
      } else {
        error_handling(form, data);
      }
    }, 'json').error( function(xhr, textStatus, errorThrown) {
      error_handling(form, $.parseJSON(xhr.responseText));
    });
  })

  var error_handling = function(_form, data) {
    for (x in data) {
      err = data[x];
      _form.find('#'+x).after('<label class="error-label control-label" for="inputError"><i class="fa fa-times-circle-o"></i> '+err[0]+'</label>')
        .parents('.form-group').addClass('has-warning');
    } 
    var $alert = _form.find('.modal-body .alert').clone().prependTo(_form.find('.modal-body')).addClass('cloned');
    $alert.find('.message').text(data.error ? data.error : 'Terjadi Kesalahan');
    $alert.removeClass('hide');
  }
@endsection

@section($namespace.'.modal.js')
<script>
$(function() {
  @yield($namespace.'.modal.on.show')

  @yield($namespace.'.modal.on.hide')

  @yield($namespace.'.modal.form.on.submit')
});
</script>
@endsection
@push('scriptJs')
@yield($namespace.'.modal.js')
@endpush

<div class="modal text-black fade" id="@yield($namespace.'.modal.id')">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-yellow-v2">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">@yield($namespace.'.modal.title')</h4>
      </div>
      <form id="form-edit-product" class="form-horizontal" action="@yield($namespace.'.modal.form.action')" method="post">
        <input type="hidden" name="_method" value="post">
        <div class="modal-body">
          <div class="alert alert-warning alert-dismissable hide">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Alert!</h4>
            <span class="message"></span>
          </div>
          @yield($namespace.'.modal.body')    
          <div class="row">&nbsp;</div>
        </div>
        <div class="modal-footer bg-navy">
          <button type="reset" class="btn btn-default pull-left" data-dismiss="modal">@yield($namespace.'.modal.close', 'Batal')</button>
          <button type="submit" class="btn btn-primary">@yield($namespace.'.modal.submit', 'Simpan')</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
