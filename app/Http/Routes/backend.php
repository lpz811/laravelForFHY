<?php
Route::get('/', [
    'as'   => 'backend.index.index',
    'uses' => 'IndexController@index',
]);




/* 菜单管理模块 */
Route::resource('menu', 'MenuController');
Route::post('menu/search', [
    'as'         => 'backend.menu.search',
    'uses'       => 'MenuController@search',
]);
Route::post("menu/selectdelete", [
    'as'=>'backend.menu.selectdelete',
    'uses'=>'MenuController@selectdelete'
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
Route::post("role/selectdelete", [
    'as'=>'backend.role.selectdelete',
    'uses'=>'RoleController@selectdelete'
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
Route::post("permission/selectdelete", [
    'as'=>'backend.permission.selectdelete',
    'uses'=>'PermissionController@selectdelete'
]);


/* 操作管理模块 */
Route::resource('action', 'ActionController');
Route::post("action/search", [
    'as'=>'backend.action.search',
    'uses'=>'ActionController@search'
]);
Route::post("action/selectdelete", [
    'as'=>'backend.action.selectdelete',
    'uses'=>'ActionController@selectdelete'
]);





Route::resource('employ', 'EmployController');
Route::post("employ/search", [
    'as'=>'backend.employ.search',
    'uses'=>'EmployController@search'
]);
Route::post("employ/selectdelete", [
    'as'=>'backend.employ.selectdelete',
    'uses'=>'EmployController@selectdelete'
]);