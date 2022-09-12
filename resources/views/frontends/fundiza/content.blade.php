@extends('frontends.index')
@if ($sections[1]->status == 1)
    @section('content')
        <section id="slider" class="slider-parallax swiper_wrapper clearfix">
            <div class="slider-parallax-inner">
                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide dark" style="background-image: url('{{ asset($images[0]->image) }}');">
                            <div class="slide-opacity-dark"></div>
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">{{ $sections[1]->content->slider1Title }}</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">
                                        {{ $sections[1]->content->slider1desc1 }}<br>
                                        {{ $sections[1]->content->slider1desc2 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide dark"
                            style="background-image: url('{{ asset($images[1]->image) }}'); background-position: center top;">
                            <div class="slide-opacity-dark"></div>
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">{{ $sections[1]->content->slider2Title }}</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">
                                        {{ $sections[1]->content->slider2desc1 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                    <div id="slide-number">
                        <div id="slide-number-current"></div>
                        <span>/</span>
                        <div id="slide-number-total"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($sections[2]->status == 1)
        <section class="notopmargin notoppadding">
            <div id="section-buy"
                class="bottompadding-lg section notopmargin notoppadding home-cta-section dark page-section footer-stick">
                <div class="container bottompadding-lg clearfix">
                    <div class="heading-block topmargin-sm title-center nobottomborder">
                        <h2 class="color">{{ $sections[2]->content->Title2 }}</h2>
                        <span>{{ $sections[2]->content->Title2desc }}</span>
                    </div>
                    <ul class="process-steps process-3 bottommargin-sm clearfix">
                        <li class="active"> <a href="#" class="i-bordered i-rounded divcenter bgcolor">1</a>
                            <h5>Register Account</h5>
                        </li>
                        <li> <a href="#" class="i-bordered i-rounded divcenter">2</a>
                            <h5>Deposit Funds</h5>
                        </li>
                        <li> <a href="#" class="i-bordered i-rounded divcenter">3</a>
                            <h5>Trade Instantly</h5>
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/login"><input
                                class="button-main button button-rounded button-fill button-large button-border  nomargin text-center"
                                value="TRADE NOW" /></a>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($sections[3]->status == 1)
        <section id="content">
            <div class="content-wrap nobottompadding">
                <div class="container clearfix">
                    <div id="section-home" class="heading-block title-center nobottomborder page-section">
                        <h2>{{ $sections[3]->content->s3title }}</h2>
                        <span>{{ $sections[3]->content->s3titleDesc }}</span>
                    </div>
                    <div class="clear"></div>
                    <div class="col_one_fourth nobottommargin center"> <a href="#"><img
                                src="{{ asset($images[2]->image) }}" alt="Currencies" class="bottommargin-sm"></a>
                        <h4 class="bottommargin-xs">{{ $sections[3]->content->curr }}</h4>
                        <p>{{ $sections[3]->content->currDesc }}</p>
                    </div>
                    <div class="col_one_fourth nobottommargin center"> <a href="#"><img
                                src="{{ asset($images[3]->image) }}" alt="Commodities" class="bottommargin-sm"></a>
                        <h4 class="bottommargin-xs">{{ $sections[3]->content->comm }}</h4>
                        <p>{{ $sections[3]->content->commDesc }}</p>
                    </div>
                    <div class="col_one_fourth nobottommargin center"> <a href="#"><img
                                src="{{ asset($images[4]->image) }}" alt="Indices" class="bottommargin-sm"></a>
                        <h4 class="bottommargin-xs">{{ $sections[3]->content->ind }}</h4>
                        <p>{{ $sections[3]->content->indDesc }}</p>
                    </div>
                    <div class="col_one_fourth nobottommargin center col_last"> <a href="#"><img
                                src="{{ asset($images[5]->image) }}" alt="Shares" class="bottommargin-sm"></a>
                        <h4 class="bottommargin-xs">{{ $sections[3]->content->Shar }}</h4>
                        <p>{{ $sections[3]->content->SharDesc }} </p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="promo promo-dark topmargin-lg promo-border bottommargin-lg promo-full">
                    <div class="container clearfix">
                        <h3>{{ $sections[3]->content->mblackT }} <span>{{ $sections[3]->content->mblackT2 }}</span>
                            {{ $sections[3]->content->mblackT3 }} <span>{{ $sections[3]->content->mblackT4 }}</span></h3>
                        <span>{{ $sections[3]->content->mblackdesc }}</span> <a href="/login"
                            class="button-third button button-rounded button-fill button-large button-border tright"><span>Start
                                Trading</span></a>
                    </div>
                </div>
                <div class="container clearfix topmargin-lg">
                    <div id="section-features"
                        class="heading-block nobottomborder bottommargin-md title-center page-section">
                        <h2>{{ $sections[3]->content->advantage }}</h2>
                        <span>{{ $sections[3]->content->advantagedesc }}</span>
                    </div>
                    <div class="col_one_third">
                        <div class="feature-box fbox-plain fbox-light">
                            <div class="fbox-icon"> <a href="#"><i class="icon-ok"></i></a> </div>
                            <h3>{{ $sections[3]->content->col1 }}</h3>
                            <p>{{ $sections[3]->content->col1desc }}</p>
                        </div>
                    </div>
                    <div class="col_one_third">
                        <div class="feature-box fbox-plain fbox-light">
                            <div class="fbox-icon"> <a href="#"><i class="icon-ok"></i></a> </div>
                            <h3>{{ $sections[3]->content->col2 }}</h3>
                            <p>{{ $sections[3]->content->col2desc }}</p>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="feature-box fbox-plain fbox-light">
                            <div class="fbox-icon"> <a href="#"><i class="icon-ok"></i></a> </div>
                            <h3>{{ $sections[3]->content->col3 }}</h3>
                            <p>{{ $sections[3]->content->col3desc }}</p>
                        </div>
                    </div>
                    <div class="col_one_third">
                        <div class="feature-box fbox-plain fbox-light">
                            <div class="fbox-icon"> <a href="#"><i class="icon-ok"></i></a> </div>
                            <h3>{{ $sections[3]->content->col4 }}</h3>
                            <p>{{ $sections[3]->content->col4desc }}</p>
                        </div>
                    </div>
                    <div class="col_one_third">
                        <div class="feature-box fbox-plain fbox-light">
                            <div class="fbox-icon"> <a href="#"><i class="icon-ok"></i></a> </div>
                            <h3>{{ $sections[3]->content->col5 }}</h3>
                            <p>{{ $sections[3]->content->col5desc }}</p>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="feature-box fbox-plain fbox-light">
                            <div class="fbox-icon"> <a href="#"><i class="icon-ok"></i></a> </div>
                            <h3>{{ $sections[3]->content->col6 }}</h3>
                            <p>{{ $sections[3]->content->col6desc }}</p>
                        </div>
                    </div>
                </div>


                <div class="m-0 border-top-0 bg-transparent" id="content" style="padding: 80px 0 60px;">
                    <div class="container center clearfix">



                        <div id="section-features"
                            class="heading-block nobottomborder bottommargin-md title-center page-section">
                            <h2>{{ $sections[3]->content->outlook }}</h2>
                            <span>{{ $sections[3]->content->outlookdesc }}</span>
                        </div>




                        <div class="mx-auto" style="max-width: 800px;margin:0 auto;">
                            <div class="fluid-width-video-wrapper" style="padding-top: 52.8%;"><iframe
                                    src="{{ $sections[3]->content->yt_link }}&amp;showinfo=0&amp;disablekb=1&amp;iv_load_policy=3&amp;modestbranding=1&amp;autoplay=1&amp;mute=1"
                                    allow="autoplay; fullscreen" allowfullscreen="" id="fitvid0"></iframe></div>
                        </div>


                    </div>
                </div>


                <div class="section nobottommargin home-platforms-parallax">
                    <div class="container clearfix">
                        <div id="section-home"
                            class="heading-block title-center nobottomborder topmargin-sm page-section">
                            <h2>{{ $sections[3]->content->endtitle }}</h2>
                            <span>{{ $sections[3]->content->endtitledesc }}</span>
                        </div>
                        <div class="col_one_fourth nobottommargin center">
                            <h4 class="bottommargin-xs">{{ $sections[3]->content->endcol1 }}</h4>
                            <p>{{ $sections[3]->content->endcol1desc }}</p>
                        </div>
                        <div class="col_one_fourth nobottommargin center">
                            <h4 class="bottommargin-xs">{{ $sections[3]->content->endcol2 }}</h4>
                            <p>{{ $sections[3]->content->endcol2desc }}</p>
                        </div>
                        <div class="col_one_fourth nobottommargin center">
                            <h4 class="bottommargin-xs">{{ $sections[3]->content->endcol3 }}</h4>
                            <p>{{ $sections[3]->content->endcol3desc }}</p>
                        </div>
                        <div class="col_one_fourth nobottommargin center col_last">
                            <h4 class="bottommargin-xs">{{ $sections[3]->content->endcol4 }}</h4>
                            <p>{{ $sections[3]->content->endcol4desc }}</p>
                        </div>
                        <div class="clear"></div>
                        <div class="center topmargin-xs bottommargin"> <a href="/trading/platform"
                                class="button button-second button-rounded button-fill button-large  nobottommargin"><span>{{ $sections[3]->content->desfun }}</span></a>
                        </div>
                        <div class="text-center" style=" margin-bottom: -60px;"> <img
                                src="{{ asset($images[6]->image) }}" style="top: 0; width: 70%;" data-animate="fadeInUp"
                                alt=""> </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
