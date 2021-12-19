@extends('layouts.master')

@section('content')
    <!--=====================================-->
    <!--=        Inner Banner Start         =-->
    <!--=====================================-->
    <section class="inner-page-banner" data-bg-image="media/banner/banner1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Qeydiyyat</h1>
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
    <!--=====================================-->
    <!--=        Account Page Start      	=-->
    <!--=====================================-->


    <section class="section-padding-equal-70">
        <div class="container">
            @include('layouts.error_messages')
            <div class="row">
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="" id="logout" role="tabpanel">
                            <div class="myaccount-login-form light-shadow-bg">
                                <div class="light-box-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-box login-form">
                                                <h3 class="item-title">Giriş</h3>
                                                <form action="{{route('login')}}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="email" id="login-username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Parol</label>
                                                        <input type="password" class="form-control" name="password" id="login-password">
                                                    </div>
                                                    <div class="form-group d-flex">
                                                        <input type="submit" class="submit-btn" value="Giriş">
                                                        <div class="form-check form-check-box">
                                                            <input class="form-check-input" type="checkbox" id="check-password">
                                                            <label for="check-password">Məni Xatırla</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="#" class="forgot-password">Parolu unutdum?</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-box registration-form">
                                                <h3 class="item-title">Qeydiyyat</h3>
                                                <form action="{{route('signup')}}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>İstifadəçi adı *</label>
                                                        <input type="text" class="form-control" name="username" id="username">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email *</label>
                                                        <input type="email" class="form-control" name="email" id="email">
                                                        <div class="help-block">Email dəyişə bilməz</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Parol *</label>
                                                        <input type="text" class="form-control" name="password" id="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="submit-btn" value="Qeydiyyat">
                                                    </div>
                                                </form>
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
    </section>

@endsection
