@extends('layouts.master')
@section('title','"Əlaqə" | TezAl')

@section('content')
    <!--=====================================-->
    <!--=        Inner Banner Start         =-->
    <!--=====================================-->
    <section class="inner-page-banner" data-bg-image="media/banner/banner1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Haqqımızda</h1>
                        <ul>
                            <li>
                                <a href="index.html">Ana səhifə</a>
                            </li>
                            <li>Haqqımızda</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=          About Us Start        	=-->
    <!--=====================================-->
    <section class="about-wrap-layout1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-box-layout1">
                        <h2 class="item-title">Layihə Haqqında</h2>
                        <p>Tezal.az layihəsi Azərbaycanda özəl elanlar üçün universal meydança təşkil etmək məqsədi ilə yaradılıb.

                            Hər bir kəs saytdan istifadə etməklə geyim və mebeldən tutmuş elektronika və avtomobilədək hər şey ala və sata bilər.</p>

                        <p>Tezal.az-a əsasən ayrıca fərdlər elan yerləşdirir, lakin sayt şirkət və fərdi sahibkarlar üçün də maraq kəsb edir, buna görə Tap.az-da təkcə işlənmiş deyil, eləcə də yeni məhsullar əldə etmək olar.

                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-box-layout2">
                        <div class="item-img">
                            <img src="media/about/about1.jpg" alt="About Us">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=          Brnad Start        		=-->
    <!--=====================================-->
    <section class="brand-wrap-layout1">
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="10" data-margin="30" data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
                <div class="brand-box-layout1">
                    <img src="media/brand/brand1.jpg" alt="brand">
                </div>
                <div class="brand-box-layout1">
                    <img src="media/brand/brand2.jpg" alt="brand">
                </div>
                <div class="brand-box-layout1">
                    <img src="media/brand/brand3.jpg" alt="brand">
                </div>
                <div class="brand-box-layout1">
                    <img src="media/brand/brand4.jpg" alt="brand">
                </div>
            </div>
        </div>

    </section>


@endsection
