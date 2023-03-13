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
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
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
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
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
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
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
            '_route' => 'generated::z6YR5u35xgrk9QTH',
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
      '/vendor-payu/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payu::redirect',
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
      '/xgpayment-gateway/stipe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.stripe',
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
      '/xgpayment-gateway/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.paystack',
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
      '/xgpayment-gateway/paystack-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.paystack.callback',
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
      '/api/v1/get-currency-symbol' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BqVLHlUlMzQ7WJn2',
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
      '/api/v1/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zaEAdn70Au1YJCP4',
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
      '/api/v1/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p0DBJaj4fEjmTqwq',
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
      '/api/v1/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rIpkPi8HMOuAMkhy',
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
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m24wosIQaHl3YK11',
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
      '/api/v1/social/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ahzyt6uOXoKu02pG',
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
      '/api/v1/send-otp-in-mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZLLFfBGKhLI4K9te',
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
      '/api/v1/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UP5MJKDcJHyqNDeI',
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
      '/api/v1/user/order-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NEzmdQQdWXtKVfYh',
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
      '/api/v1/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4f7NRjt6eidpEqbj',
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
      '/api/v1/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EOHIIQyoFF7iQMHJ',
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
      '/api/v1/user/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eUdxaQX109ceQLKK',
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
      '/api/v1/user/update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eLIAobB3s5ccl44P',
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
      '/api/v1/user/support-tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WKaKWzgnwkSLN149',
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
      '/api/v1/user/all-shipping-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XBbyb3J9SoLAwQmR',
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
      '/api/v1/user/store-shipping-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mm7mxZTLFkiksl0p',
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
      '/api/v1/user/ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l5QDrylOvrnIwP1S',
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
      '/api/v1/user/send-otp-in-mail/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s8F5ZlziNR3kOuvt',
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
      '/api/v1/user/get-department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::22YTLbid6arYVQKS',
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
      '/api/v1/user/payment-status-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7misgC6uARDIL8Fp',
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
      '/api/v1/user/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m4tVEscwUgnadKTX',
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
      '/api/v1/user/checkout/payment/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UBMnZzZyrwJSwzcu',
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
      '/api/v1/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fA3QAnfP9dSddzrQ',
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
      '/api/v1/subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::91VGgdL6qVJ0Pg0Y',
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
      '/api/v1/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q13LVmwutrujiI9h',
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
      '/api/v1/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WXPRGrn6Q4rmt5Lo',
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
      '/api/v1/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4EhH4PU7lZnYEoXB',
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
      '/api/v1/products/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::efzyjlGvJj0neyXh',
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
      '/api/v1/admin/payment-gateway-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GpIYrcml08fOiSdD',
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
      '/api/v1/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TZ8wqyGm31XISi2I',
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
      '/api/v1/country-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jk0DsV98VaPlbJBr',
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
      '/api/v1/state-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vx1t21PG8tYUXM0j',
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
      '/api/v1/checkout-calculate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::muLGyoEQlbzg9wiP',
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
      '/feeds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feeds.main',
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
      '/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facebook.callback',
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
      '/facebook/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.facebook.redirect',
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
      '/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'google.callback',
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
      '/google/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.google.redirect',
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
      '/submit-custom-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.form.builder.custom.submit',
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
            '_route' => 'homepage',
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
            '_route' => 'frontend.about',
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
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.faq',
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
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.contact',
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
      '/get-states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.user.country.state',
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
      '/contact-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.contact.message',
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
      '/country-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.info.ajax',
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
      '/state-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'state.info.ajax',
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
      '/shipping-validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipping.validate.ajax',
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
      '/new-shipping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.add.user.shipping.address',
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
      '/filter-top-rated' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.top.rated',
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
      '/filter-top-selling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.top.selling',
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
      '/filter-new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.new',
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
      '/filter-campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.campaign',
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
      '/filter-discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.discounted',
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
      '/attribute-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.attribute.html',
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
      '/land/home/01' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pIg1C3M4JsQzTBKA',
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
      '/land/home/02' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ye8vGDUy57aLUCGw',
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
      '/land/shop/grid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'land.shop.grid',
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
      '/land/shop/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'land.shop.list',
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
      '/land/shop/right-sidebar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'land.shop.sidebar.right',
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
      '/land/shop/left-sidebar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'land.shop.sidebar.left',
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
      '/land/blog/grid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ihLgJ8Yav9hiIrGh',
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
      '/land/blog/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dVjFN6KBr9S3EWKn',
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
      '/land/blog/news-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZlCGq5DvfBnadY5r',
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
      '/land/blog/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Llf3BS8mycxWOpW5',
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
      '/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.all',
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
      '/product/cart/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart',
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
      '/product/cart/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.status.ajax',
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
      '/product/cart/summary-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.info.ajax',
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
      '/product/cart/ajax/add-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.cart.ajax',
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
      '/product/cart/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.ajax.remove',
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
      '/product/cart/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.ajax.clear',
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
      '/product/cart/ajax/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.update.ajax',
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
      '/product/cart/ajax/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.apply.coupon',
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
      '/product/wishlist/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist',
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
      '/product/wishlist/total' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.total',
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
      '/product/wishlist/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.wishlist',
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
      '/product/wishlist/ajax-add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.wishlist.ajax',
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
      '/product/wishlist/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.ajax.remove',
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
      '/product/wishlist/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.ajax.clear',
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
      '/product/wishlist/send-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.send.to.cart',
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
      '/product/compare/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.compare',
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
      '/product/compare/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.compare',
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
      '/product/compare/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.compare.ajax.remove',
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
      '/product/compare/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.ajax.compare.update',
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
      '/product/campaign/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.campaign.list',
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
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout',
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
            '_route' => 'generated::JeTKgCqPf6PNejLT',
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
      '/checkout-continue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.continue',
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
      '/checkout-cancel-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.cancel',
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
      '/checkout-reorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.reorder',
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
      '/checkout-apply-coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.apply.coupon',
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
      '/checkout-calculate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.calculate',
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
      '/product-paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.paypal.ipn',
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
      '/product-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.paytm.ipn',
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
      '/product-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.stripe.ipn',
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
      '/product-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.razorpay.ipn',
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
      '/product-flullterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.flutterwave.ipn',
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
      '/product-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.mollie.ipn',
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
      '/product-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.midtrans.ipn',
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
      '/product-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.payfast.ipn',
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
      '/product-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cashfree.ipn',
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
      '/product-paystack-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.paystack.ipn',
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
      '/product-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.instamojo.ipn',
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
      '/product-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.marcadopago.ipn',
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
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog',
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
      '/blog-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.search',
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
      '/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.support.ticket',
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
      '/support/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.support.ticket.store',
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
      '/campaign/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.campaign.user',
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
      '/user-home' => 
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
      '/user-home/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.change.password',
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
      '/user-home/edit-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.edit.profile',
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
      '/user-home/profile-update' => 
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
      '/user-home/password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.change',
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
      '/user-home/support-tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.support.tickets',
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
      '/user-home/support-ticket/priority-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.priority.change',
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
      '/user-home/support-ticket/status-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.status.change',
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
      '/user-home/support-ticket/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.message',
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
      '/user-home/campaign/log/withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.campaign.log.withdraw',
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
      '/user-home/campaign/withdraw/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.campaign.withdraw.submit',
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
      '/user-home/campaign/withdraw/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.campaign.withdraw.check',
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
      '/user-home/orders/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.product.order.all',
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
      '/user-home/shipping-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.shipping.address.all',
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
      '/user-home/shipping-address/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.shipping.address.new',
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
            '_route' => 'generated::Lkf8uzmSFKr34xzX',
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
      '/user-home/shipping-address/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.shipping.address.edit',
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
      '/user-home/media-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file',
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
      '/user-home/media-upload/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file.all',
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
      '/user-home/media-upload/alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file.alt.change',
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
      '/user-home/media-upload/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file.delete',
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
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login',
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
            '_route' => 'generated::x0v6as7bH7WfmCcc',
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
      '/ajax-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ajax.login',
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
      '/login/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.forget.password',
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
            '_route' => 'generated::zPisyLjfOOcS6Nmv',
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
      '/login/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reset.password.change',
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
            '_route' => 'user.logout',
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
      '/user-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.user.logout',
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
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.register',
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
            '_route' => 'generated::S71uU0EUwiKFFvxV',
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
      '/user/email-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.email.verify',
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
            '_route' => 'generated::3wxvsitTllcss8eq',
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
      '/user/resend-verify-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.resend.verify.mail',
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
      '/package-user/generate-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.package.invoice.generate',
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
      '/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.langchange',
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
      '/subscribe-newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.subscribe.newsletter',
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
      '/login/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
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
            '_route' => 'generated::921WSbP5Qi3omQqz',
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
      '/login/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget.password',
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
            '_route' => 'generated::w2sKfkSaX78453j2',
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
      '/login/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password.change',
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
      '/logout/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
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
      '/admin-home/404-page-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.404.page.settings',
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
            '_route' => 'generated::Z3klmPko6qn2kDI8',
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
      '/admin-home/maintains-page/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.maintains.page.settings',
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
            '_route' => 'generated::WKnaRVMjM0ttCfJI',
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
      '/admin-home/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.index',
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
      '/admin-home/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.create',
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
      '/admin-home/slider/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.store',
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
      '/admin-home/slider/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.update',
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
      '/admin-home/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.all',
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
      '/admin-home/products/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.new',
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
            '_route' => 'admin.products.',
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
      '/admin-home/products/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.bulk.action',
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
      '/admin-home/products/deleted' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.deleted.all',
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
      '/admin-home/products/deleted/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.deleted.bulk.action',
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
      '/admin-home/products/ratings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.ratings.all',
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
      '/admin-home/products/ratings/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.ratings.approve',
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
      '/admin-home/products/ratings/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.ratings.bulk.action',
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
      '/admin-home/products/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.all',
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
      '/admin-home/products/attributes/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.store',
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
            '_route' => 'admin.products.attributes.',
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
      '/admin-home/products/attributes/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.update',
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
      '/admin-home/products/attributes/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.bulk.action',
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
      '/admin-home/products/attributes/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.details',
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
      '/admin-home/products/attributes/by-lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.admin.products.variant.by.lang',
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
      '/admin-home/products/product-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.logs',
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
      '/admin-home/products/product-order/new-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.new',
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
            '_route' => 'admin.product.order.',
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
      '/admin-home/products/product-order/filter-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.filter',
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
      '/admin-home/products/product-order/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.payment.approve',
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
      '/admin-home/products/product-order/status-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.status.change',
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
      '/admin-home/products/product-order/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.bulk.action',
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
      '/admin-home/products/product-order/order-reminder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.reminder',
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
      '/admin-home/products/product-order/get-product-row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.product.row',
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
      '/admin-home/products/generate-products-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.invoice.generate',
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
      '/admin-home/products/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.import.all',
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
            '_route' => 'admin.products.import.to.database',
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
      '/admin-home/products/import/update-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.import.settings.update',
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
      '/admin-home/products/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.all',
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
      '/admin-home/products/categories/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.new',
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
      '/admin-home/products/categories/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.update',
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
      '/admin-home/products/categories/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.bulk.action',
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
      '/admin-home/products/sub-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.all',
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
      '/admin-home/products/sub-categories/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.new',
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
      '/admin-home/products/sub-categories/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.update',
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
      '/admin-home/products/sub-categories/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.bulk.action',
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
      '/admin-home/products/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.all',
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
      '/admin-home/products/coupons/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.new',
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
      '/admin-home/products/coupons/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.update',
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
      '/admin-home/products/coupons/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.bulk.action',
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
      '/admin-home/products/coupons/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.check',
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
      '/admin-home/products/coupons/get-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.products',
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
      '/admin-home/products/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.all',
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
      '/admin-home/products/tags/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.new',
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
      '/admin-home/products/tags/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.update',
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
      '/admin-home/products/tags/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.bulk.action',
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
      '/admin-home/products/tags/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.check',
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
      '/admin-home/products/tags/get-tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.get.ajax',
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
      '/admin-home/products/product-tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.all',
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
      '/admin-home/products/product-tags/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.new',
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
      '/admin-home/products/product-tags/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.update',
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
      '/admin-home/products/product-tags/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.bulk.action',
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
      '/admin-home/products/product-tags/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.check',
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
      '/admin-home/products/product-inventory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.all',
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
      '/admin-home/products/product-inventory/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.update',
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
      '/admin-home/products/product-inventory/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.delete',
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
      '/admin-home/products/product-inventory/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.bulk.action',
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
      '/admin-home/shipping/zone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.all',
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
      '/admin-home/shipping/zone/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.new',
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
      '/admin-home/shipping/zone/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.update',
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
      '/admin-home/shipping/zone/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.bulk.action',
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
      '/admin-home/shipping/method' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.all',
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
      '/admin-home/shipping/method/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.new',
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
            '_route' => 'admin.shipping.method.',
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
      '/admin-home/shipping/method/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.update',
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
      '/admin-home/shipping/method/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.bulk.action',
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
      '/admin-home/shipping/method/make-default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.make.default',
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
      '/admin-home/campaigns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.all',
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
      '/admin-home/campaigns/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.new',
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
            '_route' => 'admin.campaigns.',
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
      '/admin-home/campaigns/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.update',
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
      '/admin-home/campaigns/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.bulk.action',
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
      '/admin-home/campaigns/delete-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.delete.product',
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
      '/admin-home/campaigns/price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.product.price',
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
      '/admin-home/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.all',
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
      '/admin-home/country/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.new',
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
      '/admin-home/country/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.update',
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
      '/admin-home/country/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.bulk.action',
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
      '/admin-home/state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.all',
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
      '/admin-home/state/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.new',
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
      '/admin-home/state/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.update',
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
      '/admin-home/state/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.bulk.action',
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
      '/admin-home/state/country-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.by.country',
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
      '/admin-home/tax/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.all',
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
      '/admin-home/tax/country/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.new',
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
      '/admin-home/tax/country/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.update',
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
      '/admin-home/tax/country/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.bulk.action',
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
      '/admin-home/tax/state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.all',
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
      '/admin-home/tax/state/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.new',
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
      '/admin-home/tax/state/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.update',
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
      '/admin-home/tax/state/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.bulk.action',
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
      '/admin-home/page-settings/wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.wishlist',
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
            '_route' => 'admin.page.settings.',
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
      '/admin-home/page-settings/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.cart',
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
            '_route' => 'admin.page.settings.generated::e0mMglFXuihdPW5e',
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
      '/admin-home/page-settings/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.checkout',
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
            '_route' => 'admin.page.settings.generated::DdgIgikfhWJF50yv',
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
      '/admin-home/page-settings/compare' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.compare',
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
            '_route' => 'admin.page.settings.generated::n9GROEdLNrF6jdTO',
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
      '/admin-home/page-settings/login-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.user.auth',
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
            '_route' => 'admin.page.settings.generated::iPG52CVU9I2PUchG',
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
      '/admin-home/page-settings/shop-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.shop.page',
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
            '_route' => 'admin.page.settings.generated::X7SoTZrWgDh0osoI',
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
      '/admin-home/home-page-01/latest-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.latest.news',
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
            '_route' => 'generated::0mkziScgB2KG72Ue',
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
      '/admin-home/home-page-01/latest-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.latest.event',
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
            '_route' => 'generated::luQ6RIgAU95tYIcb',
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
      '/admin-home/home-page-01/feature-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.feature.area',
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
            '_route' => 'generated::RB2C7RpqDyzVMuXW',
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
      '/admin-home/home-page-01/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.about.us',
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
            '_route' => 'generated::FsUhnOd95wwBOKRU',
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
      '/admin-home/home-page-01/video-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.video.area',
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
            '_route' => 'generated::qsoy1JqPKsQvW3rY',
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
      '/admin-home/home-page-01/section-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.section.manage',
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
            '_route' => 'generated::5ZuSlJq0Tw1s9NWK',
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
      '/admin-home/widgets/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets',
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
            '_route' => 'admin.widgets.new',
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
      '/admin-home/widgets/markup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.markup',
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
      '/admin-home/widgets/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.update',
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
      '/admin-home/widgets/update/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.update.order',
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
      '/admin-home/widgets/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.delete',
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
      '/admin-home/topbar-settings/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.settings',
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
            '_route' => 'generated::Hi1OTybXusByk1rC',
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
      '/admin-home/topbar-settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.update',
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
      '/admin-home/topbar-settings/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.bulk.action',
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
      '/admin-home/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu',
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
      '/admin-home/menu/new-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.new',
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
      '/admin-home/menu/mega-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mega.menu.item.select.markup',
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
      '/admin-home/category-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.settings',
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
      '/admin-home/category-menu/new-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.new',
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
      '/admin-home/category-menu/mega-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mega.category.menu.item.select.markup',
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
      '/admin-home/category-menu/render-sub-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.sub_category',
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
      '/admin-home/home-page/key-features-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.key.features',
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
            '_route' => 'generated::cruDp3Ts5oOq3YHi',
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
      '/admin-home/home-page/why-choose-us-area-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.why.choose.us',
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
            '_route' => 'generated::xgr2r5RRN6iXRK6i',
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
      '/admin-home/home-page/call-to-action-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.call.to.action',
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
            '_route' => 'generated::eTcUhlAL5MWCVCrE',
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
      '/admin-home/home-page/keyfeatures-area-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.keyfeatures',
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
            '_route' => 'generated::QM2xU0hi26ROK5ny',
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
      '/admin-home/home-page/price-plan-area-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.price.plan',
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
            '_route' => 'generated::nMQu1YIsw940Ru50',
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
      '/admin-home/home-page/latest-blog-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.blog.latest',
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
            '_route' => 'generated::h7gJNzKywZwMAoiM',
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
      '/admin-home/home-page/section-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.section.manage',
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
            '_route' => 'generated::nuXwJAfxWan5OOJ7',
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
      '/admin-home/contact-page/form-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.form.area',
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
            '_route' => 'generated::F2R9gV0IWcQbB8N8',
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
      '/admin-home/contact-page/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.map',
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
            '_route' => 'generated::d3BjdEW5kQuO7obP',
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
      '/admin-home/contact-page/section-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.section.manage',
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
            '_route' => 'generated::DgzG66dO5c21jP0g',
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
      '/admin-home/contact-page/contact-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info',
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
            '_route' => 'generated::HVXpF3fBHLxjMCqR',
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
      '/admin-home/contact-page/contact-info/title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.title',
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
      '/admin-home/contact-page/contact-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.update',
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
      '/admin-home/contact-page/contact-info/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.bulk.action',
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
      '/admin-home/media-upload/alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.alt.change',
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
      '/admin-home/media-upload/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.images.page',
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
      '/admin-home/media-upload/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.delete',
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
      '/admin-home/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.settings',
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
      '/admin-home/profile-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.update',
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
            '_route' => 'generated::dHw33idAtmfASjGD',
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
      '/admin-home/password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.change',
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
            '_route' => 'generated::AfHD8TUYoar3VUlb',
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
      '/admin-home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
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
      '/admin-home/dark-mode-toggle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dark.mode.toggle',
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
      '/admin-home/admin/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.user',
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
      '/admin-home/admin/new-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.new.user',
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
            '_route' => 'generated::lMOIsrjU34qE6khr',
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
      '/admin-home/admin/user-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
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
      '/admin-home/admin/user-password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.password.change',
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
      '/admin-home/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.admin.role',
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
      '/admin-home/admin/role/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.new',
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
            '_route' => 'generated::iXIXDXhfQ6zrY5tq',
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
      '/admin-home/admin/role/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.role.update',
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
      '/admin-home/frontend/new-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.new.user',
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
            '_route' => 'generated::Ai4W0gJpG4Ti5Mi9',
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
      '/admin-home/frontend/user-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.user.update',
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
      '/admin-home/frontend/user-password-chnage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.user.password.change',
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
      '/admin-home/frontend/all-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.frontend.user',
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
      '/admin-home/frontend/all-user/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.frontend.user.bulk.action',
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
      '/admin-home/frontend/all-user/email-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.frontend.user.email.status',
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
      '/admin-home/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter',
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
      '/admin-home/newsletter/single' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.single.mail',
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
      '/admin-home/newsletter/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.mail',
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
            '_route' => 'generated::ZCyZyuqRjhZ1OOaG',
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
      '/admin-home/newsletter/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.new.add',
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
      '/admin-home/newsletter/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.bulk.action',
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
      '/admin-home/newsletter/newsletter/verify-mail-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.verify.mail.send',
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
      '/admin-home/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog',
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
      '/admin-home/blog/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.new',
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
            '_route' => 'generated::h3T1D1SZM3Gl6GT2',
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
      '/admin-home/blog/clone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.clone',
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
      '/admin-home/blog/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category',
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
            '_route' => 'generated::GmNYvGDXEqFuueI6',
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
      '/admin-home/blog/category/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category.update',
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
      '/admin-home/blog/category/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category.bulk.action',
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
      '/admin-home/blog/blog-lang-by-cat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.lang.cat',
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
      '/admin-home/blog/page-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.page.settings',
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
            '_route' => 'generated::QCPi2zM0TVgWBTsI',
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
      '/admin-home/blog/single-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.single.settings',
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
            '_route' => 'generated::S9Q8WZ5osq2m3ME9',
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
      '/admin-home/blog/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.bulk.action',
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
      '/admin-home/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq',
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
            '_route' => 'generated::RiLSMIsaWf2FO5VJ',
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
      '/admin-home/faq/update-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.update',
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
      '/admin-home/faq/clone-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.clone',
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
      '/admin-home/faq/faq/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.bulk.action',
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
      '/admin-home/page/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page',
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
      '/admin-home/page/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.new',
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
            '_route' => 'generated::YCsNOZSULdoiwJgR',
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
      '/admin-home/page/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.bulk.action',
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
      '/admin-home/appearance-settings/navbar/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.navbar.settings',
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
            '_route' => 'generated::kxslxE1KwyMMRy9h',
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
      '/admin-home/appearance-settings/home-variant/select' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.variant',
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
            '_route' => 'generated::64Qh48jYasVnQDbT',
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
      '/admin-home/appearance-settings/topbar/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5OP1WZsDcPHwX7Yx',
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
      '/admin-home/appearance-settings/topbar/settings/info-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.info.item.store',
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
      '/admin-home/appearance-settings/topbar/new-social-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.new.social.item',
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
      '/admin-home/appearance-settings/topbar/update-social-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.social.item',
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
      '/admin-home/general-settings/database-upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.database.upgrade',
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
            '_route' => 'generated::xV5n9gWgYwKGwXCp',
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
      '/admin-home/general-settings/site-identity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.site.identity',
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
            '_route' => 'generated::SmkBjHrv4ERTlr3u',
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
      '/admin-home/general-settings/reading' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update',
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
      '/admin-home/general-settings/basic-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.basic.settings',
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
            '_route' => 'generated::5gJD8FI1wgoGZQ9x',
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
      '/admin-home/general-settings/color-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.color.settings',
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
            '_route' => 'generated::e63S8UxfiXFALFZX',
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
      '/admin-home/general-settings/seo-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.seo.settings',
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
            '_route' => 'generated::QofsDvZxCjnA8VTF',
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
      '/admin-home/general-settings/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.scripts.settings',
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
            '_route' => 'generated::5hU46u2pcGfuZEWS',
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
      '/admin-home/general-settings/email-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.email.template',
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
            '_route' => 'generated::gGPMPV3Pqonju30y',
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
      '/admin-home/general-settings/typography-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.typography.settings',
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
            '_route' => 'generated::Mp288HcLKsrVSvpT',
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
      '/admin-home/general-settings/typography-settings/single' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.typography.single',
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
      '/admin-home/general-settings/cache-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.cache.settings',
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
            '_route' => 'generated::jH77aiFLFcrtadHx',
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
      '/admin-home/general-settings/page-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.page.settings',
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
            '_route' => 'generated::R68TzN9tQwevTc6m',
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
      '/admin-home/general-settings/backup-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings',
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
            '_route' => 'generated::RK8poBI6wkjy616e',
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
      '/admin-home/general-settings/backup-settings/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings.delete',
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
      '/admin-home/general-settings/backup-settings/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings.restore',
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
      '/admin-home/general-settings/update-system' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.system',
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
            '_route' => 'generated::nSGMx1SRNJLaDkP9',
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
      '/admin-home/general-settings/license-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.license.settings',
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
            '_route' => 'generated::axslaGu0RTwQe83F',
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
      '/admin-home/general-settings/custom-css' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.custom.css',
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
            '_route' => 'generated::QqQHagIeq0376clw',
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
      '/admin-home/general-settings/gdpr-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.gdpr.settings',
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
            '_route' => 'generated::Dv6JB8SlxSIQSkmr',
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
      '/admin-home/general-settings/update-script' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.script.settings',
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
            '_route' => 'generated::i9rO8chbyahkmVCI',
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
      '/admin-home/general-settings/custom-js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.custom.js',
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
            '_route' => 'generated::kcQJcXaqpFSkK7KV',
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
      '/admin-home/general-settings/smtp-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.smtp.settings',
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
            '_route' => 'generated::r8SzqqX5sF5h3nfN',
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
      '/admin-home/general-settings/smtp-settings/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.smtp.settings.test',
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
      '/admin-home/general-settings/payment-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.payment.settings',
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
            '_route' => 'generated::0aFALEAPVrKQppvl',
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
      '/admin-home/general-settings/popup-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.popup.settings',
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
            '_route' => 'generated::WkZXGsjH0Z3ZjCd3',
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
      '/admin-home/general-settings/rss-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.rss.feed.settings',
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
            '_route' => 'generated::5RjLRcxR5rT01X4D',
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
      '/admin-home/general-settings/sitemap-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.sitemap.settings',
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
            '_route' => 'generated::8bjbW2xSlqxcKh7R',
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
      '/admin-home/general-settings/sitemap-settings/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.sitemap.settings.delete',
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
      '/admin-home/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages',
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
      '/admin-home/languages/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.new',
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
      '/admin-home/languages/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.update',
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
      '/admin-home/languages/clone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.clone',
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
      '/admin-home/languages/add-new-string' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.add.string',
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
      '/admin-home/languages/languages/regenerate-source-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.regenerate.source.texts',
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
      '/admin-home/page-builder/home-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.page.builder',
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
            '_route' => 'generated::OQpzBuMKF7R0bNi0',
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
      '/admin-home/page-builder/about-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.about.page.builder',
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
            '_route' => 'generated::JNlrt68rO59JsN53',
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
      '/admin-home/page-builder/contact-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.builder',
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
            '_route' => 'generated::JleIwB3VVVpfrX1G',
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
      '/admin-home/page-builder/faq-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.page.builder',
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
            '_route' => 'generated::c1Sh4DNkxidg8ijP',
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
      '/admin-home/page-builder/blog-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.page.builder',
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
            '_route' => 'generated::ZSdccfxwu4tfvHze',
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
      '/admin-home/page-builder/dynamic-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic.page.builder.store',
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
      '/admin-home/form-builder/custom/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.all',
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
      '/admin-home/form-builder/custom/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.store',
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
      '/admin-home/form-builder/custom/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.update',
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
      '/admin-home/form-builder/custom/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.bulk.action',
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
      '/admin-home/form-builder/get-in-touch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.get.in.touch',
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
            '_route' => 'generated::YD5ylbuvhu9Sd56Y',
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
      '/admin-home/form-builder/service-query' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.service.query',
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
            '_route' => 'generated::16h1qh3uszgZwCCW',
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
      '/admin-home/form-builder/case-study-query' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.case.study.query',
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
            '_route' => 'generated::CiL0J13SEzCpf9Ms',
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
      '/admin-home/form-builder/quote-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.quote',
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
            '_route' => 'generated::WkIrE6oX6l1acZOd',
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
      '/admin-home/form-builder/order-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.order',
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
            '_route' => 'generated::PBN0ADdq7E1zj66N',
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
      '/admin-home/form-builder/contact-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.contact',
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
            '_route' => 'generated::v6aGDGcsPa0z6fcK',
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
      '/admin-home/form-builder/estimate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.estimate.form',
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
            '_route' => 'generated::qSYmziRInmCZnXiy',
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
      '/admin-home/support-tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.all',
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
      '/admin-home/support-tickets/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.new',
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
            '_route' => 'generated::b3vxHH8Tyv0F12Tx',
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
      '/admin-home/support-tickets/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.bulk.action',
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
      '/admin-home/support-tickets/priority-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.priority.change',
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
      '/admin-home/support-tickets/status-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.status.change',
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
      '/admin-home/support-tickets/send message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.send.message',
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
      '/admin-home/support-tickets/page-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.page.settings',
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
            '_route' => 'generated::fl3usQEEdv40UJUM',
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
      '/admin-home/support-tickets/department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.department',
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
            '_route' => 'generated::PftyjoQYaMO3yUVU',
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
      '/admin-home/support-tickets/department/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.department.update',
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
      '/admin-home/support-tickets/department/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.department.bulk.action',
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
      '/admin-home/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.update',
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
      '/admin-home/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.new',
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
      '/admin-home/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.delete',
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
      '/admin-home/update-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.update.addon.order',
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
      '/admin-home/get-admin-markup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.get.addon.markup',
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
      '/admin-home/media-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file',
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
      '/admin-home/media-upload/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.all',
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
      '/admin-home/media-upload/loadmore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.loadmore',
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
      '/admin-home/chart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.chart.data',
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
      '/admin-home/chart/day' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.chart.data.by.day',
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
      '/admin-home/chart/sale-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.chart.sale.count.per.day',
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
      '/admin-home/chart/order-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.chart.order.count.per.day',
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
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/a(?|pi/(?|v1/(?|s(?|tate/([^/]++)(*:115)|ubcategory/([^/]++)(*:142))|user/(?|order\\-list/([^/]++)(*:179)|s(?|upport\\-tickets/([^/]++)(*:215)|hipping\\-address/delete/([^/]++)(*:255))|ticket/(?|([^/]++)(*:282)|c(?|hat/(?|([^/]++)(*:309)|send/([^/]++)(*:330))|reate(*:344))|message\\-send(*:366)))|category/([^/]++)(*:393)|products/(?|type/([^/]++)(*:426)|([^/]++)(*:442)|category/([^/]++)(*:467)|subcategory/([^/]++)(*:495)))|(.*)(*:509))|dmin\\-home/(?|s(?|lider/(?|delete/([^/]++)(*:560)|edit/([^/]++)(*:581))|hipping/(?|zone/delete/([^/]++)(*:621)|method/(?|edit/([^/]++)(*:652)|delete/([^/]++)(*:675)))|tate/delete/([^/]++)(*:705)|upport\\-tickets/(?|de(?|lete/([^/]++)(*:750)|partment/delete/([^/]++)(*:782))|view/([^/]++)(*:804)))|p(?|roducts/(?|edit/([^/]++)(*:842)|update/([^/]++)(*:865)|delete(?|/([^/]++)(*:891)|d/(?|restore/([^/]++)(*:920)|delete/([^/]++)(*:943)))|c(?|lone/([^/]++)(*:970)|ategories/delete/([^/]++)(*:1003)|oupons/delete/([^/]++)(*:1034))|ratings/delete/([^/]++)(*:1067)|attributes/(?|edit/([^/]++)(*:1103)|delete/([^/]++)(*:1127))|product\\-(?|order/(?|view/([^/]++)(*:1171)|delete/([^/]++)(*:1195))|tags/delete/([^/]++)(*:1225)|inventory/edit/([^/]++)(*:1257))|sub\\-categories/(?|delete/([^/]++)(*:1301)|of\\-category/([^/]++)(*:1331))|tags/delete/([^/]++)(*:1361))|age(?|/(?|edit/([^/]++)(*:1394)|update/([^/]++)(*:1418)|delete/([^/]++)(*:1442))|\\-builder/dynamic\\-page/([^/]++)/([^/]++)(*:1493)))|c(?|a(?|mpaigns/(?|edit/([^/]++)(*:1536)|delete/([^/]++)(*:1560))|tegory\\-menu/(?|edit/([^/]++)(*:1599)|update/([^/]++)(*:1623)|de(?|lete/([^/]++)(*:1650)|fault/([^/]++)(*:1673))))|o(?|untry/delete/([^/]++)(*:1710)|ntact\\-page/contact\\-info/delete/([^/]++)(*:1760)))|t(?|ax/(?|country/delete/([^/]++)(*:1804)|state/delete/([^/]++)(*:1834))|opbar\\-settings/delete/([^/]++)(*:1875))|menu/(?|edit/([^/]++)(*:1906)|update/([^/]++)(*:1930)|de(?|lete/([^/]++)(*:1957)|fault/([^/]++)(*:1980)))|a(?|dmin/(?|user\\-edit/([^/]++)(*:2022)|delete\\-user/([^/]++)(*:2052)|role/(?|edit/([^/]++)(*:2082)|delete/([^/]++)(*:2106)))|ppearance\\-settings/topbar/delete\\-social\\-item/([^/]++)(*:2173))|f(?|rontend/delete\\-user/([^/]++)(*:2216)|aq/delete\\-faq/([^/]++)(*:2248)|orm\\-builder/custom/(?|edit/([^/]++)(*:2293)|delete/([^/]++)(*:2317)))|newsletter/delete/([^/]++)(*:2354)|blog/(?|edit/([^/]++)(*:2384)|update/([^/]++)(*:2408)|delete/([^/]++)(*:2432)|category/delete/([^/]++)(*:2465))|languages/(?|words/(?|frontend/([^/]++)(*:2514)|backend/([^/]++)(*:2539)|update/([^/]++)(*:2563))|de(?|lete/([^/]++)(*:2591)|fault/([^/]++)(*:2614)))))|/p(?|/([^/]++)/([^/]++)(*:2650)|roduct/(?|([^/]++)(*:2677)|ca(?|tegory/([^/]++)(?:/([^/]++))?(*:2720)|mpaign/([^/]++)(?:/([^/]++))?(*:2758)|ncel(?:/([^/]++))?(*:2785))|su(?|bcategory/([^/]++)(?:/([^/]++))?(*:2832)|ccess/([^/]++)(*:2855))|rate(*:2869)))|/home/([^/]++)(*:2894)|/subscriber/email\\-verify/([^/]++)(*:2937)|/blog(?|/([^/]++)(*:2963)|\\-(?|category/([^/]++)(?:/([^/]++))?(*:3008)|tags/([^/]++)(*:3030)))|/user\\-home/(?|download/file/([^/]++)(*:3078)|s(?|upport\\-ticket/view/([^/]++)(*:3119)|hipping\\-address/delete/([^/]++)(*:3160))|campaign/withdraw/view/([^/]++)(*:3201)|orders/([^/]++)(*:3225))|/login/(?|reset\\-password/([^/]++)/([^/]++)(*:3278)|admin/reset\\-password/([^/]++)/([^/]++)(*:3326)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
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
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
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
      115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZhoKl2Y4yKH5Avom',
          ),
          1 => 
          array (
            0 => 'country_id',
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
      142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EGQzyO9vwkGJAJ8W',
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
      179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gl6QZARgF18YEECM',
          ),
          1 => 
          array (
            0 => 'ProductSellInfo',
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
      215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XRLNo2Xmz3HQ83Ur',
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
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lYVDb8ASxhql0LdH',
          ),
          1 => 
          array (
            0 => 'shipping',
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
      282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FOYls1wQdeWg7HDp',
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
      309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v8tiD6zTKy1wI7oK',
          ),
          1 => 
          array (
            0 => 'ticket_id',
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
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8uW6ienYOmj4EgxG',
          ),
          1 => 
          array (
            0 => 'ticket_id',
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
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJnWUmPqwSONyo2f',
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
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::skmfWI1zvHyeM3ss',
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
      393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ew3J9H6MA9AXxqZj',
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
      426 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KAymqAkxAe1htglD',
          ),
          1 => 
          array (
            0 => 'type',
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
      442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SQ5qWOqdgRuw2VcL',
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
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SbDLqF812AIuB0kf',
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
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eaCg3XHmLM0efo6Y',
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
      509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qGjx1HaVXmxv3qKX',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
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
      560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.delete',
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
      581 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.edit',
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
      621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.edit',
          ),
          1 => 
          array (
            0 => 'item',
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
      675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.delete',
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
      782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.department.delete',
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
      804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.view',
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
      842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.edit',
          ),
          1 => 
          array (
            0 => 'item',
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
      865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.update',
          ),
          1 => 
          array (
            0 => 'item',
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
      891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.deleted.restore',
          ),
          1 => 
          array (
            0 => 'item',
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
      943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.deleted.permanent.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.clone',
          ),
          1 => 
          array (
            0 => 'item',
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
      1003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.ratings.delete',
          ),
          1 => 
          array (
            0 => 'rating',
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
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.edit',
          ),
          1 => 
          array (
            0 => 'item',
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
      1127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.view',
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
      1195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.payment.delete',
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
      1225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.edit',
          ),
          1 => 
          array (
            0 => 'item',
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
      1301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.of.category',
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
      1361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.edit',
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
            '_route' => 'admin.page.update',
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
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.delete',
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
      1493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic.page.builder',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
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
      1536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.edit',
          ),
          1 => 
          array (
            0 => 'item',
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
      1560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.edit',
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
      1623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.update',
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
      1650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.delete',
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
      1673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.default',
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
      1710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.delete',
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
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.delete',
          ),
          1 => 
          array (
            0 => 'item',
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
      1875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.delete',
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
      1906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.edit',
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
      1930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.update',
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
      1957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.delete',
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
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.default',
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
      2022 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
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
      2052 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.user',
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
      2082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.role.edit',
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
      2106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.role.delete',
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
      2173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.social.item',
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
      2216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.delete.user',
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
      2248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.delete',
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
      2293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.edit',
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
      2317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.delete',
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
      2354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.delete',
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
      2384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
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
      2408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
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
      2432 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.delete',
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
      2465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category.delete',
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
      2514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.frontend',
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
      2539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.backend',
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
      2563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.update',
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
      2591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.delete',
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
      2614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.default',
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
      2650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.dynamic.page',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'id',
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
      2677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.single',
          ),
          1 => 
          array (
            0 => 'slug',
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
      2720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.category',
            'title' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'title',
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
      2758 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.campaign',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
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
      2785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.payment.cancel',
            'id' => NULL,
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
      2832 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.subcategory',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
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
      2855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.payment.success',
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
      2869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.ratings.store',
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
      2894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homepage.demo',
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
      2937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscriber.verify',
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
      2963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.single',
          ),
          1 => 
          array (
            0 => 'slug',
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
      3008 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.category',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
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
      3030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.tags.page',
          ),
          1 => 
          array (
            0 => 'name',
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
      3078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.download.file',
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
      3119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.view',
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
      3160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipping.address.delete',
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
      3201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.campaign.withdraw.view',
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
      3225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.product.order.details',
          ),
          1 => 
          array (
            0 => 'item',
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
      3278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reset.password',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
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
      3326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
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
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z6YR5u35xgrk9QTH' => 
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
        'as' => 'generated::z6YR5u35xgrk9QTH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payu::redirect' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendor-payu/status',
      'action' => 
      array (
        'uses' => 'Tzsk\\Payu\\Controllers\\StatusController@__invoke',
        'controller' => 'Tzsk\\Payu\\Controllers\\StatusController',
        'as' => 'payu::redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/stipe',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\StripePaymentController@charge_customer',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\StripePaymentController@charge_customer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.stripe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.paystack' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/paystack',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@redirect_to_gateway',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@redirect_to_gateway',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.paystack',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.paystack.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'xgpayment-gateway/paystack-callback',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@callback',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@callback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.paystack.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BqVLHlUlMzQ7WJn2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-currency-symbol',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:339:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:120:"function (){
        $data = ["symbol" => \\site_currency_symbol()];
        return \\response()->success($data);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008500000000000000000";}";s:4:"hash";s:44:"4g3ozB95WHnzxk/LPZ5y7p2db/uXxlHMgEd3Qg52nk0=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::BqVLHlUlMzQ7WJn2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zaEAdn70Au1YJCP4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\SliderController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zaEAdn70Au1YJCP4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p0DBJaj4fEjmTqwq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CountryController@country',
        'controller' => 'App\\Http\\Controllers\\Api\\CountryController@country',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::p0DBJaj4fEjmTqwq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZhoKl2Y4yKH5Avom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/state/{country_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CountryController@stateByCountryId',
        'controller' => 'App\\Http\\Controllers\\Api\\CountryController@stateByCountryId',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ZhoKl2Y4yKH5Avom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rIpkPi8HMOuAMkhy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::rIpkPi8HMOuAMkhy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m24wosIQaHl3YK11' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::m24wosIQaHl3YK11',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ahzyt6uOXoKu02pG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/social/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@socialLogin',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@socialLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ahzyt6uOXoKu02pG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZLLFfBGKhLI4K9te' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/send-otp-in-mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@sendOTP',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@sendOTP',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ZLLFfBGKhLI4K9te',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UP5MJKDcJHyqNDeI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@resetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::UP5MJKDcJHyqNDeI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NEzmdQQdWXtKVfYh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/order-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@order_list',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@order_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NEzmdQQdWXtKVfYh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gl6QZARgF18YEECM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/order-list/{ProductSellInfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@details',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gl6QZARgF18YEECM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4f7NRjt6eidpEqbj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::4f7NRjt6eidpEqbj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EOHIIQyoFF7iQMHJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EOHIIQyoFF7iQMHJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eUdxaQX109ceQLKK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@changePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eUdxaQX109ceQLKK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eLIAobB3s5ccl44P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@updateProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eLIAobB3s5ccl44P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WKaKWzgnwkSLN149' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/support-tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@allTickets',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@allTickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::WKaKWzgnwkSLN149',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XRLNo2Xmz3HQ83Ur' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/support-tickets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@viewTickets',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@viewTickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::XRLNo2Xmz3HQ83Ur',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XBbyb3J9SoLAwQmR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/all-shipping-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@get_all_shipping_address',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@get_all_shipping_address',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::XBbyb3J9SoLAwQmR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lYVDb8ASxhql0LdH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/shipping-address/delete/{shipping}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@delete_shipping_address',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@delete_shipping_address',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::lYVDb8ASxhql0LdH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mm7mxZTLFkiksl0p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/store-shipping-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@storeShippingAddress',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@storeShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mm7mxZTLFkiksl0p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l5QDrylOvrnIwP1S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@get_all_tickets',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@get_all_tickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::l5QDrylOvrnIwP1S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FOYls1wQdeWg7HDp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/ticket/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@single_ticket',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@single_ticket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::FOYls1wQdeWg7HDp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v8tiD6zTKy1wI7oK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/ticket/chat/{ticket_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@fetch_support_chat',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@fetch_support_chat',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::v8tiD6zTKy1wI7oK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8uW6ienYOmj4EgxG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/ticket/chat/send/{ticket_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@send_support_chat',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@send_support_chat',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8uW6ienYOmj4EgxG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::skmfWI1zvHyeM3ss' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/ticket/message-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@sendMessage',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@sendMessage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::skmfWI1zvHyeM3ss',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s8F5ZlziNR3kOuvt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/send-otp-in-mail/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@sendOTPSuccess',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@sendOTPSuccess',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::s8F5ZlziNR3kOuvt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gJnWUmPqwSONyo2f' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/ticket/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@createTicket',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@createTicket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gJnWUmPqwSONyo2f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::22YTLbid6arYVQKS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/get-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@get_department',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@get_department',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::22YTLbid6arYVQKS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7misgC6uARDIL8Fp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/payment-status-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'ServiceController@paymentStatusUpdate',
        'controller' => 'ServiceController@paymentStatusUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7misgC6uARDIL8Fp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m4tVEscwUgnadKTX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@checkout',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::m4tVEscwUgnadKTX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UBMnZzZyrwJSwzcu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/checkout/payment/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@payment_status_update',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@payment_status_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UBMnZzZyrwJSwzcu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fA3QAnfP9dSddzrQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@allCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@allCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/category',
        'where' => 
        array (
        ),
        'as' => 'generated::fA3QAnfP9dSddzrQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ew3J9H6MA9AXxqZj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@singleCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@singleCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/category',
        'where' => 
        array (
        ),
        'as' => 'generated::ew3J9H6MA9AXxqZj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::91VGgdL6qVJ0Pg0Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SubCategoryController@allSubCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\SubCategoryController@allSubCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/subcategory',
        'where' => 
        array (
        ),
        'as' => 'generated::91VGgdL6qVJ0Pg0Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EGQzyO9vwkGJAJ8W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subcategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SubCategoryController@singleSubCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\SubCategoryController@singleSubCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/subcategory',
        'where' => 
        array (
        ),
        'as' => 'generated::EGQzyO9vwkGJAJ8W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q13LVmwutrujiI9h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AttributesController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\AttributesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::q13LVmwutrujiI9h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WXPRGrn6Q4rmt5Lo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@tags',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@tags',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::WXPRGrn6Q4rmt5Lo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4EhH4PU7lZnYEoXB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@allProducts',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@allProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::4EhH4PU7lZnYEoXB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::efzyjlGvJj0neyXh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@search',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::efzyjlGvJj0neyXh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KAymqAkxAe1htglD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/type/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@product_type',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@product_type',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::KAymqAkxAe1htglD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SQ5qWOqdgRuw2VcL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@details',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::SQ5qWOqdgRuw2VcL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SbDLqF812AIuB0kf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/products/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@singleProducts',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@singleProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::SbDLqF812AIuB0kf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eaCg3XHmLM0efo6Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/products/subcategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@singleProducts',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@singleProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::eaCg3XHmLM0efo6Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GpIYrcml08fOiSdD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/payment-gateway-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SiteSettingsController@payment_gateway_list',
        'controller' => 'App\\Http\\Controllers\\Api\\SiteSettingsController@payment_gateway_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::GpIYrcml08fOiSdD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TZ8wqyGm31XISi2I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CouponController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::TZ8wqyGm31XISi2I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jk0DsV98VaPlbJBr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/country-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@getCountryInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@getCountryInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jk0DsV98VaPlbJBr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vx1t21PG8tYUXM0j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/state-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@getStateInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@getStateInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Vx1t21PG8tYUXM0j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::muLGyoEQlbzg9wiP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/checkout-calculate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@calculateCheckout',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@calculateCheckout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::muLGyoEQlbzg9wiP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qGjx1HaVXmxv3qKX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:302:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:84:"function(){
    return \\response()->json([\'message\' => \'Page Not Found.\'], 404);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000084f0000000000000000";}";s:4:"hash";s:44:"UfILoV4lu86MpwF3D+t6af0Mf0p1uDJb9UuqOaTPjXE=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qGjx1HaVXmxv3qKX',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feeds.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feeds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Spatie\\Feed\\Http\\FeedController@__invoke',
        'controller' => '\\Spatie\\Feed\\Http\\FeedController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'feeds.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facebook.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@facebook_callback',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@facebook_callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/facebook',
        'where' => 
        array (
        ),
        'as' => 'facebook.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.facebook.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@facebook_redirect',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@facebook_redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/facebook',
        'where' => 
        array (
        ),
        'as' => 'login.facebook.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'google.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@google_callback',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@google_callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/google',
        'where' => 
        array (
        ),
        'as' => 'google.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.google.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'google/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@google_redirect',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@google_redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/google',
        'where' => 
        array (
        ),
        'as' => 'login.google.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.form.builder.custom.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-custom-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@custom_form_builder_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@custom_form_builder_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.form.builder.custom.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homepage' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\FrontendController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'homepage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.dynamic.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/{slug?}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@dynamic_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@dynamic_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.dynamic.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homepage.demo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@home_page_change',
        'controller' => 'App\\Http\\Controllers\\FrontendController@home_page_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'homepage.demo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.about' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@about_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@about_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@faq_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@faq_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.contact' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@contact_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@contact_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.user.country.state' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@get_states',
        'controller' => 'App\\Http\\Controllers\\FrontendController@get_states',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.user.country.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscriber.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscriber/email-verify/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@subscriber_verify',
        'controller' => 'App\\Http\\Controllers\\FrontendController@subscriber_verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscriber.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.contact.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@send_contact_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@send_contact_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.contact.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.info.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'country-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@getCountryInfo',
        'controller' => 'App\\Http\\Controllers\\FrontendController@getCountryInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'country.info.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'state.info.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@getStateInfo',
        'controller' => 'App\\Http\\Controllers\\FrontendController@getStateInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'state.info.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipping.validate.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipping-validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@validateCheckoutShipping',
        'controller' => 'App\\Http\\Controllers\\FrontendController@validateCheckoutShipping',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipping.validate.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.add.user.shipping.address' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'new-shipping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@addUserShippingAddress',
        'controller' => 'App\\Http\\Controllers\\FrontendController@addUserShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.add.user.shipping.address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.top.rated' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'filter-top-rated',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@topRatedProducts',
        'controller' => 'App\\Http\\Controllers\\FrontendController@topRatedProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.top.rated',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.top.selling' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'filter-top-selling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@topSellingProducts',
        'controller' => 'App\\Http\\Controllers\\FrontendController@topSellingProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.top.selling',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'filter-new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@newProducts',
        'controller' => 'App\\Http\\Controllers\\FrontendController@newProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.campaign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@campaignProduct',
        'controller' => 'App\\Http\\Controllers\\FrontendController@campaignProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.campaign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.discounted' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@discountedProduct',
        'controller' => 'App\\Http\\Controllers\\FrontendController@discountedProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.discounted',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.attribute.html' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attribute-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@getProductAttributeHtml',
        'controller' => 'App\\Http\\Controllers\\FrontendController@getProductAttributeHtml',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.attribute.html',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pIg1C3M4JsQzTBKA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/home/01',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@homeOne',
        'controller' => 'App\\Http\\Controllers\\LandingController@homeOne',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/home',
        'where' => 
        array (
        ),
        'as' => 'generated::pIg1C3M4JsQzTBKA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ye8vGDUy57aLUCGw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/home/02',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@homeTwo',
        'controller' => 'App\\Http\\Controllers\\LandingController@homeTwo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/home',
        'where' => 
        array (
        ),
        'as' => 'generated::ye8vGDUy57aLUCGw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'land.shop.grid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/shop/grid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@shopGrid',
        'controller' => 'App\\Http\\Controllers\\LandingController@shopGrid',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/shop',
        'where' => 
        array (
        ),
        'as' => 'land.shop.grid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'land.shop.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/shop/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@shopList',
        'controller' => 'App\\Http\\Controllers\\LandingController@shopList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/shop',
        'where' => 
        array (
        ),
        'as' => 'land.shop.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'land.shop.sidebar.right' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/shop/right-sidebar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@shopRightSidebar',
        'controller' => 'App\\Http\\Controllers\\LandingController@shopRightSidebar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/shop',
        'where' => 
        array (
        ),
        'as' => 'land.shop.sidebar.right',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'land.shop.sidebar.left' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/shop/left-sidebar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@shopLeftSidebar',
        'controller' => 'App\\Http\\Controllers\\LandingController@shopLeftSidebar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/shop',
        'where' => 
        array (
        ),
        'as' => 'land.shop.sidebar.left',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ihLgJ8Yav9hiIrGh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/blog/grid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@blogGrid',
        'controller' => 'App\\Http\\Controllers\\LandingController@blogGrid',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::ihLgJ8Yav9hiIrGh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dVjFN6KBr9S3EWKn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/blog/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@blogList',
        'controller' => 'App\\Http\\Controllers\\LandingController@blogList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::dVjFN6KBr9S3EWKn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZlCGq5DvfBnadY5r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/blog/news-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@blogNewsUpdate',
        'controller' => 'App\\Http\\Controllers\\LandingController@blogNewsUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::ZlCGq5DvfBnadY5r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Llf3BS8mycxWOpW5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/blog/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@blogDetails',
        'controller' => 'App\\Http\\Controllers\\LandingController@blogDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::Llf3BS8mycxWOpW5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products',
        'as' => 'frontend.products.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@single_product_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@single_product_page',
        'as' => 'frontend.products.single',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/category/{id}/{title?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products_category',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products_category',
        'as' => 'frontend.products.category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/subcategory/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products_subcategory',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products_subcategory',
        'as' => 'frontend.products.subcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/cart/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@cartPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@cartPage',
        'as' => 'frontend.products.cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.status.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/cart/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@cartStatus',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@cartStatus',
        'as' => 'frontend.products.cart.status.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.info.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/cart/summary-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@getCartInfoAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@getCartInfoAjax',
        'as' => 'frontend.products.cart.info.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.cart.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/ajax/add-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@addToCartAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@addToCartAjax',
        'as' => 'frontend.products.add.to.cart.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.ajax.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@removeCartItem',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@removeCartItem',
        'as' => 'frontend.products.cart.ajax.remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.ajax.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@clearCart',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@clearCart',
        'as' => 'frontend.products.cart.ajax.clear',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.update.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/ajax/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@updateCart',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@updateCart',
        'as' => 'frontend.products.cart.update.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.apply.coupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/ajax/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@cartPageApplyCouponAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@cartPageApplyCouponAjax',
        'as' => 'frontend.products.cart.apply.coupon',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/wishlist/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@wishlistPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@wishlistPage',
        'as' => 'frontend.products.wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.total' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/wishlist/total',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@getTotalItem',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@getTotalItem',
        'as' => 'frontend.products.wishlist.total',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@addToWishlist',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@addToWishlist',
        'as' => 'frontend.products.add.to.wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.wishlist.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/ajax-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@addToWishlistAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@addToWishlistAjax',
        'as' => 'frontend.products.add.to.wishlist.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.ajax.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@removeWishlistItem',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@removeWishlistItem',
        'as' => 'frontend.products.wishlist.ajax.remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.ajax.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@clearWishlist',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@clearWishlist',
        'as' => 'frontend.products.wishlist.ajax.clear',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.send.to.cart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/send-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@sendToCartAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@sendToCartAjax',
        'as' => 'frontend.products.wishlist.send.to.cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.compare' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/compare/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@productsComparePage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@productsComparePage',
        'as' => 'frontend.products.compare',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/compare',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.compare' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/compare/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCompareController@addToCompare',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCompareController@addToCompare',
        'as' => 'frontend.products.add.to.compare',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/compare',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.compare.ajax.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/compare/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCompareController@removeFromCompare',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCompareController@removeFromCompare',
        'as' => 'frontend.products.compare.ajax.remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/compare',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.ajax.compare.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/compare/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCompareController@clearCompare',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCompareController@clearCompare',
        'as' => 'frontend.products.ajax.compare.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/compare',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.ratings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_rating_store',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_rating_store',
        'as' => 'frontend.products.ratings.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.campaign.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/campaign/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@allCampaignPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@allCampaignPage',
        'as' => 'frontend.products.campaign.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.campaign' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/campaign/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@campaignPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@campaignPage',
        'as' => 'frontend.products.campaign',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_payment_success',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_payment_success',
        'as' => 'frontend.products.payment.success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/cancel/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_payment_cancel',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_payment_cancel',
        'as' => 'frontend.products.payment.cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@checkoutPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@checkoutPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JeTKgCqPf6PNejLT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@checkout',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JeTKgCqPf6PNejLT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.continue' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout-continue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@checkoutContinuePending',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@checkoutContinuePending',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.continue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout-cancel-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@cancelPayment',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@cancelPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.reorder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout-reorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@reorder',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@reorder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.reorder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.apply.coupon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout-apply-coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@checkoutPageApplyCouponAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@checkoutPageApplyCouponAjax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.apply.coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.calculate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout-calculate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@calculateCheckout',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@calculateCheckout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.calculate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.paypal.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paypal_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paypal_ipn',
        'as' => 'frontend.paypal.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paytm_ipn',
        'as' => 'frontend.paytm.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@stripe_ipn',
        'as' => 'frontend.stripe.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@razorpay_ipn',
        'as' => 'frontend.razorpay.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-flullterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@flutterwave_ipn',
        'as' => 'frontend.flutterwave.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@mollie_ipn',
        'as' => 'frontend.mollie.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@midtrans_ipn',
        'as' => 'frontend.midtrans.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@payfast_ipn',
        'as' => 'frontend.payfast.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@cashfree_ipn',
        'as' => 'frontend.cashfree.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.paystack.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-paystack-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paystack_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paystack_ipn',
        'as' => 'frontend.paystack.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@instamojo_ipn',
        'as' => 'frontend.instamojo.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@marcadopago_ipn',
        'as' => 'frontend.marcadopago.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_search_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_search_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-category/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@category_wise_blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@category_wise_blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.tags.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-tags/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@tags_wise_blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@tags_wise_blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.tags.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.support.ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\UserSupportTicketController@page',
        'controller' => 'App\\Http\\Controllers\\Support\\UserSupportTicketController@page',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.support.ticket',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.support.ticket.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'support/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\UserSupportTicketController@store',
        'controller' => 'App\\Http\\Controllers\\Support\\UserSupportTicketController@store',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.support.ticket.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.campaign.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'campaign/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@user_campaign',
        'controller' => 'App\\Http\\Controllers\\FrontendController@user_campaign',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.campaign.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
      'uri' => 'user-home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_index',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.download.file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/download/file/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@download_file',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@download_file',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.download.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.change.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@change_password',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@change_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.change.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.edit.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@edit_profile',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@edit_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.edit.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
      'uri' => 'user-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_profile_update',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_profile_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_password_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_password_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.support.tickets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/support-tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_tickets',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_tickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.support.tickets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/support-ticket/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_view',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.priority.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/priority-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_priority_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_priority_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.priority.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/status-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_status_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_status_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.status.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_message',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.campaign.log.withdraw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/campaign/log/withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@campaign_log_withdraw',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@campaign_log_withdraw',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.campaign.log.withdraw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.campaign.withdraw.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/campaign/withdraw/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_submit',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.campaign.withdraw.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.campaign.withdraw.check' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/campaign/withdraw/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_check',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_check',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.campaign.withdraw.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.campaign.withdraw.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/campaign/withdraw/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_view',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.campaign.withdraw.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.product.order.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/orders/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@allOrdersPage',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@allOrdersPage',
        'as' => 'user.product.order.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user-home/orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.product.order.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/orders/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@orderDetailsPage',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@orderDetailsPage',
        'as' => 'user.product.order.details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user-home/orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.shipping.address.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/shipping-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@allShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@allShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.shipping.address.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.shipping.address.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/shipping-address/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@createShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@createShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.shipping.address.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lkf8uzmSFKr34xzX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/shipping-address/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@storeShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@storeShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Lkf8uzmSFKr34xzX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.shipping.address.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/shipping-address/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@editShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@editShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.shipping.address.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipping.address.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/shipping-address/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@deleteShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@deleteShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'shipping.address.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@all_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@all_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file.alt.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload/alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@alt_change_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@alt_change_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file.alt.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@delete_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@delete_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ajax.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@ajax_login',
        'controller' => 'App\\Http\\Controllers\\FrontendController@ajax_login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.ajax.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x0v6as7bH7WfmCcc' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::x0v6as7bH7WfmCcc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showUserForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showUserForgetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zPisyLjfOOcS6Nmv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@sendUserForgetPasswordMail',
        'controller' => 'App\\Http\\Controllers\\FrontendController@sendUserForgetPasswordMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zPisyLjfOOcS6Nmv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showUserResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showUserResetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.reset.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@UserResetPassword',
        'controller' => 'App\\Http\\Controllers\\FrontendController@UserResetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.reset.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.logout' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@user_logout',
        'controller' => 'App\\Http\\Controllers\\FrontendController@user_logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.user.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.register' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S71uU0EUwiKFFvxV' => 
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
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::S71uU0EUwiKFFvxV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.email.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/email-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify_index',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.email.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3wxvsitTllcss8eq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/email-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3wxvsitTllcss8eq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.resend.verify.mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/resend-verify-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@reset_user_email_verify_code',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@reset_user_email_verify_code',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.resend.verify.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.package.invoice.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'package-user/generate-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@generate_package_invoice',
        'controller' => 'App\\Http\\Controllers\\FrontendController@generate_package_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.package.invoice.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.langchange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@lang_change',
        'controller' => 'App\\Http\\Controllers\\FrontendController@lang_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.langchange',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.subscribe.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe-newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@subscribe_newsletter',
        'controller' => 'App\\Http\\Controllers\\FrontendController@subscribe_newsletter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.subscribe.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showAdminForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showAdminForgetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showAdminResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showAdminResetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@AdminResetPassword',
        'controller' => 'App\\Http\\Controllers\\FrontendController@AdminResetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w2sKfkSaX78453j2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@sendAdminForgetPasswordMail',
        'controller' => 'App\\Http\\Controllers\\FrontendController@sendAdminForgetPasswordMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::w2sKfkSaX78453j2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@adminLogout',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@adminLogout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::921WSbP5Qi3omQqz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::921WSbP5Qi3omQqz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.404.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/404-page-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Error404PageManage@error_404_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\Error404PageManage@error_404_page_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.404.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z3klmPko6qn2kDI8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/404-page-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Error404PageManage@update_error_404_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\Error404PageManage@update_error_404_page_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Z3klmPko6qn2kDI8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.maintains.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/maintains-page/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaintainsPageController@maintains_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaintainsPageController@maintains_page_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.maintains.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WKnaRVMjM0ttCfJI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/maintains-page/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaintainsPageController@update_maintains_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaintainsPageController@update_maintains_page_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::WKnaRVMjM0ttCfJI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\SliderController@index',
        'as' => 'admin.slider.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\SliderController@create',
        'as' => 'admin.slider.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/slider/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\SliderController@store',
        'as' => 'admin.slider.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/slider/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@delete',
        'controller' => 'App\\Http\\Controllers\\SliderController@delete',
        'as' => 'admin.slider.delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/slider/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\SliderController@edit',
        'as' => 'admin.slider.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/slider/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\SliderController@update',
        'as' => 'admin.slider.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@index',
        'as' => 'admin.products.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@create',
        'as' => 'admin.products.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@store',
        'as' => 'admin.products.',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@edit',
        'as' => 'admin.products.edit',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/update/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@update',
        'as' => 'admin.products.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@destroy',
        'as' => 'admin.products.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/clone/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@clone',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@clone',
        'as' => 'admin.products.clone',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@bulk_action',
        'as' => 'admin.products.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.deleted.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/deleted',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@index',
        'as' => 'admin.products.deleted.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/deleted',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.deleted.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/deleted/restore/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@restore',
        'controller' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@restore',
        'as' => 'admin.products.deleted.restore',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/deleted',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.deleted.permanent.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/deleted/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@destroy',
        'as' => 'admin.products.deleted.permanent.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/deleted',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.deleted.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/deleted/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@bulk_action',
        'as' => 'admin.products.deleted.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/deleted',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.ratings.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/ratings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductRatingController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductRatingController@index',
        'as' => 'admin.products.ratings.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/ratings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.ratings.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/ratings/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductRatingController@approve',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductRatingController@approve',
        'as' => 'admin.products.ratings.approve',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/ratings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.ratings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/ratings/delete/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductRatingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductRatingController@destroy',
        'as' => 'admin.products.ratings.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/ratings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.ratings.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/ratings/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductRatingController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductRatingController@bulk_action',
        'as' => 'admin.products.ratings.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/ratings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@index',
        'as' => 'admin.products.attributes.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/attributes/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@create',
        'as' => 'admin.products.attributes.store',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@store',
        'as' => 'admin.products.attributes.',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/attributes/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@edit',
        'as' => 'admin.products.attributes.edit',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@update',
        'as' => 'admin.products.attributes.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@destroy',
        'as' => 'admin.products.attributes.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@bulk_action',
        'as' => 'admin.products.attributes.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@get_details',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@get_details',
        'as' => 'admin.products.attributes.details',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.admin.products.variant.by.lang' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/by-lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@get_all_variant_by_lang',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@get_all_variant_by_lang',
        'as' => 'admin.products.attributes.admin.products.variant.by.lang',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@orderLogs',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@orderLogs',
        'as' => 'admin.product.order.logs',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-order/new-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@create',
        'as' => 'admin.product.order.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/new-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@store',
        'as' => 'admin.product.order.',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-order/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@show',
        'as' => 'admin.product.order.view',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.payment.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@delete',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@delete',
        'as' => 'admin.product.order.payment.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.filter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/filter-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@filterOrders',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@filterOrders',
        'as' => 'admin.product.order.filter',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.payment.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_payment_approve',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_payment_approve',
        'as' => 'admin.product.order.payment.approve',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/status-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_status_change',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_status_change',
        'as' => 'admin.product.order.status.change',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_bulk_action',
        'as' => 'admin.product.order.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.reminder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/order-reminder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@order_reminder',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@order_reminder',
        'as' => 'admin.product.order.reminder',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.product.row' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-order/get-product-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@getProductRow',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@getProductRow',
        'as' => 'admin.product.order.product.row',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.invoice.generate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/generate-products-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@generateInvoice',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@generateInvoice',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.invoice.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.import.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductImportController@import_settings',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductImportController@import_settings',
        'as' => 'admin.products.import.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/import',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.import.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/import/update-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductImportController@update_import_settings',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductImportController@update_import_settings',
        'as' => 'admin.products.import.settings.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/import',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.import.to.database' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductImportController@import_to_database_settings',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductImportController@import_to_database_settings',
        'as' => 'admin.products.import.to.database',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/import',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@index',
        'as' => 'admin.products.category.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/categories/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@store',
        'as' => 'admin.products.category.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/categories/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@update',
        'as' => 'admin.products.category.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/categories/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@destroy',
        'as' => 'admin.products.category.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/categories/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@bulk_action',
        'as' => 'admin.products.category.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/sub-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@index',
        'as' => 'admin.products.subcategory.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/sub-categories/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@store',
        'as' => 'admin.products.subcategory.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/sub-categories/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@update',
        'as' => 'admin.products.subcategory.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/sub-categories/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@destroy',
        'as' => 'admin.products.subcategory.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/sub-categories/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@bulk_action',
        'as' => 'admin.products.subcategory.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.of.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/sub-categories/of-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@getSubcategoriesOfCategory',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@getSubcategoriesOfCategory',
        'as' => 'admin.products.subcategory.of.category',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@index',
        'as' => 'admin.products.coupon.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/coupons/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@store',
        'as' => 'admin.products.coupon.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/coupons/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@update',
        'as' => 'admin.products.coupon.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/coupons/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@destroy',
        'as' => 'admin.products.coupon.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/coupons/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@bulk_action',
        'as' => 'admin.products.coupon.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/coupons/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@check',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@check',
        'as' => 'admin.products.coupon.check',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/coupons/get-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@allProductsAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@allProductsAjax',
        'as' => 'admin.products.coupon.products',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@index',
        'as' => 'admin.products.tag.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/tags/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@store',
        'as' => 'admin.products.tag.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/tags/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@update',
        'as' => 'admin.products.tag.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/tags/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@destroy',
        'as' => 'admin.products.tag.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/tags/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@bulk_action',
        'as' => 'admin.products.tag.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/tags/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@check',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@check',
        'as' => 'admin.products.tag.check',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.get.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/tags/get-tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@getTagsAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@getTagsAjax',
        'as' => 'admin.products.tag.get.ajax',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@index',
        'as' => 'admin.products.product.tag.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-tags/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@store',
        'as' => 'admin.products.product.tag.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-tags/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@update',
        'as' => 'admin.products.product.tag.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-tags/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@destroy',
        'as' => 'admin.products.product.tag.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-tags/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@bulk_action',
        'as' => 'admin.products.product.tag.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-tags/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@check',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@check',
        'as' => 'admin.products.product.tag.check',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-inventory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@index',
        'as' => 'admin.products.inventory.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-inventory/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@edit',
        'as' => 'admin.products.inventory.edit',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-inventory/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@update',
        'as' => 'admin.products.inventory.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-inventory/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@destroy',
        'as' => 'admin.products.inventory.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-inventory/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@bulk_action',
        'as' => 'admin.products.inventory.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/shipping/zone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@index',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@index',
        'as' => 'admin.shipping.zone.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/zone/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@store',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@store',
        'as' => 'admin.shipping.zone.new',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/zone/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@update',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@update',
        'as' => 'admin.shipping.zone.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/zone/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@destroy',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@destroy',
        'as' => 'admin.shipping.zone.delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/zone/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@bulk_action',
        'as' => 'admin.shipping.zone.bulk.action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/shipping/method',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@index',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@index',
        'as' => 'admin.shipping.method.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/shipping/method/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@create',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@create',
        'as' => 'admin.shipping.method.new',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@store',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@store',
        'as' => 'admin.shipping.method.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/shipping/method/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@edit',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@edit',
        'as' => 'admin.shipping.method.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@update',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@update',
        'as' => 'admin.shipping.method.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@destroy',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@destroy',
        'as' => 'admin.shipping.method.delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@bulk_action',
        'as' => 'admin.shipping.method.bulk.action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.make.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/make-default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@makeDefault',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@makeDefault',
        'as' => 'admin.shipping.method.make.default',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/campaigns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@index',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@index',
        'as' => 'admin.campaigns.all',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/campaigns/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@create',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@create',
        'as' => 'admin.campaigns.new',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@store',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@store',
        'as' => 'admin.campaigns.',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/campaigns/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@edit',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@edit',
        'as' => 'admin.campaigns.edit',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@update',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@update',
        'as' => 'admin.campaigns.update',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@destroy',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@destroy',
        'as' => 'admin.campaigns.delete',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@bulk_action',
        'as' => 'admin.campaigns.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.delete.product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/delete-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@deleteProductSingle',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@deleteProductSingle',
        'as' => 'admin.campaigns.delete.product',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.product.price' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/campaigns/price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@getProductPrice',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@getProductPrice',
        'as' => 'admin.campaigns.product.price',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@index',
        'as' => 'admin.country.all',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/country/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@store',
        'as' => 'admin.country.new',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/country/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@update',
        'as' => 'admin.country.update',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/country/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@destroy',
        'as' => 'admin.country.delete',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/country/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@bulk_action',
        'as' => 'admin.country.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@index',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@index',
        'as' => 'admin.state.all',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/state/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@store',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@store',
        'as' => 'admin.state.new',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/state/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@update',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@update',
        'as' => 'admin.state.update',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/state/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@destroy',
        'as' => 'admin.state.delete',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/state/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@bulk_action',
        'as' => 'admin.state.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.by.country' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/state/country-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@getStateByCountry',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@getStateByCountry',
        'as' => 'admin.state.by.country',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/tax/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@index',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@index',
        'as' => 'admin.tax.country.all',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/country/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@store',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@store',
        'as' => 'admin.tax.country.new',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/country/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@update',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@update',
        'as' => 'admin.tax.country.update',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/country/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@destroy',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@destroy',
        'as' => 'admin.tax.country.delete',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/country/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@bulk_action',
        'as' => 'admin.tax.country.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/tax/state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@index',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@index',
        'as' => 'admin.tax.state.all',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/state/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@store',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@store',
        'as' => 'admin.tax.state.new',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/state/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@update',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@update',
        'as' => 'admin.tax.state.update',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/state/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@destroy',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@destroy',
        'as' => 'admin.tax.state.delete',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/state/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@bulk_action',
        'as' => 'admin.tax.state.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@wishlistPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@wishlistPageSettings',
        'as' => 'admin.page.settings.wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeWishlistPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeWishlistPageSettings',
        'as' => 'admin.page.settings.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@cartPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@cartPageSettings',
        'as' => 'admin.page.settings.cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::e0mMglFXuihdPW5e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeCartPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeCartPageSettings',
        'as' => 'admin.page.settings.generated::e0mMglFXuihdPW5e',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@checkoutPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@checkoutPageSettings',
        'as' => 'admin.page.settings.checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::DdgIgikfhWJF50yv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeCheckoutPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeCheckoutPageSettings',
        'as' => 'admin.page.settings.generated::DdgIgikfhWJF50yv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.compare' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/compare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@comparePageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@comparePageSettings',
        'as' => 'admin.page.settings.compare',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::n9GROEdLNrF6jdTO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/compare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeComparePageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeComparePageSettings',
        'as' => 'admin.page.settings.generated::n9GROEdLNrF6jdTO',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.user.auth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/login-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@userAuthPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@userAuthPageSettings',
        'as' => 'admin.page.settings.user.auth',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::iPG52CVU9I2PUchG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/login-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeUserAuthPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeUserAuthPageSettings',
        'as' => 'admin.page.settings.generated::iPG52CVU9I2PUchG',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.shop.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/shop-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@shopPage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@shopPage',
        'as' => 'admin.page.settings.shop.page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::X7SoTZrWgDh0osoI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/shop-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeShopPage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeShopPage',
        'as' => 'admin.page.settings.generated::X7SoTZrWgDh0osoI',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.latest.news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/latest-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_latest_news',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_latest_news',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.latest.news',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0mkziScgB2KG72Ue' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/latest-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_latest_news',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_latest_news',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::0mkziScgB2KG72Ue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.latest.event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/latest-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_latest_event',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_latest_event',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.latest.event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::luQ6RIgAU95tYIcb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/latest-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_latest_event',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_latest_event',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::luQ6RIgAU95tYIcb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.feature.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/feature-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_feature_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_feature_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.feature.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RB2C7RpqDyzVMuXW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/feature-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_feature_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_feature_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::RB2C7RpqDyzVMuXW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.about.us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_about_us',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_about_us',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.about.us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FsUhnOd95wwBOKRU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_about_us',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_about_us',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::FsUhnOd95wwBOKRU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.video.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/video-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_video_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_video_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.video.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qsoy1JqPKsQvW3rY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/video-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_video_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_video_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::qsoy1JqPKsQvW3rY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.section.manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.section.manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5ZuSlJq0Tw1s9NWK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::5ZuSlJq0Tw1s9NWK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/widgets/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@new_widget',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@new_widget',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/markup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@widget_markup',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@widget_markup',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@update_widget',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@update_widget',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.update.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/update/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@update_order_widget',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@update_order_widget',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.update.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@delete_widget',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@delete_widget',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/topbar-settings/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hi1OTybXusByk1rC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar-settings/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Hi1OTybXusByk1rC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar-settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar-settings/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar-settings/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/new-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@store_new_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@store_new_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/menu/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@edit_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@edit_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@update_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@update_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@delete_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@delete_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@set_default_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@set_default_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mega.menu.item.select.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/mega-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@mega_menu_item_select_markup',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@mega_menu_item_select_markup',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.mega.menu.item.select.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/category-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/new-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@store_new_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@store_new_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/category-menu/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@edit_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@edit_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@update_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@update_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@delete_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@delete_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@set_default_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@set_default_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mega.category.menu.item.select.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/mega-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@mega_menu_item_select_markup',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@mega_menu_item_select_markup',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.mega.category.menu.item.select.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.sub_category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/render-sub-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@fetch_sub_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@fetch_sub_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.sub_category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.key.features' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/key-features-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@key_features_section',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@key_features_section',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.key.features',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cruDp3Ts5oOq3YHi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/key-features-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_key_features_section',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_key_features_section',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::cruDp3Ts5oOq3YHi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.why.choose.us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/why-choose-us-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@why_choose_us_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@why_choose_us_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.why.choose.us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xgr2r5RRN6iXRK6i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/why-choose-us-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_why_choose_us_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_why_choose_us_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::xgr2r5RRN6iXRK6i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.call.to.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/call-to-action-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@call_to_action_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@call_to_action_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.call.to.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eTcUhlAL5MWCVCrE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/call-to-action-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_call_to_action_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_call_to_action_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::eTcUhlAL5MWCVCrE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.keyfeatures' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/keyfeatures-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@keyfeatures_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@keyfeatures_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.keyfeatures',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QM2xU0hi26ROK5ny' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/keyfeatures-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_keyfeatures_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_keyfeatures_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::QM2xU0hi26ROK5ny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.price.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/price-plan-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@price_plan_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@price_plan_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.price.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nMQu1YIsw940Ru50' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/price-plan-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_price_plan_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_price_plan_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::nMQu1YIsw940Ru50',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.blog.latest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/latest-blog-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@latest_blog_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@latest_blog_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.blog.latest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h7gJNzKywZwMAoiM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/latest-blog-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_latest_blog_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_latest_blog_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::h7gJNzKywZwMAoiM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.section.manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.section.manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nuXwJAfxWan5OOJ7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::nuXwJAfxWan5OOJ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.form.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/form-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_form_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_form_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.form.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F2R9gV0IWcQbB8N8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/form-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_form_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_form_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'generated::F2R9gV0IWcQbB8N8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.map' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_map_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_map_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.map',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d3BjdEW5kQuO7obP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_map_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_map_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'generated::d3BjdEW5kQuO7obP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.section.manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.section.manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DgzG66dO5c21jP0g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'generated::DgzG66dO5c21jP0g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/contact-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HVXpF3fBHLxjMCqR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'generated::HVXpF3fBHLxjMCqR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.title' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@contact_info_title',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@contact_info_title',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.alt.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload/alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@alt_change_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@alt_change_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.alt.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.images.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/media-upload/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@all_upload_media_images_for_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@all_upload_media_images_for_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.images.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@delete_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@delete_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_profile',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_profile',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dHw33idAtmfASjGD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_profile_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_profile_update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::dHw33idAtmfASjGD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_password',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_password',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AfHD8TUYoar3VUlb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_password_chagne',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_password_chagne',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::AfHD8TUYoar3VUlb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@adminIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@adminIndex',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dark.mode.toggle' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/dark-mode-toggle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@dark_mode_toggle',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@dark_mode_toggle',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.dark.mode.toggle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@all_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@all_user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.all.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.new.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.new.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lMOIsrjU34qE6khr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user_add',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user_add',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lMOIsrjU34qE6khr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/user-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/user-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/user-password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_password_change',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_password_change',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/delete-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user_delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user_delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.admin.role' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@all_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@all_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.all.admin.role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/role/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_admin_role_index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_admin_role_index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iXIXDXhfQ6zrY5tq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/role/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@store_new_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@store_new_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iXIXDXhfQ6zrY5tq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/role/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@edit_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@edit_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.role.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/role/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@update_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@update_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.role.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.role.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/role/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@delete_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@delete_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.role.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.new.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/frontend/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.frontend.new.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ai4W0gJpG4Ti5Mi9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user_add',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user_add',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'generated::Ai4W0gJpG4Ti5Mi9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/user-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@user_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@user_update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.frontend.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/user-password-chnage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@user_password_change',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@user_password_change',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.frontend.user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.delete.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/delete-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user_delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user_delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.frontend.delete.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.frontend.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/frontend/all-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@all_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@all_user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.all.frontend.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.frontend.user.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/all-user/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.all.frontend.user.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.frontend.user.email.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/all-user/email-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@email_status',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@email_status',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.all.frontend.user.email.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.single.mail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/single',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.single.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/newsletter/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail_all_index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail_all_index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZCyZyuqRjhZ1OOaG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail_all',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail_all',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::ZCyZyuqRjhZ1OOaG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.new.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@add_new_sub',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@add_new_sub',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.new.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.verify.mail.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/newsletter/verify-mail-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@verify_mail_send',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@verify_mail_send',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.verify.mail.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@new_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@new_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h3T1D1SZM3Gl6GT2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@store_new_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@store_new_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::h3T1D1SZM3Gl6GT2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/clone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@clone_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@clone_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@edit_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@edit_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@delete_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@delete_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@category',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GmNYvGDXEqFuueI6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@new_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@new_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::GmNYvGDXEqFuueI6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@delete_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@delete_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/category/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/category/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@category_bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@category_bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.lang.cat' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/blog-lang-by-cat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@Language_by_slug',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@Language_by_slug',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.lang.cat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@blog_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@blog_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QCPi2zM0TVgWBTsI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::QCPi2zM0TVgWBTsI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.single.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/single-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@blog_single_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@blog_single_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.single.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S9Q8WZ5osq2m3ME9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/single-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog_single_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog_single_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::S9Q8WZ5osq2m3ME9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RiLSMIsaWf2FO5VJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'generated::RiLSMIsaWf2FO5VJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq/update-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq/delete-faq/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq/clone-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@clone',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@clone',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq/faq/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@new_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@new_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YCsNOZSULdoiwJgR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@store_new_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@store_new_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'generated::YCsNOZSULdoiwJgR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@edit_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@edit_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@update_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@update_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@delete_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@delete_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.navbar.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/appearance-settings/navbar/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NavbarController@navbar_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\NavbarController@navbar_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/navbar',
        'where' => 
        array (
        ),
        'as' => 'admin.navbar.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kxslxE1KwyMMRy9h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/navbar/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NavbarController@update_navbar_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\NavbarController@update_navbar_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/navbar',
        'where' => 
        array (
        ),
        'as' => 'generated::kxslxE1KwyMMRy9h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.variant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/appearance-settings/home-variant/select',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@home_variant',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@home_variant',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/home-variant',
        'where' => 
        array (
        ),
        'as' => 'admin.home.variant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::64Qh48jYasVnQDbT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/home-variant/select',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@update_home_variant',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@update_home_variant',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/home-variant',
        'where' => 
        array (
        ),
        'as' => 'generated::64Qh48jYasVnQDbT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5OP1WZsDcPHwX7Yx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_topbar_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_topbar_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'generated::5OP1WZsDcPHwX7Yx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.info.item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/settings/info-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_topbar_info_items',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_topbar_info_items',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.info.item.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.new.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/new-social-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@new_social_item',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@new_social_item',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.new.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/update-social-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_social_item',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_social_item',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.update.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/delete-social-item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@delete_social_item',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@delete_social_item',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.database.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/database-upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@database_upgrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@database_upgrade',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.database.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xV5n9gWgYwKGwXCp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/database-upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@database_upgrade_post',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@database_upgrade_post',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::xV5n9gWgYwKGwXCp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.site.identity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/site-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@site_identity',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@site_identity',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.site.identity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_reading',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_reading',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SmkBjHrv4ERTlr3u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/site-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_site_identity',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_site_identity',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::SmkBjHrv4ERTlr3u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.basic.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@basic_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@basic_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.basic.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5gJD8FI1wgoGZQ9x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_basic_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_basic_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::5gJD8FI1wgoGZQ9x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.color.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/color-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@color_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@color_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.color.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e63S8UxfiXFALFZX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/color-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_color_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_color_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::e63S8UxfiXFALFZX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.seo.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/seo-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@seo_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@seo_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.seo.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QofsDvZxCjnA8VTF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/seo-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_seo_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_seo_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::QofsDvZxCjnA8VTF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.scripts.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@scripts_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@scripts_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.scripts.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5hU46u2pcGfuZEWS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_scripts_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_scripts_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::5hU46u2pcGfuZEWS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.email.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/email-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@email_template_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@email_template_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.email.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gGPMPV3Pqonju30y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/email-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_email_template_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_email_template_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::gGPMPV3Pqonju30y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.typography.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/typography-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@typography_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@typography_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.typography.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mp288HcLKsrVSvpT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/typography-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_typography_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_typography_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Mp288HcLKsrVSvpT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.typography.single' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/typography-settings/single',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@get_single_font_variant',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@get_single_font_variant',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.typography.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.cache.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/cache-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@cache_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@cache_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.cache.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jH77aiFLFcrtadHx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/cache-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_cache_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_cache_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::jH77aiFLFcrtadHx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R68TzN9tQwevTc6m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::R68TzN9tQwevTc6m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/backup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@backup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@backup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RK8poBI6wkjy616e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_backup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_backup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::RK8poBI6wkjy616e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@delete_backup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@delete_backup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@restore_backup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@restore_backup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.system' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/update-system',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_system',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_system',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.system',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nSGMx1SRNJLaDkP9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/update-system',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_system_version',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_system_version',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::nSGMx1SRNJLaDkP9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.license.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/license-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@license_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@license_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.license.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::axslaGu0RTwQe83F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/license-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_license_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_license_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::axslaGu0RTwQe83F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.custom.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@custom_css_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@custom_css_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.custom.css',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QqQHagIeq0376clw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_custom_css_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_custom_css_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::QqQHagIeq0376clw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.gdpr.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/gdpr-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@gdpr_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@gdpr_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.gdpr.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dv6JB8SlxSIQSkmr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/gdpr-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_gdpr_cookie_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_gdpr_cookie_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Dv6JB8SlxSIQSkmr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.script.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/update-script',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_script_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_script_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.script.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i9rO8chbyahkmVCI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/update-script',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@sote_update_script_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@sote_update_script_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::i9rO8chbyahkmVCI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.custom.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/custom-js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@custom_js_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@custom_js_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.custom.js',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kcQJcXaqpFSkK7KV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/custom-js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_custom_js_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_custom_js_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::kcQJcXaqpFSkK7KV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.smtp.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/smtp-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@smtp_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@smtp_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.smtp.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r8SzqqX5sF5h3nfN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/smtp-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_smtp_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_smtp_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::r8SzqqX5sF5h3nfN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.smtp.settings.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/smtp-settings/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@test_smtp_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@test_smtp_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.smtp.settings.test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.payment.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/payment-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@payment_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@payment_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.payment.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0aFALEAPVrKQppvl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/payment-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_payment_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_payment_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::0aFALEAPVrKQppvl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.popup.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/popup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@popup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@popup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.popup.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WkZXGsjH0Z3ZjCd3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/popup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_popup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_popup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::WkZXGsjH0Z3ZjCd3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.rss.feed.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/rss-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@rss_feed_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@rss_feed_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.rss.feed.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5RjLRcxR5rT01X4D' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/rss-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_rss_feed_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_rss_feed_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::5RjLRcxR5rT01X4D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.sitemap.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/sitemap-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@sitemap_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@sitemap_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.sitemap.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8bjbW2xSlqxcKh7R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/sitemap-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_sitemap_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_sitemap_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::8bjbW2xSlqxcKh7R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.sitemap.settings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/sitemap-settings/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@delete_sitemap_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@delete_sitemap_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.sitemap.settings.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.frontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/languages/words/frontend/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@frontend_edit_words',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@frontend_edit_words',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.frontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.backend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/languages/words/backend/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@backend_edit_words',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@backend_edit_words',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.backend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/words/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update_words',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update_words',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@make_default',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@make_default',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/clone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@clone_languages',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@clone_languages',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.add.string' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/add-new-string',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@add_new_string',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@add_new_string',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.add.string',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.regenerate.source.texts' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/languages/regenerate-source-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@regenerate_source_text',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@regenerate_source_text',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.regenerate.source.texts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@homepage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@homepage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.home.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OQpzBuMKF7R0bNi0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_homepage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_homepage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::OQpzBuMKF7R0bNi0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.about.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/about-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@aboutpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@aboutpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.about.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JNlrt68rO59JsN53' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/about-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_aboutpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_aboutpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::JNlrt68rO59JsN53',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/contact-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@contactpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@contactpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JleIwB3VVVpfrX1G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/contact-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_contactpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_contactpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::JleIwB3VVVpfrX1G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/faq-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@faqpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@faqpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c1Sh4DNkxidg8ijP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/faq-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_faqpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_faqpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::c1Sh4DNkxidg8ijP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/blog-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@blogpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@blogpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZSdccfxwu4tfvHze' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/blog-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_blogpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_blogpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::ZSdccfxwu4tfvHze',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dynamic.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/dynamic-page/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@dynamicpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@dynamicpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dynamic.page.builder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/dynamic-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_dynamicpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_dynamicpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic.page.builder.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/custom/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@all',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/custom/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/custom/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/custom/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/custom/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/custom/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@bulk_action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.get.in.touch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/get-in-touch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@get_in_touch_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@get_in_touch_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.get.in.touch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YD5ylbuvhu9Sd56Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/get-in-touch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_get_in_touch_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_get_in_touch_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::YD5ylbuvhu9Sd56Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.service.query' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/service-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@service_query_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@service_query_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.service.query',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::16h1qh3uszgZwCCW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/service-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_service_query',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_service_query',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::16h1qh3uszgZwCCW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.case.study.query' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/case-study-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@case_study_query_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@case_study_query_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.case.study.query',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CiL0J13SEzCpf9Ms' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/case-study-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_case_study_query',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_case_study_query',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::CiL0J13SEzCpf9Ms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.quote' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/quote-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@quote_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@quote_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.quote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WkIrE6oX6l1acZOd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/quote-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_quote_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_quote_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::WkIrE6oX6l1acZOd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/order-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@order_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@order_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PBN0ADdq7E1zj66N' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/order-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_order_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_order_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::PBN0ADdq7E1zj66N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/contact-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@contact_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@contact_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v6aGDGcsPa0z6fcK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/contact-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_contact_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_contact_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::v6aGDGcsPa0z6fcK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.estimate.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/estimate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@estimate_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@estimate_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.estimate.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qSYmziRInmCZnXiy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/estimate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_estimate_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_estimate_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::qSYmziRInmCZnXiy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@all_tickets',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@all_tickets',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@new_ticket',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@new_ticket',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b3vxHH8Tyv0F12Tx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@store_ticket',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@store_ticket',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::b3vxHH8Tyv0F12Tx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@delete',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@delete',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@view',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@view',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.priority.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/priority-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@priority_change',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@priority_change',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.priority.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/status-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@status_change',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@status_change',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.status.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/send message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@send_message',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@send_message',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@page_settings',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@page_settings',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fl3usQEEdv40UJUM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@update_page_settings',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@update_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::fl3usQEEdv40UJUM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.department' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets/department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@category',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@category',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PftyjoQYaMO3yUVU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@new_category',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@new_category',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'generated::PftyjoQYaMO3yUVU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.department.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/department/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@delete',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@delete',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.department.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.department.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/department/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@update',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@update',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.department.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.department.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/department/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.department.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_addon_content',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_addon_content',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@store_new_addon_content',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@store_new_addon_content',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.update.addon.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_addon_order',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_addon_order',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.update.addon.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.get.addon.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/get-admin-markup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@get_admin_panel_addon_markup',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@get_admin_panel_addon_markup',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.get.addon.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@upload_media_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@all_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@all_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.loadmore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload/loadmore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@get_image_for_loadmore',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@get_image_for_loadmore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.loadmore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.chart.data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/chart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@get_chart_data',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@get_chart_data',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.chart.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.chart.data.by.day' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/chart/day',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@get_chart_by_date_data',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@get_chart_by_date_data',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.chart.data.by.day',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.chart.sale.count.per.day' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/chart/sale-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@getSaleCountPerDayChartData',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@getSaleCountPerDayChartData',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.chart.sale.count.per.day',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.chart.order.count.per.day' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/chart/order-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@getOrderCountPerDayChartData',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@getOrderCountPerDayChartData',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.chart.order.count.per.day',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
