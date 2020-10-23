<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/index/login','Index\IndexController@login');//登录
Route::any('/index/logindo','Index\IndexController@logindo');//登录验证
Route::any('/index/reglist','Index\IndexController@reglist');//注册
Route::any('/index/reglistdo','Index\IndexController@reglistdo');//注册验证
Route::any('/index/index','Index\IndexController@index');//首页
Route::any('/index/layout','Index\IndexController@layout');//首页
Route::get('/index/active','Index\IndexController@active'); //用户激活
Route::any('/index/search','Index\IndexController@search');//列表

Route::any('/cart/add/{goods_id}','Cart\CartController@add');//详情
Route::any('/cart/cartlist/{goods_id}','Cart\CartController@cartlist');//加入购物车
Route::any('/cart/show','Cart\CartController@show');//购物车列表
Route::any('/cart/getOrderInfo','Cart\CartController@getOrderInfo');//购物车列表
Route::get('/order/create','Order\OrderController@create');          //生成订单
Route::get('/order/pay','Order\OrderController@pay');
Route::get('/order/aliNotify','Order\OrderController@aliNotify');//支付
Route::get('/order/paysuccess','Order\OrderController@paysuccess');//支付
Route::get('/order/aliSign','Order\OrderController@aliSign');//支付

Route::get('/github/callback','TextController@githublogin');
