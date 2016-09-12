<?php
// 登录认证
Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');
