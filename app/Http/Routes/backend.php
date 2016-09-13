<?php
Route::get('/index', [
    'as'   => 'backend.index.index',
    'uses' => 'IndexController@index',
]);


/* 用户管理模块 */
Route::resource("user", 'UserController');
Route::get('user/profile/{id}', [
    'as'   => 'backend.user.profile',
    'uses' => 'UserController@profile',
]);
Route::post('user/update-profile', [
    'as'   => 'backend.user.update-profile',
    'uses' => 'UserController@updateProfile',
]);
Route::post('user/upload-avatar', [
    'as'   => 'backend.user.upload-avatar',
    'uses' => 'UserController@uploadAvatar',
]);