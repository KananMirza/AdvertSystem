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
                                <a href="index.html">Ana səhifə</a>
                            </li>
                            <li>Mağazalar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=          Store List Start         =-->
    <!--=====================================-->
    <section class="store-wrap-layout1 bg-accent">
        <div class="container">
            <div class="row">
                @foreach($allstore as $store)
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="store-list-layout1">
                        <a href="{{route('storeIndex',$store->id)}}">
                            <div class="item-logo">
                                <img src="{{asset($store->logo)}}" alt="store">
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$store->name}}</h3>
                                <div class="ad-count">1 ad</div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection

