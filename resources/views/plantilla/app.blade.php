<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<<<<<<< HEAD
<<<<<<< HEAD
    <title>Panel | Administracion</title>
=======
    <title>Panel | Administración </title>
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
    <title>Panel | Administración</title>
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
<<<<<<< HEAD
<<<<<<< HEAD
    <meta name="title" content="Panel | Administracion" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="Panel de administracion del sistema"
    />
    <meta
      name="keywords"
      content="panel, administracion, mamapinga"
=======
    <meta name="title" content="Panel | Administración " />
=======
    <meta name="title" content="Panel | Administración" />
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="Panel de administración del sistema"
    />
    <meta
      name="keywords"
<<<<<<< HEAD
      content="panel, administracion, MrBrianApp"
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
      content="panel, administración, codeart"
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="preload" href="{{ asset('css/adminlte.min.css')}}" as="style" />
=======
    <link rel="preload" href="{{asset('css/adminlte.css')}}" as="style" />
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
    <link rel="preload" href="{{ asset('css/adminlte.css') }}" as="style" />
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
    <!--end::Accessibility Features-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media='all'"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="stylesheet" href="{{asset('css/adminlte.css')}}" />
    <!--end::Required Plugin(AdminLTE)-->
    @stack('styles')
=======
    <link rel="stylesheet" href="{{asset('/css/adminlte.css')}}" />
=======
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}" />
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
    <!--end::Required Plugin(AdminLTE)-->
    @stack('css')
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
<<<<<<< HEAD
      <!--begin::Header-->
<<<<<<< HEAD
      <!--end::Header-->
      @include('plantilla.header')
      <!--begin::Sidebar-->
      <!--end::Sidebar-->
      @include('plantilla.menu')
=======
=======
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)

      <!--begin::Header-->
      @include('plantilla.header')
      <!--end::Header-->

      <!--begin::Sidebar-->
     @include('plantilla.menu')
      <!--end::Sidebar-->
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
<<<<<<< HEAD
            <!--begin::Row-->
<<<<<<< HEAD
=======
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Simple Tables</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
=======

>>>>>>> 2958d9e (Se actualizo el proyecto)
          </div>
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
<<<<<<< HEAD
<<<<<<< HEAD
      @yield('contenido')
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title
        <--end::App Content-->
=======

        @yield('contenido')

=======
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
        
        @yield('contenido')

        <!--end::App Content-->
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2025&nbsp;
<<<<<<< HEAD
<<<<<<< HEAD
          <a href="https://adminlte.io" class="text-decoration-none">Destructor</a>.
=======
          <a href="#" class="text-decoration-none">MrBrianApp</a>.
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
          <a href="#" class="text-decoration-none">artcode.com</a>.
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('js/adminlte.js') }}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
    <!--end::Script-->
    @stack('scripts')
  </body>
  <!--end::Body-->
</html>
