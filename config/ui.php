<?php
return [

    /* 权限管理类型 */
    'permission-type'              => [
        'menu'   => '菜单权限',
        'action' => '操作权限',
    ],
    /* 操作管理类型 */
     'action-group'                 => [
        'menu'       => '菜单管理',
        'admin'       =>'用户管理',
        'role'       => '角色管理',
        'permission' => '权限管理',
        'action'     => '操作管理',
    ],
    /* 无需验证的操作 */
    'without-verification-actions' => [
       // 'Closure',
        'App\Http\Controllers\Backend\IndexController@index',
        'App\Http\Controllers\Backend\AuthController@getLogin',
        'App\Http\Controllers\Backend\AuthController@postLogin',
        'App\Http\Controllers\Backend\AuthController@getLogout',
        'App\Http\Controllers\Backend\AuthController@getRegister',
        'App\Http\Controllers\Backend\AuthController@postRegister',
    ],
    'without-verification-route' => [
        'App\Http\Controllers\Backend\IndexController@index'
    ],
    /* 上传文件配置 */
    'uploads'                      => [
        'mimes'     => [],
        'storage'   => 'local',
        'max_size'  => 10 * 1024 * 1024,
        'extension' => ['jpg', 'gif', 'png', 'jpeg', 'zip', 'rar', 'tar', 'gz', '7z', 'doc', 'docx', 'txt', 'xml'],
        'save_path' => date('Y-m-d') . '/' . sha1(time()),
    ],

    'uploads_local_driver' => [

    ],
];