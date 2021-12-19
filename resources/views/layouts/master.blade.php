<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="sticky-header">
<a href="#wrapper" data-type="section-switch" class="scrollup">
    <i class="fas fa-angle-double-up"></i>
</a>
<!-- ScrollUp End Here -->
<!-- Preloader Start Here -->

<!-- Preloader End Here -->

<div id="wrapper" class="wrapper">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</div>

@include('layouts.scripts')
</body>
