@stack('before-styles')
{{-- <link href="{{ mix('css/frontend/app.css') }}" rel="stylesheet"> --}}
@stack('after-styles')
{{-- <link rel="stylesheet" href="{{ asset('assets/frontends/fundiza/css/style.css') }}">
<link rel="stylesheet" href="{{ asset(mix('assets/frontends/fundiza/css/responsive.css')) }}"> --}}
<link
    href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic'
    rel='stylesheet' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/bootstrap.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/style.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/dark.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/themify/demo-files/demo.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/themify/themify-icons.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/font-icons.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/font-awesome.min.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/animate.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/magnific-popup.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/slider-responsive.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/custom.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/responsive.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/components/bs-select.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/components/paceloader.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/toastr.min.css' type='text/css' />
<link rel='stylesheet' href='https://d3dbozvmzinox3.cloudfront.net/css/swiper.css' type='text/css' />

<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://d3dbozvmzinox3.cloudfront.net/css/components/datatables/bs-datatable.css"
    type="text/css" />
<link rel="stylesheet"
    href="https://d3dbozvmzinox3.cloudfront.net/css/components/datatables/bs-datatable-responsive.css"
    type="text/css" />

<link href="https://d3dbozvmzinox3.cloudfront.net/css/components/introLoader.min.css" rel="stylesheet">

<style>
    .button-dark {
        background: rgb(250, 231, 33);
        font-size: 14px;
        text-shadow: none;
        font-weight: 900;
        color: rgb(26, 33, 42) !important;
    }

    .button.button-dark:hover {
        color: rgb(255, 255, 255) !important;
    }

    html,
    body,
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    a {
        font-family: "Hind Vadodara", sans-serif !important;
    }

    label {
        font-family: "Hind Vadodara", sans-serif !important;
    }

    a {
        color: rgb(13, 211, 217);
    }

    .section.nobg {
        background: none !important;
    }

    p {
        color: rgb(40, 40, 40);
        font-size: 16px !important;
    }

    li {
        color: rgb(40, 40, 40);
        font-size: 16px !important;
    }

    html,
    body,
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    a {
        font-family: "Hind Vadodara", sans-serif !important;
    }

    .button.button-border:not(.button-fill):hover {
        background-color: rgb(26, 33, 42);
        color: rgb(255, 255, 255) !important;
    }

    .button.button-border {
        border: 2px solid rgb(26, 33, 42);
    }

    #content p {
        color: rgb(40, 40, 40);
        font-size: 16px;
    }

    #footer p {
        color: rgb(177, 177, 177);
        font-size: 14px;
    }

    .btn-link,
    .pagination>li>a,
    .pagination>li>span,
    .pagination>li>a:hover,
    .pagination>li>span:hover,
    .pagination>li>a:focus,
    .pagination>li>span:focus {
        color: rgb(13, 211, 217);
    }

    .heading-block>span:not(.before-heading) {
        color: rgb(40, 40, 40);
    }

    #header.transparent-header {
        background: rgb(0, 10, 23);
    }

    .swiper_wrapper {
        height: 650px;
    }

    .slide-opacity-dark {
        background-color: rgba(0, 0, 0, 0.1);
        width: 100%;
        height: 100%;
        position: absolute;
    }

    #primary-menu {
        float: left;
    }

    #primary-menu ul li>a {
        font-size: 16px;
        padding: 39px 15px 20px;
        color: rgb(238, 238, 238);
    }

    #primary-menu ul li>a:hover {
        color: rgb(250, 231, 33) !important;
    }

    #primary-menu ul li>a i {
        vertical-align: middle;
    }

    #side-panel-trigger a {
        font-size: 26px;
    }

    #top-header-buttons {
        float: right;
        margin-top: 30px;
        transition: margin 0.4s ease 0s;
    }

    .dark #header.transparent-header.full-header:not(.sticky-header) #header-wrap:not(.not-dark) #logo,
    #header.transparent-header.full-header.dark:not(.sticky-header) #header-wrap:not(.not-dark) #logo {
        border-right-color: transparent;
    }

    #header.transparent-header.full-header #header-wrap {
        border-bottom: 0px solid rgba(0, 0, 0, 0.1);
    }

    .dark #header.transparent-header.full-header:not(.sticky-header) #header-wrap:not(.not-dark) #primary-menu>ul,
    #header.transparent-header.full-header.dark:not(.sticky-header) #header-wrap:not(.not-dark) #primary-menu>ul {
        border-right-color: transparent;
    }

    #header.sticky-header #top-header-buttons {
        margin: 7px 0px;
    }

    #top-header-buttons a {
        margin: 0px 0px 0px 25px;
        overflow: inherit;
    }

    #top-header-buttons a:not(.button) {
        color: rgb(255, 255, 255);
    }

    #top-header-buttons a:not(.button):hover {
        color: rgb(221, 221, 221);
    }

    #header.sticky-header #top-header-buttons a:not(.button) {
        color: rgb(26, 188, 156);
    }

    #header.sticky-header #top-header-buttons a:not(.button):hover {
        color: rgb(17, 17, 17);
    }

    #header.sticky-header:not(.static-sticky),
    #header.sticky-header:not(.static-sticky) #header-wrap,
    #header.sticky-header:not(.static-sticky):not(.sticky-style-2):not(.sticky-style-3) #logo img {
        margin-top: 0px;
    }

    .device-sm #top-header-buttons {
        position: absolute;
        top: 0px;
        left: auto;
        right: 15px;
    }

    #top-header-buttons a:not(.button) {
        font-size: 16px;
        text-transform: uppercase;
    }

    .top-login {
        top: -12px;
    }

    .top-register {
        margin-left: 10px;
    }

    #logo img {
        padding-top: 8px;
        height: 70px;
        margin-top: 10px;
    }

    .button-main {
        background: transparent;
        color: rgb(13, 211, 217) !important;
        border: 2px solid rgb(13, 211, 217) !important;
        font-weight: 700 !important;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px !important;
    }

    .button-main:hover {
        border-color: rgb(13, 211, 217) !important;
        background-color: rgb(13, 211, 217) !important;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px !important;
        color: rgb(255, 255, 255) !important;
    }

    .button-main.button-border.button-fill:hover {
        color: rgb(255, 255, 255) !important;
    }

    .button-main.button-border.button-fill::before {
        position: absolute;
        color: rgb(0, 10, 23) !important;
        background-color: rgb(13, 211, 217) !important;
    }

    .button-second {
        background: rgb(26, 33, 42);
        color: rgb(255, 255, 255) !important;
        border: 0px solid rgb(250, 231, 33) !important;
        font-weight: 700 !important;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px !important;
    }

    .button-second:hover {
        opacity: 0.9;
        background: rgb(26, 33, 42) !important;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px !important;
    }

    .button-third {
        background: transparent;
        color: rgb(250, 231, 33) !important;
        border: 2px solid rgb(250, 231, 33) !important;
        font-weight: 700 !important;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px !important;
    }

    .button-third:hover {
        border-color: rgb(250, 231, 33) !important;
        background-color: rgb(250, 231, 33) !important;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px !important;
        color: rgb(26, 33, 42) !important;
    }

    .button-third.button-border.button-fill:hover {
        color: rgb(26, 33, 42) !important;
    }

    .button-third.button-border.button-fill::before {
        position: absolute;
        color: rgb(0, 10, 23) !important;
        background-color: rgb(250, 231, 33) !important;
    }

    .button-third.button-border.button-fill:hover span {
        color: rgb(26, 33, 42) !important;
    }

    .heading-block h1,
    .heading-block h2,
    .heading-block h3,
    .heading-block h4,
    .emphasis-title h1,
    .emphasis-title h2 {
        margin-bottom: 0px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: rgb(1, 9, 19);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: rgb(1, 9, 19);
    }

    .language-selector {
        display: inline;
        font-size: 16px;
    }

    ul.languages-list {
        display: block;
    }

    ul.languages-list li {
        position: relative;
    }

    .dark #primary-menu:not(.not-dark) ul ul,
    .dark #primary-menu:not(.not-dark) ul li .mega-menu-content,
    #primary-menu.dark ul ul,
    #primary-menu.dark ul li .mega-menu-content {
        background-color: rgb(255, 255, 255);
        border-radius: 3px;
        border: 0px solid rgb(0, 0, 0);
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .dark #primary-menu:not(.not-dark) ul ul li>a,
    #primary-menu.dark ul ul li>a {
        font-size: 13px;
        padding-top: 10px;
        padding-bottom: 5px;
        color: rgb(51, 51, 51) !important;
    }

    .dark #primary-menu:not(.not-dark) ul ul li:hover>a,
    #primary-menu.dark ul ul li:hover>a {
        background-color: rgba(0, 0, 0, 0.1);
        color: rgb(51, 51, 51) !important;
    }

    .button.button-border.button-fill:hover {
        color: rgb(255, 255, 255) !important;
    }

    #header.sticky-header #header-wrap {
        background-color: rgb(1, 9, 19);
    }

    #footer {
        background: rgb(1, 9, 19) !important;
    }

    #footer .footer-menu {
        padding-top: 30px !important;
    }

    #footer .footer-menu a {
        color: rgb(238, 238, 238);
        font-size: 16px;
        padding-left: 15px;
    }

    #footer .footer-menu a:hover {
        color: rgb(250, 231, 33) !important;
    }

    #footer .footer-terms a {
        color: rgb(238, 238, 238);
    }

    #footer .footer-terms a:hover {
        color: rgb(177, 177, 177);
    }

    .home-cta-section,
    .home-cta-section.dark {
        background-repeat: repeat-x;
        background-image: url("#cdn#/images/fz/footersticks.svg");
        background-position: center bottom;
        background-color: rgb(1, 9, 19) !important;
    }

    .process-steps li.active a,
    .process-steps li.ui-tabs-active a {
        color: rgb(1, 9, 19);
        background-color: rgb(250, 231, 33) !important;
        text-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px !important;
        border-color: rgb(250, 231, 33) !important;
    }

    .process-steps li.active h5,
    .process-steps li.ui-tabs-active h5 {
        font-weight: 300;
        color: rgb(250, 231, 33);
    }

    body.pace-running {
        background: rgb(1, 9, 19) !important;
    }

    #copyrights {
        background-color: rgb(1, 9, 19);
    }

    #gotoTop:hover {
        background-color: rgb(26, 33, 42) !important;
        color: rgb(250, 231, 33) !important;
    }

    .dark .i-rounded,
    .dark .i-circled,
    .dark .i-bordered {
        background-color: rgb(1, 9, 19);
    }

    .homepage-form .form-control {
        height: 50px;
        margin-bottom: 20px;
    }

    .homepage-form .form-control#prefix {
        width: 30%;
        float: left;
    }

    .homepage-form .form-control#phone {
        width: 65%;
        float: right;
    }

    .homepage-form input[class^="form-control"]::-webkit-input-placeholder {
        text-transform: uppercase;
        color: rgb(1, 9, 19);
    }

    .homepage-form select#country,
    .homepage-form select.form-control option {
        color: rgb(1, 9, 19);
        text-transform: uppercase !important;
    }

    ::selection {
        background: rgb(250, 231, 33);
        color: rgb(1, 9, 19);
        text-shadow: none;
    }

    #header.sticky-header #top-header-buttons a:not(.button) {
        color: rgb(238, 238, 238);
    }

    #header.sticky-header #top-header-buttons a:not(.button):hover {
        color: rgb(250, 231, 33);
    }

    #top-search a,
    #top-cart a,
    #side-panel-trigger a,
    #top-account a {
        color: rgb(238, 238, 238) !important;
    }

    #top-search a:hover,
    #top-cart a:hover,
    #side-panel-trigger a:hover,
    #top-account a:hover {
        color: rgb(250, 231, 33) !important;
    }

    #primary-menu ul li:hover>a,
    #primary-menu ul li.current>a {
        color: rgb(250, 231, 33);
    }

    .home-platforms-parallax {
        background-image: url("#cdn#/images/fz/home-parallax.jpg");
    }

    .pace {
        background: rgb(26, 33, 42) !important;
        border-color: rgb(26, 33, 42) !important;
    }

    .pace .pace-progress {
        background: rgb(250, 231, 33) !important;
    }

    .pace::after {
        background: url("#cdn#/images/fz/logo-preloader.jpg") !important;
    }

    .promo.promo-dark {
        background-color: rgb(1, 9, 19);
    }

    .promo.promo-dark h3 {
        font-weight: 400;
    }

    .promo.promo-dark>h3 span,
    .promo.promo-dark>.container>h3 span {
        padding: 0px;
        border-radius: 3px;
        background-color: transparent;
        color: rgb(255, 255, 255);
        font-weight: 400;
    }

    h1>span:not(.nocolor),
    h2>span:not(.nocolor),
    h3>span:not(.nocolor),
    h4>span:not(.nocolor),
    h5>span:not(.nocolor),
    h6>span:not(.nocolor) {
        color: rgb(13, 211, 217) !important;
    }

    .feature-box h3 {
        color: rgb(1, 9, 19);
    }

    .feature-box.fbox-plain.fbox-light .fbox-icon i,
    .feature-box.fbox-plain.fbox-light .fbox-icon img {
        color: rgb(204, 204, 204);
    }

    .color {
        color: rgb(250, 231, 33) !important;
    }

    #slide-number,
    #slide-number span {
        display: none !important;
    }

    @media screen and (max-width: 992px) {
        #primary-menu ul ul li:hover>a {
            color: rgb(40, 40, 40) !important;
        }

        #primary-menu ul ul li a:hover {
            color: rgb(40, 40, 40) !important;
        }

        #primary-menu>ul>li.sub-menu>a>div:hover {
            color: rgb(40, 40, 40) !important;
        }

        .landing-wide-form {
            padding: 5px;
        }

        .promo.promo-dark {
            text-align: center;
        }

        .process-steps.process-3 {
            display: none;
        }

        #footer .footer-menu {
            display: none;
        }

        #header.transparent-header,
        #header.semi-transparent {
            border-bottom: 0px solid rgb(245, 245, 245);
            background: rgb(1, 9, 19) !important;
        }

        body:not(.sticky-responsive-menu) #primary-menu.mobile-menu-off-canvas>ul.show,
        body:not(.sticky-responsive-menu) #primary-menu.mobile-menu-off-canvas>div>ul.show {
            background: rgb(250, 231, 33);
        }

        body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu>ul>li:hover a,
        body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu>ul>li.current a,
        body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu>div>ul>li:hover a,
        body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu>div>ul>li.current a {
            color: rgb(26, 33, 42) !important;
        }

        #primary-menu.mobile-menu-off-canvas ul li {
            border-top: 0px solid rgb(1, 9, 19) !important;
        }

        #primary-menu.mobile-menu-off-canvas ul li>a {
            color: rgb(1, 9, 19) !important;
        }

        #primary-menu.mobile-menu-off-canvas ul li>a:hover {
            color: rgb(26, 33, 42) !important;
        }

        #primary-menu-trigger {
            font-size: 26px;
            color: rgb(255, 255, 255);
            margin: 30px 0px;
        }

        #logo {
            text-align: center;
            margin-top: 0px !important;
        }

        #logo a.standard-logo {
            display: inline-block !important;
            text-align: center !important;
        }

        .process-steps li {
            float: left;
            width: 33% !important;
            margin-top: 20px !important;
        }

        .home-platforms-parallax {
            background-image: url("#cdn#/images/fz/home-parallax.jpg");
            background-position: 100% 0px;
        }
    }

    @media screen and (max-width: 720px) {
        .homepage-form .button {
            width: 100% !important;
            text-align: center !important;
        }
    }

    @media screen and (min-width: 720px) and (max-width: 992px) {
        .homepage-form .col_last {
            width: 100% !important;
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1150px) {
        .swiper_wrapper {
            height: 520px;
        }

        #header.transparent-header+#slider,
        #header.transparent-header+#page-title.page-title-parallax,
        #header.transparent-header+#google-map,
        #slider+#header.transparent-header {
            margin-bottom: -175px;
        }
    }

    body.side-panel-open .body-overlay {
        z-index: 1;
    }

    #side-panel .side-panel-wrap {
        background: rgb(26, 33, 42);
        padding: 110px 70px 50px 40px;
    }

    #side-panel .side-panel-wrap .button {
        width: 100%;
        margin-left: 0px;
        margin-right: 0px;
    }

    #page-title {
        background-color: rgb(26, 33, 42);
        border-bottom: 1px solid rgb(26, 33, 42);
        color: rgb(238, 238, 238);
    }

    #page-title.page-title-mini h1 {
        font-weight: 300;
        color: rgb(238, 238, 238);
    }

    .breadcrumb a {
        color: rgb(187, 187, 187);
        text-transform: uppercase;
    }

    .breadcrumb a:hover {
        color: rgb(238, 238, 238);
    }

    .breadcrumb>.active {
        color: rgb(250, 231, 33);
        text-transform: uppercase !important;
    }

    .footer-stick {
        background: rgb(26, 33, 42);
    }

    .footer-stick.button.button-full strong {
        font-weight: 600;
        color: rgb(13, 211, 217);
        border-bottom: 2px solid rgb(13, 211, 217) !important;
    }

    .footer-stick:hover {
        background-color: rgb(1, 9, 19) !important;
    }

    .acctitle,
    .acctitlec,
    .accordion.accordion-border .acc_content {
        font-size: 16px;
    }

    .modal-client .modal-header {
        padding: 15px;
        border-bottom: 1px solid rgb(1, 9, 19);
        background: rgb(1, 9, 19);
        color: rgb(238, 238, 238);
    }

    .modal-body .navbar-default {
        background-color: transparent;
    }

    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        padding: 16px;
    }

    .table.fz-table {
        font-size: 16px !important;
    }

    .table.fz-table tr td:first-child {
        color: rgb(13, 211, 217);
    }

    .table.fz-table>thead>tr>th {
        border-bottom: 2px solid rgb(26, 33, 42);
        background: rgb(26, 33, 42);
        font-weight: 900;
        text-transform: uppercase;
        vertical-align: top;
        color: rgb(255, 255, 255);
    }

    .table.fz-table>tbody>tr>td {
        border-top: 1px solid rgb(238, 238, 238);
        background: rgb(255, 255, 255) !important;
    }

    .table.fz-table.table-striped>tbody>tr:nth-child(2n) td {
        background: rgb(249, 249, 249) !important;
    }

    .nav-tree li:hover>a,
    .nav-tree li.current>a,
    .nav-tree li.active>a {
        color: rgb(13, 211, 217) !important;
    }

    .slider-caption p {
        color: rgb(238, 238, 238);
        font-size: 24px !important;
    }

    .feature-client-box:hover {
        background: rgb(26, 33, 42) !important;
    }

    .feature-box.feature-client-box.fbox-center.fbox-plain .fbox-icon i {
        color: rgb(1, 9, 19);
        margin-bottom: 20px;
    }

    .feature-client-box {
        height: 140px;
    }

    .nav.navbar-nav i.icon-exclamation-sign {
        display: none;
    }

    #gotoTop {
        left: 30px;
    }

    .tabs.tabs-bb ul.tab-nav li.ui-tabs-active a {
        border-bottom: 2px solid rgb(13, 211, 217);
    }

    .alertmsg {
        background: rgb(243, 243, 243);
        color: rgb(40, 40, 40);
    }

    li.sub-menu::selection {
        color: rgb(40, 40, 40) !important;
    }

    .footer-email:hover {
        color: rgb(177, 177, 177);
    }

    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    #fifth .slider-caption {
        top: 276.5px !important;

    }

    #fifth iframe {
        height: 60% !important;
        width: 60% !important;
    }

    .xmas-overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, .7), rgba(0, 0, 0, .1));
        z-index: 800;
    }


    .swiper-xmas .container {

        z-index: 9999 !important;
    }



    @media (max-width: 767px) {

        .slider-caption.slider-xmas p,
        .slider-caption.slider-xmas .button {
            display: block !important;


        }

        .slider-caption.slider-xmas .button {
            text-align: center !important;
            width: 70% !important;
            margin: 0 auto !important;
            margin-top: 30px !important;
        }


        .slider-caption.slider-xmas {
            margin-top: -40px;
        }


        .xmas-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, .7), rgba(0, 0, 0, .4));
            z-index: 800;
        }


        .slider-caption p {

            font-size: 20px !important;
            padding-top: 20px !important;
        }



    }


    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
