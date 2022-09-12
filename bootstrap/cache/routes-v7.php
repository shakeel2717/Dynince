<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/terms-of-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'policy.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8fE1J1BBHLcruknK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ik3rgQwl1HEPpWbT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d2MVz70Mit2kF1Ia',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JgD2fRw35ycClQFo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EC05Gnb33vJsHP72',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cron',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/practice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'practice.cron',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'schedule.cron',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/crypto/price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crypt.price',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/provider/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.currencies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/provider/currenciesToTable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.currenciesToTable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/provider/marketsToTable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.marketsToTable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/provider/pairsToTable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.pairsToTable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/provider/check/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.checkdeposit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/provider/fetch/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.fetchorder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cron/provider/marketsClean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.marketsClean',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate-qrcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ew1jUXMer3STdd61',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.paypal',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/paypal_sdk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.paypal_sdk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/perfect_money' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.perfect_money',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.stripe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/stripe_js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.stripe_js',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/stripe_v3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.stripe_v3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/skrill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.skrill',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/paytm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.paytm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/payeer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.payeer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.paystack',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/voguepay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.voguepay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.razorpay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/instamojo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.instamojo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/blockchain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.blockchain',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/blockio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.blockio',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/coinpayments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.coinpayments',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/coinpayments_fiat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.coinpayments_fiat',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/coingate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.coingate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/coinbase_commerce' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.coinbase_commerce',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.mollie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn/cashmaal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.cashmaal',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ticket',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ticket/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ticket.open',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ticket/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ticket.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.pages.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/banned' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banned',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogetc.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogetc.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog/feed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogetc.feed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UG5c8cyoEIQwPsDE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/metamask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'metamask.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eLUznEUVLwscAfuV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile-information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-profile-information.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::amdD6iOvBAvUl38v',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-password-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/two-factor-challenge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V8FQmDbtKLXC7MJ7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.enable',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.disable',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-qr-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.qr-code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-recovery-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.recovery-codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PCQK4HlXdFj1pZyy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/crypto/rate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.crypto.rate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/trade/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.trade.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/trade/result' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.trade.result',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/trade/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.trade.schedule',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/add/practice/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.add.practice.balance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/practice/crypto/rate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.practice.crypto.rate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/practice/exchange' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.practice.exchange',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/practice/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.practice.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/practice/result' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.practice.result',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/binary/practice/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.binary.practice.schedule',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.generated::xHLmpc3Lj0hhtVQm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/support/ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.generated::42bH9LqPP8FM7bmX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/trade/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.generated::qn2Zz4wxzzdPTCNA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/dashboard/binary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/binary/trade/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.trade.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/binary/trade/contracts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.trade.contract.log',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/binary/trade/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.trade.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/binary/practice/contracts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.practice.contract.log',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/binary/practice/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.practice.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/wallets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.wallets',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.wallet.balance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/withdraw/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.withdraw.history',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/deposit/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.deposit.history',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/transaction/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.transaction.history',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/fetch/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.news',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/trade/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.trade.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/trade/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.trade.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/j/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.create.json',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/fetch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.fetch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/regenerate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.regenerate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.deposit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.withdraw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/transfer/trading' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.transfer.trading',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/transfer/funding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.transfer.funding',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/connect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.connect',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/disconnect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.disconnect',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/watchlists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.watchlists',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/watchlist/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/watchlist/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.watchlist.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/watchlist/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.watchlist.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/kyc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.kyc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/kyc/application' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.kyc.application',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/kyc/application/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.kyc.application.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/kyc/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.kyc.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/deposit/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.deposit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/deposit/insert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.deposit.insert',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/deposit/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.deposit.preview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/deposit/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.deposit.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/deposit/manual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.deposit.manual.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.deposit.manual.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/deposit/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.deposit.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.withdraw.money',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/withdraw/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.withdraw.preview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.withdraw.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/withdraw/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.withdraw.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/ticket/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket.open',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/ticket/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/market' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.market',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lic/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lic.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lic/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lic.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cron' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cron',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/active' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.active',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/banned' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.banned',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/email-verified' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.emailVerified',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/email-unverified' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.emailUnverified',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/sms-unverified' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.smsUnverified',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/sms-verified' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.smsVerified',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/send-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.email.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.email.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/regenerate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.regenerate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/binary/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.trade.log.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/binary/wining/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.trade.log.wining',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/binary/losing/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.trade.log.losing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/binary/draw/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.trade.log.draw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/binary/practice/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.practice.log.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/binary/practice/wining/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.practice.log.wining',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/binary/practice/losing/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.practice.log.losing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/binary/practice/draw/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.practice.log.draw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trade/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange.log.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trade/pending/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange.log.pending',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/trade/completed/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange.log.completed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/currencies/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.currency.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/currencies/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.currency.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/markets/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.market.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/markets/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.market.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.provider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/provider/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.provider.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/provider/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.provider.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/manual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.manual.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/manual/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.manual.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.manual.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/manual/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.manual.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/manual/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.manual.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deposit/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.pending',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deposit/rejected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.rejected',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deposit/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deposit/successful' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.successful',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deposit/reject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.reject',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deposit/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.pending',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/rejected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.rejected',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.log',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/reject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.reject',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.method.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.method.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.method.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.method.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.method.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.transaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/transaction/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.transaction.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.deposit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/deposit/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.deposit.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.withdraw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/withdraw/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.withdraw.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/transfer/trading' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.transfer.trading',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/transfer/trading/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.transfer.trading.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/transfer/funding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.transfer.funding',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/transfer/funding/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.transfer.funding.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/transfer/funding/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.transfer.funding.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/wallet/transfer/funding/reject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.wallet.transfer.funding.reject',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.commission',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/commission/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.commission.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report/login/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.login.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tickets/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.pending',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tickets/closed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.closed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tickets/answered' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.answered',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ticket/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/platform' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.platform',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.platform.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/logo-icon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.logo_icon',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.logo_icon_update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/extensions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.extensions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/extensions/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.extensions.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/extensions/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.extensions.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/extensions/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.extensions.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/seo-manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.seo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/frontend/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/frontend/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/frontend/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/frontend/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/page/section/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.section.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/page/section/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.section.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/page/sections/editor/update/text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.editor.update.text',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/page/sections/editor/update/image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.editor.update.image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/template/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_admin/add_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.create_post',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.store_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_admin/image_uploads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.images.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_admin/image_uploads/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.images.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.images.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_admin/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_admin/categories/add_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.categories.create_category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.categories.store_category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/kyc/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.ajax_show',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/kyc/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/kyc/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/kyc/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/email/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/email/template/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.email.template.view',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/email/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.email.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/email/template/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.email.template.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sidebar/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sidebar.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sidebar/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sidebar.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sidebar/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sidebar.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sidebar/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sidebar.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/binary/practice/logs/clean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.database.binary.practice.logs.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/binary/trade/logs/clean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.database.binary.trade.logs.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/trade/logs/clean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.database.trade.logs.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/forex/investments/logs/clean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.database.forex.investments.logs.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/bot/investments/logs/clean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.database.bot.investments.logs.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/staking/logs/clean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.database.staking.logs.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/ico/logs/clean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.database.ico.logs.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/wallets/clean' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.database.wallets.clean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/alerts/remove/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.alerts.remove_install_file',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/l(?|ivewire/(?|message/([^/]++)(*:39)|preview\\-file/([^/]++)(*:68))|ang/([^/]++)(*:88))|/ipn/flutterwave/([^/]++)/([^/]++)(*:130)|/t(?|icket/(?|view/([^/]++)(*:165)|reply/([^/]++)(*:187)|download/([^/]++)(*:212))|rad(?|ing/([^/]++)(*:239)|e/([^/]++)/([^/]++)(*:266)))|/placeholder\\-image/([^/]++)(*:304)|/blog/(?|category/([^/]++)(*:338)|([^/]++)(*:354)|save_comment/([^/]++)(*:383))|/re(?|set\\-password/([^/]++)(*:420)|gister/([^/]++)(*:443))|/email/verify/([^/]++)/([^/]++)(*:483)|/user/(?|fetch/(?|trade/orders/([^/]++)/([^/]++)(*:539)|binary/(?|trade/(?|([^/]++)/([^/]++)(*:583)|wining/contracts(*:607)|losing/contracts(*:631)|draw/contracts(*:653))|practice/([^/]++)/([^/]++)(*:688)|contract/view/([^/]++)/([^/]++)(*:727))|wallet/([^/]++)/([^/]++)/([^/]++)(*:769))|trade/([^/]++)/([^/]++)(*:801)|withdraw/wallet/([^/]++)(*:833)|support/ticket/(?|view/([^/]++)(*:872)|reply/([^/]++)(*:894)|download/([^/]++)(*:919)))|/admin/(?|notification/read/([^/]++)(*:965)|user(?|s/(?|([^/]++)/search(*:1000)|login/history/([^/]++)(*:1031)|referral/log/([^/]++)(*:1061)|commission/log/([^/]++)(*:1093))|/(?|de(?|tail/([^/]++)(*:1125)|posits/(?|([^/]++)(*:1152)|via/([^/]++)/([^/]++)/([^/]++)(*:1191)))|update/([^/]++)(*:1217)|add\\-sub\\-balance/([^/]++)(*:1252)|send\\-email/([^/]++)(?|(*:1284))|tra(?|nsactions/([^/]++)(*:1318)|de/(?|traded/([^/]++)(*:1348)|wining/([^/]++)(*:1372)|losing/([^/]++)(*:1396)|draw/([^/]++)(*:1418)))|withdrawals/(?|([^/]++)(*:1452)|via/([^/]++)/([^/]++)/([^/]++)(*:1491))|practice/trade/([^/]++)(*:1524)))|b(?|inary/(?|trade/([^/]++)/search(*:1569)|practice/trade/([^/]++)/search(*:1608))|log_admin/(?|edit_post/([^/]++)(?|(*:1652))|image_uploads/post/([^/]++)/delete\\-images(?|(*:1707))|delete_post/([^/]++)(*:1737)|c(?|omments/([^/]++)(?|(*:1769))|ategories/(?|edit_category/([^/]++)(?|(*:1817))|delete_category/([^/]++)(*:1851)))))|t(?|rade/([^/]++)/search(*:1888)|icket(?|s/view/([^/]++)(*:1920)|/(?|reply/([^/]++)(*:1947)|download/([^/]++)(*:1973)))|emplate/(?|([^/]++)/pages(?|(*:2012)|/([^/]++)/sections(?|(*:2042)|/([^/]++)/editor(*:2067)))|install/([^/]++)(*:2094)|activater/([^/]++)(*:2121)|update/([^/]++)(*:2145)))|p(?|rovider/(?|edit/([^/]++)(*:2184)|balances/([^/]++)(*:2210)|install/([^/]++)(*:2235)|activater/([^/]++)(*:2262)|updater/([^/]++)(*:2287)|([^/]++)/(?|currencies(*:2318)|markets(*:2334)))|ayment/(?|provider/(?|edit/([^/]++)(*:2380)|update/([^/]++)(*:2404)|remove/([^/]++)(*:2428))|manual/(?|edit/([^/]++)(*:2461)|update/([^/]++)(*:2485))))|deposit/(?|details/([^/]++)(*:2524)|via/([^/]++)(?:/([^/]++))?(*:2559)|([^/]++)/search(*:2583)|date\\-search/([^/]++)(*:2613))|withdraw/(?|via/([^/]++)(?:/([^/]++))?(*:2661)|([^/]++)/search(*:2685)|d(?|ate\\-search/([^/]++)(*:2718)|etails/([^/]++)(*:2742))|edit/([^/]++)(?|(*:2768)))|report/login/ipHistory/([^/]++)(*:2810)|extensions/(?|install/([^/]++)(*:2849)|activater/([^/]++)(*:2876)|update/([^/]++)(*:2900))|frontend\\-content/([^/]++)(*:2936)|kyc(?|\\-list(?:/([^/]++))?(*:2971)|/view/([^/]++)/([^/]++)(*:3003))|sidebar/edit/([^/]++)(*:3034)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      68 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      88 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jZlRmryqr3Kpvaat',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ipn.flutterwave',
          ),
          1 => 
          array (
            0 => 'trx',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ticket.view',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ticket.reply',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ticket.download',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page',
          ),
          1 => 
          array (
            0 => 'title',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trade',
          ),
          1 => 
          array (
            0 => 'symbol',
            1 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'placeholderImage',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogetc.view_category',
          ),
          1 => 
          array (
            0 => 'categorySlug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogetc.single',
          ),
          1 => 
          array (
            0 => 'blogPostSlug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogetc.comments.add_new_comment',
          ),
          1 => 
          array (
            0 => 'blogPostSlug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'refer.register',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.generated::MfAdxahvjG9ANdAU',
          ),
          1 => 
          array (
            0 => 'symbol',
            1 => 'currency',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      583 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.trade.now',
          ),
          1 => 
          array (
            0 => 'symbol',
            1 => 'currency',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.trade.wining.contract.log',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.trade.losing.contract.log',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.trade.draw.contract.log',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.practice.now',
          ),
          1 => 
          array (
            0 => 'symbol',
            1 => 'currency',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.binary.contract.preview',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.wallet',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'symbol',
            2 => 'address',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.trade.now',
          ),
          1 => 
          array (
            0 => 'symbol',
            1 => 'currency',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.withdraw',
          ),
          1 => 
          array (
            0 => 'symbol',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket.view',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket.reply',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket.download',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.read',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1000 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.search',
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.login.history.single',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.referral.log',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1093 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.commission.log',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.deposits',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.deposits.method',
            'type' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
            1 => 'type',
            2 => 'userId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.addSubBalance',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.email.single',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.transactions',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.traded',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.wining',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.losing',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.draw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.withdrawals',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.withdrawals.method',
            'type' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
            1 => 'type',
            2 => 'userId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.practice.log',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.trade.log.search',
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.binary.practice.log.search',
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.edit_post',
          ),
          1 => 
          array (
            0 => 'blogPostId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.update_post',
          ),
          1 => 
          array (
            0 => 'blogPostId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.images.delete-post-image',
          ),
          1 => 
          array (
            0 => 'postId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.images.delete-post-image-confirmed',
          ),
          1 => 
          array (
            0 => 'postId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.destroy_post',
          ),
          1 => 
          array (
            0 => 'blogPostId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.comments.approve',
          ),
          1 => 
          array (
            0 => 'commentId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.comments.delete',
          ),
          1 => 
          array (
            0 => 'commentId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.categories.edit_category',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.categories.update_category',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1851 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogetc.admin.categories.destroy_category',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exchange.log.search',
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.reply',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.download',
          ),
          1 => 
          array (
            0 => 'ticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.pages',
          ),
          1 => 
          array (
            0 => 'template_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.sections',
          ),
          1 => 
          array (
            0 => 'template_id',
            1 => 'page_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.editor',
          ),
          1 => 
          array (
            0 => 'template_id',
            1 => 'page_id',
            2 => 'section_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2094 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.install',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.activater',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.template.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.balances',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.install',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.activater',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.updater',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.currencies.index',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.markets.index',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.provider.edit',
          ),
          1 => 
          array (
            0 => 'alias',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.provider.update',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.provider.remove',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.manual.edit',
          ),
          1 => 
          array (
            0 => 'alias',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.manual.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.method',
            'type' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2583 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.search',
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.deposit.dateSearch',
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.method',
            'type' => NULL,
          ),
          1 => 
          array (
            0 => 'method_id',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.search',
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2718 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.dateSearch',
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.method.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.withdraw.method.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.login.ipHistory',
          ),
          1 => 
          array (
            0 => 'ip',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2849 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.extensions.install',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.extensions.activater',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.extensions.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.seo.content',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kycs',
            'status' => NULL,
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.view',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sidebar.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'terms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-of-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TermsOfServiceController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TermsOfServiceController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'policy.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\PrivacyPolicyController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\PrivacyPolicyController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'policy.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'verified',
          4 => 'role:user',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'as' => 'user.profile.show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8fE1J1BBHLcruknK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::8fE1J1BBHLcruknK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ik3rgQwl1HEPpWbT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::Ik3rgQwl1HEPpWbT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d2MVz70Mit2kF1Ia' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::d2MVz70Mit2kF1Ia',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JgD2fRw35ycClQFo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000002f5d81cc000000003723aad0";}";s:4:"hash";s:44:"B0pND035uS2aN8Y9SVCOv3GPOaYBr8kqHPUpP3Vo8h4=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::JgD2fRw35ycClQFo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EC05Gnb33vJsHP72' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:298:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:80:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'optimize:clear\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000002f5d81ce000000003723aad0";}";s:4:"hash";s:44:"h2tRHnJIEi/xKJJ2sCTqqHzS92soDR1ke4hZO1mM/jg=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EC05Gnb33vJsHP72',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cron' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@index',
        'controller' => 'App\\Http\\Controllers\\CronController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cron',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'practice.cron' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/practice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@practiceCron',
        'controller' => 'App\\Http\\Controllers\\CronController@practiceCron',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'practice.cron',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'schedule.cron' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@scheduledOrdersCron',
        'controller' => 'App\\Http\\Controllers\\CronController@scheduledOrdersCron',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'schedule.cron',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crypt.price' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/crypto/price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@store',
        'controller' => 'App\\Http\\Controllers\\CronController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'crypt.price',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.currencies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/provider/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@currencies',
        'controller' => 'App\\Http\\Controllers\\CronController@currencies',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'provider.currencies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.currenciesToTable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/provider/currenciesToTable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@currenciesToTable',
        'controller' => 'App\\Http\\Controllers\\CronController@currenciesToTable',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'provider.currenciesToTable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.marketsToTable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/provider/marketsToTable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@marketsToTable',
        'controller' => 'App\\Http\\Controllers\\CronController@marketsToTable',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'provider.marketsToTable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.pairsToTable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/provider/pairsToTable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@pairsToTable',
        'controller' => 'App\\Http\\Controllers\\CronController@pairsToTable',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'provider.pairsToTable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.checkdeposit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/provider/check/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@fetch_deposits',
        'controller' => 'App\\Http\\Controllers\\CronController@fetch_deposits',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'provider.checkdeposit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.fetchorder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/provider/fetch/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@fetch_order',
        'controller' => 'App\\Http\\Controllers\\CronController@fetch_order',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'provider.fetchorder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.marketsClean' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cron/provider/marketsClean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@marketsClean',
        'controller' => 'App\\Http\\Controllers\\CronController@marketsClean',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'provider.marketsClean',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ew1jUXMer3STdd61' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generate-qrcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\QrCodeController@index',
        'controller' => 'App\\Http\\Controllers\\QrCodeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ew1jUXMer3STdd61',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.paypal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\paypal\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\paypal\\ProcessController@ipn',
        'as' => 'ipn.paypal',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.paypal_sdk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ipn/paypal_sdk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\paypal_sdk\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\paypal_sdk\\ProcessController@ipn',
        'as' => 'ipn.paypal_sdk',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.perfect_money' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/perfect_money',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\perfect_money\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\perfect_money\\ProcessController@ipn',
        'as' => 'ipn.perfect_money',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\stripe\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\stripe\\ProcessController@ipn',
        'as' => 'ipn.stripe',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.stripe_js' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/stripe_js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\stripe_js\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\stripe_js\\ProcessController@ipn',
        'as' => 'ipn.stripe_js',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.stripe_v3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/stripe_v3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\stripe_v3\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\stripe_v3\\ProcessController@ipn',
        'as' => 'ipn.stripe_v3',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.skrill' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/skrill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\skrill\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\skrill\\ProcessController@ipn',
        'as' => 'ipn.skrill',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.paytm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/paytm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\paytm\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\paytm\\ProcessController@ipn',
        'as' => 'ipn.paytm',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.payeer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/payeer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\payeer\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\payeer\\ProcessController@ipn',
        'as' => 'ipn.payeer',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.paystack' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\paystack\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\paystack\\ProcessController@ipn',
        'as' => 'ipn.paystack',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.voguepay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/voguepay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\voguepay\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\voguepay\\ProcessController@ipn',
        'as' => 'ipn.voguepay',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.flutterwave' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ipn/flutterwave/{trx}/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\flutterwave\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\flutterwave\\ProcessController@ipn',
        'as' => 'ipn.flutterwave',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\razorpay\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\razorpay\\ProcessController@ipn',
        'as' => 'ipn.razorpay',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.instamojo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/instamojo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\instamojo\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\instamojo\\ProcessController@ipn',
        'as' => 'ipn.instamojo',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.blockchain' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ipn/blockchain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\blockchain\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\blockchain\\ProcessController@ipn',
        'as' => 'ipn.blockchain',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.blockio' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ipn/blockio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\blockio\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\blockio\\ProcessController@ipn',
        'as' => 'ipn.blockio',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.coinpayments' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/coinpayments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\coinpayments\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\coinpayments\\ProcessController@ipn',
        'as' => 'ipn.coinpayments',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.coinpayments_fiat' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/coinpayments_fiat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\coinpayments_fiat\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\coinpayments_fiat\\ProcessController@ipn',
        'as' => 'ipn.coinpayments_fiat',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.coingate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/coingate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\coingate\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\coingate\\ProcessController@ipn',
        'as' => 'ipn.coingate',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.coinbase_commerce' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/coinbase_commerce',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\coinbase_commerce\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\coinbase_commerce\\ProcessController@ipn',
        'as' => 'ipn.coinbase_commerce',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.mollie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ipn/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\mollie\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\mollie\\ProcessController@ipn',
        'as' => 'ipn.mollie',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ipn.cashmaal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn/cashmaal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateway\\cashmaal\\ProcessController@ipn',
        'controller' => 'App\\Http\\Controllers\\Gateway\\cashmaal\\ProcessController@ipn',
        'as' => 'ipn.cashmaal',
        'namespace' => 'App\\Http\\Controllers\\Gateway',
        'prefix' => '/ipn',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TicketController@supportTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@supportTicket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/ticket',
        'where' => 
        array (
        ),
        'as' => 'ticket',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ticket.open' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ticket/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TicketController@openSupportTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@openSupportTicket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/ticket',
        'where' => 
        array (
        ),
        'as' => 'ticket.open',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ticket.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ticket/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TicketController@storeSupportTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@storeSupportTicket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/ticket',
        'where' => 
        array (
        ),
        'as' => 'ticket.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ticket.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ticket/view/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TicketController@viewTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@viewTicket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/ticket',
        'where' => 
        array (
        ),
        'as' => 'ticket.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ticket.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ticket/reply/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TicketController@replyTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@replyTicket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/ticket',
        'where' => 
        array (
        ),
        'as' => 'ticket.reply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ticket.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ticket/download/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TicketController@ticketDownload',
        'controller' => 'App\\Http\\Controllers\\TicketController@ticketDownload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/ticket',
        'where' => 
        array (
        ),
        'as' => 'ticket.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UpdateController@download_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UpdateController@download_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'install',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@home',
        'controller' => 'App\\Http\\Controllers\\HomeController@home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trading/{title}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@page',
        'controller' => 'App\\Http\\Controllers\\HomeController@page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.pages.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@about',
        'controller' => 'App\\Http\\Controllers\\HomeController@about',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.pages.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banned' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'banned',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@banned',
        'controller' => 'App\\Http\\Controllers\\HomeController@banned',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'banned',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteController@subscribe',
        'controller' => 'App\\Http\\Controllers\\SiteController@subscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteController@contact',
        'controller' => 'App\\Http\\Controllers\\SiteController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteController@contactSubmit',
        'controller' => 'App\\Http\\Controllers\\SiteController@contactSubmit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'placeholderImage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'placeholder-image/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteController@placeholderImage',
        'controller' => 'App\\Http\\Controllers\\SiteController@placeholderImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'placeholderImage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogetc.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Blog\\PostsController@index',
        'controller' => 'App\\Http\\Controllers\\Blog\\PostsController@index',
        'namespace' => 'App\\Http\\Controllers\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'blogetc.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogetc.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Blog\\PostsController@search',
        'controller' => 'App\\Http\\Controllers\\Blog\\PostsController@search',
        'namespace' => 'App\\Http\\Controllers\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'blogetc.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogetc.feed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/feed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Blog\\BlogEtcRssFeedController@feed',
        'controller' => 'App\\Http\\Controllers\\Blog\\BlogEtcRssFeedController@feed',
        'namespace' => 'App\\Http\\Controllers\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'blogetc.feed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogetc.view_category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/category/{categorySlug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Blog\\PostsController@showCategory',
        'controller' => 'App\\Http\\Controllers\\Blog\\PostsController@showCategory',
        'namespace' => 'App\\Http\\Controllers\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'blogetc.view_category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogetc.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{blogPostSlug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Blog\\PostsController@show',
        'controller' => 'App\\Http\\Controllers\\Blog\\PostsController@show',
        'namespace' => 'App\\Http\\Controllers\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'blogetc.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogetc.comments.add_new_comment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blog/save_comment/{blogPostSlug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'throttle:10,3',
        ),
        'uses' => 'App\\Http\\Controllers\\Blog\\CommentsController@store',
        'controller' => 'App\\Http\\Controllers\\Blog\\CommentsController@store',
        'namespace' => 'App\\Http\\Controllers\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'blogetc.comments.add_new_comment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jZlRmryqr3Kpvaat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@swap',
        'controller' => 'App\\Http\\Controllers\\LanguageController@swap',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jZlRmryqr3Kpvaat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'verified',
          4 => 'role:admin',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'as' => 'admin.profile.show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UG5c8cyoEIQwPsDE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
          3 => 'throttle:login',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UG5c8cyoEIQwPsDE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'metamask.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/metamask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
          3 => 'throttle:login',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@authenticate',
        'controller' => 'App\\Http\\Controllers\\WalletController@authenticate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'metamask.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
          3 => 'regStatus',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'refer.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/{reference}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
          3 => 'regStatus',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@createref',
        'controller' => 'App\\Http\\Controllers\\UserController@createref',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'refer.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eLUznEUVLwscAfuV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eLUznEUVLwscAfuV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\EmailVerificationPromptController@__invoke',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\EmailVerificationPromptController@__invoke',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'signed',
          4 => 'throttle:6,1',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\VerifyEmailController@__invoke',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\VerifyEmailController@__invoke',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'throttle:6,1',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\EmailVerificationNotificationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\EmailVerificationNotificationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-profile-information.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile-information',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-profile-information.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirmed-password-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::amdD6iOvBAvUl38v' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::amdD6iOvBAvUl38v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V8FQmDbtKLXC7MJ7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'guest:web',
          3 => 'throttle:two-factor',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::V8FQmDbtKLXC7MJ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.enable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.disable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.qr-code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-qr-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.qr-code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.recovery-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.recovery-codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PCQK4HlXdFj1pZyy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PCQK4HlXdFj1pZyy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'verified',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:264:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000002f5d8066000000003723aad0";}";s:4:"hash";s:44:"w/FQ0eBEU1iEjRljKH6lPlwhp5m3kvyNN0PMcCgzIWE=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trade/{symbol}/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@trade',
        'controller' => 'App\\Http\\Controllers\\HomeController@trade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'trade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@updateProfile',
        'as' => 'user.profile.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'as' => 'user.home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.crypto.rate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/binary/crypto/rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TradeController@btcRate',
        'controller' => 'App\\Http\\Controllers\\TradeController@btcRate',
        'as' => 'user.binary.crypto.rate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.trade.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/binary/trade/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'checkKYC',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TradeController@store',
        'controller' => 'App\\Http\\Controllers\\TradeController@store',
        'as' => 'user.binary.trade.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.trade.result' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/binary/trade/result',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'checkKYC',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TradeController@tradeResult',
        'controller' => 'App\\Http\\Controllers\\TradeController@tradeResult',
        'as' => 'user.binary.trade.result',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.trade.schedule' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/binary/trade/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'checkKYC',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TradeController@schedule',
        'controller' => 'App\\Http\\Controllers\\TradeController@schedule',
        'as' => 'user.binary.trade.schedule',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.add.practice.balance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/binary/add/practice/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@addPracticeBalance',
        'controller' => 'App\\Http\\Controllers\\UserController@addPracticeBalance',
        'as' => 'user.binary.add.practice.balance',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.practice.crypto.rate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/binary/practice/crypto/rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\PracticeController@btcRate',
        'controller' => 'App\\Http\\Controllers\\PracticeController@btcRate',
        'as' => 'user.binary.practice.crypto.rate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary/practice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.practice.exchange' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/binary/practice/exchange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\PracticeController@exchange',
        'controller' => 'App\\Http\\Controllers\\PracticeController@exchange',
        'as' => 'user.binary.practice.exchange',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary/practice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.practice.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/binary/practice/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\PracticeController@store',
        'controller' => 'App\\Http\\Controllers\\PracticeController@store',
        'as' => 'user.binary.practice.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary/practice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.practice.result' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/binary/practice/result',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\PracticeController@tradeResult',
        'controller' => 'App\\Http\\Controllers\\PracticeController@tradeResult',
        'as' => 'user.binary.practice.result',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary/practice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.binary.practice.schedule' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/binary/practice/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\PracticeController@schedule',
        'controller' => 'App\\Http\\Controllers\\PracticeController@schedule',
        'as' => 'user.binary.practice.schedule',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/binary/practice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@data',
        'controller' => 'App\\Http\\Controllers\\UserController@data',
        'as' => 'user.fetch.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.generated::xHLmpc3Lj0hhtVQm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TicketController@fetch_supportTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@fetch_supportTicket',
        'as' => 'user.fetch.generated::xHLmpc3Lj0hhtVQm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.generated::42bH9LqPP8FM7bmX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/support/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TicketController@fetch_Ticket',
        'controller' => 'App\\Http\\Controllers\\TicketController@fetch_Ticket',
        'as' => 'user.fetch.generated::42bH9LqPP8FM7bmX',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.generated::qn2Zz4wxzzdPTCNA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/trade/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\ExchangeController@trading_orders',
        'controller' => 'App\\Http\\Controllers\\ExchangeController@trading_orders',
        'as' => 'user.fetch.generated::qn2Zz4wxzzdPTCNA',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.generated::MfAdxahvjG9ANdAU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/trade/orders/{symbol}/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\ExchangeController@trading_market_orders',
        'controller' => 'App\\Http\\Controllers\\ExchangeController@trading_market_orders',
        'as' => 'user.fetch.generated::MfAdxahvjG9ANdAU',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/dashboard/binary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@binary_dashboard',
        'controller' => 'App\\Http\\Controllers\\UserController@binary_dashboard',
        'as' => 'user.fetch.binary.dashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.trade.now' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/trade/{symbol}/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\BinaryController@trade',
        'controller' => 'App\\Http\\Controllers\\BinaryController@trade',
        'as' => 'user.fetch.binary.trade.now',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.trade.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/trade/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\BinaryController@fetch_wallet',
        'controller' => 'App\\Http\\Controllers\\BinaryController@fetch_wallet',
        'as' => 'user.fetch.binary.trade.wallet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.trade.contract.log' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/trade/contracts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\BinaryController@binary_trade_log',
        'controller' => 'App\\Http\\Controllers\\BinaryController@binary_trade_log',
        'as' => 'user.fetch.binary.trade.contract.log',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.trade.orders' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/trade/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\BinaryController@binary_trade_orders',
        'controller' => 'App\\Http\\Controllers\\BinaryController@binary_trade_orders',
        'as' => 'user.fetch.binary.trade.orders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.trade.wining.contract.log' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/trade/wining/contracts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TradeController@winingTradeContract',
        'controller' => 'App\\Http\\Controllers\\TradeController@winingTradeContract',
        'as' => 'user.fetch.binary.trade.wining.contract.log',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.trade.losing.contract.log' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/trade/losing/contracts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TradeController@losingTradeContract',
        'controller' => 'App\\Http\\Controllers\\TradeController@losingTradeContract',
        'as' => 'user.fetch.binary.trade.losing.contract.log',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.trade.draw.contract.log' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/trade/draw/contracts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TradeController@drawTradeContract',
        'controller' => 'App\\Http\\Controllers\\TradeController@drawTradeContract',
        'as' => 'user.fetch.binary.trade.draw.contract.log',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.practice.now' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/practice/{symbol}/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\BinaryController@practice',
        'controller' => 'App\\Http\\Controllers\\BinaryController@practice',
        'as' => 'user.fetch.binary.practice.now',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/practice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.practice.contract.log' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/practice/contracts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\BinaryController@binary_practice_log',
        'controller' => 'App\\Http\\Controllers\\BinaryController@binary_practice_log',
        'as' => 'user.fetch.binary.practice.contract.log',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/practice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.practice.orders' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/practice/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\BinaryController@binary_practice_orders',
        'controller' => 'App\\Http\\Controllers\\BinaryController@binary_practice_orders',
        'as' => 'user.fetch.binary.practice.orders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary/practice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.binary.contract.preview' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/binary/contract/view/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\BinaryController@preview',
        'controller' => 'App\\Http\\Controllers\\BinaryController@preview',
        'as' => 'user.fetch.binary.contract.preview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.wallets' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/wallets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@fetch_wallets',
        'controller' => 'App\\Http\\Controllers\\WalletController@fetch_wallets',
        'as' => 'user.fetch.wallets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/wallet/{type}/{symbol}/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@fetch_wallet',
        'controller' => 'App\\Http\\Controllers\\WalletController@fetch_wallet',
        'as' => 'user.fetch.wallet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.wallet.balance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@fetch_wallet_balance',
        'controller' => 'App\\Http\\Controllers\\WalletController@fetch_wallet_balance',
        'as' => 'user.fetch.wallet.balance',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.withdraw.history' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/withdraw/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@fetch_withdraw_history',
        'controller' => 'App\\Http\\Controllers\\UserController@fetch_withdraw_history',
        'as' => 'user.fetch.withdraw.history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.deposit.history' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/deposit/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@fetch_deposit_history',
        'controller' => 'App\\Http\\Controllers\\UserController@fetch_deposit_history',
        'as' => 'user.fetch.deposit.history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.transaction.history' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/transaction/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@fetch_transaction_history',
        'controller' => 'App\\Http\\Controllers\\UserController@fetch_transaction_history',
        'as' => 'user.fetch.transaction.history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.news' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/fetch/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\RssfeedController@fetch_news',
        'controller' => 'App\\Http\\Controllers\\RssfeedController@fetch_news',
        'as' => 'user.fetch.news',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/fetch',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.trade.now' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/trade/{symbol}/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'checkKYC',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\ExchangeController@trading',
        'controller' => 'App\\Http\\Controllers\\ExchangeController@trading',
        'as' => 'user.trade.now',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.trade.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/trade/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'checkKYC',
          5 => 'vue',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\ExchangeController@store',
        'controller' => 'App\\Http\\Controllers\\ExchangeController@store',
        'as' => 'user.trade.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.trade.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/trade/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'checkKYC',
          5 => 'vue',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\ExchangeController@cancel',
        'controller' => 'App\\Http\\Controllers\\ExchangeController@cancel',
        'as' => 'user.trade.cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/trade',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@create',
        'controller' => 'App\\Http\\Controllers\\WalletController@create',
        'as' => 'user.wallet.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.create.json' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/j/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@create_json',
        'controller' => 'App\\Http\\Controllers\\WalletController@create_json',
        'as' => 'user.wallet.create.json',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.fetch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/fetch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@fetchWallet',
        'controller' => 'App\\Http\\Controllers\\WalletController@fetchWallet',
        'as' => 'user.wallet.fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.regenerate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/regenerate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@regenerate',
        'controller' => 'App\\Http\\Controllers\\WalletController@regenerate',
        'as' => 'user.wallet.regenerate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.deposit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@deposit',
        'controller' => 'App\\Http\\Controllers\\WalletController@deposit',
        'as' => 'user.wallet.deposit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.withdraw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'vue',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@withdraw',
        'controller' => 'App\\Http\\Controllers\\WalletController@withdraw',
        'as' => 'user.wallet.withdraw',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.transfer.trading' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/transfer/trading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@transfer_from_trading',
        'controller' => 'App\\Http\\Controllers\\WalletController@transfer_from_trading',
        'as' => 'user.wallet.transfer.trading',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.transfer.funding' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/transfer/funding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@transfer_from_funding',
        'controller' => 'App\\Http\\Controllers\\WalletController@transfer_from_funding',
        'as' => 'user.wallet.transfer.funding',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.connect' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/connect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@connect',
        'controller' => 'App\\Http\\Controllers\\WalletController@connect',
        'as' => 'user.wallet.connect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.disconnect' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/disconnect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WalletController@disconnect',
        'controller' => 'App\\Http\\Controllers\\WalletController@disconnect',
        'as' => 'user.wallet.disconnect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.watchlists' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/watchlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WatchlistController@index',
        'controller' => 'App\\Http\\Controllers\\WatchlistController@index',
        'as' => 'user.watchlists',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/watchlist/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WatchlistController@favs',
        'controller' => 'App\\Http\\Controllers\\WatchlistController@favs',
        'as' => 'user.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.watchlist.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/watchlist/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WatchlistController@store',
        'controller' => 'App\\Http\\Controllers\\WatchlistController@store',
        'as' => 'user.watchlist.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.watchlist.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/watchlist/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\WatchlistController@delete',
        'controller' => 'App\\Http\\Controllers\\WatchlistController@delete',
        'as' => 'user.watchlist.delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kyc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/kyc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\User\\KycController@index',
        'controller' => 'App\\Http\\Controllers\\User\\KycController@index',
        'as' => 'user.kyc',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kyc.application' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/kyc/application',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\User\\KycController@application',
        'controller' => 'App\\Http\\Controllers\\User\\KycController@application',
        'as' => 'user.kyc.application',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kyc.application.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/kyc/application/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\User\\KycController@view',
        'controller' => 'App\\Http\\Controllers\\User\\KycController@view',
        'as' => 'user.kyc.application.view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kyc.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/kyc/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\User\\KycController@submit',
        'controller' => 'App\\Http\\Controllers\\User\\KycController@submit',
        'as' => 'user.kyc.submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.deposit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'user/deposit/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'checkKYC',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\Gateway\\PaymentController@deposit',
        'controller' => 'App\\Http\\Controllers\\Gateway\\PaymentController@deposit',
        'as' => 'user.deposit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.deposit.insert' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/deposit/insert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\Gateway\\PaymentController@depositInsert',
        'controller' => 'App\\Http\\Controllers\\Gateway\\PaymentController@depositInsert',
        'as' => 'user.deposit.insert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.deposit.preview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/deposit/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\Gateway\\PaymentController@depositPreview',
        'controller' => 'App\\Http\\Controllers\\Gateway\\PaymentController@depositPreview',
        'as' => 'user.deposit.preview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.deposit.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/deposit/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\Gateway\\PaymentController@depositConfirm',
        'controller' => 'App\\Http\\Controllers\\Gateway\\PaymentController@depositConfirm',
        'as' => 'user.deposit.confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.deposit.manual.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/deposit/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\Gateway\\PaymentController@manualDepositConfirm',
        'controller' => 'App\\Http\\Controllers\\Gateway\\PaymentController@manualDepositConfirm',
        'as' => 'user.deposit.manual.confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.deposit.manual.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/deposit/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\Gateway\\PaymentController@manualDepositUpdate',
        'controller' => 'App\\Http\\Controllers\\Gateway\\PaymentController@manualDepositUpdate',
        'as' => 'user.deposit.manual.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.deposit.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/deposit/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@depositHistory',
        'controller' => 'App\\Http\\Controllers\\UserController@depositHistory',
        'as' => 'user.deposit.history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.withdraw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/withdraw/wallet/{symbol}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
          4 => 'checkKYC',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@withdrawMoney',
        'controller' => 'App\\Http\\Controllers\\UserController@withdrawMoney',
        'as' => 'user.withdraw',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.withdraw.money' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@withdrawStore',
        'controller' => 'App\\Http\\Controllers\\UserController@withdrawStore',
        'as' => 'user.withdraw.money',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.withdraw.preview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/withdraw/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@withdrawPreview',
        'controller' => 'App\\Http\\Controllers\\UserController@withdrawPreview',
        'as' => 'user.withdraw.preview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.withdraw.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/withdraw/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@withdrawSubmit',
        'controller' => 'App\\Http\\Controllers\\UserController@withdrawSubmit',
        'as' => 'user.withdraw.submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.withdraw.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/withdraw/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\UserController@withdrawLog',
        'controller' => 'App\\Http\\Controllers\\UserController@withdrawLog',
        'as' => 'user.withdraw.history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TicketController@supportTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@supportTicket',
        'as' => 'user.ticket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/support/ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket.open' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/ticket/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TicketController@openSupportTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@openSupportTicket',
        'as' => 'user.ticket.open',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/support/ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/ticket/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TicketController@storeSupportTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@storeSupportTicket',
        'as' => 'user.ticket.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/support/ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/ticket/view/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TicketController@viewTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@viewTicket',
        'as' => 'user.ticket.view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/support/ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/ticket/reply/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TicketController@replyTicket',
        'controller' => 'App\\Http\\Controllers\\TicketController@replyTicket',
        'as' => 'user.ticket.reply',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/support/ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/ticket/download/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'verified',
          3 => 'checkStatus',
        ),
        0 => 'role:user',
        'uses' => 'App\\Http\\Controllers\\TicketController@ticketDownload',
        'controller' => 'App\\Http\\Controllers\\TicketController@ticketDownload',
        'as' => 'user.ticket.download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/support/ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@dashboard',
        'as' => 'admin.dashboard',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.market' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/market',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\MarketController@index',
        'controller' => 'App\\Http\\Controllers\\MarketController@index',
        'as' => 'admin.market',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@api',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@api',
        'as' => 'admin.api.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.clean' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@clean',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@clean',
        'as' => 'admin.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UpdateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UpdateController@index',
        'as' => 'admin.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lic.activate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/lic/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UpdateController@lic_activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\UpdateController@lic_activate',
        'as' => 'admin.lic.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lic.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/lic/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UpdateController@lic_deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\UpdateController@lic_deactivate',
        'as' => 'admin.lic.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cron' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\CronController@view',
        'controller' => 'App\\Http\\Controllers\\CronController@view',
        'as' => 'admin.cron',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.read' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/read/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@notificationRead',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@notificationRead',
        'as' => 'admin.notification.read',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@notifications',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@notifications',
        'as' => 'admin.notifications',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@allUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@allUsers',
        'as' => 'admin.users.all',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@remove',
        'as' => 'admin.users.remove',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@activeUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@activeUsers',
        'as' => 'admin.users.active',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.banned' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/banned',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@bannedUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@bannedUsers',
        'as' => 'admin.users.banned',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.emailVerified' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/email-verified',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@emailVerifiedUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@emailVerifiedUsers',
        'as' => 'admin.users.emailVerified',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.emailUnverified' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/email-unverified',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@emailUnverifiedUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@emailUnverifiedUsers',
        'as' => 'admin.users.emailUnverified',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.smsUnverified' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/sms-unverified',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@smsUnverifiedUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@smsUnverifiedUsers',
        'as' => 'admin.users.smsUnverified',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.smsVerified' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/sms-verified',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@smsVerifiedUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@smsVerifiedUsers',
        'as' => 'admin.users.smsVerified',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{scope}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@search',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@search',
        'as' => 'admin.users.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.login.history.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/login/history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@userLoginHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@userLoginHistory',
        'as' => 'admin.users.login.history.single',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.email.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/send-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@showEmailAllForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@showEmailAllForm',
        'as' => 'admin.users.email.all',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.email.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/send-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@sendEmailAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@sendEmailAll',
        'as' => 'admin.users.email.send',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.referral.log' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/referral/log/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@referralLog',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@referralLog',
        'as' => 'admin.users.referral.log',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.commission.log' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/commission/log/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@commissionLog',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@commissionLog',
        'as' => 'admin.users.commission.log',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@detail',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@detail',
        'as' => 'admin.users.detail',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@update',
        'as' => 'admin.users.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.addSubBalance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/add-sub-balance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@addSubBalance',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@addSubBalance',
        'as' => 'admin.users.addSubBalance',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.email.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/send-email/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@showEmailSingleForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@showEmailSingleForm',
        'as' => 'admin.users.email.single',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/send-email/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@sendEmailSingle',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@sendEmailSingle',
        'as' => 'admin.users.',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/transactions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@transactions',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@transactions',
        'as' => 'admin.users.transactions',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.deposits' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/deposits/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@deposits',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@deposits',
        'as' => 'admin.users.deposits',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.deposits.method' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/deposits/via/{method}/{type?}/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@depViaMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@depViaMethod',
        'as' => 'admin.users.deposits.method',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.withdrawals' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/withdrawals/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@withdrawals',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@withdrawals',
        'as' => 'admin.users.withdrawals',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.withdrawals.method' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/withdrawals/via/{method}/{type?}/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@withdrawalsViaMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@withdrawalsViaMethod',
        'as' => 'admin.users.withdrawals.method',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.practice.log' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/practice/trade/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@practiceLog',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@practiceLog',
        'as' => 'admin.users.practice.log',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.traded' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/trade/traded/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@traded',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@traded',
        'as' => 'admin.users.traded',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.wining' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/trade/wining/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@wining',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@wining',
        'as' => 'admin.users.wining',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.losing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/trade/losing/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@losing',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@losing',
        'as' => 'admin.users.losing',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.draw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/trade/draw/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@draw',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUsersController@draw',
        'as' => 'admin.users.draw',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/wallet/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => '\\App\\Http\\Controllers\\WalletController@admincreateWallet',
        'controller' => '\\App\\Http\\Controllers\\WalletController@admincreateWallet',
        'as' => 'admin.wallet.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.regenerate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/wallet/regenerate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => '\\App\\Http\\Controllers\\WalletController@adminregenerateWallet',
        'controller' => '\\App\\Http\\Controllers\\WalletController@adminregenerateWallet',
        'as' => 'admin.wallet.regenerate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.trade.log.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TradeLogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TradeLogController@index',
        'as' => 'admin.binary.trade.log.list',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.trade.log.wining' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/wining/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TradeLogController@wining',
        'controller' => 'App\\Http\\Controllers\\Admin\\TradeLogController@wining',
        'as' => 'admin.binary.trade.log.wining',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.trade.log.losing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/losing/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TradeLogController@losing',
        'controller' => 'App\\Http\\Controllers\\Admin\\TradeLogController@losing',
        'as' => 'admin.binary.trade.log.losing',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.trade.log.draw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/draw/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TradeLogController@draw',
        'controller' => 'App\\Http\\Controllers\\Admin\\TradeLogController@draw',
        'as' => 'admin.binary.trade.log.draw',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.trade.log.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/trade/{scope}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TradeLogController@search',
        'controller' => 'App\\Http\\Controllers\\Admin\\TradeLogController@search',
        'as' => 'admin.binary.trade.log.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.practice.log.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/practice/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@index',
        'as' => 'admin.binary.practice.log.list',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.practice.log.wining' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/practice/wining/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@wining',
        'controller' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@wining',
        'as' => 'admin.binary.practice.log.wining',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.practice.log.losing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/practice/losing/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@losing',
        'controller' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@losing',
        'as' => 'admin.binary.practice.log.losing',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.practice.log.draw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/practice/draw/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@draw',
        'controller' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@draw',
        'as' => 'admin.binary.practice.log.draw',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.binary.practice.log.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/binary/practice/trade/{scope}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@search',
        'controller' => 'App\\Http\\Controllers\\Admin\\PracticeTradeController@search',
        'as' => 'admin.binary.practice.log.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/binary',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exchange.log.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trade/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageExchangesController@log',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageExchangesController@log',
        'as' => 'admin.exchange.log.list',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exchange.log.pending' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trade/pending/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageExchangesController@pending',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageExchangesController@pending',
        'as' => 'admin.exchange.log.pending',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exchange.log.completed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trade/completed/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageExchangesController@completed',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageExchangesController@completed',
        'as' => 'admin.exchange.log.completed',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exchange.log.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/trade/{scope}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageExchangesController@search',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageExchangesController@search',
        'as' => 'admin.exchange.log.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@index',
        'as' => 'admin.provider.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@edit',
        'as' => 'admin.provider.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.balances' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/balances/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@balances',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@balances',
        'as' => 'admin.provider.balances',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@update',
        'as' => 'admin.provider.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@activate',
        'as' => 'admin.provider.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@deactivate',
        'as' => 'admin.provider.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/provider/install/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Providers\\ProviderInstallController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Providers\\ProviderInstallController@index',
        'as' => 'admin.provider.install',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.activater' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/activater/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Providers\\ProviderInstallController@activater',
        'controller' => 'App\\Http\\Controllers\\Admin\\Providers\\ProviderInstallController@activater',
        'as' => 'admin.provider.activater',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Providers\\ProviderInstallController@activate_licenser',
        'controller' => 'App\\Http\\Controllers\\Admin\\Providers\\ProviderInstallController@activate_licenser',
        'as' => 'admin.provider.verify',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.updater' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/updater/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Providers\\ProviderInstallController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Providers\\ProviderInstallController@update',
        'as' => 'admin.provider.updater',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.currencies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/{provider}/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@currencies',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@currencies',
        'as' => 'admin.provider.currencies.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.currency.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/currencies/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@cur_activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@cur_activate',
        'as' => 'admin.provider.currency.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.currency.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/currencies/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@cur_deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@cur_deactivate',
        'as' => 'admin.provider.currency.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.markets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/{provider}/markets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@markets',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@markets',
        'as' => 'admin.provider.markets.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.market.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/markets/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@market_activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@market_activate',
        'as' => 'admin.provider.market.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.market.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider/markets/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@market_deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@market_deactivate',
        'as' => 'admin.provider.market.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.provider.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@refresh',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageThirdpartyController@refresh',
        'as' => 'admin.provider.refresh',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.provider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GatewayController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GatewayController@index',
        'as' => 'admin.payment.provider.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.provider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment/provider/edit/{alias}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GatewayController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GatewayController@edit',
        'as' => 'admin.payment.provider.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.provider.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/provider/update/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GatewayController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GatewayController@update',
        'as' => 'admin.payment.provider.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.provider.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/provider/remove/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GatewayController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\GatewayController@remove',
        'as' => 'admin.payment.provider.remove',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.provider.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/provider/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GatewayController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\GatewayController@activate',
        'as' => 'admin.payment.provider.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.provider.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/provider/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GatewayController@deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\GatewayController@deactivate',
        'as' => 'admin.payment.provider.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.manual.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@index',
        'as' => 'admin.payment.manual.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.manual.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment/manual/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@create',
        'as' => 'admin.payment.manual.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.manual.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/manual/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@store',
        'as' => 'admin.payment.manual.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.manual.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment/manual/edit/{alias}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@edit',
        'as' => 'admin.payment.manual.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.manual.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/manual/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@update',
        'as' => 'admin.payment.manual.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.manual.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/manual/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@activate',
        'as' => 'admin.payment.manual.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.manual.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/manual/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManualGatewayController@deactivate',
        'as' => 'admin.payment.manual.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@deposit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@deposit',
        'as' => 'admin.deposit.list',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.pending' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@pending',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@pending',
        'as' => 'admin.deposit.pending',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.rejected' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit/rejected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@rejected',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@rejected',
        'as' => 'admin.deposit.rejected',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@approved',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@approved',
        'as' => 'admin.deposit.approved',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.successful' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit/successful',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@successful',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@successful',
        'as' => 'admin.deposit.successful',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@details',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@details',
        'as' => 'admin.deposit.details',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.reject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deposit/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@reject',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@reject',
        'as' => 'admin.deposit.reject',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deposit/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@approve',
        'as' => 'admin.deposit.approve',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.method' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit/via/{method}/{type?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@depViaMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@depViaMethod',
        'as' => 'admin.deposit.method',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit/{scope}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@search',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@search',
        'as' => 'admin.deposit.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.deposit.dateSearch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deposit/date-search/{scope}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepositController@dateSearch',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepositController@dateSearch',
        'as' => 'admin.deposit.dateSearch',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.pending' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@pending',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@pending',
        'as' => 'admin.withdraw.pending',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@approved',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@approved',
        'as' => 'admin.withdraw.approved',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.rejected' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/rejected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@rejected',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@rejected',
        'as' => 'admin.withdraw.rejected',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.log' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@log',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@log',
        'as' => 'admin.withdraw.log',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.method' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/via/{method_id}/{type?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@logViaMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@logViaMethod',
        'as' => 'admin.withdraw.method',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/{scope}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@search',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@search',
        'as' => 'admin.withdraw.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.dateSearch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/date-search/{scope}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@dateSearch',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@dateSearch',
        'as' => 'admin.withdraw.dateSearch',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@details',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@details',
        'as' => 'admin.withdraw.details',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@approve',
        'as' => 'admin.withdraw.approve',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.reject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@reject',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawalController@reject',
        'as' => 'admin.withdraw.reject',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.method.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@methods',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@methods',
        'as' => 'admin.withdraw.method.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.method.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@create',
        'as' => 'admin.withdraw.method.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.method.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@store',
        'as' => 'admin.withdraw.method.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.method.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@edit',
        'as' => 'admin.withdraw.method.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.method.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@update',
        'as' => 'admin.withdraw.method.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.method.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@activate',
        'as' => 'admin.withdraw.method.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.withdraw.method.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\WithdrawMethodController@deactivate',
        'as' => 'admin.withdraw.method.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/withdraw',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.transaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@transaction',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@transaction',
        'as' => 'admin.report.transaction',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.transaction.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/transaction/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@transactionSearch',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@transactionSearch',
        'as' => 'admin.report.transaction.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet',
        'as' => 'admin.report.wallet',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/report/wallet/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_trx_cancel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_trx_cancel',
        'as' => 'admin.report.wallet.cancel',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_search',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_search',
        'as' => 'admin.report.wallet.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.deposit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_deposit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_deposit',
        'as' => 'admin.report.wallet.deposit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.deposit.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/deposit/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_deposit_search',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_deposit_search',
        'as' => 'admin.report.wallet.deposit.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.withdraw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_withdraw',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_withdraw',
        'as' => 'admin.report.wallet.withdraw',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.withdraw.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/withdraw/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_withdraw_search',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_withdraw_search',
        'as' => 'admin.report.wallet.withdraw.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.transfer.trading' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/transfer/trading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_trading',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_trading',
        'as' => 'admin.report.wallet.transfer.trading',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.transfer.trading.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/transfer/trading/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_trading_search',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_trading_search',
        'as' => 'admin.report.wallet.transfer.trading.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.transfer.funding' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/transfer/funding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_funding',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_funding',
        'as' => 'admin.report.wallet.transfer.funding',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.transfer.funding.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/wallet/transfer/funding/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_funding_search',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_funding_search',
        'as' => 'admin.report.wallet.transfer.funding.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.transfer.funding.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/report/wallet/transfer/funding/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_funding_approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_funding_approve',
        'as' => 'admin.report.wallet.transfer.funding.approve',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.wallet.transfer.funding.reject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/report/wallet/transfer/funding/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_funding_reject',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@wallet_transfer_funding_reject',
        'as' => 'admin.report.wallet.transfer.funding.reject',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.commission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@commission',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@commission',
        'as' => 'admin.report.commission',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.commission.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/commission/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@commissionSearch',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@commissionSearch',
        'as' => 'admin.report.commission.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.login.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/login/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@loginHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@loginHistory',
        'as' => 'admin.report.login.history',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.login.ipHistory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report/login/ipHistory/{ip}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@loginIpHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@loginIpHistory',
        'as' => 'admin.report.login.ipHistory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/report',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@tickets',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@tickets',
        'as' => 'admin.ticket',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.pending' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tickets/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@pendingTicket',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@pendingTicket',
        'as' => 'admin.ticket.pending',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.closed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tickets/closed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@closedTicket',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@closedTicket',
        'as' => 'admin.ticket.closed',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.answered' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tickets/answered',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@answeredTicket',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@answeredTicket',
        'as' => 'admin.ticket.answered',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tickets/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@ticketReply',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@ticketReply',
        'as' => 'admin.ticket.view',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ticket/reply/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@ticketReplySend',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@ticketReplySend',
        'as' => 'admin.ticket.reply',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ticket/download/{ticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@ticketDownload',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@ticketDownload',
        'as' => 'admin.ticket.download',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ticket/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@ticketDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportTicketController@ticketDelete',
        'as' => 'admin.ticket.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@index',
        'as' => 'admin.setting.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@update',
        'as' => 'admin.setting.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@currencies',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@currencies',
        'as' => 'admin.currency.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@currency_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@currency_update',
        'as' => 'admin.currency.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@currency_activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@currency_activate',
        'as' => 'admin.currency.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.platform' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/platform',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlatformController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlatformController@index',
        'as' => 'admin.platform',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.platform.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/platform',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlatformController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlatformController@update',
        'as' => 'admin.platform.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.logo_icon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/logo-icon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logoIcon',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logoIcon',
        'as' => 'admin.setting.logo_icon',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.logo_icon_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/logo-icon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logoIconUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logoIconUpdate',
        'as' => 'admin.setting.logo_icon_update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.extensions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/extensions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExtensionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExtensionController@index',
        'as' => 'admin.extensions.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/extensions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.extensions.install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/extensions/install/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Ext\\InstallController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Ext\\InstallController@index',
        'as' => 'admin.extensions.install',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/extensions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.extensions.activater' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/extensions/activater/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Ext\\InstallController@activater',
        'controller' => 'App\\Http\\Controllers\\Admin\\Ext\\InstallController@activater',
        'as' => 'admin.extensions.activater',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/extensions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.extensions.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/extensions/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Ext\\InstallController@activate_licenser',
        'controller' => 'App\\Http\\Controllers\\Admin\\Ext\\InstallController@activate_licenser',
        'as' => 'admin.extensions.verify',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/extensions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.extensions.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/extensions/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExtensionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExtensionController@update',
        'as' => 'admin.extensions.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/extensions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.extensions.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/extensions/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExtensionController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExtensionController@activate',
        'as' => 'admin.extensions.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/extensions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.extensions.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/extensions/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExtensionController@deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExtensionController@deactivate',
        'as' => 'admin.extensions.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/extensions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.seo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/seo-manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@seoEdit',
        'controller' => 'App\\Http\\Controllers\\HomeController@seoEdit',
        'as' => 'admin.seo',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.seo.content' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/frontend-content/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@frontendContent',
        'controller' => 'App\\Http\\Controllers\\HomeController@frontendContent',
        'as' => 'admin.seo.content',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/frontend/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@list',
        'controller' => 'App\\Http\\Controllers\\HomeController@list',
        'as' => 'admin.frontend.home',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/frontend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/frontend/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@list',
        'controller' => 'App\\Http\\Controllers\\HomeController@list',
        'as' => 'admin.frontend.about',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/frontend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/frontend/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@list',
        'controller' => 'App\\Http\\Controllers\\HomeController@list',
        'as' => 'admin.frontend.contact',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/frontend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/frontend/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@update',
        'controller' => 'App\\Http\\Controllers\\HomeController@update',
        'as' => 'admin.frontend.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/frontend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/template/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@index',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@index',
        'as' => 'admin.template.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@activate',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@activate',
        'as' => 'admin.template.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@deactivate',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@deactivate',
        'as' => 'admin.template.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.pages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/template/{template_id}/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@pages',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@pages',
        'as' => 'admin.template.pages',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.sections' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/template/{template_id}/pages/{page_id}/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@sections',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@sections',
        'as' => 'admin.template.sections',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.section.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/page/section/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@sectionActivate',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@sectionActivate',
        'as' => 'admin.template.section.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.section.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/page/section/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@sectionDeactivate',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@sectionDeactivate',
        'as' => 'admin.template.section.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/template/{template_id}/pages/{page_id}/sections/{section_id}/editor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@editor',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@editor',
        'as' => 'admin.template.editor',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.editor.update.text' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/page/sections/editor/update/text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@editorUpdateText',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@editorUpdateText',
        'as' => 'admin.template.editor.update.text',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.editor.update.image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/page/sections/editor/update/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@editorUpdateImage',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@editorUpdateImage',
        'as' => 'admin.template.editor.update.image',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/template/install/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontends\\FrontendInstallController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontends\\FrontendInstallController@index',
        'as' => 'admin.template.install',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.activater' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/template/activater/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontends\\FrontendInstallController@activater',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontends\\FrontendInstallController@activater',
        'as' => 'admin.template.activater',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontends\\FrontendInstallController@activate_licenser',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontends\\FrontendInstallController@activate_licenser',
        'as' => 'admin.template.verify',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.template.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/template/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendsController@update',
        'controller' => 'App\\Http\\Controllers\\FrontendsController@update',
        'as' => 'admin.template.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/template',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@index',
        'as' => 'admin.blogetc.admin.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.create_post' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/add_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@create',
        'as' => 'admin.blogetc.admin.create_post',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.store_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_admin/add_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@store',
        'as' => 'admin.blogetc.admin.store_post',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.edit_post' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/edit_post/{blogPostId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@edit',
        'as' => 'admin.blogetc.admin.edit_post',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.update_post' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/blog_admin/edit_post/{blogPostId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@update',
        'as' => 'admin.blogetc.admin.update_post',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.images.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/image_uploads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@index',
        'as' => 'admin.blogetc.admin.images.all',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/image_uploads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.images.upload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/image_uploads/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@create',
        'as' => 'admin.blogetc.admin.images.upload',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/image_uploads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.images.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_admin/image_uploads/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@store',
        'as' => 'admin.blogetc.admin.images.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/image_uploads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.images.delete-post-image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/image_uploads/post/{postId}/delete-images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@deletePostImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@deletePostImage',
        'as' => 'admin.blogetc.admin.images.delete-post-image',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/image_uploads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.images.delete-post-image-confirmed' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog_admin/image_uploads/post/{postId}/delete-images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@deletePostImageConfirmed',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageUploadsController@deletePostImageConfirmed',
        'as' => 'admin.blogetc.admin.images.delete-post-image-confirmed',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/image_uploads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.destroy_post' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog_admin/delete_post/{blogPostId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePostsController@destroy',
        'as' => 'admin.blogetc.admin.destroy_post',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCommentsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCommentsController@index',
        'as' => 'admin.blogetc.admin.comments.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.comments.approve' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/blog_admin/comments/{commentId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCommentsController@approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCommentsController@approve',
        'as' => 'admin.blogetc.admin.comments.approve',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.comments.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog_admin/comments/{commentId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCommentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCommentsController@destroy',
        'as' => 'admin.blogetc.admin.comments.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@index',
        'as' => 'admin.blogetc.admin.categories.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.categories.create_category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/categories/add_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@create',
        'as' => 'admin.blogetc.admin.categories.create_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.categories.store_category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_admin/categories/add_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@store',
        'as' => 'admin.blogetc.admin.categories.store_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.categories.edit_category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_admin/categories/edit_category/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@edit',
        'as' => 'admin.blogetc.admin.categories.edit_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.categories.update_category' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/blog_admin/categories/edit_category/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@update',
        'as' => 'admin.blogetc.admin.categories.update_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogetc.admin.categories.destroy_category' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog_admin/categories/delete_category/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriesController@destroy',
        'as' => 'admin.blogetc.admin.categories.destroy_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/blog_admin/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kycs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/kyc-list/{status?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycController@index',
        'as' => 'admin.kycs',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/kyc/view/{id}/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycController@show',
        'as' => 'admin.kyc.view',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/kyc',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.ajax_show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/kyc/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycController@ajax_show',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycController@ajax_show',
        'as' => 'admin.kyc.ajax_show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/kyc',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/kyc/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycController@update',
        'as' => 'admin.kyc.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/kyc',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/kyc/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycController@delete',
        'as' => 'admin.kyc.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/kyc',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/kyc/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycController@search',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycController@search',
        'as' => 'admin.kyc.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/kyc',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailSettingController@index',
        'as' => 'admin.settings.email',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/email/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@send_email',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@send_email',
        'as' => 'admin.users.email',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.email.template.view' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/email/template/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailSettingController@show_template',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailSettingController@show_template',
        'as' => 'admin.settings.email.template.view',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.email.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/email/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailSettingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailSettingController@update',
        'as' => 'admin.settings.email.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.email.template.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/email/template/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailSettingController@update_template',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailSettingController@update_template',
        'as' => 'admin.settings.email.template.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sidebar.admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sidebar/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_admin',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_admin',
        'as' => 'admin.sidebar.admin',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sidebar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sidebar.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sidebar/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_user',
        'as' => 'admin.sidebar.user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sidebar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sidebar.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sidebar/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_edit',
        'as' => 'admin.sidebar.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sidebar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sidebar.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sidebar/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_activate',
        'as' => 'admin.sidebar.activate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sidebar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sidebar.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sidebar/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_deactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@sidebar_deactivate',
        'as' => 'admin.sidebar.deactivate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sidebar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@index',
        'as' => 'admin.settings.database',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.database.binary.practice.logs.clean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database/binary/practice/logs/clean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_binary_practice_logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_binary_practice_logs',
        'as' => 'admin.database.binary.practice.logs.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.database.binary.trade.logs.clean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database/binary/trade/logs/clean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_binary_trade_logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_binary_trade_logs',
        'as' => 'admin.database.binary.trade.logs.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.database.trade.logs.clean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database/trade/logs/clean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_trade_logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_trade_logs',
        'as' => 'admin.database.trade.logs.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.database.forex.investments.logs.clean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database/forex/investments/logs/clean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_forex_investments_logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_forex_investments_logs',
        'as' => 'admin.database.forex.investments.logs.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.database.bot.investments.logs.clean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database/bot/investments/logs/clean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_bot_investments_logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_bot_investments_logs',
        'as' => 'admin.database.bot.investments.logs.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.database.staking.logs.clean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database/staking/logs/clean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_staking_logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_staking_logs',
        'as' => 'admin.database.staking.logs.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.database.ico.logs.clean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database/ico/logs/clean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_ico_logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_ico_logs',
        'as' => 'admin.database.ico.logs.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.database.wallets.clean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database/wallets/clean',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_wallets',
        'controller' => 'App\\Http\\Controllers\\Admin\\DatabaseController@clean_wallets',
        'as' => 'admin.database.wallets.clean',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.alerts.remove_install_file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/alerts/remove/install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin,demo',
          3 => 'demo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@remove_install_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@remove_install_file',
        'as' => 'admin.alerts.remove_install_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
