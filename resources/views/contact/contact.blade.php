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
                        <h1>Əlaqə</h1>
                        <ul>
                            <li>
                                <a href="index.html">Ana səhifə</a>
                            </li>
                            <li>Əlaqə</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Contact Page Start    		=-->
    <!--=====================================-->
    <section class="section-padding-equal-70">
        <div class="container">
            <div class="contact-page-box-layout1 light-shadow-bg">
                <div class="light-box-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h3 class="item-title">Əlaqə</h3>
                                <ul>
                                    <li><i class="fas fa-paper-plane"></i>{{$data->adress}}</li>
                                    <li><i class="fas fa-phone-volume"></i>{{$data->phones}}</li>
                                    <li><i class="far fa-envelope"></i>{{$data->email}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form-box">

                                <h3 class="item-title">Bizə mesaj gönderin</h3>
                                <form action="{{route('contactIndexMessage')}}" method="POST">
                                    @csrf
                                    @include('layouts.error_messages')
                                    <div class="form-group">
                                        <input type="text" placeholder="Ad *" class="form-control" name="name" data-error="Ad mütləqdir" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email *" class="form-control" name="email" data-error="Email mütləqdir" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Başlıq *" class="form-control" name="subject" data-error="Başlıq mütləqdir" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Mesaj *" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Mesaj mütləqdir" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="submit-btn">SUBMIT</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
