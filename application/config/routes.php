<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'fontend/home/home';
$route['home'] = 'fontend/home/home';
//fontend
$route['category/(:any)'] = 'fontend/product/product/index/$1';
$route['product/(:any)-(:num)'] = 'fontend/product/product/detail/$1/$2';
$route['home/single'] = 'fontend/single/single';

//backend
$route['admin/language'] = 'backend/home/home/change_language';
$route['admin/select_all_language'] = 'backend/home/home/select_all_language';


$route['admin'] = 'backend/home/home';
$route['admin/product'] = 'backend/product/product';
$route['admin/product/page'] = 'backend/product/product';
$route['admin/product/page/(:num)'] = 'backend/product/product';
$route['admin/product/add'] = 'backend/product/product/add';
$route['admin/product/show/(:num)'] = 'backend/product/product/show/$1';
$route['admin/product/edit/(:num)'] = 'backend/product/product/edit/$1';
$route['admin/product/delete/(:num)'] = 'backend/product/product/delete/$1';
$route['admin/product/search'] = 'backend/product/product/search';
$route['admin/product/search/page'] = 'backend/product/product/search';
$route['admin/product/search/page/(:num)'] = 'backend/product/product/search';
$route['admin/product/product_image'] = 'backend/product/product_image';
$route['admin/product/product_image/delete/(:num)'] = 'backend/product/product_image/delete/$1';
$route['admin/product_image/product_image_remove'] = 'backend/product/product_image/product_image_remove';


$route['admin/product_category'] = 'backend/product_category/product_category';
$route['admin/product_category/add'] = 'backend/product_category/product_category/add';
$route['admin/product_category/show/(:num)'] = 'backend/product_category/product_category/show/$1';
$route['admin/product_category/edit/(:num)'] = 'backend/product_category/product_category/edit/$1';
$route['admin/product_category/delete/(:num)'] = 'backend/product_category/product_category/delete/$1';
$route['admin/product_category/page'] = 'backend/product_category/product_category';
$route['admin/product_category/page/(:num)'] = 'backend/product_category/product_category';

$route['admin/user'] = 'backend/user/user';
$route['admin/user/add'] = 'backend/user/user/add';
$route['admin/user/show/(:num)'] = 'backend/user/user/show/$1';
$route['admin/user/page'] = 'backend/user/user';
$route['admin/user/page/(:num)'] = 'backend/user/user';
$route['admin/user/edit/(:num)'] = 'backend/user/user/edit/$1';
$route['admin/user/delete/(:num)'] = 'backend/user/user/delete/$1';
$route['admin/user/search'] = 'backend/user/user/search';
$route['admin/user/search/page'] = 'backend/user/user/search';
$route['admin/user/search/page/(:num)'] = 'backend/user/user/search';


$route['admin/news'] = 'backend/news/news';
$route['admin/news/add'] = 'backend/news/news/add';
$route['admin/news/show/(:num)'] = 'backend/news/news/show/$1';
$route['admin/news/page'] = 'backend/news/news';
$route['admin/news/page/(:num)'] = 'backend/news/news';
$route['admin/news/edit/(:num)'] = 'backend/news/news/edit/$1';
$route['admin/news/delete/(:num)'] = 'backend/news/news/delete/$1';
$route['admin/news/search'] = 'backend/news/news/search';
$route['admin/news/search/page'] = 'backend/news/news/search';
$route['admin/news/search/page/(:num)'] = 'backend/news/news/search';

$route['admin/order'] = 'backend/order/order';
$route['admin/order/add'] = 'backend/order/order/add';
$route['admin/order/show/(:num)'] = 'backend/order/order/show/$1';
$route['admin/order/edit/(:num)'] = 'backend/order/order/edit/$1';

$route['admin/product/ajax_order_search'] = 'backend/product/product/ajax_order_search';
$route['admin/product/ajax_order_select'] = 'backend/product/product/ajax_order_select';
$route['admin/product/ajax_order_remove'] = 'backend/product/product/ajax_order_remove';
$route['admin/product/ajax_order_quantity_update'] = 'backend/product/product/ajax_order_quantity_update';

$route['admin/images'] = 'backend/images/images';
$route['admin/images/delete/(:num)'] = 'backend/images/images/delete/$1';


$route['admin/banner'] = 'backend/banner/banner';
$route['admin/banner/page'] = 'backend/banner/banner';
$route['admin/banner/page/(:num)'] = 'backend/banner/banner';
$route['admin/banner/add'] = 'backend/banner/banner/add';
$route['admin/banner/show/(:num)'] = 'backend/banner/banner/show/$1';
$route['admin/banner/edit/(:num)'] = 'backend/banner/banner/edit/$1';
$route['admin/banner/delete/(:num)'] = 'backend/banner/banner/delete/$1';
$route['admin/banner/search'] = 'backend/banner/banner/search';
$route['admin/banner/search/page'] = 'backend/banner/banner/search';
$route['admin/banner/search/page/(:num)'] = 'backend/banner/banner/search';

$route['admin/logo'] = 'backend/logo/logo';
$route['admin/logo/page'] = 'backend/logo/logo';
$route['admin/logo/page/(:num)'] = 'backend/logo/logo';
$route['admin/logo/add'] = 'backend/logo/logo/add';
$route['admin/logo/edit/(:num)'] = 'backend/logo/logo/edit/$1';
$route['admin/logo/delete/(:num)'] = 'backend/logo/logo/delete/$1';
$route['admin/logo/show/(:num)'] = 'backend/logo/logo/show/$1';



$route['admin/login'] = 'backend/user/authenticate/login';
$route['admin/logout'] = 'backend/user/authenticate/logout';

$route['admin/logger'] = 'backend/logger/logger';
$route['admin/logger/page'] = 'backend/logger/logger';
$route['admin/logger/page/(:num)'] = 'backend/logger/logger';

$route['test'] = 'test/test';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
