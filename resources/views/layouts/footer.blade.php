<footer>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="row" style="display: flex;justify-content: space-between">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-box-layout1">
                        <div class="footer-logo">
                            <img src="{{asset('media/footer-logo.png')}}" alt="logo">
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <ul class="footer-social">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-box-layout1">
                        <div class="footer-title">
                            <h3>Səhifə</h3>
                        </div>
                        <div class="footer-menu-box">
                            <ul>
                                <li><a href="{{route('index')}}">Ana Səhifə</a></li>
                                <li><a href="#">Bütün Elanlar</a></li>
                                <li><a href="{{route('allstoreIndex')}}">Mağazalar</a></li>
                                <li><a href="{{route('rulesIndex')}}">Qaydalar</a></li>
                                <li><a href="{{route('aboutIndex')}}">Haqqımızda</a></li>
                                <li><a href="{{route('contactIndex')}}">Əlaqə</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright-text">
                        © Copyright TezAl {{date('Y')}}. Designed and Developed by <a href="http://www.kananmirza.com" target="_blank">KananMirza</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="payment-option">
                        <a href="#">
                            <img src="{{asset('media/figure/payment.png')}}" alt="payment">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
