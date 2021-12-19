<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('cropped-logo-light.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dependencies/bootstrap/css/bootstrap.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('dependencies/fontawesome/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('dependencies/flaticon/flaticon.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.theme.default.min.css')}}">
    <!-- Animated Headlines CSS -->
    <link rel="stylesheet" href="{{asset('dependencies/jquery-animated-headlines/css/jquery.animatedheadline.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('dependencies/magnific-popup/css/magnific-popup.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('dependencies/animate.css/css/animate.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('dependencies/meanmenu/css/meanmenu.min.css')}}">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    @yield('css')
</head>
