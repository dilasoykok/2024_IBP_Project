<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Rakhmatullo Ergashev">

    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="@yield('icon')">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/elegant-font-icons.css">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/elegant-line-icons.css">
    <!-- Themify Icon CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/themify-icons.css">
    <!-- Barber Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/barber-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/animate.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/venobox/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/nice-select.css">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/owl.carousel.css">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/slicknav.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/service_css.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/main.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/responsive.css">

    <script src="{{asset('assets')}}/Design/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    @yield('head')

</head>
<body>

    @include('home.header')

    @yield('slide')

    @yield('content')

    @include('home.footer')

    @yield('foot')

</body>
</html>
