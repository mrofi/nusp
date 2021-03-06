@section($namespace.'.modal.on.hide')
  $("#@yield($namespace.'.modal.id')").on('hidden.bs.modal', function(e) {
    var form = $(this).find('form');
    form[0].reset();
    form.find('.form-control-static').parents('.row').not('.form-group-static').addClass('hide');
    form.find('.modal-body').addClass('hide');
    $('body').css('padding-right', '0');
  });
@endsection


@section($namespace.'.modal.on.show')
  $("#@yield($namespace.'.modal.id')").on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget);
    var form = $(this).find('form');
    form.find('.error-label').remove().end()
        .find('.form-group').removeClass('has-warning').end()
        .find('.alert.cloned').remove();
    var fileinput = form.find('.fileinput');
    fileinput.removeClass('fileinput-exists').addClass('fileinput-new');
    form.find('.fileinput-preview').addClass('hide').html('');
    form.find('.form-control-static.file-placer').addClass('hide').html('');
    
    var dropdown = button.parents('.dropdown-menu').parent();
    if (dropdown.length) button = dropdown;

    if (button.data()) {

      form.find('.data-transport').data(button.data());

      $.get('@yield($namespace.".modal.form.action")/'+button.data().id, function( data ) {
        for (x in data.wilayah) {
          form.find('#'+x).text(data.wilayah[x].nama_wilayah).parents('.row').removeClass('hide');
        }
        for (x in data) {
          var value = data[x];
          var input = form.find('#'+ x);
          
          if (input.is('#foto_id') && value != '') {
            form.find('.fileinput-preview').removeClass('hide').html('<img src="{{ nusp_asset('api/foto/') }}'+value+'" style="max-height: 140px;">');
            fileinput.addClass('fileinput-exists').removeClass('fileinput-new');
            fileinput.find('.fileinput-exists').removeClass('hide');
          }
          if (input.is('#file_id') && value != '') {
            form.find('.form-control-static.file-placer').removeClass('hide').html('<a href="{{ nusp_asset('api/file/') }}'+value+'" target="_blank">Download SK</a>');
            fileinput.addClass('fileinput-exists').removeClass('fileinput-new');
            fileinput.find('.fileinput-exists').removeClass('hide');
          }
          else if (input.is('.input-mask-currency, .input-mask-numeric, .input-mask-decimal')) { input.autoNumeric('set', value); }
          else if (input.is('.input-date')) {
            var from = value.split("-");
            var f = [from[2], from[1], from[0]].join('-');
            input.val(f);
          }
          else if (input.is(':input')) {input.val(value);}
          else if (input.is('.form-control-static')) {input.text(value);}
        }
        
        form.find('.modal-body').removeClass('hide');

      }, 'json');
    }

    button.parents('.modal').modal('hide');

  })

  $("#@yield($namespace.'.modal.id')").on('shown.bs.modal', function(e) {
    setTimeout(function(){$('body').addClass('modal-open')}, 50);
  });
@endsection

@section($namespace.'.modal.form.on.submit')
  $("#@yield($namespace.'.modal.id')").find('form').on('submit', function(e) {
    e.preventDefault();
    form = $(this);
    form.find('.error-label').remove().end()
        .find('.form-group').removeClass('has-warning').end()
        .find('.alert.cloned').remove();
    form.find('.input-date').each(function(i, e) {
      v = $(this).val();
      var from = v.split("-");
      var f = [from[2], from[1], from[0]].join('-');
      $(this).val(f);
    })
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
    form.find('.input-date').each(function(i, e) {
      v = $(this).val();
      var from = v.split("-");
      var f = [from[2], from[1], from[0]].join('-');
      $(this).val(f);
    })
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


  $("#@yield($namespace.'.modal.id')").find('form .fileinput').on('change.bs.fileinput', function(e) {
    var fileinput = $(this);
    fileinput.find('.fileinput-exists').addClass('hide');
    fileinput.find('.fileinput-preview').addClass('hide');
    var fd = new FormData();
    var theXFiles = fileinput.find(':file')[0].files[0];
    fd.append( "fileInput", theXFiles);
    fd.append( "caption", "@yield($namespace.'.modal.title')");

    $.ajax({
      url: fileinput.data('action'),
      xhr: function() { // custom xhr (is the best)

           var xhr = new XMLHttpRequest();
           var total = 0;

           // Get the total size of files
           // $.each(document.getElementById('files').files, function(i, file) {
           //        total += file.size;
           // });

            total = theXFiles.size;

           // Called when upload progress changes. xhr2
           xhr.upload.addEventListener("progress", function(evt) {
                  // show progress like example
                  var loaded = (evt.loaded / total).toFixed(2)*100; // percent

                  var progress = fileinput.siblings('.progress-upload');
                  progress.removeClass('hide').find('.progress-bar').attr('aria-valuenow', loaded).css('width', loaded+'%')
                  .find('.sr-only').text(loaded+'% Complete');
                  
                  var status = progress.find('.progress-status');
                  if (loaded < 20) status.text('Mulai mengupload...' + loaded + '%' );
                  if (loaded < 80) status.text('Mengupload... ' + loaded + '%' );
                  if (loaded >= 80) status.text('hampir selesai... ' + loaded + '%' );
                  if (loaded > 100) progress.addClass('hide');
           }, false);

           return xhr;
      },
      type: 'post',
      processData: false,
      contentType: false,
      data: fd,
      success: function(data) {
        if (data.message == 'ok') {
           fileinput.find('.fileinput-exists').removeClass('hide');
           fileinput.find('.fileinput-preview').removeClass('hide').find('img').css('max-height', '140px');
           fileinput.siblings('.progress-upload').addClass('hide');
           fileinput.parents('.form-group').find(fileinput.data('target')).val(data.created.id);
           fileinput.data(data.created);
        }
      }
    });

  }).on('clear.bs.fileinput', function(e) {
    var fileinput = $(this);
    fileinput.find('.fileinput-exists').addClass('hide');
    fileinput.find('.fileinput-preview').addClass('hide');
    fileinput.siblings('.progress-upload').addClass('hide');
    fileinput.parents('.form-group').find(fileinput.data('target')).val('');
  })

});
</script>
@endsection
@push('scriptJs')
@yield($namespace.'.modal.js')
@endpush

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


<div class="modal text-black fade" id="@yield($namespace.'.modal.id')">
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
