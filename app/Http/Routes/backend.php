<?php
Route::get('/index', [
    'as'   => 'backend.index.index',
    'uses' => 'IndexController@index',
]);




/* 菜单管理模块 */
Route::resource('menu', 'MenuController');
Route::get('menu/search', [
    'as'         => 'backend.menu.search',
    'uses'       => 'MenuController@search',
]);



/* 用户管理模块 */
Route::resource("admin", 'AdminController');
Route::post("admin/search", [
    'as'=>'backend.admin.search',
    'uses'=>'AdminController@search'
]);
Route::post("admin/selectdelete", [
    'as'=>'backend.admin.selectdelete',
    'uses'=>'AdminController@selectdelete'
]);


/*Route::get('admin/profile/{id}', [
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
]);*/



/* 角色管理模块 */
Route::resource("role", 'RoleController');
Route::post("role/search", [
    'as'=>'backend.role.search',
    'uses'=>'RoleController@search'
]);


Route::get('role/permission/{id}', [
    'as'   => 'backend.role.permission',
    'uses' => 'RoleController@permission',
]);
Route::post('role/associatePermission', [
    'as'   => 'backend.role.associate.permission',
    'uses' => 'RoleController@associatePermission',
]);





/* 权限管理模块 */
Route::resource("permission", 'PermissionController');
Route::post("permission/search", [
    'as'=>'backend.permission.search',
    'uses'=>'PermissionController@search'
]);


Route::get('permission/associate/{id}', [
    'as'   => 'backend.permission.associate',
    'uses' => 'PermissionController@associate',
]);
Route::post('permission/associateMenus', [
    'as'   => 'backend.permission.associate.menus',
    'uses' => 'PermissionController@associateMenus',
]);
Route::post('permission/associateActions', [
    'as'   => 'backend.permission.associate.actions',
    'uses' => 'PermissionController@associateActions',
]);
