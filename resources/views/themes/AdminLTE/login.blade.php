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
    <link rel="stylesheet" href="{{ nusp_themeAsset('plugins/iCheck/square/grey.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo text-gray">
        <a href="{{ nusp_asset('') }}">{!! config('nusp.title') !!}</a>
        <h5>{{ config('nusp.company') }}</h5>
      </div><!-- /.login-logo -->
      <div class="login-box-body text-gray">
        <p class="login-box-msg">Silakan Login Dahulu</p>
        @if ($errors->any())
            {!! implode('', $errors->all('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong><i class="fa fa-exclamation-circle"></i></strong> :message </div>')) !!}
        @endif
        <form action="{{ nusp_asset('auth/logging') }}" method="post">
          {!! csrf_field() !!}
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="credential" placeholder="Username / Email" value="{{ old(session('credential', 'credential')) }}">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="thepassword" placeholder="Password">
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
              <button type="submit" class="btn bg-gray btn-block btn-flat">Login</button>
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
          checkboxClass: 'icheckbox_square-grey',
          radioClass: 'iradio_square-grey',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
