<?php
Route::get('/index', [
    'as'   => 'backend.index.index',
    'uses' => 'IndexController@index',
]);


/* 用户管理模块 */
Route::resource("admin", 'AdminController');
Route::get('admin/profile/{id}', [
    'as'   => 'backend.admin.profile',
    'uses' => 'AdminController@profile',
]);
Route::post('admin/update-profile', [
    'as'   => 'backend.user.update-profile',
    'uses' => 'AdminController@updateProfile',
]);
Route::post('admin/upload-avatar', [
    'as'   => 'backend.user.upload-avatar',
    'uses' => 'AdminController@uploadAvatar',
]);