

<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/product/lite/posdash/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 08:30:09 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sales Inventory | @yield('title')</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/product/lite/posdash/html/assets/images/favicon.ico" />
      <link rel="stylesheet" href="{{ asset('public/admin') }}/assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="{{ asset('public/admin') }}/assets/css/backende209.css?v=1.0.0">
      <link rel="stylesheet" href="{{ asset('public/admin') }}/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="{{ asset('public/admin') }}/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('public/admin') }}/assets/vendor/remixicon/fonts/remixicon.css">
    <!-- Google Tag Manager -->

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WNGH9RL');window.tag_manager_event='dashboard-free-preview';window.tag_manager_product='Posdash';</script>
    <!-- End Google Tag Manager -->
</head>
  <body class="  ">
    <!-- Wrapper Start -->
    <div class="wrapper">

      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="index.html" class="header-logo">
                  <img src="{{ asset('public/admin') }}/assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"><h5 class="logo-title light-logo ml-3">POSDash</h5>
              </a>
              <div class="iq-menu-bt-sidebar ml-0">
                  <i class="las la-bars wrapper-menu"></i>
              </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
            <!--sidebar code-->
              @include('admin.layouts.navbar')

              <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                  <div class="card border-none">
                      <div class="card-body p-0">
                          <div class="sidebarbottom-content">
                              <div class="image"><img src="{{ asset('public/admin') }}/assets/images/layouts/side-bkg.png" class="img-fluid" alt="side-bkg"></div>
                              <h6 class="mt-4 px-4 body-title">Get More Feature by Upgrading</h6>
                              <button type="button" class="btn sidebar-bottom-btn mt-4">Go Premium</button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="p-3"></div>
          </div>
          </div>      <div class="iq-top-navbar">
          @include('admin.layouts.header')
      </div>
      <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="popup text-left">
                          <h4 class="mb-3">New Order</h4>
                          <div class="content create-workform bg-body">
                              <div class="pb-3">
                                  <label class="mb-2">Email</label>
                                  <input type="text" class="form-control" placeholder="Enter Name or Email">
                              </div>
                              <div class="col-lg-12 mt-4">
                                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                      <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                      <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="content-page">
        @yield('content')
      </div>
    </div>
    <!-- Wrapper End-->
    @include('admin.layouts.footer')
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('public/admin') }}/assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('public/admin') }}/assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('public/admin') }}/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset('public/admin') }}/assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('public/admin') }}/assets/js/app.js"></script>
  </body>

<!-- Mirrored from templates.iqonic.design/product/lite/posdash/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 08:30:36 GMT -->
</html>
