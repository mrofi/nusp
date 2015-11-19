@push('scriptJs')
<script>
$(function() {

$('.modal-nusp').each(function(i, e) {

  var nuspModal = $(this);

  nuspModal.on('hidden.bs.modal', function(e) {
    var form = $(this).find('form');
    form[0].reset();
    form.find('.form-control-static').parents('.row').not('.form-group-static').addClass('hide');
    form.find('.modal-body').addClass('hide');
    $('body').css('padding-right', '0');
    $('.btn-verify').addClass('hide');
    $('.combo-plus-target').addClass('hide');
    form.find('.btn-input').attr('data-toggle', 'modal');
    form.find('.report-area .btn-modal').remove();
  });

  nuspModal.on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget);
    $('.combo-plus-target').addClass('hide');
    $('.combo-plus').val('').trigger('change');


    var form = $(this).find('form');
    form.find('.error-label').remove().end()
        .find('.form-group').removeClass('has-warning').end()
        .find('.alert.cloned').remove();
    var fileinput = form.find('.fileinput');
    fileinput.removeClass('fileinput-exists').addClass('fileinput-new');
    form.find('.fileinput-preview').addClass('hide').html('');
    form.find('.form-control-static.file-placer').addClass('hide').html('');
    form.find('.btn-input').removeClass('btn-success').addClass('bg-gray-light').find('.check').addClass('hide');
    form.find('.knob').val('0').trigger('change');
    
    form.find('[data-if]').each(function(i, e) {
      var iff = $(this);
      var target = iff.data('target');

      iff.change(function() {
        form.find('#'+iff.attr('id')+'_data').val($(this).val());
      }).trigger('change');

      form.find(target).change(function() {
          if ($(this).val() == iff.data('if')) iff.parents('.form-group').removeClass('hide');
          else {
            form.find('#'+iff.attr('id')+'_data').val('');
            iff.parents('.form-group').addClass('hide')
          }
      }).trigger('change'); 
    })

    if (!nuspModal.is('.modal-special')) {
      $('#modal-hapus').find('form').attr('action', form.attr('action')).find('button[type=reset]').attr('data-target', '#'+nuspModal.attr('id'));
      $('#modal-verify').find('form').attr('action', form.attr('action')).find('button[type=reset]').attr('data-target', '#'+nuspModal.attr('id'));
      $('#modal-unverify').find('form').attr('action', form.attr('action')).find('button[type=reset]').attr('data-target', '#'+nuspModal.attr('id'));
    }


    var dropdown = button.parents('.dropdown-menu').parent();
    if (dropdown.length) button = dropdown;

    if (button.data()) {

      form.find('.data-transport').data(button.data());

      $.get(form.attr('action')+'/'+(button.data().id ? button.data().id : button.data().kode_wilayah), function( data ) {

        if (nuspModal.is('.laporan-detail')) {
          for (x in data.detail) {
            form.find('.report-area').append('<div class="col-sm-6 col-sm-4 btn-modal"> <a href="#" class="btn btn-lg btn-block btn-default" data-target="#modal-laporan-fisik-keuangan" data-id="'+data.detail[x].id+'" data-toggle="modal">'+data.detail[x].periode+'</a> </div> ');
          }
        }

        for (x in data.wilayah) {
          form.find('#'+x).text(data.wilayah[x].nama_wilayah).parents('.row').removeClass('hide');
        }

        if (data.allowEdit == true && !nuspModal.is('.modal-special') && !nuspModal.is('.modal-tahapan')) {
          if (data.verified_at != null) {
            form.find('[type=submit]').addClass('hide');
            form.find('.show-delete').addClass('hide');
            form.find(':input').not('[type=reset]').prop('disabled', true);
          } else {
            form.find(':input').prop('disabled', false);
            form.find('[type=submit]').removeClass('hide');
            if (data.empty == true) form.find('.show-delete').addClass('hide')
            else form.find('.show-delete').removeClass('hide');
            
          }
        } 

        if (data.allowVerify == true && data.empty !== true && !nuspModal.is('.modal-tahapan') && !nuspModal.is('.modal-special')) {
          if (data.verified_at == null) form.find('.show-verify').removeClass('hide')
          else form.find('.show-unverify').removeClass('hide');
        } else {
          $('.btn-verify').addClass('hide');
        }


        for (x in data) {
          var value = data[x];
          var input = form.find('#'+ x);
          
          if (input.is('.form-photo') && value != '') {
            form.find('.fileinput-preview').removeClass('hide').html('<img src="{{ nusp_asset('api/foto/') }}'+value+'" style="max-height: 140px;">');
            fileinput.addClass('fileinput-exists').removeClass('fileinput-new');
            fileinput.find('.fileinput-exists').removeClass('hide');
          }
          else if (input.is('.form-file') && value != '') {
            form.find('.form-control-static.file-placer').removeClass('hide').html('<a href="{{ nusp_asset('api/file/') }}'+value+'" target="_blank">Download SK</a>');
            fileinput.addClass('fileinput-exists').removeClass('fileinput-new');
            fileinput.find('.fileinput-exists').removeClass('hide');
          }
          else if (input.is('.input-mask-currency, .input-mask-numeric, .input-mask-decimal, .input-mask-decimal-3, .input-mask-decimal-5')) { input.autoNumeric('set', value); }
          else if (input.is('.input-date')) {
            var from = value.split("-");
            var f = value == '' ? '' : [from[2], from[1], from[0]].join('-');
            input.is(':input') ? input.val(f) : input.text(f);
          }
          else if (input.is('.knob')) {input.val(value+'%').trigger('change').val(value+'%');}
          else if (input.is('.combo-plus')) {
            var plusData = $('#'+input.attr('id')+'_data').val(value);
            var dataValue = input.data('value').split(',');
            var hasil = 0;
            for (v in dataValue) {
              if (dataValue[v] == value) {
                  hasil = 1;
                  input.val(value).trigger('change');
              }
            }
            if (!hasil) {
              input.val('plus_other').trigger('change');
              $('#'+input.attr('id')+'_plus').val(value);
            }

           input.trigger('change');
          }
          else if (input.is(':input')) {input.val(value);}
          else if (input.is('.form-control-static')) {input.text(value);}
          else if (input.is('.btn-input') && value != null) {
            if (data.allowVerify == true && value.verified_at == null) input.removeClass('bg-gray-light btn-success').addClass('btn-warning').find('.check').removeClass('hide')
            else input.removeClass('bg-gray-light btn-warning').addClass('btn-success').find('.check').removeClass('hide') 
          }
          else if (input.is('.btn-input') && value == null && data.allowEdit !== true) {input.attr('data-toggle', 'modal0'); }
          input.trigger('change')
        }
        
        form.find('.modal-body').removeClass('hide');

      }, 'json');
    }

    button.parents('.modal').modal('hide');

  })

  nuspModal.on('shown.bs.modal', function(e) {
    setTimeout(function(){$('body').addClass('modal-open')}, 50);
  });

  nuspModal.find('form').on('submit', function(e) {
    e.preventDefault();
    form = $(this);
    form.find('.error-label').remove().end()
        .find('.form-group').removeClass('has-warning').end()
        .find('.alert.cloned').remove();
    form.find('.input-date').each(function(i, e) {
      v = $(this).val();
      var from = v.split("-");
      var f = v == '' ? '' : [from[2], from[1], from[0]].join('-');
      $(this).val(f);
    })
    $.post(form.attr('action'), form.autoNumeric('getString'), function( data ) {
      if (data.message == 'ok') {
        form.find('button[type=reset]').click();
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
      var f = v == '' ? '' : [from[2], from[1], from[0]].join('-');
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

  nuspModal.find('form .fileinput').on('change.bs.fileinput', function(e) {
    var fileinput = $(this);
    fileinput.find('.fileinput-exists').addClass('hide');
    fileinput.find('.fileinput-preview').addClass('hide');
    var fd = new FormData();
    var theXFiles = fileinput.find(':file')[0].files[0];
    fd.append( "fileInput", theXFiles);
    fd.append( "caption", nuspModal.find('.modal-title'));

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

  $('.combo-plus').each(function(i, e) {
    var input = $(this);
      $(this).change(function() {
        if ($(this).val() == 'plus_other') {
            $('#'+input.attr('id')+'_data').val($('#'+input.attr('id')+'_plus').val());
            $('#'+input.attr('id')+'_plus').removeClass('hide')
        } else {
            $('#'+input.attr('id')+'_data').val($(this).val());
            $('#'+input.attr('id')+'_plus').addClass('hide')
        }
      })

      $('#'+input.attr('id')+'_plus').change(function(){
        $('#'+input.attr('id')+'_data').val($(this).val());
      });
  });

});
</script>
@endpush