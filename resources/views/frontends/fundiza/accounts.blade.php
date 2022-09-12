@extends('frontends.index')
@section('content')
    <section id="content" style="margin-bottom: 0px;">

        <div class="content-wrap">

            <div class="container pricing-container clearfix">

                <div id="section-features" class="heading-block nobottomborder bottommargin-md title-center page-section">
                    <h2>Our Account Types</h2>
                    <span>{{ siteName() }} believes that diversity is a concept that promotes acceptance and respect,
                        which is
                        why we
                        offer a variety of trading account packages that suit the needs of every type of investor.</span>
                </div>


                <div class="row pricing col-mb-30 mb-4 no-gutters">
                    <div class="col-sm-12 col-md-4 col-lg-1-5">
                        <div class="pricing-box pricing-minimal text-center">
                            <div class="pricing-title title-sm">
                                <h3>Rookie</h3>
                                <img src="https://d3dbozvmzinox3.cloudfront.net/images/fz/accounts/rookie.png">
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">$</span>5000<span class="price-tenure"><br>/min investment</span>
                            </div>

                            <div class="pricing-features">
                                <ul>
                                    <li><i class="icon-ok-sign"></i>Personal account manager</li>
                                    <li><i class="icon-ok-sign"></i>Floating Bid/Ask Difference</li>
                                    <li><i class="icon-remove"></i>Premium Signals</li>
                                    <li><i class="icon-remove"></i>Daily Signals</li>
                                    <li><i class="icon-remove"></i>Private One on One Trading Academy</li>
                                    <li><i class="icon-remove"></i>Private Trading Sessions</li>
                                    <li><i class="icon-remove"></i>Access to Event Room</li>
                                    <li>-</li>
                                    <li><i class="icon-remove"></i>Video Courses</li>
                                    <li><i class="icon-remove"></i>Webinars</li>
                                    <li><i class="icon-remove"></i>VIP Services</li>
                                </ul>
                            </div>

                            <div class="pricing-action px-4">
                                <a id="registerB" data-toggle="modal" data-target="#ClientArea" onclick="Reg"
                                    href=""
                                    class="button-main button button-rounded  button-large  button-border">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-1-5">
                        <div class="pricing-box pricing-minimal pricing-highlight text-center">
                            <div class="pricing-title title-sm">
                                <h3>Basic</h3>


                                <img src="https://d3dbozvmzinox3.cloudfront.net/images/fz/accounts/basic.png">
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">$</span>25,000<span class="price-tenure"><br>/min investment</span>
                            </div>

                            <div class="pricing-features">
                                <ul>
                                    <li><i class="icon-ok-sign"></i>Personal account manager</li>
                                    <li><i class="icon-ok-sign"></i>Floating Bid/Ask Difference</li>
                                    <li><i class="icon-ok-sign"></i>Premium Signals</li>
                                    <li><i class="icon-remove"></i>Daily Signals</li>
                                    <li><i class="icon-remove"></i>Private One on One Trading Academy</li>
                                    <li><i class="icon-remove"></i>Private Trading Sessions</li>
                                    <li><i class="icon-remove"></i>Access to Event Room</li>
                                    <li>-</li>
                                    <li><i class="icon-remove"></i>Video Courses</li>
                                    <li><i class="icon-remove"></i>Webinars</li>
                                    <li><i class="icon-remove"></i>VIP Services</li>
                                </ul>
                            </div>
                            <div class="pricing-action px-4">
                                <a id="registerB" data-toggle="modal" data-target="#ClientArea" onclick="Reg"
                                    href=""
                                    class="button-main button button-rounded  button-large  button-border">Sign Up</a>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-4 col-lg-1-5">
                        <div class="pricing-box pricing-minimal text-center">
                            <div class="pricing-title title-sm">
                                <h3>Elite</h3>
                                <img src="https://d3dbozvmzinox3.cloudfront.net/images/fz/accounts/elite.png">
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">$</span>100,000<span class="price-tenure"><br>/min
                                    investment</span>
                            </div>

                            <div class="pricing-features">
                                <ul>
                                    <li><i class="icon-ok-sign"></i>Personal account manager</li>
                                    <li><i class="icon-ok-sign"></i>Fix Bid/Ask Difference</li>
                                    <li><i class="icon-ok-sign"></i>Premium Signals</li>
                                    <li><i class="icon-ok-sign"></i>Daily Signals</li>
                                    <li><i class="icon-ok-sign"></i>Private One on One Trading Academy</li>
                                    <li><i class="icon-ok-sign"></i>Private Trading Sessions</li>
                                    <li><i class="icon-remove"></i>Access to Event Room</li>
                                    <li><i class="icon-ok-sign"></i>Trading commissions Up to 10% discount</li>
                                    <li><i class="icon-remove"></i>Video Courses</li>
                                    <li><i class="icon-remove"></i>Webinars</li>
                                    <li><i class="icon-remove"></i>VIP Services</li>
                                </ul>
                            </div>
                            <div class="pricing-action px-4">
                                <a id="registerB" data-toggle="modal" data-target="#ClientArea" onclick="Reg"
                                    href=""
                                    class="button-main button button-rounded  button-large  button-border">Sign Up</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-4 col-lg-1-5">
                        <div class="pricing-box pricing-minimal text-center">
                            <div class="pricing-title title-sm">
                                <h3>Elite Plus</h3>
                                <img src="https://d3dbozvmzinox3.cloudfront.net/images/fz/accounts/eliteplus.png">
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">$</span>250,000<span class="price-tenure"><br>/min
                                    investment</span>
                            </div>

                            <div class="pricing-features">
                                <ul>
                                    <li><i class="icon-ok-sign"></i>Personal account manager</li>
                                    <li><i class="icon-ok-sign"></i>Fix Bid/Ask Difference</li>
                                    <li><i class="icon-ok-sign"></i>Premium Signals</li>
                                    <li><i class="icon-ok-sign"></i>Daily Signals</li>
                                    <li><i class="icon-ok-sign"></i>Private One on One Trading Academy</li>
                                    <li><i class="icon-ok-sign"></i>Private Trading Sessions</li>
                                    <li><i class="icon-ok-sign"></i>Access to Event Room</li>
                                    <li><i class="icon-ok-sign"></i>Trading commissions Up to 25% discount</li>
                                    <li><i class="icon-remove"></i>Video Courses</li>
                                    <li><i class="icon-remove"></i>Webinars</li>
                                    <li><i class="icon-ok-sign"></i>VIP Services Trial Period</li>
                                </ul>
                            </div>

                            <div class="pricing-action px-4">
                                <a id="registerB" data-toggle="modal" data-target="#ClientArea" onclick="Reg"
                                    href=""
                                    class="button-main button button-rounded  button-large  button-border">Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-1-5">
                        <div class="pricing-box pricing-minimal text-center">
                            <div class="pricing-title title-sm">
                                <h3>VIP</h3>
                                <img src="https://d3dbozvmzinox3.cloudfront.net/images/fz/accounts/vip.png">
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">$</span>1M<span class="price-tenure"><br>/min investment</span>
                            </div>

                            <div class="pricing-features">
                                <ul>
                                    <li><i class="icon-ok-sign"></i>Personal account manager</li>
                                    <li><i class="icon-ok-sign"></i>Fix Bid/Ask Difference</li>
                                    <li><i class="icon-ok-sign"></i>Premium Signals</li>
                                    <li><i class="icon-ok-sign"></i>Daily Signals</li>
                                    <li><i class="icon-ok-sign"></i>Private One on One Trading Academy</li>
                                    <li><i class="icon-ok-sign"></i>Private Trading Sessions</li>
                                    <li><i class="icon-ok-sign"></i>Access to Event Room</li>
                                    <li><i class="icon-ok-sign"></i>Trading Commissions Up to 50% discount</li>
                                    <li><i class="icon-ok-sign"></i>Video Courses</li>
                                    <li><i class="icon-ok-sign"></i>Webinars</li>
                                    <li><i class="icon-ok-sign"></i>VIP Services</li>
                                </ul>
                            </div>

                            <div class="pricing-action px-4">
                                <a id="registerB" data-toggle="modal" data-target="#ClientArea" onclick="Reg"
                                    href=""
                                    class="button-main button button-rounded  button-large  button-border">Sign Up</a>
                            </div>
                        </div>
                    </div>

                </div>



            </div>




        </div>

    </section>
@endsection
