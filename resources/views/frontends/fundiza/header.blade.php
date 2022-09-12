@if ($sections[0]->status == 1)
    <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo"
                        data-dark-logo="{{ getImage(imagePath()['logoIcon']['path'] . '/logo.png') }}"><img
                            src="{{ getImage(imagePath()['logoIcon']['path'] . '/logo.png') }}" alt=""></a>

                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="mobile-menu-off-canvas dark">

                    <ul>
                        <li class="custom-menu-item1"><a href="/user#/market">
                                <div>Markets</div>
                            </a></li>

                        <li class="custom-menu-item2"><a href="/user">
                                <div>Platform</div>
                            </a></li>
                        <li class="custom-menu-item3 sub-menu"><a href="" class="sf-with-ul">
                                <div>Trading Info <i class="fa fa-chevron-down"></i></div>
                            </a>


                            <ul style="display: none;">
                                <li><a href="/trading/accounts">Account Types</a></li>
                                <li><a href="/trading/assistance">Get Assistance</a></li>
                                <li><a href="/trading/faq">FAQ</a></li>
                            </ul>



                        </li>

                        <li class="custom-menu-item5 hidden-md hidden-lg"><a href="/login">
                                <div>Login</div>
                            </a></li>
                        <li class="custom-menu-item6 hidden-md hidden-lg"><a href="/register">
                                <div>Register</div>
                            </a></li>

                    </ul>





                </nav><!-- #primary-menu end -->

                <div class="custom-header-right">




                    <div id="top-header-buttons" class="hidden-xs">
                        <a href="/register"
                            class="top-register button-main button button-rounded button-fill button-large button-border tright hidden-xs hidden-sm"><span>Get
                                Started</a></a>
                        <a href="/login" class="top-login">Login <i class="icon-caret-right"
                                style="position: relative; top:2px; margin-left:3px;"></i></a>


                    </div>



                    <div id="side-panel-trigger" class="side-panel-trigger hidden-xs hidden-sm hidden-md"><a
                            href="#"><i class="icon-reorder"></i></a></div>

                    <div id="side-panel" class="dark">

                        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i
                                    class="icon-line-cross"></i></a></div>

                        <div class="side-panel-wrap">

                            <div class="widget clearfix">

                                <div class="text-center">
                                    <img
                                        src="https://d3dbozvmzinox3.cloudfront.net/images/fz/screen-mt5-notebook.png" />
                                    <h3 class="bottommargin-xs topmargin-sm">{{ $sections[0]->content->text1 }}</h3>
                                    <span>{{ $sections[0]->content->text2 }}</span>
                                    <a href="/register"
                                        class="button-third button button-rounded button-fill button-large button-border topmargin-sm"><span>{{ $sections[0]->content->btn1 }}</span></a>
                                    <a class="button-main button button-rounded button-fill button-large  button-border"
                                        href="/login"><span>{{ $sections[0]->content->btn2 }}</span></a>
                                </div>
                            </div>



                            <div class="widget clearfix">




                                <nav class="nav-tree">
                                    <ul>
                                        <li><a href="/trading/markets">MARKETS</a></li>
                                        <li><a href="/trading/platform">PLATFORM</a></li>
                                        <li><a href="#">TRADING INFO</a>
                                            <ul>
                                                <li><a href="/trading/accounts">Account Types</a></li>
                                                <li><a href="/trading/conditions">Our Conditions</a></li>
                                                <li><a href="/trading/assistance">Get Assistance</a></li>
                                                <li><a href="/trading/faq">FAQ</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="/login"><i class="icon-lock"></i>Client
                                                Login</a></li>

                                    </ul>
                                </nav>
                                <div class="text-center side-socials">
                                    <a href="f{{ $sections[0]->content->facebook }}" target="_blank"
                                        class="social-icon si-dark si-small si-facebook" title="Facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="{{ $sections[0]->content->facebook }}" target="_blank"
                                        class="social-icon si-dark si-small si-instagram" title="Instagram">
                                        <i class="icon-instagram"></i>
                                        <i class="icon-instagram"></i>
                                    </a>
                                    <a href="{{ $sections[0]->content->twitter }}" target="_blank"
                                        class="social-icon si-dark si-small si-twitter" title="Twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="{{ $sections[0]->content->pinterest }}" target="_blank"
                                        class="social-icon si-dark si-small si-linkedin" title="Pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>

                                    <a href="{{ $sections[0]->content->reddit }}" target="_blank"
                                        class="social-icon si-dark si-small si-reddit" title="Reddit">
                                        <i class="icon-reddit"></i>
                                        <i class="icon-reddit"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header><!-- #header end -->
@endif
