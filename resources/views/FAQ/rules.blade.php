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
                        <h1>Qaydalar</h1>
                        <ul>
                            <li>
                                <a href="index.html">Ana səhifə</a>
                            </li>
                            <li>Qaydalar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Faq Page Start      		=-->
    <!--=====================================-->
    <section class="section-padding-equal-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="faq-box-layout1">
                        <h2 class="item-title">Ümumi qaydalar Tezal.az</h2>
                        <p>Tezal.az saytında elanların yerləşdirilməsi İstifadəçi razılaşması ilə tənzimlənir.</p>
                        <p>Qaydaların pozulması və ya istifadəçilərin elan üzrə çoxsaylı şikayətləri həmin elanların və eyni zamanda elan sahiblərinin şəxsi hesablarının bloklanması ilə nəticələnə bilər.</p>
                        <p>Nəzərdə saxlayın ki, bütün elanlar onlara əlavə xidmətlərin (Premium, Təcili və digər) tətbiq edilib-edilməməsindən asılı olmayaraq qaydalara uyğun olmalıdır. Qaydaların pozulması halında hətta ödənişi həyata keçirilmiş elanlar da blok oluna və ya silinə bilər.</p>
                        <p>Ticarət platformasının bütün istifadəçiləri üçün bərabər şəraitin təmin edilməsi məqsədilə hər kəs elan yerləşdirməzdən əvvəl Tezal.az-ın qaydaları ilə tanış olmalıdır.</p>

                        <div id="accordion" class="accordion-box">
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-title collapsed" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false">
                                        1. Elanın yerləşdirilməsi
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">

                                        <p>1.İstifadəçinin saytda eyni anda yer alan elanlarının sayı Administrasiya tərəfindən təyin olunmuş limiti aşmamalıdır. Yerləşdirilmiş elanlar təkrarlanmamalı və saytın qaydalarına zidd olmamalıdır. Elanın aktivlik müddəti 30 gündür. Bu müddət başa çatdıqda elanın dərc olunması avtomatik olaraq dayandırılır və o, "Müddəti başa çatmış" bölməsinə düşür. Bu halda İstifadəçi ya bu elanı bərpa edə, ya da yenisini yerləşdirə bilər.</p>
                                        <p>2.Saytda olan elanda məhsul və ya xidmət haqqında məlumat və şəkilləri başqa məhsul və ya xidmətə aid olan məlumat və ya şəkillərə dəyişmək qadağandır.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-title collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false">
                                        2. Şəxsi əlaqə məlumatları
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">

                                        <p>1.Şəxsi əlaqə vasitələri düzgün qeyd olunmalıdır: ad, elektron poçt ünvanı, telefon nömrəsi.</p>
                                        <p>2.Mütləq şəkildə işlək və özünüzə məxsus telefon nömrəsi göstərin – bu sizin sürətli və uğurlu əməliyyat aparma şansınızı yüksəldəcək.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-title collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false">
                                        3. Elanda düzəlişlərin edilməsi
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">

                                        <p>1.Elanda düzəliş etmək üçün “DÜZƏLİŞ ET” düyməsini seçmək və elektron poçt ünvanınıza gələn PIN-kodu daxil etmək kifayətdir. Dərc olunmamış elanlarda düzəliş etmək mümkün deyil.</p>
                                        <p>2.Elanda düzəliş etməklə onu irəli çəkmiş olmursunuz. Bu funksiya yalnız elandakı şəkil, məzmun və qiymət dəyişiklərini həyata keçirir.</p>
                                      </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-title collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false">
                                        4. Yanlış kateqoriyada yerləşdirilən elanlar
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       <p>1.Elanın yanlış kateqoriyada və ya bölmədə yerləşdirilməsi onun silinməsinə və ya daha uyğun kateqoriya və ya bölməyə köçürülməsinə səbəb ola bilər.</p>
                                        <p>2.Elanın məhsulun tipinə, təyinatına, özəlliyinə, məqsədinə, elanın başlığındakı adına uyğun olmayan kateqoriyada yerləşdirilməsi və/və ya məzmununda saytın istifadəçilərində anlaşılmazlıq yarada biləcək digər məlumatların yerləşdirilməsi qadağandır.</p>
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
