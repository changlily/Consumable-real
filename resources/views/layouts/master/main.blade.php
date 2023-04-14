<!DOCTYPE html>

<html lang="en" class="light-style  layout-menu-fixed   " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="vertical-menu-theme-default-light">
<?php $role = Request::user()->role;?>
@if($role == 0)
    <?php $role = 'admin';?>
@elseif($role == 1)
    <?php $role = 'user';?>
@endif


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 02:03:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Consumable PPIC</title>
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />


  <!-- Include Styles -->
  <!-- BEGIN: Theme CSS-->
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" href={{ asset("vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da") }} />
  <link rel="stylesheet" href={{ asset("vendor/fonts/fontawesome5cae.css?id=89157e39c524ff7f679d3aebf872b7b9") }} />
  <link rel="stylesheet" href={{ asset("vendor/fonts/flag-icons5883.css?id=403b97c176f3cdf56a3cbf09107ee240") }} />

  <!-- Core CSS -->
  <link rel="stylesheet" href={{ asset("vendor/css/rtl/coref43c.css?id=f1cefeba0c68d327230d2f6538f276fa") }} class="template-customizer-core-css" />
  <link rel="stylesheet" href={{ asset("vendor/css/rtl/theme-default56b8.css?id=cc3d4ef91c8c858754d8ed20c78a3a3c") }} class="template-customizer-theme-css" />
  <link rel="stylesheet" href={{ asset("css/democb2e.css?id=24b55ca26d6f2bafc5a21ff5a4bcdfb3") }} />


  <link rel="stylesheet" href={{ asset("vendor/libs/perfect-scrollbar/perfect-scrollbarb440.css?id=d9fa6469688548dca3b7e6bd32cb0dc6") }} />
  <link rel="stylesheet" href={{ asset("vendor/libs/typeahead-js/typeahead3881.css?id=8fc311b79b2aeabf94b343b6337656cf") }} />

  <!-- Vendor Styles -->
  <link rel="stylesheet" href={{ asset("vendor/libs/apex-charts/apex-charts.css") }}>
  <!-- Page Styles -->
  <script src={{ asset("vendor/js/helpers.js") }}></script>
  <script src={{ asset("vendor/js/template-customizer.js") }}></script>
  <!-- Vendor Styles -->
  <link rel="stylesheet" href={{ asset("vendor/libs/datatables-bs5/datatables.bootstrap5.css") }}/>
  <link rel="stylesheet" href={{ asset("vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css") }}/>
  <link rel="stylesheet" href={{ asset("vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css") }}/>
  <link rel="stylesheet" href={{ asset("vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css") }}/>
  <link rel="stylesheet" href={{ asset("vendor/libs/flatpickr/flatpickr.css") }} />
  <link rel="stylesheet" href={{ asset("vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css") }}/>
  <link rel="stylesheet" href={{ asset("vendor/libs/toastr/toastr.css") }} />
  <link rel="stylesheet" href={{ asset("vendor/libs/animate-css/animate.css") }} />

  <script src={{ asset("js/config.js") }}></script>
  <!-- beautify ignore:end -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');

  </script>
<style>
    .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

</style>
</head>

<body>

  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
    <div class="layout-container">
      {{-- sidenav --}}
      @if(auth()->user()->role == 1)
      <x-sidenav-user>
        {{-- content inside sidenav --}}
      </x-sidenav-user>
      @elseif(auth()->user()->role == 0)

      <x-sidenav-admin>
        {{-- content inside sidenav --}}
      </x-sidenav-admin>
      @endif
      {{-- end sidenav --}}
      <!-- Layout page -->
      <div class="layout-page">
        <!-- Navbar -->
        <x-navbar>
          {{-- content inside navbar --}}
        </x-navbar>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Content -->
            @yield('content')
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
          </div>
        </div>
        <!--/ Content wrapper -->

        <!-- / Layout page -->
      </div>
    </div>
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  <!-- Drag Target Area To SlideIn Menu On Small Screens -->
  <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->
<!--/ Layout Content -->

<!-- Include Scripts -->
<!-- BEGIN: Vendor JS-->
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/libs/jquery/jquery.js?id=08d304be7f95879ae643fabf15fb255a"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/libs/popper/popper.js?id=70485ad9be8ba3e426172708feb35181"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/js/bootstrap.js?id=3cb2c653a33d885b40641d15713e3994"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=44b8e955848dc0c56597c09f6aebf89a"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/libs/hammer/hammer.js?id=5c0a4017d0ce861e87a50c0c1401eb81"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/libs/i18n/i18n.js?id=74a027f4696264ade8796f88b3d49c14"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/libs/typeahead-js/typeahead.js?id=f6bda588c16867a6cc4158cb4ed37ec6"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/js/menu.js?id=03d9787739b295480194ce0a121ae550"></script>
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/vendor/libs/apex-charts/apexcharts.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/js/main.js?id=e0aeed34a47c1efb009b120245cce82e"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo//assets/js/dashboards-analytics.js"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->


<!-- END: Page JS-->

<script src={{ asset("vendor/libs/toastr/toastr.js") }}></script>

@if ($message = Session::get('message'))
    <script>alert('{{ $message }}')</script>
@endif
@yield('script')

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 02:04:01 GMT -->
</html>
