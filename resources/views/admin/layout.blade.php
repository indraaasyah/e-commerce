<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc."
    />

    <title>Ecommerce - Sleek Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
      rel="stylesheet"
    />

    <link
      href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css"
      rel="stylesheet"
    />

    <!-- PLUGINS CSS STYLE -->
    <link
      href="{{asset('admin/assets/plugins/simplebar/simplebar.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('admin/assets/plugins/nprogress/nprogress.css')}}"
      rel="stylesheet"
    />

    <!-- No Extra plugin used -->
    <link
      href="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.css')}}"
      rel="stylesheet"
    />

    <link
      href="{{asset('admin/assets/plugins/toastr/toastr.min.css')}}"
      rel="stylesheet"
    />

    <!-- SLEEK CSS -->
    <link
      id="sleek-css"
      rel="stylesheet"
      href="{{asset('admin/assets/css/sleek.css')}}"
    />

    <!-- FAVICON -->
    <link
      href="{{asset('admin/assets/img/favicon.png')}}"
      rel="shortcut icon"
    />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('admin/assets/plugins/nprogress/nprogress.js')}}"></script>
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div id="toaster"></div>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">


      @include('admin.partials.sidebar')

      <!-- ====================================
      ——— PAGE WRAPPER
        ===================================== -->
      <div class="page-wrapper">
        @include('admin.partials.header')
        <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
        <div class="content-wrapper">
          <div class="content">
          @yield('content')
          </div>
          <!-- End Content -->
        </div>
        <!-- End Content Wrapper -->

        @include('admin.partials.footer')
      </div>
      <!-- End Page Wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/simplebar/simplebar.min.js')}}"></script>

    <script src="{{asset('admin/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/chart.js')}}"></script>

    <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map.js')}}"></script>

    <script src="{{asset('admin/assets/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/assets/js/date-range.js')}}"></script>

    <script src="{{asset('admin/assets/plugins/toastr/toastr.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/sleek.js')}}"></script>
    <link href="{{asset('admin/assets/options/optionswitch.css')}}" rel="stylesheet" />
    <script src="{{asset('admin/assets/options/optionswitcher.js')}}"></script>

    <script>
      $(".delete").on("submit", function(){
        return confirm("Are you sure to delete this?");
      });

      function showHideConfigurableAttributes() {
        var productType = $(".product-type").val();
          
        if (productType == 'configurable') {
          $(".configurable-attributes").show();
        } else {
          $(".configurable-attributes").hide();
        }
      }
      $(function(){
        showHideConfigurableAttributes();
        $(".product-type").change(function() {
          showHideConfigurableAttributes();
        });
      });
    </script>
  </body>
</html>
