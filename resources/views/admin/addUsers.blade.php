@extends('layouts.contentNavbarLayout')

@section('title', 'Add users')

@section('vendor-style')
    @vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
    @vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
    @vite('resources/assets/js/dashboards-analytics.js')
@endsection
@section('content')
    {{-- <!DOCTYPE html> --}}

    {{-- <html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed     " dir="ltr"
        data-theme="theme-default"
        data-assets-path="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/"
        data-base-url="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1"
        data-framework="laravel" data-template="vertical-menu-theme-default-light" data-style="light"> --}}

    {{-- <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Roles - Apps |
            Materio -
            Bootstrap 5 HTML + Laravel Admin Template</title>
        <meta name="description"
            content="Most Powerful &amp; Comprehensive Bootstrap 5 + Laravel HTML Admin Dashboard Template built for developers!" />
        <meta name="keywords"
            content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
        <!-- laravel CRUD token -->
        <meta name="csrf-token" content="5Ovx3BXczDpFMp6RAJL33HeWzqeZppolP9VuAnmI">
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://themeselection.com/item/materio-bootstrap-laravel-admin-template/">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" /> --}}


    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->

    <!-- Page Styles -->

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    {{-- <link rel="modulepreload"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/helpers-B9_VIWCr.js" />
    <script type="module"
        src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/helpers-B9_VIWCr.js">
    </script><!-- beautify ignore:start -->
                                  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
                                  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
                                  <link rel="preload" as="style" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/template-customizer-BTiIn6t0.css" /><link rel="modulepreload" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/template-customizer-pfWEYAMA.js" /><link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/template-customizer-BTiIn6t0.css" /><script type="module"
                                      src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/template-customizer-pfWEYAMA.js">
                                  </script>
                                  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
                                  <link rel="modulepreload" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/config-BSYyexv8.js" /><script type="module"
                                      src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/config-BSYyexv8.js">
                                  </script>
                                <script type="module">
                                    window.templateCustomizer = new TemplateCustomizer({
                                        cssPath: '',
                                        themesPath: '',
                                        defaultStyle: "light",
                                        defaultShowDropdownOnHover: "1", // true/false (for horizontal layout only)
                                        displayCustomizer: "1",
                                        lang: 'en',
                                        pathResolver: function(path) {
                                            var resolvedPaths = {
                                                // Core stylesheets
                                                'core.scss': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/core-BdqwDRjO.css',
                                                'core-dark.scss': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/core-dark-DlFO-GcK.css',

                                                // Themes
                                                'theme-default.scss': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/theme-default-fL703prY.css',
                                                'theme-default-dark.scss': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/theme-default-dark-6ufYpaZF.css',
                                                'theme-bordered.scss': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/theme-bordered-mukBFQsu.css',
                                                'theme-bordered-dark.scss': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/theme-bordered-dark-BxW4RxPF.css',
                                                'theme-semi-dark.scss': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/theme-semi-dark-V_cttLte.css',
                                                'theme-semi-dark-dark.scss': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/theme-semi-dark-dark-C6jQhYtB.css',
                                            }
                                            return resolvedPaths[path] || path;
                                        },
                                        'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions",
                                            "themes"
                                        ],
                                    });
                                </script>
                                  <script>
                                      (function(w, d, s, l, i) {
                                          w[l] = w[l] || [];
                                          w[l].push({
                                              'gtm.start': new Date().getTime(),
                                              event: 'gtm.js'
                                          });
                                          var f = d.getElementsByTagName(s)[0],
                                              j = d.createElement(s),
                                              dl = l != 'dataLayer' ? '&l=' + l : '';
                                          j.async = true;
                                          j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                                          f.parentNode.insertBefore(j, f);
                                      })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
                                  </script>
                                </head> --}}

    {{-- <body> --}}
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
                style="display: none; visibility: hidden"></iframe></noscript> --}}

    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            {{-- <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme"> --}}

            <!-- ! Hide app brand if navbar-full -->
            {{-- <div class="app-brand demo">
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1"
                            class="app-brand-link">
                            <span class="app-brand-logo demo me-1">
                                <span style="color:#9055FD;">
                                    <svg width="30" height="20" viewBox="0 0 250 196" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z"
                                            fill="currentColor" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z"
                                            fill="currentColor" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                                            fill="white" fill-opacity="0.15" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                                            fill="white" fill-opacity="0.3" />
                                    </svg>
                                </span>
                            </span>
                            <span class="app-brand-text demo menu-text fw-semibold ms-2">Materio</span>
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                            <i class="menu-toggle-icon d-xl-block align-middle"></i>
                        </a>
                    </div> --}}




            <!-- Layout page -->
            {{-- <div class="layout-page"> --}}




            <!-- BEGIN: Navbar-->
            <!-- Navbar -->
            {{-- <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <!--  Brand demo (display only for navbar-full and hide on below xl) -->

                    <!-- ! Not required for layout-without-menu -->
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0  d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="ri-menu-fill ri-24px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                                    <i class="ri-search-line ri-22px scaleX-n1-rtl me-1_5"></i>
                                    <span class="d-none d-md-inline-block text-muted ms-1_5">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Language -->
                            <li class="nav-item dropdown-language dropdown">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class='ri-translate-2 ri-22px'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-2">
                                    <li>
                                        <a class="dropdown-item active"
                                            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/lang/en"
                                            data-language="en" data-text-direction="ltr">
                                            <span class="align-middle">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item "
                                            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/lang/fr"
                                            data-language="fr" data-text-direction="ltr">
                                            <span class="align-middle">French</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item "
                                            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/lang/ar"
                                            data-language="ar" data-text-direction="rtl">
                                            <span class="align-middle">Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item "
                                            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/lang/de"
                                            data-language="de" data-text-direction="ltr">
                                            <span class="align-middle">German</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Language -->

                            <!-- Style Switcher -->
                            <li class="nav-item dropdown-style-switcher dropdown">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class='ri-22px'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i class='ri-sun-line ri-22px me-3'></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i
                                                    class="ri-moon-clear-line ri-22px me-3"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i
                                                    class="ri-computer-line ri-22px me-3"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- / Style Switcher-->

                            <!-- Quick links  -->
                            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-expanded="false">
                                    <i class='ri-star-smile-line ri-22px'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom py-50">
                                        <div class="dropdown-header d-flex align-items-center py-2">
                                            <h6 class="mb-0 me-auto">Shortcuts</h6>
                                            <a href="javascript:void(0)"
                                                class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                                    class="ri-layout-grid-line ri-24px text-heading"></i></a>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ri-calendar-line ri-26px text-heading"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/calendar"
                                                    class="stretched-link">Calendar</a>
                                                <small>Appointments</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ri-file-text-line ri-26px text-heading"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/invoice/list"
                                                    class="stretched-link">Invoice App</a>
                                                <small>Manage Accounts</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ri-user-line ri-26px text-heading"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/list"
                                                    class="stretched-link">User App</a>
                                                <small>Manage Users</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ri-computer-line ri-26px text-heading"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/access-roles"
                                                    class="stretched-link">Role Management</a>
                                                <small>Permission</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ri-pie-chart-2-line ri-26px text-heading"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1"
                                                    class="stretched-link">Dashboard</a>
                                                <small>Analytics</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ri-settings-4-line ri-26px text-heading"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-account"
                                                    class="stretched-link">Setting</a>
                                                <small>Account Settings</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ri-question-line ri-26px text-heading"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/pages/faq"
                                                    class="stretched-link">FAQs</a>
                                                <small class="text-muted mb-0">FAQs & Articles</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ri-tv-2-line ri-26px text-heading"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/modal-examples"
                                                    class="stretched-link">Modals</a>
                                                <small>Useful Popups</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Quick links -->

                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-4 me-xl-1">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-expanded="false">
                                    <i class="ri-notification-2-line ri-22px"></i>
                                    <span
                                        class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h6 class="mb-0 me-auto">Notification</h6>
                                            <div class="d-flex align-items-center">
                                                <span class="badge rounded-pill bg-label-primary me-2">8 New</span>
                                                <a href="javascript:void(0)"
                                                    class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Mark all as read"><i
                                                        class="ri-mail-open-line ri-20px text-body"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png"
                                                                alt class="w-px-40 h-auto rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                                        <small class="mb-1 d-block text-body">Won the monthly best
                                                            seller gold badge</small>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Charles Franklin</h6>
                                                        <small class="mb-1 d-block text-body">Accepted your
                                                            connection</small>
                                                        <small class="text-muted">12hr ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png"
                                                                alt class="w-px-40 h-auto rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">New Message ✉️</h6>
                                                        <small class="mb-1 d-block text-body">You have new message
                                                            from Natalie</small>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="ri-shopping-cart-2-line"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Whoo! You have new order 🛒 </h6>
                                                        <small class="mb-1 d-block text-body">ACME Inc. made new
                                                            order $1,154</small>
                                                        <small class="text-muted">1 day ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                                                alt class="w-px-40 h-auto rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Application has been approved 🚀
                                                        </h6>
                                                        <small class="mb-1 d-block text-body">Your ABC project
                                                            application has been approved.</small>
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="ri-pie-chart-2-line"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Monthly report is generated</h6>
                                                        <small class="mb-1 d-block text-body">July monthly
                                                            financial report is generated </small>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png"
                                                                alt class="w-px-40 h-auto rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Send connection request</h6>
                                                        <small class="mb-1 d-block text-body">Peter sent you
                                                            connection request</small>
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png"
                                                                alt class="w-px-40 h-auto rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">New message from Jane</h6>
                                                        <small class="mb-1 d-block text-body">Your have new message
                                                            from Jane</small>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                                    class="ri-error-warning-line"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">CPU is running high</h6>
                                                        <small class="mb-1 d-block text-body">CPU Utilization
                                                            Percent is currently at 88.63%,</small>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="border-top">
                                        <div class="d-grid p-4">
                                            <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                                <small class="align-middle">View all notifications</small>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png"
                                            alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                                    <li>
                                        <a class="dropdown-item pb-3"
                                            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/pages/profile-user">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar avatar-online">
                                                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png"
                                                            alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0 small">
                                                        John Doe
                                                    </h6>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/pages/profile-user">
                                            <i class="ri-user-3-line ri-22px me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-billing">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ri-file-text-line ri-22px me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger h-px-20 d-flex align-items-center justify-content-center">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <div class="d-grid px-4 pt-2 pb-1">
                                            <a class="btn btn-danger d-flex"
                                                href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/auth/login-basic">
                                                <small class="align-middle">Login</small>
                                                <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search...">
                        <i class="ri-close-fill search-toggler cursor-pointer"></i>
                    </div>
                    <!--/ Search Small Screens -->
                </nav> --}}
            <!-- / Navbar -->
            <!-- END: Navbar-->


            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">

                    <h4 class="mb-1">Users List</h4>
                    <p class="mb-6">A position provided access to predefined menus and features so that depending
                        on assigned position an administrator can have access to what user needs.</p>




                    <!-- Role cards -->
                    <div class="row g-6">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 4 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Vinnie Mostowy" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Allen Rieske" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Julee Rossignol" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Administrator</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 7 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Jimmy Ressula" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/4.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="John Doe" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Kristi Lawker" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Editor</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 5 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Andrew Tye" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Rishi Swaat" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Rossie Kim" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Users</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 3 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Kim Karlos" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/3.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Katy Turner" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Peter Adward" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Support</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 2 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Kim Merchent" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Sam D'souza" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Nurvi Karlos" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Restricted User</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card h-100">
                                <div class="row h-100">
                                    <div class="col-5">
                                        <div class="d-flex align-items-end h-100 justify-content-center">
                                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/illustration-3.png"
                                                class="img-fluid" alt="Image" width="80">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body text-sm-end text-center ps-sm-0">
                                            <button data-bs-target="#addUser" data-bs-toggle="modal"
                                                class="btn btn-sm btn-primary mb-4 text-nowrap add-new-role">Add
                                                New User</button>
                                            <p class="mb-0">Add user, if it does not exist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4 class="mt-6 mb-1">Total users with their position</h4>
                            <p class="mb-0">Find all of your company’s administrator accounts and their
                                associate position.</p>
                        </div>
                        <div class="col-12">
                            <!-- Role Table -->
                            <div class="card">
                                <div class="card-datatable table-responsive datatable-roles">
                                    <table class="datatables-users table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Fullname</th>
                                                <th>Username</th>
                                                <th>Position</th>
                                                {{-- <th>Plan</th>
                                                <th>Status</th> --}}
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($users as $user)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user['EN_fullname'] }}</td>
                                                    <td>{{ $user['Username'] }}</td>
                                                    <td>{{ $user['Position'] }}</td>
                                                    {{-- <td></td>
                                                    <td></td> --}}
                                                    <td class="text-center">
                                                        <!-- Delete icon -->
                                                        <a href="#" class="me-2" title="Delete">
                                                            <i class="ri-delete-bin-line ri-20px"></i>
                                                        </a>

                                                        <!-- View icon -->
                                                        <a href="#" class="me-2" title="View">
                                                            <i class="ri-eye-line ri-20px"></i>
                                                        </a>

                                                        <!-- More options (3 dots) -->
                                                        <a href="#" title="More">
                                                            <i class="ri-more-line ri-20px"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/ Role Table -->
                        </div>
                    </div>
                    <!--/ Role cards -->

                    <!-- Modal -->
                    <!-- Add Role Modal -->
                    {{-- <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-simple modal-dialog-centered modal-add-new-role">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-6">
                                        <h4 class="role-title mb-2 pb-0">Add New Position</h4>
                                        <p>Set position permissions</p>
                                    </div>
                                    <!-- Add role form -->
                                    <form id="addRoleForm" class="row g-3" onsubmit="return false">
                                        <div class="col-12 mb-3">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalRoleName" name="modalRoleName"
                                                    class="form-control" placeholder="Enter a position name"
                                                    tabindex="-1" />
                                                <label for="modalRoleName">Role Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h5>Role Permissions</h5>
                                            <!-- Permission table -->
                                            <div class="table-responsive">
                                                <table class="table table-flush-spacing">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">Administrator
                                                                Access <i class="ri-information-line"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Allows a full access to the system"></i>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="selectAll" />
                                                                        <label class="form-check-label" for="selectAll">
                                                                            Select All
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">User Management
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="userManagementRead" />
                                                                        <label class="form-check-label"
                                                                            for="userManagementRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="userManagementWrite" />
                                                                        <label class="form-check-label"
                                                                            for="userManagementWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="userManagementCreate" />
                                                                        <label class="form-check-label"
                                                                            for="userManagementCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">Content
                                                                Management</td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="contentManagementRead" />
                                                                        <label class="form-check-label"
                                                                            for="contentManagementRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="contentManagementWrite" />
                                                                        <label class="form-check-label"
                                                                            for="contentManagementWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="contentManagementCreate" />
                                                                        <label class="form-check-label"
                                                                            for="contentManagementCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">Disputes
                                                                Management</td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="dispManagementRead" />
                                                                        <label class="form-check-label"
                                                                            for="dispManagementRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="dispManagementWrite" />
                                                                        <label class="form-check-label"
                                                                            for="dispManagementWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="dispManagementCreate" />
                                                                        <label class="form-check-label"
                                                                            for="dispManagementCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">Database
                                                                Management</td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="dbManagementRead" />
                                                                        <label class="form-check-label"
                                                                            for="dbManagementRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="dbManagementWrite" />
                                                                        <label class="form-check-label"
                                                                            for="dbManagementWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="dbManagementCreate" />
                                                                        <label class="form-check-label"
                                                                            for="dbManagementCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">Financial
                                                                Management</td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="finManagementRead" />
                                                                        <label class="form-check-label"
                                                                            for="finManagementRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="finManagementWrite" />
                                                                        <label class="form-check-label"
                                                                            for="finManagementWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="finManagementCreate" />
                                                                        <label class="form-check-label"
                                                                            for="finManagementCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">Reporting</td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="reportingRead" />
                                                                        <label class="form-check-label"
                                                                            for="reportingRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="reportingWrite" />
                                                                        <label class="form-check-label"
                                                                            for="reportingWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="reportingCreate" />
                                                                        <label class="form-check-label"
                                                                            for="reportingCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">API Control</td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="apiRead" />
                                                                        <label class="form-check-label" for="apiRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="apiWrite" />
                                                                        <label class="form-check-label" for="apiWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="apiCreate" />
                                                                        <label class="form-check-label" for="apiCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">Repository
                                                                Management</td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="repoRead" />
                                                                        <label class="form-check-label" for="repoRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="repoWrite" />
                                                                        <label class="form-check-label" for="repoWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="repoCreate" />
                                                                        <label class="form-check-label" for="repoCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap fw-medium">Payroll</td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="payrollRead" />
                                                                        <label class="form-check-label" for="payrollRead">
                                                                            Read
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check me-4 me-lg-12">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="payrollWrite" />
                                                                        <label class="form-check-label"
                                                                            for="payrollWrite">
                                                                            Write
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="payrollCreate" />
                                                                        <label class="form-check-label"
                                                                            for="payrollCreate">
                                                                            Create
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Permission table -->
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary me-3">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                    <!--/ Add role form -->
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    <!--/ Add User Modal -->
                    <div class="modal fade" id="addUser" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-6">
                                        <h4 class="mb-2">Add User Information</h4>
                                        <p class="mb-6">Adding a new user will receive a privacy audit.
                                        </p>
                                    </div>
                                    <form id="addUserForm" class="row g-5" onsubmit="return false">
                                        <div class="col-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserFirstName"
                                                    name="modalEditUserFirstName" class="form-control" />
                                                <label for="modalEditUserFirstName">TH Fullname</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserLastName"
                                                    name="modalEditUserLastName" class="form-control" />
                                                <label for="modalEditUserLastName">EN Fullname</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserLastName"
                                                    name="modalEditUserLastName" class="form-control" />
                                                <label for="modalEditUserLastName">Nickname</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserLastName"
                                                    name="modalEditUserLastName" class="form-control" />
                                                <label for="modalEditUserLastName">Position</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserName" name="modalEditUserName"
                                                    class="form-control" />
                                                <label for="modalEditUserName">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="password" id="modalEditUserLastName"
                                                    name="modalEditUserLastName" class="form-control" />
                                                <label for="modalEditUserLastName">Password</label>
                                            </div>
                                        </div>



                                        {{-- <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                                    class="form-control" />
                                                <label for="modalEditUserEmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <select id="modalEditUserStatus" name="modalEditUserStatus"
                                                    class="form-select" aria-label="Default select example">
                                                    <option value="1" selected>Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Suspended</option>
                                                </select>
                                                <label for="modalEditUserStatus">Status</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                                    class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                                                <label for="modalEditTaxID">Tax ID</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">US (+1)</span>
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="modalEditUserPhone"
                                                        name="modalEditUserPhone" class="form-control phone-number-mask"
                                                        value="+1 609 933 4422" placeholder="+1 609 933 4422" />
                                                    <label for="modalEditUserPhone">Phone Number</label>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary me-3">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Add User Modal -->






                    <!-- Edit User Modal -->
                    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-6">
                                        <h4 class="mb-2">Edit User Information</h4>
                                        <p class="mb-6">Updating user details will receive a privacy audit.
                                        </p>
                                    </div>
                                    <form id="editUserForm" class="row g-5" onsubmit="return false">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserFirstName"
                                                    name="modalEditUserFirstName" class="form-control" value="Oliver"
                                                    placeholder="Oliver" />
                                                <label for="modalEditUserFirstName">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserLastName"
                                                    name="modalEditUserLastName" class="form-control" value="Queen"
                                                    placeholder="Queen" />
                                                <label for="modalEditUserLastName">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserName" name="modalEditUserName"
                                                    class="form-control" value="oliver.queen"
                                                    placeholder="oliver.queen" />
                                                <label for="modalEditUserName">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                                    class="form-control" value="oliverqueen@gmail.com"
                                                    placeholder="oliverqueen@gmail.com" />
                                                <label for="modalEditUserEmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <select id="modalEditUserStatus" name="modalEditUserStatus"
                                                    class="form-select" aria-label="Default select example">
                                                    <option value="1" selected>Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Suspended</option>
                                                </select>
                                                <label for="modalEditUserStatus">Status</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                                    class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                                                <label for="modalEditTaxID">Tax ID</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">US (+1)</span>
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="modalEditUserPhone"
                                                        name="modalEditUserPhone" class="form-control phone-number-mask"
                                                        value="+1 609 933 4422" placeholder="+1 609 933 4422" />
                                                    <label for="modalEditUserPhone">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary me-3">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Edit User Modal -->
                    <!-- / Modal -->

                </div>
                <!-- / Content -->


                {{-- <div class="content-backdrop fade"></div> --}}
            </div>
            <!--/ Content wrapper -->
            {{-- </div> --}}
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        {{-- <div class="layout-overlay layout-menu-toggle"></div> --}}
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        {{-- <div class="drag-target"></div> --}}
    </div>
    <!-- / Layout wrapper -->
    <!--/ Layout Content -->


    {{-- <div class="buy-now">
            <a href="https://themeselection.com/item/materio-bootstrap-laravel-admin-template/" target="_blank"
                class="btn btn-danger btn-buy-now">Buy Now</a>
        </div> --}}


    <!-- Include Scripts -->
    <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Vendor JS-->

    {{-- <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CbdDuLi-.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CED9k22g.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjsHelpers-BosuxZz1.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-Czc5UB_B.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/popper-DNZnuk_L.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/node-waves-XDuO7R8f.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/hammer-36U3igM9.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-BKwBoP4T.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/menu-CY9lYqyY.js" />
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CbdDuLi-.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/popper-DNZnuk_L.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/node-waves-XDuO7R8f.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/hammer-36U3igM9.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-BKwBoP4T.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/menu-CY9lYqyY.js">
        </script>
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-bootstrap5-DVZaE8TT.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjsHelpers-BosuxZz1.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjs-dynamic-modules-TDtrdbi3.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CED9k22g.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-Czc5UB_B.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/popular-BiiL9sLA.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap5-COKFI6zn.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/index-CrI7K4FP.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/auto-focus-DSygTglc.js" />
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-bootstrap5-DVZaE8TT.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/popular-BiiL9sLA.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap5-COKFI6zn.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/auto-focus-DSygTglc.js">
        </script><!-- END: Page Vendor JS-->
        <!-- BEGIN: Theme JS-->
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/main-DRGn0ueN.js" />
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/main-DRGn0ueN.js">
        </script> --}}
    <!-- END: Theme JS-->
    <!-- Pricing Modal JS-->
    <!-- END: Pricing Modal JS-->
    <!-- BEGIN: Page JS-->

    {{-- <link rel="modulepreload"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/app-access-roles-BdlGvEK7.js" />
    <link rel="modulepreload"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/modal-add-role-BPqCDwfP.js" />
    <script type="module"
        src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/app-access-roles-BdlGvEK7.js">
    </script>
    <script type="module"
        src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/modal-add-role-BPqCDwfP.js">
    </script> --}}
    <!-- END: Page JS-->

    {{-- </body> --}}

    {{-- </html> --}}

@endsection
