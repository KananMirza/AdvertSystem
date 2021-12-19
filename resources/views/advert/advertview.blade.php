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
                        <h1>{{$advert->title}}</h1>
                        <ul>
                            <li>
                                <a href="index.html">Ana səhifə</a>
                            </li>
                            <li>
                                <a href="index.html">Elanlar</a>
                            </li>
                            <li>
                                <a href="index.html">{{\App\Models\Categories::where('id',$advert->category)->first()->name}}</a>
                            </li>
                            <li>{{$advert->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=          Product Start         =-->
    <!--=====================================-->
    <section class="single-product-wrap-layout2 section-padding-equal-70 bg-accent">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="single-product-box-layout1">
                        <div class="product-info light-shadow-bg">
                            <div class="product-content light-box-content">
                                <div class="item-img-gallery">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active"  role="tabpanel">
                                            <a href="#">
                                                <img  class="zoom_01" id="gallery0" src="{{asset('advert/'.$advert->id.'/'.json_decode($advert->img)[0])}}" alt="product" data-zoom-image="media/product/product24.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach(json_decode($advert->img) as $key=>$img)
                                        <li class="nav-item mb-2">
                                            <a class="nav-link active" data-toggle="tab" role="tab" aria-selected="true" >
                                                <img style="height: 100px;width: 150px" src="{{asset('advert/'.$advert->id.'/'.$img)}}" alt="thumbnail" class="image" onclick="viewimage({{$key}})">
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="single-entry-meta">
                                    <ul>
                                        <li><i class="far fa-clock"></i>{{$advert->created_at->format('d/m/Y')}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$city->name}}</li>
                                        <li><i class="far fa-eye"></i>X views</li>
                                    </ul>

                                </div>
                                <div class="item-price">

                                    {{$advert->price}}
                                    <span class="currency-symbol">AZN</span>
                                </div>
                                <div class="item-details-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="left-side-content">
                                                <p>{{$advert->advert_desc}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-action-area">
                                    <ul>
                                        <li class="inline-item"><a href="#"><i class="far fa-heart"></i>Add to Favourites</a></li>
                                        <li class="inline-item"><a href="#"><i class="fas fa-exclamation-triangle"></i>Şikayət et</a></li>
                                        <li class="item-social">
                                                <span class="share-title">
                                                    <i class="fas fa-share-alt"></i>
                                                    Paylaş:
                                                </span>
                                            <a href="#" class="bg-facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="bg-google"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item-related-product light-shadow-bg">
                            <div class="flex-heading-layout2">
                                <h3 class="widget-border-title">Oxşar Elanlar</h3>
                                <div id="owl-nav1" class="smart-nav-layout1">
                                        <span class="rt-prev">
                                            <i class="fas fa-angle-left"></i>
                                        </span>
                                    <span class="rt-next">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                </div>
                            </div>
                            <div class="light-box-content">
                                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-custom-nav="#owl-nav1" data-autoplay="false" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
                                    <div class="product-box-layout1 box-shadwo-light mg-1">
                                        <div class="item-img">
                                            <a href="single-product1.html"><img src="{{asset('media/product/product1.jpg')}}" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="single-product1.html">HD 27 inch Mac 1 year used only</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>4 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Port Chester, New York</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                2,500
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box-layout1 box-shadwo-light mg-1">
                                        <div class="item-img">
                                            <a href="single-product1.html"><img src="{{asset('media/product/product2.jpg')}}" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="single-product1.html">New Banded Smart Watch</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>4 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Kansas, Emporia</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                47
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box-layout1 box-shadwo-light mg-1">
                                        <div class="item-img">
                                            <a href="single-product1.html" class="item-trending"><img src="{{asset('media/product/product3.jpg')}}" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="single-product1.html">High quality brand new headphone</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>4 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New York, Mineola</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                15
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box-layout1 box-shadwo-light mg-1">
                                        <div class="item-img">
                                            <a href="#"><img src="{{asset('media/product/product4.jpg')}}" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="#">Running shoes imported from china</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>4 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>California, Bakersfield</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                36
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-review light-shadow-bg">
                            <h3 class="widget-border-title">Rəy bildirin</h3>
                            <div class="light-box-content">
                                <form action="#">
                                    <div class="item-text">Email adresiniz paylaşılmır *</div>
                                    <div class="form-group">
                                        <label>Ad *</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Başlıq *</label>
                                        <input type="text" class="form-control" name="review">
                                    </div>
                                    <div class="form-group">
                                        <label>Mesaj *</label>
                                        <textarea class="form-control textarea" name="message" id="message" cols="30" rows="8"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="item-btn">
                                            Göndər
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 sidebar-break-md sidebar-widget-area">
                    <div class="widget-lg widget-author-info widget-light-bg">
                        <h3 class="widget-border-title">Satıcı haqqında</h3>
                        <div class="author-content">
                            <div class="author-name">
                                @if($user->store_id != null)
                                <div class="item-img">
                                    <img style="width: 100px" src="{{asset(\App\Models\Store::where('id',$user->store_id)->first()->logo)}}" alt="author">
                                </div>
                                @endif
                                <h4 class="author-title"><a href="#">{{$advert->name}}</a></h4>
                            </div>
                            <div class="author-meta">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i>{{\App\Models\cities::where('id',$user->adress)->first()->name}}</li>
                                    <li><i class="fas fa-shopping-basket"></i><a href="#">Bütün elanlar</a></li>
                                </ul>
                            </div>
                            <div class="phone-number classima-phone-reveal not-revealed" data-phone="{{$advert->phone}}">
                                <div class="number"><i class="fas fa-phone"></i><span id="mobile">{{mb_substr($advert->phone,0,9)}}XXXX</span></div>
                                <div class="item-text">Nömrəni görmək üçün klik edin</div>
                            </div>
                            <div class="author-mail">
                                <a href="mailto:{{$advert->email}}" class="mail-btn" >
                                    <i class="fas fa-envelope"></i>Satıcı ilə əlaqə
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-banner">
                        <a href="#">
                            <img src="{{asset('media/figure/widget-banner1.jpg')}}" alt="banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

@section('js')
    <script>
        const viewimage = (id) =>{
            let img = document.getElementsByClassName('image')[id].src
            document.getElementById('gallery0').src = img;
        }
    </script>

@endsection

