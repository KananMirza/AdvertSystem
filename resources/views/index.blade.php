@extends('layouts.master')
@section('title','Elan Saytı | TezAl')

@section('content')
    <!--=====================================-->
    <!--=          Search Box Start         =-->
    <!--=====================================-->
    <section>
        <div class="container">
            <div class="search-box-wrap-layout2">
                <div class="search-box-layout1">
                    <form action="#">
                        <div class="row no-gutters">
                            <div class="col-lg-3 form-group">
                                <div class="input-search-btn search-location" data-toggle="modal" data-target="#modal-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <label>Ərazi seçin</label>
                                </div>
                            </div>
                            <div class="col-lg-3 form-group">
                                <div class="input-search-btn search-category" data-toggle="modal" data-target="#modal-category">
                                    <i class="fas fa-tags"></i>
                                    <label>Kateqoriya seçin</label>
                                </div>
                            </div>
                            <div class="col-lg-4 form-group">
                                <div class="input-search-btn search-keyword">
                                    <i class="fas fa-text-width"></i>
                                    <input type="text" class="form-control" placeholder="Axtarış" name="keyword">
                                </div>
                            </div>
                            <div class="col-lg-2 form-group">
                                <button type="submit" class="submit-btn"><i class="fas fa-search"></i>Axtar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Category Start           =-->
    <!--=====================================-->
    <section class="section-padding-top-heading">
        <div class="container">
            <div class="heading-layout1">
                <h2 class="heading-title">Ən çox axtarılan kateqoriyalar</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category-box-layout1">
                        <a href="#">
                            <div class="item-icon">
                                <i class="far fa-building"></i>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$categories[1]->name}}</h3>
                                <div class="item-count">1 Elan</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category-box-layout1">
                        <a href="#">
                            <div class="item-icon">
                                <i class="fas fa-male"></i>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$categories[2]->name}}</h3>
                                <div class="item-count">3 Ad</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category-box-layout1">
                        <a href="#">
                            <div class="item-icon">
                                <i class="fas fa-glass-martini"></i>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$categories[3]->name}}</h3>
                                <div class="item-count">6 Ad</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category-box-layout1">
                        <a href="#">
                            <div class="item-icon">
                                <i class="fas fa-archive"></i>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$categories[6]->name}}</h3>
                                <div class="item-count">0 Ad</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category-box-layout1">
                        <a href="#">
                            <div class="item-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$categories[7]->name}}</h3>
                                <div class="item-count">0 Ad</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category-box-layout1">
                        <a href="#">
                            <div class="item-icon">
                                <i class="far fa-futbol"></i>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$categories[8]->name}}</h3>
                                <div class="item-count">4 Ad</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category-box-layout1">
                        <a href="#">
                            <div class="item-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$categories[9]->name}}</h3>
                                <div class="item-count">1 Ad</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category-box-layout1">
                        <a href="#">
                            <div class="item-icon">
                                <i class="far fa-file-archive"></i>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$categories[4]->name}}</h3>
                                <div class="item-count">1 Ad</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Product Box Start           =-->
    <!--=====================================-->
    <section class="section-padding-top-heading bg-accent">
        <div class="container">
            <div class="heading-layout1">
                <h2 class="heading-title">Təcili Elanlar</h2>
            </div>
            <div class="row">
                    @foreach($advertT as $advert)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-box-layout1">
                        <div class="item-img">
                            <a href="{{route('advertIndex',$advert->id)}}" class="item-trending"><img style="height: 250px;width: 100%" src="{{asset('advert/'.$advert->id.'/'.json_decode($advert->img)[0])}}" alt="Product"></a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="single-product1.html">{{$advert->title}}</a></h3>
                            <ul class="entry-meta">
                                <li><i class="far fa-clock"></i>{{$advert->created_at->format('d/m/Y')}}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{\App\Models\cities::where('id',$advert->adress)->first()->name}}</li>
                            </ul>
                            <div class="item-price">
                                {{$advert->price}}
                                <span class="currency-symbol">AZN</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-padding-top-heading bg-accent">
        <div class="container">
            <div class="heading-layout1">
                <h2 class="heading-title">Son Elanlar</h2>
            </div>
            <div class="row">
                @foreach($adverts as $advert)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-box-layout1">
                        <div class="item-img">
                            <a href="{{route('advertIndex',$advert->id)}}" class={{$advert->advert_type ==1 ? 'item-trending' : ''}}{{$advert->advert_type ==2 ? 'item-premium' : ''}}><img style="height: 250px;width: 100%" src="{{asset('advert/'.$advert->id.'/'.json_decode($advert->img)[0])}}" alt="Product"></a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{route('advertIndex',$advert->id)}}">{{$advert->title}}</a></h3>
                            <ul class="entry-meta">
                                <li><i class="far fa-clock"></i>{{$advert->created_at->format('d/m/Y')}}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{\App\Models\cities::where('id',$advert->adress)->first()->name}}</li>
                            </ul>
                            <div class="item-price">

                                {{$advert->price}}
                                <span class="currency-symbol">AZN</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="section-padding-top-heading bg-accent">
        <div class="container">
            <div class="heading-layout1">
                <h2 class="heading-title">Premium Elanlar</h2>
            </div>
            <div class="row">
                @foreach($advertP as $advert)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-box-layout1">
                        <div class="item-img">
                            <a href="{{route('advertIndex',$advert->id)}}" class="item-premium"><img style="height: 250px;width: 100%" src="{{asset('advert/'.$advert->id.'/'.json_decode($advert->img)[0])}}" alt="Product"></a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{route('advertIndex',$advert->id)}}">{{$advert->title}}</a></h3>
                            <ul class="entry-meta">
                                <li><i class="far fa-clock"></i>{{$advert->created_at->format('d/m/Y')}}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{\App\Models\cities::where('id',$advert->adress)->first()->name}}</li>
                            </ul>
                            <div class="item-price">

                                {{$advert->price}}
                                <span class="currency-symbol">AZN</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="modal fade modal-location" id="modal-category" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="fas fa-times" aria-hidden="true"></span>
                </button>

                    <div class="sidebar-break-md sidebar-widget-area" id="accordion">
                        <div class="widget-bottom-margin-md widget-accordian widget-filter">
                            <h3 class="widget-bg-title">Kateqoriyalar</h3>
                            <form action="#">
                                <div class="accordion-box">
                                    <div class="card filter-location multi-accordion filter-item-list">
                                        <div id="collapseThree" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="multi-accordion-content" id="accordion3">
                                                    @foreach($categories as $category)
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a class="parent-list collapsed" role="button" data-toggle="collapse" href="#collapse{{$category->id}}" aria-expanded="false">
                                                                {{$category->name}}
                                                            </a>
                                                        </div>
                                                        <div id="collapse{{$category->id}}" class="collapse multi-accordion-content" data-parent="#accordion3">
                                                            <div class="card-body multi-accordion-content" id="accordion4">
                                                                <ul class="sub-list">
                                                                    @foreach(\App\Models\Categories::where('alt_category',null)->where('main_category',$category->id)->get() as $altcategory)
                                                                    <li><a class="parent-list collapsed" role="button" data-toggle="collapse" href="#collapse{{$altcategory->id}}" aria-expanded="false">
                                                                            {{$altcategory->name}}
                                                                        </a></li>

                                                                        <div id="collapse{{$altcategory->id}}" class="collapse multi-accordion-content" data-parent="#accordion4">
                                                                            <div class="card-body">
                                                                                <ul class="sub-list">
                                                                                    @foreach(\App\Models\Categories::where('alt_category',$altcategory->id)->where('main_category',$category->id)->get() as $thirdcategory)
                                                                                        <li><a href="javascript:void(0)" onclick="check(this)">{{$thirdcategory->name}}</a></li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
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
    <div class="modal fade modal-location" id="modal-location" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="fas fa-times" aria-hidden="true"></span>
                </button>
                <div class="location-list">
                    <h4 class="widget-bg-title">Şəhər Seçin...</h4>
                    <ul>
                        @foreach($cities as $city)
                        <li><a href="#">{{$city->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script>
        const check = (value) => {
          console.log(value.text)
        }
    </script>

@endsection
