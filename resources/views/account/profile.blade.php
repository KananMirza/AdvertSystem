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
                        <h1>Hesab</h1>
                        <ul>
                            <li>
                                <a href="index.html">Ana səhifə</a>
                            </li>
                            <li>Hesabım</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding-equal-70">

        <div class="container">
            @include('layouts.error_messages')
            <div class="row">
                <div class="col-lg-3 sidebar-break-sm sidebar-widget-area mt-0">
                    <div class="widget-bottom-margin widget-account-menu widget-light-bg">
                        <h3 class="widget-border-title">Hesab</h3>
                        <ul class="nav nav-tabs flex-column" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab" aria-selected="true">Profil</a>
                            </li>
                            @if($user->user_role == 1)
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#store" role="tab" aria-selected="false">Mağaza</a>
                                </li>
                            @endif
                            @if($user->user_role == 0)
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#accout-detail" role="tab" aria-selected="false">Hesab</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#my-listing" role="tab" aria-selected="false">Mənim elanlarım</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#favourite" role="tab" aria-selected="false">Favorilərim</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">Çıxış</a>
{{--                                <a class="nav-link"  data-toggle="tab" href="{{route('logout')}}" role="tab" aria-selected="false">Çıxış</a>--}}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        @if($user->user_role == 0)
                        <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick = "viewModal({{$user->id}})">Mağaza hesabı et</button>
                        @endif
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                            <div class="myaccount-dashboard light-shadow-bg">
                                <div class="light-box-content">
                                    <div class="media-box">
                                        <div class="item-img">
                                            <img src="{{asset('media/figure/avatar.jpg')}}" alt="avatar">
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><span>Ad: </span>{{$user->name}}</h3>
                                            <div class="item-email"><span>Email: </span>{{$user->email}}</div>
                                        </div>
                                    </div>
                                    <div class="static-report">
                                        <h3 class="report-title">Hesab haqqında</h3>
                                        <div class="report-list">
                                            <div class="report-item">
                                                <label>Vəziyyət</label>
                                                <div class="item-value">Aktiv</div>
                                            </div>
                                        </div>
                                        <div class="report-list">
                                            <div class="report-item">
                                                <label>Giriş tarixi</label>
                                                <div class="item-value">{{$user->created_at}}</div>
                                            </div>
                                        </div>
                                        <div class="report-list">
                                            <div class="report-item">
                                                <label>Favorilərim</label>
                                                <div class="item-value">947</div>
                                            </div>
                                        </div>
                                        <div class="report-list">
                                            <div class="report-item">
                                                <label>Elanlarım</label>
                                                <div class="item-value">{{count(\App\Models\advert::where('user_id',$user->id)->get())}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="my-listing" role="tabpanel">
                            <div class="myaccount-listing">
                                @foreach($adverts as $advert)
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="{{route('advertIndex',$advert->id)}}" class={{$advert->advert_type ==1 ? 'item-trending' : ''}}{{$advert->advert_type ==2 ? 'item-premium' : ''}}><img style="height: 240px;width: 210px" src="{{asset('advert/'.$advert->id.'/'.json_decode($advert->img)[0])}}" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="{{route('advertIndex',$advert->id)}}">{{$advert->title}}</a></h3>
                                                <ul class="entry-meta">
                                                    <li><i class="far fa-clock"></i>{{$advert->created_at->format('d/m/Y')}}</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>{{\App\Models\cities::where('id',$advert->adress)->first()->name}}</li>
                                                    <li><i class="far fa-eye"></i> X Görüntü</li>
                                                </ul>
                                                <ul class="item-condition">
                                                    <li><span>Kateqoriya:</span> {{\App\Models\Categories::where('id',$advert->category)->first()->name}}</li>
                                                </ul>
                                                <div class="btn-group">
                                                    <a href="#">Redaktə Et</a>
                                                    <a href="#">Sil</a>
                                                </div>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">AZN</span>
                                                    {{$advert->price}}
                                                </div>
                                                <div class="item-btn">
                                                    <a href="{{route('advertIndex',$advert->id)}}">Detallar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                            @if($store)
                        <div class="tab-pane fade" id="store" role="tabpanel">
                            <div class="light-shadow-bg post-ad-box-layout1 myaccount-store-settings">
                                <div class="light-box-content">
                                    <form action="{{route('updateStore')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="post-section store-banner">
                                            <div class="post-ad-title">
                                                <i class="far fa-image"></i>
                                                <h3 class="item-title">Mağaza Şəkil</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Arxa Fon *
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <div class="store-banner-wrapper">
                                                            <div class="banenr-img">
                                                                <img src="{{$store->banner ? $store->banner : asset('media/figure/store-banner.jpg')}}" alt="Store Banner">
                                                                <div class="media-action">
                                                                    <a href="#" class="media-delete"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                                <input  class="media-add" type="file" name="banner">
                                                            </div>
                                                            <div class="alert alert-danger">
                                                                Tövsiyyə olunan ölçü (1180x300)px, Maksimim 1 MB, Qəbul edilən şəkil tipləri (png, jpg, jpeg)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Mağaza Logo*
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <div class="store-banner-wrapper">
                                                            <div class="banenr-img">
                                                                <img src="{{$store->logo ? $store->logo : asset('media/figure/store10.png')}}" alt="Store Logo">
                                                                <div class="media-action">
                                                                    <a href="#" class="media-delete"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </div>
                                                            <input class="media-add" type="file" name="logo">
                                                            <div class="alert alert-danger">
                                                                Tövsiyyə olunan ölçü (180x140)px, Maksimim 1 MB, Qəbul edilən şəkil tipləri (png, jpg, jpeg)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-section store-information">
                                            <div class="post-ad-title">
                                                <i class="fas fa-folder-open"></i>
                                                <h3 class="item-title">Mağaza Məlumatları</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Mağaza №
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                       YPTX-{{$store->id}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Ad
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="text" value="{{$store->name}}" class="form-control" name="name" id="store-name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Email
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        {{$user->email}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Telefon
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="text" value="{{$user->mobile}}" class="form-control" name="phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Website
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="text" value="{{$store->website}}" class="form-control" name="website" id="store-website">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Şəhər
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <select class="form-control" name="city">
                                                            <option disabled="disabled">Şəhər seçin</option>
                                                        @foreach($cities as $city)
                                                            <option {{$user->adress==$city->id ? "selected" : ''}} value="{{$city->id}}">{{$city->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Haqqında
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <textarea name="description" class="form-control textarea" cols="30" rows="6">{{$store->store_desc}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="submit" class="submit-btn" value="Redaktə et">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            @endif
                        <div class="tab-pane fade" id="favourite" role="tabpanel">
                            <div class="myaccount-listing">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="single-product1.html"><img src="media/product/product19.jpg" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="single-product1.html">Galaxy Note</a><span>New</span></h3>
                                                <ul class="entry-meta">
                                                    <li><i class="far fa-clock"></i>3 months ago</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>New Jersey, Cape May</li>
                                                    <li><i class="far fa-eye"></i>86 Views</li>
                                                </ul>
                                                <ul class="item-condition">
                                                    <li><span>Condition:</span> New</li>
                                                    <li><span>Brand:</span> Other Brand</li>
                                                </ul>
                                                <div class="btn-group">
                                                    <a href="#">Remove from Favourites</a>
                                                </div>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    1,240
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
                        <div class="tab-pane fade" id="accout-detail" role="tabpanel">
                            <div class="light-shadow-bg post-ad-box-layout1 myaccount-store-settings myaccount-detail">
                                <div class="light-box-content">

                                    <form action="{{route('accountupdate')}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$user->id}}" name="id">
                                        <div class="post-section basic-information">
                                            <div class="post-ad-title">
                                                <i class="fas fa-user"></i>
                                                <h3 class="item-title">Məlumatlarım</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Ad
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="text" value="{{$user->name}}" class="form-control" name="username" id="email">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Email
                                                        <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <div class="text-value">{{$user->email}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Telefon
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="text" value="{{$user->mobile}}" class="form-control" name="phone" id="phone1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-section location-detail">
                                            <div class="post-ad-title">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <h3 class="item-title">Ünvan</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="control-label">
                                                        Şəhər
                                                        <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <select class="form-control select-box" name="city">

                                                            <option value="" disabled="disabled" selected="selected">Şəhər seçin</option>

                                                            @foreach($cities as $city)
                                                                <option {{$user->adress==$city->name ? "selected" : ''}} value="{{$city->id}}">{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <input type="submit" class="submit-btn" value="Məlumatları yenilə">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mağaza hesabı</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('createStore')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$user->id}}" id ='id' name="id">
                        <input type="hidden" value="1" id ='role' name="role">
                        <div class="mb-3">
                            <label for="store_name" class="col-form-label">Mağaza Adı:</label>
                            <input type="text" class="form-control" name="store_name" id="store_name">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Təsdiqlə</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bağla</button>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        const viewModal = (id)=>{
            $('#exampleModal').modal('show');
        };
    </script>
@endsection
