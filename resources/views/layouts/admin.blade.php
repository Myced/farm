
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> {{ config('app.name') }} - @yield('title') </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    @include('includes.styles')

    @yield('css.plugins')

    <!-- Custom Css -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/assets/css/themes/all-themes.css" rel="stylesheet" />

    @yield('styles')
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('includes.topnav')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->

        @include('includes.sidenav')

        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('includes.rightsidebar')
        <!-- #END# Right Sidebar -->
    </section>

    @yield('content')

    @include('includes.scripts')

    @include('includes.notification')

    @yield('scripts')

    <!-- Custom Js -->
    <script src="/assets/js/admin.js"></script>

    @yield('pagescript')

    <!-- Demo Js -->
    <script src="/assets/js/demo.js"></script>
</body>

</html>
