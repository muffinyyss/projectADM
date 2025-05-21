<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}"
    data-base-url="{{ url('/') }}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title') | Account 4.0</title>
    <meta name="description"
        content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
    <meta name="keywords"
        content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet">

    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/remixicon-CB5Upr-_.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/flag-icons-Bor6250r.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/node-waves-D5r9FyLK.css" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/remixicon-CB5Upr-_.css"
        class="" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/flag-icons-Bor6250r.css"
        class="" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/node-waves-D5r9FyLK.css"
        class="" /><!-- Core CSS -->
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/core-BdqwDRjO.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/theme-default-fL703prY.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/demo-Z-YEgnIY.css" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/core-BdqwDRjO.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/theme-default-fL703prY.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/demo-Z-YEgnIY.css"
        class="" />
    <!-- Vendor Styles -->
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CTjXBMlg.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-rBaq-1fs.css" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CTjXBMlg.css"
        class="" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-rBaq-1fs.css"
        class="" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-CM92vv1c.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/responsive-CnNKeydF.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/buttons-BMNqbP5L.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-ClaRyMzO.css" />
    <link rel="preload" as="style"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/form-validation-Z40eMZE8.css" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-CM92vv1c.css"
        class="" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/responsive-CnNKeydF.css"
        class="" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/buttons-BMNqbP5L.css"
        class="" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-ClaRyMzO.css"
        class="" />
    <link rel="stylesheet"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/form-validation-Z40eMZE8.css"
        class="" /> --}}

    <!-- Include Styles -->
    @include('layouts.sections.styles')

    <!-- Include Scripts for customizer, helper, analytics, config -->
    @include('layouts.sections.scriptsIncludes')
</head>

<body>

    <!-- Layout Content -->
    @yield('layoutContent')
    <!--/ Layout Content -->


    <!-- Include Scripts -->
    @include('layouts.sections.scripts')

</body>

</html>
