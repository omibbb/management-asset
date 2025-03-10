<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title')</title>
  <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="preconnect" href="https://unpkg.com">
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="preconnect" href="https://cdn.datatables.net">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <!-- DataTables JS -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <!-- Fontawesome CDN -->
  <link rel="preconnect" href="https://kit.fontawesome.com">
  <script src="https://kit.fontawesome.com/0221954779.js" crossorigin="anonymous"></script>

  <style>
    #uploadedAvatar {
      max-width: 150px;
      /* Ubah sesuai keinginan */
      height: auto;
      /* Menjaga rasio aspek */
      border-radius: 50%;
      /* Gambar bulat */
      object-fit: cover;
      /* Memastikan gambar tidak terdistorsi */
    }

    .avatar img {
      width: 40px;
      /* Atur lebar */
      height: 40px;
      /* Atur tinggi */
      border-radius: 50%;
      /* Gambar bulat */
      object-fit: cover;
      /* Mengatur cara gambar ditampilkan */
    }

    .inset-0 {
      top: auto !important;
    }
  </style>


  <!-- Include Styles -->
  @include('layouts/sections/styles')

  <!-- Include Scripts for customizer, helper, analytics, config -->
  @include('layouts/sections/scriptsIncludes')

  <!-- Notify -->
  @notifyCss


</head>

<body>

  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->



  <!-- Include Scripts -->
  @include('layouts/sections/scripts')

  <x-notify::notify />
  <!-- Notify -->
  @notifyJs

</html>

</body>

</html>