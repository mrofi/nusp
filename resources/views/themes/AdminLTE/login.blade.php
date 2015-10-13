<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | {{ $pageTitle or strip_tags(config('nusp.title')) }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ nusp_themeAsset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/themes/AdminLTE/plugins/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/themes/AdminLTE/plugins/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ nusp_themeAsset('dist/css/AdminLTE.min.css') }}">
        <!-- Theme style -->
    <link rel="stylesheet" href="{{ nusp_themeAsset('dist/css/skins/skin-yellow-v2.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ nusp_themeAsset('plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Tambahan untuk VIdeo -->
    <style>
      video#bgvid { 
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        background: url({{ nusp_asset('media/lalu_lintas.png') }}) no-repeat;
        background-size: cover;
        opacity: .4;
        filter: alpha(opacity=40);
        filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
        -ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=40)';

      }
      
      video { display: block; }

      video#bgvid {
          transition: 1s opacity;
      }

      .stopfade { opacity: .5; }

      .login-box, .login-box-body {
        background-color: #fff!important;
      }

      .login-page {
        background-color: #333;
      }

      @media screen and (max-device-width: 800px) {
          html {
               background: url({{ nusp_asset('media/lalu_lintas.png') }}) #000 no-repeat center center fixed;
          }
          #bgvid {
              display: none;
          }
      }
    </style>
    <!-- akhir tambahan  video -->
  </head>
  <body class="hold-transition login-page">
    
    <!-- tambahan video -->
    <video autoplay loop poster="{{ nusp_asset('media/lalu_lintas.png') }}" id="bgvid">
      <source src="{{ nusp_asset('media/lalu_lintas.mp4') }}" type="video/mp4">
    </video>
    <!--[if lt IE 9]>
    <script>
      document.createElement('video');
    </script>
    <![endif]-->
    <button id="vidpause">Pause</button>
    <!-- Akhir tambahan video -->

    <div class="login-box">
      <div class="login-logo text-black">
        <a href="{{ nusp_asset('') }}">
          <img src="{{ nusp_asset('images/logo.jpg') }}" class="logo-invert" style="width: 60%;" alt="">
        </a>
      </div><!-- /.login-logo -->
      <div class="login-box-body text-black">
        <p class="login-box-msg">Silakan Login Dahulu</p>
        @if ($errors->any())
            {!! implode('', $errors->all('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong><i class="fa fa-exclamation-circle"></i></strong> :message </div>')) !!}
        @endif
        <form action="{{ nusp_asset('auth/logging') }}" method="post">
          {!! csrf_field() !!}
          <div class="form-group has-feedback">
            <input type="text" class="form-control text-black bg-white" name="credential" placeholder="Username / Email" value="{{ old(session('credential', 'credential')) }}">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control text-black bg-white" name="thepassword" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn bg-yellow-v2 btn-block btn-flat">Login</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="">Reset Password</a><br>
        @if (config('nusp.allowregister'))
        <a href="register.html" class="text-center">{{ trans('nusp.login.register') }}</a>
        @endif
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ nusp_themeAsset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ nusp_themeAsset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ nusp_themeAsset('plugins/iCheck/icheck.min.js') }}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });

      var vid = document.getElementById("bgvid"),
      pauseButton = document.getElementById("vidpause");
      function vidFade() {
          vid.classList.add("stopfade");
      }
      vid.addEventListener('ended', function() {
          // only functional if "loop" is removed 
           vid.pause();
        // to capture IE10
        vidFade();
      });
      pauseButton.addEventListener("click", function() {
          vid.classList.toggle("stopfade");
        if (vid.paused) {
      vid.play();
          pauseButton.innerHTML = "Pause";
        } else {
              vid.pause();
              pauseButton.innerHTML = "Paused";
        }
      })
    </script>
  </body>
</html>
