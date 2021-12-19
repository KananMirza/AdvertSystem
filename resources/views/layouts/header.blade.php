<!--=====================================-->
<!--=            Header Start           =-->
<!--=====================================-->
<header class="header">
    <div id="rt-sticky-placeholder"></div>
    <div id="header-menu" class="header-menu menu-layout2">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="#" class="temp-logo">
                            <img src="{{asset('media/logo-dark.png')}}" alt="logo" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-end">
                    <nav id="dropdown" class="template-main-menu">
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Ana Səhifə</a>
                            </li>
                            <li>
                                <a href="#" >Bütün Elanlar</a>
                            </li>
                            <li>
                                <a href="{{route('allstoreIndex')}}">Mağazalar</a>
                            </li>
                            <li>
                                <a href="{{route('rulesIndex')}}">Qaydalar</a>
                            </li>
                            <li>
                                <a href="{{route('aboutIndex')}}" >Haqqımızda</a>

                            </li>
                            <li>
                                <a href="{{route('contactIndex')}}" >Elaqə</a>

                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 d-flex justify-content-end">
                    <div class="header-action-layout1">
                        <ul>
                            <li class="header-login-icon">
                                    <a href="{{route('login')}}" class="color-primary" data-toggle="tooltip" data-placement="top" title="Login/Register">
                                        <i class="far fa-user"></i>
                                    </a>
                            </li>
                            <li class="header-btn">
                                <a href="{{route('createAdvert')}}" class="item-btn"><i class="fas fa-plus"></i>Post Your Ad</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
