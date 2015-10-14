@section('top')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
@endsection

@section('head')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('pageTitle', 'Not Title') | {{ strip_tags(config('nusp.title')) }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=2, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/themes/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/themes/AdminLTE/plugins/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/themes/AdminLTE/plugins/ionicons/2.0.1/css/ionicons.min.css">
    <!-- datatables -->
    <link rel="stylesheet" href="/themes/AdminLTE/plugins/datepicker/datepicker3.css">
    <!-- datatables -->
    <link rel="stylesheet" href="/themes/AdminLTE/plugins/datatables/datatables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/themes/AdminLTE/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/themes/AdminLTE/dist/css/skins/skin-yellow-v2.min.css">

    <style>
      .nusp-footer {
        width: 100%;
        margin-left: 0;
        position: fixed;
        bottom: 0;
      }
      .btn-round {
        border-radius: 50%;
      }

      .nusp-full {
        width: 90%;
      }

      .main-footer {
          background-color: #333;
          border: none;
          color: #ddd;
      }

      .content-propinsi .content-header {
        padding-bottom: 10px;
      }

      .content-desa-kel li {
          padding: 5px;
          width: 100%;
          text-align: left;
          font-size: 1.2em;
      }

      .nusp-data-link {
        display: block;
      }

      .nusp-data-link:hover {
        color: rgba(255,255,255,0.8)!important;
      }
    </style>
    
    <!--pace-->
    <script src="/themes/AdminLTE/plugins/pace/pace.js"></script>
    <link href="/themes/AdminLTE/plugins/pace/themes/pace-theme-minimal.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="/themes/AdminLTE/plugins/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="/themes/AdminLTE/plugins/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@endsection

@section('mid')
  </head>
  <body class="layout-top-nav fixed @yield('bodyClass', 'hold-transition skin-yellow')">
@endsection

@section('bodyInit')
    <!-- Site wrapper -->
    <div class="wrapper">
@endsection

@section('header')
       <header class="main-header">
        <nav class="navbar navbar-fixed-top bg-white">
          <div class="container-fluid">
            <div class="navbar-header">
              <a href="{{ nusp_asset('dashboard') }}" class="navbar-brand">
                <img src="{{ nusp_asset('images/logo.jpg') }}" class="logo-grayscale" style="height: 40px; margin-top: -10px;" alt="">
              </a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                @yield('menubar')
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <!-- Notifications Menu -->
                  <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/themes/AdminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ auth()->user()->nama_lengkap }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/themes/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      {{ auth()->user()->nama_lengkap }}
                      <small>{{ auth()->user()->email }}</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ nusp_asset('auth/logout') }}" class="btn btn-default btn-flat">Log out</a>
                    </div>
                  </li>
                </ul>
              </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- =============================================== -->
@endsection

@section('sidebarLeft')
      
      <!-- =============================================== -->
@endsection

@section('contentInit')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper bg-black">
        <div class="container">
@endsection

@section('contentHeader')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('pageTitle', 'Blank page')
            <small>@yield('subTitle', 'it all starts here')</small>
          </h1>
          <hr>
          <ol class="breadcrumb hidden-xs">
            <li><a href="{{ nusp_asset('dashboard') }}" title="@yield('pageTitle')">{!! config('nusp.title') !!}</a></li>
            <!--<li><a href="#">Examples</a></li>-->
            <li class="active">@yield('pageTitle')</li>
          </ol>
        </section>
@endsection

@section('contentMain')
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <!--<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>-->
              </div>
            </div>
            <div class="box-body">
              Start creating your amazing application!
            </div><!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div><!-- /.box-footer-->
          </div><!-- /.box -->
        </section><!-- /.content -->
@endsection

@section('contentEnd')
        </div>
      </div><!-- /.content-wrapper -->
@endsection

@section('footer')
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>v.</b> 0.3.0 alpha <b><a href="https://github.com/mrofi/nusp">MR</a></b>
        </div>
        <strong class="hidden-xs">&copy; 2015 {!! 2015 < ($year = \Carbon::now()->format('Y')) ? "- $year" : ""  !!} - Supported by <a href="AMRI">AMRI</a>.</strong>
      </footer>
@endsection

@section('sidebarRight')
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
@endsection    
  
@section('bodyEnd')
    </div><!-- ./wrapper -->
@endsection

@section('script')
    <!-- jQuery 2.1.4 -->
    <script src="/themes/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/themes/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- List JS -->
    <script src="/themes/AdminLTE/plugins/listjs/v1.1.1/dist/list.min.js"></script>
     <!-- SlimScroll -->
    <script src="/themes/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/themes/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- date-range-picker -->
    <script src="/themes/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="/themes/AdminLTE/plugins/datepicker/locales/bootstrap-datepicker.id.js" charset="UTF-8"></script>
    <!-- DataTables -->
    <script src="/themes/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/themes/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Bootstrap Typeahead -->
    <script src="/themes/AdminLTE/plugins/bootstrap-typeahead/bootstrap3-typeahead.min.js"></script>
    <!-- Select2 -->
    <script src="/themes/AdminLTE/plugins/select2/select2.full.min.js"></script>
    <!-- autonumeric -->
    <script src="/themes/AdminLTE/plugins/autoNumeric/autoNumeric-min.js"></script>
    <!-- AdminLTE App -->
    <script src="/themes/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/themes/AdminLTE/dist/js/demo.js"></script>


    <script>
      String.prototype.toRp = function(a,b,c,d,e) {
        e=function(f){return f.split('').reverse().join('')};b=e(parseInt(this,10).toString());for(c=0,d='';c<b.length;c++){d+=b[c];if((c+1)%3===0&&c!==(b.length-1)){d+='.';}}return(a?a:'Rp.\t')+e(d);
      }
      $(function() {
        // $.fn.datepicker.defaults.format = "{{ config('nusp.dateformat') }}";
        $.fn.datepicker.defaults.language = "id";
        $.fn.datepicker.defaults.todayHighlight = true;

        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.fn.modal.Constructor.DEFAULTS.backdrop = 'static';

        $.fn.nuspCurrency = {aSep: '.', aDec: ',', aSign: 'Rp. ', lZero: 'deny'};
        $.fn.nuspNumeric = {aSep: '.', aDec: ',', aSign: '', mDec: '0', lZero: 'deny'};

        $('select').select2({width: '100%'});              
        
        $('.input-mask-currency').autoNumeric('init', $.fn.nuspCurrency);
        $('.input-mask-numeric').autoNumeric('init', $.fn.nuspNumeric);


          var slideToTop = $("<div />");
          slideToTop.html('<i class="fa fa-chevron-up"></i>');
          slideToTop.css({
            position: 'fixed',
            bottom: '40px',
            right: '25px',
            width: '40px',
            height: '40px',
            color: '#eee',
            'font-size': '',
            'line-height': '40px',
            'text-align': 'center',
            'background-color': '#222d32',
            cursor: 'pointer',
            'border-radius': '5px',
            'z-index': '99999',
            opacity: '.7',
            'display': 'none'
          });
          slideToTop.on('mouseenter', function () {
            $(this).css('opacity', '1');
          });
          slideToTop.on('mouseout', function () {
            $(this).css('opacity', '.7');
          });
          $('.wrapper').append(slideToTop);
          $(window).scroll(function () {
            if ($(window).scrollTop() >= 50) {
              if (!$(slideToTop).is(':visible')) {
                $(slideToTop).fadeIn(500);
              }
            } else {
              $(slideToTop).fadeOut(500);
            }
          });
          $(slideToTop).click(function () {
            $("body").animate({
              scrollTop: 0
            }, 500);
          });

      })
    </script>
    
    <!-- Scripts -->
    @stack('scriptJs')
@endsection

@section('bottom')
  </body>
</html>
@endsection


{{-- RENDERING TEMPLATE --}}

@yield('top')
  @yield('head')
@yield('mid')
@yield('bodyInit')
  @yield('header')
  @yield('sidebarLeft')

  @yield('contentInit')
    @yield('contentHeader')
    @yield('contentMain')
  @yield('contentEnd')
  
  {{-- @yield('sidebarRight') --}}
  
@yield('bodyEnd')
@yield('footer')
@yield('script')
@yield('bottom')



