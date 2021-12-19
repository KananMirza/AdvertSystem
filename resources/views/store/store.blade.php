@extends('layouts.master')
@section('title','"Əlaqə" | TezAl')

@section('content')
    <!--=====================================-->
    <!--=        Inner Banner Start         =-->
    <!--=====================================-->
    <section class="inner-page-banner" data-bg-image="{{asset('media/banner/banner1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Mağazalar</h1>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Ana səhifə</a>
                            </li>
                            <li>Mağazalar</li>
                            <li>{{$store->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=          Store Banner Start       =-->
    <!--=====================================-->
    <section class="store-banner-wrap-layout1">
        <div class="container">
            <div class="store-banner-box" id="banner">
                <div class="banner-content">
                    <div class="store-logo">
                        <img src="{{asset($store->logo)}}" style="width: 100px;height: 100px" alt="RadiusTheme">
                    </div>
                    <div class="store-content">
                        <h2 class="item-title">{{$store->name}}</h2>
                        <ul class="item-meta">
                            <li><i class="fas fa-map-marker-alt"></i>{{\App\Models\cities::where('id',$user->adress)->first()->name}}</li>
                            <li><i class="fas fa-user"></i> Qatılma tarixi: {{$store->created_at->format('d-m-Y')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=          Product Start         =-->
    <!--=====================================-->
    <section class="store-wrap-layout2">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div id="product-view" class="product-box-grid">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="product-grid-view">
                                    <div class="grid-view-layout2">
                                        <div class="product-box-layout1">
                                            <div class="item-img">
                                                <a href="single-product1.html" class="item-trending"><img src="{{asset('media/product/product18.jpg')}}" alt="Product"></a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    1,240
                                                </div>
                                                <h3 class="item-title"><a href="single-product1.html">Galaxy Note</a><span>New</span></h3>
                                                <ul class="entry-meta">
                                                    <li><i class="far fa-clock"></i>3 months ago</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>New Jersey, Cape May</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="product-grid-view">
                                    <div class="grid-view-layout2">
                                        <div class="product-box-layout1">
                                            <div class="item-img">
                                                <a href="single-product1.html"><img src="{{asset('media/product/product1.jpg')}}" alt="Product"></a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    2,500
                                                </div>
                                                <h3 class="item-title"><a href="single-product1.html">HD 27 inch Mac 1 year used only</a><span>New</span></h3>
                                                <ul class="entry-meta">
                                                    <li><i class="far fa-clock"></i>4 months ago</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Port Chester, New York</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-view">
                                    <div class="list-view-layout2">
                                        <div class="product-box-layout3">
                                            <div class="item-img">
                                                <a href="single-product1.html"><img src="{{asset('media/product/product9.jpg')}}" alt="Product"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="item-content">
                                                    <h3 class="item-title"><a href="single-product1.html">HD 27 inch Mac 1 year used only</a><span>New</span></h3>
                                                    <ul class="entry-meta">
                                                        <li><i class="far fa-clock"></i>3 months ago</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Port Chester, New York</li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                </div>
                                                <div class="item-right">
                                                    <div class="right-meta">
                                                        <span><i class="fas fa-shopping-cart"></i>Sell</span>
                                                        <span><i class="far fa-eye"></i>126 Views</span>
                                                    </div>
                                                    <div class="item-price">
                                                        <span class="currency-symbol">$</span>
                                                        2,500
                                                    </div>
                                                    <div class="item-btn">
                                                        <a href="#">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 sidebar-break-md sidebar-widget-area">
                    <div class="widget-lg widget-store-detail widget-light-bg">
                        <h3 class="widget-border-title">Haqqında</h3>
                        <div class="store-content">
                            <p>{{$store->store_desc}}</p>
                        </div>
                    </div>
                    <div class="widget-lg widget-author-info widget-store-info widget-light-bg">
                        <h3 class="widget-border-title">Mağaza haqqında</h3>
                        <div class="author-content">
                            <div class="store-website">
                                <a href="{{$store->website}}" target="_blank"><i class="fas fa-globe-asia"></i>Şirkət saytı</a>
                            </div>
                            <div class="phone-number classima-phone-reveal not-revealed" data-phone="{{$user->mobile}}">
                                <a href="tel:{{$user->mobile}}" class="number"><i class="fas fa-phone"></i><span>{{$user->mobile}}</span></a>
                            </div>
                            <div class="author-mail">
                                <a href="mailto:{{$user->email}}" class="mail-btn" data-toggle="modal" data-target="#author-mail">
                                    <i class="fas fa-envelope"></i>{{$user->email}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

@section('js')
    <script>
        document.getElementById('banner').style.backgroundImage = "url('{{asset($store->banner)}}')";
    </script>
    @endsection




