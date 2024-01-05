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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
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
      '/livewire/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.update',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QzOCnH3IHk3RzkbL',
          ),
          1 => NULL,
          2 => 
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
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
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
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/location/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.location.countries.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/location/countries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.create',
          ),
          1 => NULL,
          2 => 
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
      '/api/location/shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.shops.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.location.shops.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/location/shops/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.shops.create',
          ),
          1 => NULL,
          2 => 
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
      '/api/product/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.product.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/product/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.create',
          ),
          1 => NULL,
          2 => 
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
      '/api/product/productCategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.productCategories.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.product.productCategories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/product/productCategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.productCategories.create',
          ),
          1 => NULL,
          2 => 
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
      '/api/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.countries.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.countries.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/countries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.countries.create',
          ),
          1 => NULL,
          2 => 
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
      '/api/regions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.regions.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.regions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/regions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.regions.create',
          ),
          1 => NULL,
          2 => 
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
      '/api/wards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.wards.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.wards.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wards/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.wards.create',
          ),
          1 => NULL,
          2 => 
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
      '/api/streets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.streets.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.streets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/streets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.streets.create',
          ),
          1 => NULL,
          2 => 
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
      '/api/shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shops.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'api.shops.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shops/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shops.create',
          ),
          1 => NULL,
          2 => 
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WEWCkISyvZJxSWZe',
          ),
          1 => NULL,
          2 => 
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
      '/product-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rHsAcI8RLM0zg0n7',
          ),
          1 => NULL,
          2 => 
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
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J52syZaZ8o62nHEY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::p13KWQZVLDZmRiin',
          ),
          1 => NULL,
          2 => 
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
      '/shop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b0ndRXBXW0AsZJHg',
          ),
          1 => NULL,
          2 => 
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
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile',
          ),
          1 => NULL,
          2 => 
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
      ),
      '/verify-email' => 
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
      '/confirm-password' => 
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
      ),
      '/location/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'location.countries.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/location/countries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.create',
          ),
          1 => NULL,
          2 => 
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
      '/location/shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.shops.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'location.shops.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/location/shops/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.shops.create',
          ),
          1 => NULL,
          2 => 
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
      '/product/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'product.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.create',
          ),
          1 => NULL,
          2 => 
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
      '/product/productCategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.productCategories.index',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'product.productCategories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/productCategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.productCategories.create',
          ),
          1 => NULL,
          2 => 
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
      0 => '{^(?|/l(?|ivewire/preview\\-file/([^/]++)(*:42)|ocation/(?|countries/([^/]++)(?|(*:81)|/(?|edit(*:96)|regions(?|(*:113)|/(?|create(*:131)|([^/]++)(?|(*:150)|/(?|edit(*:166)|districts(?|(*:186)|/(?|create(*:204)|([^/]++)(?|(*:223)|/(?|edit(*:239)|wards(?|(*:255)|/(?|create(*:273)|([^/]++)(?|(*:292)|/(?|edit(*:308)|streets(?|(*:326)|/(?|create(*:344)|([^/]++)(?|(*:363)|/edit(*:376)|(*:384)))|(*:394)))|(*:404)))|(*:414)))|(*:424)))|(*:434)))|(*:444)))|(*:454)))|(*:464))|shops/([^/]++)(?|(*:490)|/edit(*:503)|(*:511))))|/api/(?|location/(?|countries/([^/]++)(?|(*:563)|/(?|edit(*:579)|regions(?|(*:597)|/(?|create(*:615)|([^/]++)(?|(*:634)|/(?|edit(*:650)|districts(?|(*:670)|/(?|create(*:688)|([^/]++)(?|(*:707)|/(?|edit(*:723)|wards(?|(*:739)|/(?|create(*:757)|([^/]++)(?|(*:776)|/(?|edit(*:792)|streets(?|(*:810)|/(?|create(*:828)|([^/]++)(?|(*:847)|/edit(*:860)|(*:868)))|(*:878)))|(*:888)))|(*:898)))|(*:908)))|(*:918)))|(*:928)))|(*:938)))|(*:948))|shops/([^/]++)(?|(*:974)|/edit(*:987)|(*:995)))|product/product(?|s/([^/]++)(?|(*:1036)|/(?|edit(*:1053)|product(?|Options(?|(*:1082)|/(?|create(*:1101)|([^/]++)(?|(*:1121)|/(?|edit(*:1138)|product\\-Values(*:1162))|(*:1172)))|(*:1183))|Skus(?|(*:1200)|/(?|create(*:1219)|([^/]++)(?|(*:1239)|/(?|edit(*:1256)|productSkusValue(?|(*:1284)|/(?|create(*:1303)|([^/]++)(?|(*:1323)|/edit(*:1337)|(*:1346)))|(*:1357)))|(*:1368)))|(*:1379))))|(*:1391))|Categories/([^/]++)(?|(*:1423)|/(?|edit(*:1440)|product\\-category(*:1466))|(*:1476)))|countries/([^/]++)(?|(*:1508)|/edit(*:1522)|(*:1531))|regions/([^/]++)(?|(*:1560)|/edit(*:1574)|(*:1583))|wards/([^/]++)(?|(*:1610)|/edit(*:1624)|(*:1633))|s(?|treets/([^/]++)(?|(*:1665)|/edit(*:1679)|(*:1688))|hops/([^/]++)(?|(*:1714)|/edit(*:1728)|(*:1737))))|/reset\\-password/([^/]++)(*:1774)|/verify\\-email/([^/]++)/([^/]++)(*:1815)|/product/product(?|s/([^/]++)(?|(*:1856)|/(?|edit(*:1873)|product(?|Options(?|(*:1902)|/(?|create(*:1921)|([^/]++)(?|(*:1941)|/(?|edit(*:1958)|product\\-Values(*:1982))|(*:1992)))|(*:2003))|Skus(?|(*:2020)|/(?|create(*:2039)|([^/]++)(?|(*:2059)|/(?|edit(*:2076)|productSkusValue(?|(*:2104)|/(?|create(*:2123)|([^/]++)(?|(*:2143)|/edit(*:2157)|(*:2166)))|(*:2177)))|(*:2188)))|(*:2199))))|(*:2211))|Categories/([^/]++)(?|(*:2243)|/(?|edit(*:2260)|product\\-category(*:2286))|(*:2296))))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
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
      81 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.show',
          ),
          1 => 
          array (
            0 => 'country',
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
      96 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.edit',
          ),
          1 => 
          array (
            0 => 'country',
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
      113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.index',
          ),
          1 => 
          array (
            0 => 'country',
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
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.create',
          ),
          1 => 
          array (
            0 => 'country',
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
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.edit',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.index',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.create',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
            '_route' => 'location.countries.regions.districts.edit',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.index',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.create',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.edit',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.streets.index',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.streets.create',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.streets.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
            4 => 'street',
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
      376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.streets.edit',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
            4 => 'street',
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
      384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.streets.update',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
            4 => 'street',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'location.countries.regions.districts.wards.streets.destroy',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
            4 => 'street',
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
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.streets.store',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.update',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'location.countries.regions.districts.wards.destroy',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.wards.store',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.update',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'location.countries.regions.districts.destroy',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.districts.store',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.update',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'location.countries.regions.destroy',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.regions.store',
          ),
          1 => 
          array (
            0 => 'country',
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
      464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.countries.update',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'location.countries.destroy',
          ),
          1 => 
          array (
            0 => 'country',
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
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.shops.show',
          ),
          1 => 
          array (
            0 => 'shop',
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
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.shops.edit',
          ),
          1 => 
          array (
            0 => 'shop',
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
      511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.shops.update',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'location.shops.destroy',
          ),
          1 => 
          array (
            0 => 'shop',
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
      563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.show',
          ),
          1 => 
          array (
            0 => 'country',
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
      579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.edit',
          ),
          1 => 
          array (
            0 => 'country',
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
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.index',
          ),
          1 => 
          array (
            0 => 'country',
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
      615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.create',
          ),
          1 => 
          array (
            0 => 'country',
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
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.edit',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.index',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.create',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.edit',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.index',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.create',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.edit',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.streets.index',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.streets.create',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.streets.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
            4 => 'street',
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
      860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.streets.edit',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
            4 => 'street',
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
      868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.streets.update',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
            4 => 'street',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.location.countries.regions.districts.wards.streets.destroy',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
            4 => 'street',
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
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.streets.store',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.update',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.location.countries.regions.districts.wards.destroy',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
            3 => 'ward',
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
      898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.wards.store',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.update',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.location.countries.regions.districts.destroy',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
            2 => 'district',
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
      918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.districts.store',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.update',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.location.countries.regions.destroy',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'region',
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
      938 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.regions.store',
          ),
          1 => 
          array (
            0 => 'country',
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
      948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.countries.update',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.location.countries.destroy',
          ),
          1 => 
          array (
            0 => 'country',
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
      974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.shops.show',
          ),
          1 => 
          array (
            0 => 'shop',
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
      987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.shops.edit',
          ),
          1 => 
          array (
            0 => 'shop',
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
      995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.shops.update',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.location.shops.destroy',
          ),
          1 => 
          array (
            0 => 'shop',
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
      1036 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.show',
          ),
          1 => 
          array (
            0 => 'product',
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
      1053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
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
      1082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productOptions.index',
          ),
          1 => 
          array (
            0 => 'product',
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
      1101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productOptions.create',
          ),
          1 => 
          array (
            0 => 'product',
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
      1121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productOptions.show',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
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
      1138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productOptions.edit',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
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
      1162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.assignValues',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
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
      1172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productOptions.update',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.product.products.productOptions.destroy',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
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
      1183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productOptions.store',
          ),
          1 => 
          array (
            0 => 'product',
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
      1200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.index',
          ),
          1 => 
          array (
            0 => 'product',
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
      1219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.create',
          ),
          1 => 
          array (
            0 => 'product',
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
      1239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.show',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      1256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.edit',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      1284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.productSkusValue.index',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      1303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.productSkusValue.create',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      1323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.productSkusValue.show',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
            2 => 'productSkusValue',
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
      1337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.productSkusValue.edit',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
            2 => 'productSkusValue',
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
      1346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.productSkusValue.update',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
            2 => 'productSkusValue',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.product.products.productSkus.productSkusValue.destroy',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
            2 => 'productSkusValue',
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
      1357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.productSkusValue.store',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      1368 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.update',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.product.products.productSkus.destroy',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      1379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.productSkus.store',
          ),
          1 => 
          array (
            0 => 'product',
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
      1391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.product.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
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
      1423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.productCategories.show',
          ),
          1 => 
          array (
            0 => 'productCategory',
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
      1440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.productCategories.edit',
          ),
          1 => 
          array (
            0 => 'productCategory',
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
      1466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.assignProduct',
          ),
          1 => 
          array (
            0 => 'productCategory',
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
      1476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.product.productCategories.update',
          ),
          1 => 
          array (
            0 => 'productCategory',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.product.productCategories.destroy',
          ),
          1 => 
          array (
            0 => 'productCategory',
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
      1508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.countries.show',
          ),
          1 => 
          array (
            0 => 'country',
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
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.countries.edit',
          ),
          1 => 
          array (
            0 => 'country',
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
      1531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.countries.update',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.countries.destroy',
          ),
          1 => 
          array (
            0 => 'country',
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
      1560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.regions.show',
          ),
          1 => 
          array (
            0 => 'region',
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
      1574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.regions.edit',
          ),
          1 => 
          array (
            0 => 'region',
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
      1583 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.regions.update',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.regions.destroy',
          ),
          1 => 
          array (
            0 => 'region',
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
      1610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.wards.show',
          ),
          1 => 
          array (
            0 => 'ward',
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
      1624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.wards.edit',
          ),
          1 => 
          array (
            0 => 'ward',
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
      1633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.wards.update',
          ),
          1 => 
          array (
            0 => 'ward',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.wards.destroy',
          ),
          1 => 
          array (
            0 => 'ward',
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
      1665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.streets.show',
          ),
          1 => 
          array (
            0 => 'street',
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
      1679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.streets.edit',
          ),
          1 => 
          array (
            0 => 'street',
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
      1688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.streets.update',
          ),
          1 => 
          array (
            0 => 'street',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.streets.destroy',
          ),
          1 => 
          array (
            0 => 'street',
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
      1714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shops.show',
          ),
          1 => 
          array (
            0 => 'shop',
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
      1728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shops.edit',
          ),
          1 => 
          array (
            0 => 'shop',
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
      1737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shops.update',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'api.shops.destroy',
          ),
          1 => 
          array (
            0 => 'shop',
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
      1774 => 
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
      1815 => 
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
      1856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.show',
          ),
          1 => 
          array (
            0 => 'product',
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
      1873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
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
      1902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productOptions.index',
          ),
          1 => 
          array (
            0 => 'product',
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
      1921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productOptions.create',
          ),
          1 => 
          array (
            0 => 'product',
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
      1941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productOptions.show',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
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
      1958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productOptions.edit',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
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
      1982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.assignValues',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
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
      1992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productOptions.update',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'product.products.productOptions.destroy',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productOption',
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
      2003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productOptions.store',
          ),
          1 => 
          array (
            0 => 'product',
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
      2020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.index',
          ),
          1 => 
          array (
            0 => 'product',
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
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.create',
          ),
          1 => 
          array (
            0 => 'product',
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
      2059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.show',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      2076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.edit',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      2104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.productSkusValue.index',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      2123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.productSkusValue.create',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      2143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.productSkusValue.show',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
            2 => 'productSkusValue',
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
      2157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.productSkusValue.edit',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
            2 => 'productSkusValue',
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
      2166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.productSkusValue.update',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
            2 => 'productSkusValue',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'product.products.productSkus.productSkusValue.destroy',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
            2 => 'productSkusValue',
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
      2177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.productSkusValue.store',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      2188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.update',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'product.products.productSkus.destroy',
          ),
          1 => 
          array (
            0 => 'product',
            1 => 'productSku',
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
      2199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.productSkus.store',
          ),
          1 => 
          array (
            0 => 'product',
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
      2211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'product.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
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
      2243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.productCategories.show',
          ),
          1 => 
          array (
            0 => 'productCategory',
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
      2260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.productCategories.edit',
          ),
          1 => 
          array (
            0 => 'productCategory',
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
      2286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.assignProduct',
          ),
          1 => 
          array (
            0 => 'productCategory',
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
      2296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.productCategories.update',
          ),
          1 => 
          array (
            0 => 'productCategory',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'product.productCategories.destroy',
          ),
          1 => 
          array (
            0 => 'productCategory',
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
        2 => 
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
    'sanctum.csrf-cookie' => 
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
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/update',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'controller' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'livewire.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QzOCnH3IHk3RzkbL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'as' => 'generated::QzOCnH3IHk3RzkbL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
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
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
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
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.index',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@index',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.create',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@create',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/location/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.store',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@store',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.show',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@show',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@edit',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/location/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.update',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@update',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/location/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@index',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@create',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/location/countries/{country}/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@store',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@show',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@edit',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@update',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@index',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@create',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@store',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@show',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@edit',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@update',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@index',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@create',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@store',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@show',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@edit',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@update',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.streets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.streets.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@index',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.streets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.streets.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@create',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.streets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.streets.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@store',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.streets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.streets.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@show',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.streets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/{street}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.streets.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@edit',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.streets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.streets.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@update',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.countries.regions.districts.wards.streets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.countries.regions.districts.wards.streets.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.shops.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.shops.index',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@index',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.shops.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/shops/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.shops.create',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@create',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.shops.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/location/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.shops.store',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@store',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.shops.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.shops.show',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@show',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.shops.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/location/shops/{shop}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.shops.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@edit',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.shops.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/location/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.shops.update',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@update',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.shops.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/location/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.location.shops.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@create',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@store',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@show',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/product/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@update',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/product/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productOptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productOptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productOptions.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@index',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productOptions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productOptions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productOptions.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@create',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productOptions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/products/{product}/productOptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productOptions.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@store',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productOptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productOptions/{productOption}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productOptions.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@show',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productOptions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productOptions/{productOption}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productOptions.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@edit',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productOptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/product/products/{product}/productOptions/{productOption}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productOptions.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@update',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productOptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/product/products/{product}/productOptions/{productOption}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productOptions.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productSkus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@index',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productSkus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@create',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/products/{product}/productSkus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@store',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@show',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@edit',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@update',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.productSkusValue.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}/productSkusValue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.productSkusValue.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@index',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.productSkusValue.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}/productSkusValue/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.productSkusValue.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@create',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.productSkusValue.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}/productSkusValue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.productSkusValue.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@store',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.productSkusValue.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}/productSkusValue/{productSkusValue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.productSkusValue.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@show',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.productSkusValue.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}/productSkusValue/{productSkusValue}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.productSkusValue.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@edit',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.productSkusValue.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}/productSkusValue/{productSkusValue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.productSkusValue.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@update',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.products.productSkus.productSkusValue.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/product/products/{product}/productSkus/{productSku}/productSkusValue/{productSkusValue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.products.productSkus.productSkusValue.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.productCategories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/productCategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.productCategories.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.productCategories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/productCategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.productCategories.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.productCategories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/productCategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.productCategories.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.productCategories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/productCategories/{productCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.productCategories.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.productCategories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/productCategories/{productCategory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.productCategories.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.productCategories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/product/productCategories/{productCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.productCategories.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.productCategories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/product/productCategories/{productCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'as' => 'api.product.productCategories.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.assignProduct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/productCategories/{productCategory}/product-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\AssignProductCategory@__invoke',
        'controller' => 'App\\Http\\Controllers\\Product\\AssignProductCategory',
        'as' => 'api.product.assignProduct',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.product.assignValues' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/products/{product}/productOptions/{productOption}/product-Values',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\OptionValueAssignController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Product\\OptionValueAssignController',
        'as' => 'api.product.assignValues',
        'namespace' => NULL,
        'prefix' => 'api/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.countries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.countries.index',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.countries.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.countries.create',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@create',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.countries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.countries.store',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.countries.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.countries.show',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.countries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countries/{country}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.countries.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@edit',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.countries.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.countries.update',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.countries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.countries.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.regions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.regions.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.regions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/regions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.regions.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@create',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.regions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.regions.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.regions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.regions.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.regions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/regions/{region}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.regions.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@edit',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.regions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.regions.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.regions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.regions.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wards.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.wards.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wards.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wards/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.wards.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@create',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wards.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.wards.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wards.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.wards.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wards.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wards/{ward}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.wards.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@edit',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wards.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.wards.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wards.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.wards.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.streets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/streets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.streets.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.streets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/streets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.streets.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@create',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.streets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/streets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.streets.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.streets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.streets.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.streets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/streets/{street}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.streets.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@edit',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.streets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.streets.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.streets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.streets.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shops.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.shops.index',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shops.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.shops.create',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@create',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shops.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.shops.store',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shops.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.shops.show',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shops.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/{shop}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.shops.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@edit',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shops.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.shops.update',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shops.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'api.shops.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WEWCkISyvZJxSWZe' => 
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
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WEWCkISyvZJxSWZe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'welcome',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rHsAcI8RLM0zg0n7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function () {
    return \\view(\'product-details\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rHsAcI8RLM0zg0n7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J52syZaZ8o62nHEY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {
    return \\view(\'cart\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007900000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::J52syZaZ8o62nHEY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p13KWQZVLDZmRiin' => 
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
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:45:"function () {
    return \\view(\'checkout\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bb50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::p13KWQZVLDZmRiin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b0ndRXBXW0AsZJHg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {
    return \\view(\'shop\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bb70000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::b0ndRXBXW0AsZJHg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
          1 => 'auth',
          2 => 'verified',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'dashboard',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'profile',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
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
          1 => 'guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:1:{s:13:"componentName";s:19:"pages.auth.register";}s:8:"function";s:294:"function () use ($componentName) {
            $container = \\Illuminate\\Container\\Container::getInstance();

            return $container->call([
                $container->make(\\Livewire\\Volt\\LivewireManager::class)->new($componentName),
                \'__invoke\',
            ]);
        }";s:5:"scope";s:25:"Livewire\\Volt\\VoltManager";s:4:"this";N;s:4:"self";s:32:"0000000000000bc10000000000000000";}}',
        'namespace' => NULL,
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
          1 => 'guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:1:{s:13:"componentName";s:16:"pages.auth.login";}s:8:"function";s:294:"function () use ($componentName) {
            $container = \\Illuminate\\Container\\Container::getInstance();

            return $container->call([
                $container->make(\\Livewire\\Volt\\LivewireManager::class)->new($componentName),
                \'__invoke\',
            ]);
        }";s:5:"scope";s:25:"Livewire\\Volt\\VoltManager";s:4:"this";N;s:4:"self";s:32:"0000000000000bbf0000000000000000";}}',
        'namespace' => NULL,
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
          1 => 'guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:1:{s:13:"componentName";s:26:"pages.auth.forgot-password";}s:8:"function";s:294:"function () use ($componentName) {
            $container = \\Illuminate\\Container\\Container::getInstance();

            return $container->call([
                $container->make(\\Livewire\\Volt\\LivewireManager::class)->new($componentName),
                \'__invoke\',
            ]);
        }";s:5:"scope";s:25:"Livewire\\Volt\\VoltManager";s:4:"this";N;s:4:"self";s:32:"0000000000000bbd0000000000000000";}}',
        'namespace' => NULL,
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
          1 => 'guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:1:{s:13:"componentName";s:25:"pages.auth.reset-password";}s:8:"function";s:294:"function () use ($componentName) {
            $container = \\Illuminate\\Container\\Container::getInstance();

            return $container->call([
                $container->make(\\Livewire\\Volt\\LivewireManager::class)->new($componentName),
                \'__invoke\',
            ]);
        }";s:5:"scope";s:25:"Livewire\\Volt\\VoltManager";s:4:"this";N;s:4:"self";s:32:"0000000000000bc60000000000000000";}}',
        'namespace' => NULL,
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
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:1:{s:13:"componentName";s:23:"pages.auth.verify-email";}s:8:"function";s:294:"function () use ($componentName) {
            $container = \\Illuminate\\Container\\Container::getInstance();

            return $container->call([
                $container->make(\\Livewire\\Volt\\LivewireManager::class)->new($componentName),
                \'__invoke\',
            ]);
        }";s:5:"scope";s:25:"Livewire\\Volt\\VoltManager";s:4:"this";N;s:4:"self";s:32:"0000000000000bc80000000000000000";}}',
        'namespace' => NULL,
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
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
        'namespace' => NULL,
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
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:1:{s:13:"componentName";s:27:"pages.auth.confirm-password";}s:8:"function";s:294:"function () use ($componentName) {
            $container = \\Illuminate\\Container\\Container::getInstance();

            return $container->call([
                $container->make(\\Livewire\\Volt\\LivewireManager::class)->new($componentName),
                \'__invoke\',
            ]);
        }";s:5:"scope";s:25:"Livewire\\Volt\\VoltManager";s:4:"this";N;s:4:"self";s:32:"0000000000000bcb0000000000000000";}}',
        'namespace' => NULL,
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
    'location.countries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.index',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@index',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.create',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@create',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'location/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.store',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@store',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.show',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@show',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@edit',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'location/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.update',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@update',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'location/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\CountryController@destroy',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@index',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@create',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'location/countries/{country}/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@store',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@show',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@edit',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'location/countries/{country}/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@update',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'location/countries/{country}/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\RegionController@destroy',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@index',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@create',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@store',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@show',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@edit',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@update',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\DistrictController@destroy',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@index',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@create',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@store',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@show',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@edit',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@update',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\WardController@destroy',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.streets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.streets.index',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@index',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.streets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.streets.create',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@create',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.streets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.streets.store',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@store',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.streets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.streets.show',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@show',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.streets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/{street}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.streets.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@edit',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.streets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.streets.update',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@update',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.countries.regions.districts.wards.streets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'location/countries/{country}/regions/{region}/districts/{district}/wards/{ward}/streets/{street}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.countries.regions.districts.wards.streets.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\Country\\Region\\District\\Ward\\StreetController@destroy',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.shops.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.shops.index',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@index',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@index',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.shops.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/shops/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.shops.create',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@create',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@create',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.shops.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'location/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.shops.store',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@store',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@store',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.shops.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.shops.show',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@show',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@show',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.shops.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/shops/{shop}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.shops.edit',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@edit',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@edit',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.shops.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'location/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.shops.update',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@update',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@update',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'location.shops.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'location/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'location.shops.destroy',
        'uses' => 'App\\Http\\Controllers\\Location\\ShopController@destroy',
        'controller' => 'App\\Http\\Controllers\\Location\\ShopController@destroy',
        'namespace' => NULL,
        'prefix' => '/location',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@index',
        'namespace' => NULL,
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
    'product.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@create',
        'namespace' => NULL,
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
    'product.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@store',
        'namespace' => NULL,
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
    'product.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@show',
        'namespace' => NULL,
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
    'product.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@edit',
        'namespace' => NULL,
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
    'product.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'product/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@update',
        'namespace' => NULL,
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
    'product.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@destroy',
        'namespace' => NULL,
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
    'product.products.productOptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productOptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productOptions.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@index',
        'namespace' => NULL,
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
    'product.products.productOptions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productOptions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productOptions.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@create',
        'namespace' => NULL,
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
    'product.products.productOptions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/products/{product}/productOptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productOptions.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@store',
        'namespace' => NULL,
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
    'product.products.productOptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productOptions/{productOption}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productOptions.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@show',
        'namespace' => NULL,
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
    'product.products.productOptions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productOptions/{productOption}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productOptions.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@edit',
        'namespace' => NULL,
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
    'product.products.productOptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'product/products/{product}/productOptions/{productOption}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productOptions.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@update',
        'namespace' => NULL,
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
    'product.products.productOptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/products/{product}/productOptions/{productOption}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productOptions.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOptionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOptionController@destroy',
        'namespace' => NULL,
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
    'product.products.productSkus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productSkus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@index',
        'namespace' => NULL,
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
    'product.products.productSkus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productSkus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@create',
        'namespace' => NULL,
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
    'product.products.productSkus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/products/{product}/productSkus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@store',
        'namespace' => NULL,
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
    'product.products.productSkus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@show',
        'namespace' => NULL,
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
    'product.products.productSkus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@edit',
        'namespace' => NULL,
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
    'product.products.productSkus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@update',
        'namespace' => NULL,
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
    'product.products.productSkus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkusController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkusController@destroy',
        'namespace' => NULL,
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
    'product.products.productSkus.productSkusValue.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}/productSkusValue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.productSkusValue.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@index',
        'namespace' => NULL,
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
    'product.products.productSkus.productSkusValue.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}/productSkusValue/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.productSkusValue.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@create',
        'namespace' => NULL,
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
    'product.products.productSkus.productSkusValue.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}/productSkusValue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.productSkusValue.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@store',
        'namespace' => NULL,
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
    'product.products.productSkus.productSkusValue.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}/productSkusValue/{productSkusValue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.productSkusValue.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@show',
        'namespace' => NULL,
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
    'product.products.productSkus.productSkusValue.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}/productSkusValue/{productSkusValue}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.productSkusValue.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@edit',
        'namespace' => NULL,
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
    'product.products.productSkus.productSkusValue.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}/productSkusValue/{productSkusValue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.productSkusValue.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@update',
        'namespace' => NULL,
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
    'product.products.productSkus.productSkusValue.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/products/{product}/productSkus/{productSku}/productSkusValue/{productSkusValue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.products.productSkus.productSkusValue.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSkuValueController@destroy',
        'namespace' => NULL,
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
    'product.productCategories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/productCategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.productCategories.index',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@index',
        'namespace' => NULL,
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
    'product.productCategories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/productCategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.productCategories.create',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@create',
        'namespace' => NULL,
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
    'product.productCategories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/productCategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.productCategories.store',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@store',
        'namespace' => NULL,
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
    'product.productCategories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/productCategories/{productCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.productCategories.show',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@show',
        'namespace' => NULL,
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
    'product.productCategories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/productCategories/{productCategory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.productCategories.edit',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@edit',
        'namespace' => NULL,
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
    'product.productCategories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'product/productCategories/{productCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.productCategories.update',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@update',
        'namespace' => NULL,
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
    'product.productCategories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/productCategories/{productCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'product.productCategories.destroy',
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@destroy',
        'namespace' => NULL,
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
    'product.assignProduct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/productCategories/{productCategory}/product-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\AssignProductCategory@__invoke',
        'controller' => 'App\\Http\\Controllers\\Product\\AssignProductCategory',
        'as' => 'product.assignProduct',
        'namespace' => NULL,
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
    'product.assignValues' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/products/{product}/productOptions/{productOption}/product-Values',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\OptionValueAssignController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Product\\OptionValueAssignController',
        'as' => 'product.assignValues',
        'namespace' => NULL,
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
  ),
)
);
