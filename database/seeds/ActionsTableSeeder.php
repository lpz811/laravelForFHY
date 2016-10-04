<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('actions')->delete();

        \DB::table('actions')->insert(array (
            0 =>
                array (
                    'id' => 200,
                    'group' => 'menu',
                    'name' => '添加新菜单',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@create',
                    'description' => '添加新菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:10:59',
                    'updated_at' => '2016-06-24 17:10:59',
                ),
            1 =>
                array (
                    'id' => 201,
                    'group' => 'menu',
                    'name' => '添加新菜单时保存菜单',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@store',
                    'description' => '添加新菜单时保存菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:10:59',
                    'updated_at' => '2016-06-24 17:10:59',
                ),
            2 =>
                array (
                    'id' => 202,
                    'group' => 'menu',
                    'name' => '编辑菜单',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@edit',
                    'description' => '编辑菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:10:59',
                    'updated_at' => '2016-06-24 17:10:59',
                ),

            3 =>
                array (
                    'id' => 203,
                    'group' => 'menu',
                    'name' => '编辑菜单时保存',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@update',
                    'description' => '编辑菜单时保存',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:11:28',
                    'updated_at' => '2016-06-24 17:11:28',
                ),
            4 =>
                array (
                    'id' => 204,
                    'group' => 'menu',
                    'name' => '删除菜单',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@destroy',
                    'description' => '删除菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:11:39',
                    'updated_at' => '2016-06-24 17:11:39',
                ),
            5 =>
                array (
                    'id' =>205,
                    'group' => 'menu',
                    'name' => '删除所选菜单',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@selectdelete',
                    'description' => '删除所选菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:11:39',
                    'updated_at' => '2016-06-24 17:11:39',
                ),
            6 =>
                array (
                    'id' => 206,
                    'group' => 'menu',
                    'name' => '菜单的模糊查询',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@search',
                    'description' => '菜单的模糊查询',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:11:39',
                    'updated_at' => '2016-06-24 17:11:39',
                ),
            7 =>
                array (
                    'id' => 207,
                    'group' => 'admin',
                    'name' => '添加新用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@create',
                    'description' => '添加新用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:13:38',
                    'updated_at' => '2016-06-24 17:13:38',
                ),
            8 =>
                array (
                    'id' => 208,
                    'group' => 'admin',
                    'name' => '添加时保存用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@store',
                    'description' => '添加时保存用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:13:38',
                    'updated_at' => '2016-06-24 17:13:38',
                ),
            9 =>
                array (
                    'id' => 209,
                    'group' => 'admin',
                    'name' => '编辑用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@edit',
                    'description' => '编辑用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:08',
                    'updated_at' => '2016-06-24 17:14:08',
                ),
            10 =>
                array (
                    'id' => 210,
                    'group' => 'admin',
                    'name' => '编辑时保存用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@update',
                    'description' => '编辑时保存用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:08',
                    'updated_at' => '2016-06-24 17:14:08',
                ),
            11 =>
                array (
                    'id' => 211,
                    'group' => 'admin',
                    'name' => '删除用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@destroy',
                    'description' => '删除用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:16',
                    'updated_at' => '2016-06-24 17:14:16',
                ),
            12 =>
                array (
                    'id' => 212,
                    'group' => 'admin',
                    'name' => '删除所选用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@selectdelete',
                    'description' => '删除所选用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:16',
                    'updated_at' => '2016-06-24 17:14:16',
                ),
            13 =>
                array (
                    'id' => 213,
                    'group' => 'admin',
                    'name' => '用户模糊查询',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@search',
                    'description' => '用户模糊查询',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:16',
                    'updated_at' => '2016-06-24 17:14:16',
                ),




            14 =>
                array (
                    'id' => 214,
                    'group' => 'role',
                    'name' => '角色授权',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@permission',
                    'description' => '角色授权',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:22:47',
                    'updated_at' => '2016-06-24 17:22:47',
                ),
            15 =>
                array (
                    'id' => 215,
                    'group' => 'role',
                    'name' => '角色授权时保存',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@associatePermission',
                    'description' => '角色授权时保存',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:22:47',
                    'updated_at' => '2016-06-24 17:22:47',
                ),
            16 =>
                array (
                    'id' => 216,
                    'group' => 'role',
                    'name' => '添加新角色',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@create',
                    'description' => '添加新角色',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:23:06',
                    'updated_at' => '2016-06-24 17:23:06',
                ),
            17 =>
                array (
                    'id' => 217,
                    'group' => 'role',
                    'name' => '添加时保存角色',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@store',
                    'description' => '添加时保存角色',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:23:06',
                    'updated_at' => '2016-06-24 17:23:06',
                ),
            18 =>
                array (
                    'id' => 218,
                    'group' => 'role',
                    'name' => '编辑角色',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@edit',
                    'description' => '编辑角色',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:23:19',
                    'updated_at' => '2016-06-24 17:23:19',
                ),
            19 =>
                array (
                    'id' => 219,
                    'group' => 'role',
                    'name' => '编辑时保存角色',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@update',
                    'description' => '编辑时保存角色',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:23:31',
                    'updated_at' => '2016-06-24 17:23:31',
                ),
            20 =>
                array (
                    'id' => 220,
                    'group' => 'role',
                    'name' => '删除角色',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@destroy',
                    'description' => '删除角色',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:23:45',
                    'updated_at' => '2016-06-24 17:23:45',
                ),
            21 =>
                array (
                    'id' => 221,
                    'group' => 'role',
                    'name' => '删除所选角色',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@selectdelete',
                    'description' => '删除所选角色',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:23:45',
                    'updated_at' => '2016-06-24 17:23:45',
                ),
            22 =>
                array (
                    'id' => 222,
                    'group' => 'role',
                    'name' => '角色的迷糊查询',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@search',
                    'description' => '角色的迷糊查询',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:23:45',
                    'updated_at' => '2016-06-24 17:23:45',
                ),


            23 =>
                array (
                    'id' => 223,
                    'group' => 'permission',
                    'name' => '权限授权',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@associate',
                    'description' => '权限授权',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:24:03',
                    'updated_at' => '2016-06-24 17:24:03',
                ),
            24 =>
                array (
                    'id' => 224,
                    'group' => 'permission',
                    'name' => '权限授权菜单',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@associateMenus',
                    'description' => '权限授权菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:24:03',
                    'updated_at' => '2016-06-24 17:24:03',
                ),
            25 =>
                array (
                    'id' => 225,
                    'group' => 'permission',
                    'name' => '权限授权操作',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@associateActions',
                    'description' => '权限授权操作',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:24:15',
                    'updated_at' => '2016-06-24 17:24:15',
                ),
            26 =>
                array (
                    'id' => 226,
                    'group' => 'permission',
                    'name' => '添加新权限',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@create',
                    'description' => '添加新权限',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:26:30',
                    'updated_at' => '2016-06-24 17:26:30',
                ),
            27 =>
                array (
                    'id' => 227,
                    'group' => 'permission',
                    'name' => '添加时保存权限',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@store',
                    'description' => '添加时保存权限',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:26:30',
                    'updated_at' => '2016-06-24 17:26:30',
                ),
            28 =>
                array (
                    'id' => 228,
                    'group' => 'permission',
                    'name' => '编辑权限',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@edit',
                    'description' => '编辑权限',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:26:42',
                    'updated_at' => '2016-06-24 17:26:42',
                ),
            29 =>
                array (
                    'id' => 229,
                    'group' => 'permission',
                    'name' => '编辑时修改权限',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@update',
                    'description' => '编辑时修改权限',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:26:54',
                    'updated_at' => '2016-06-24 17:26:54',
                ),
            30 =>
                array (
                    'id' => 230,
                    'group' => 'permission',
                    'name' => '删除权限',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@destroy',
                    'description' => '删除权限',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:27:04',
                    'updated_at' => '2016-06-24 17:27:04',
                ),
            31 =>
                array (
                    'id' => 231,
                    'group' => 'permission',
                    'name' => '删除所选权限',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@selectdelete',
                    'description' => '删除所选权限',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:27:04',
                    'updated_at' => '2016-06-24 17:27:04',
                ),
            32 =>
                array (
                    'id' => 232,
                    'group' => 'permission',
                    'name' => '权限的模糊查询',
                    'action' => 'App\\Http\\Controllers\\Backend\\PermissionController@search',
                    'description' => '权限的模糊查询',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:27:04',
                    'updated_at' => '2016-06-24 17:27:04',
                ),



            33 =>
                array (
                    'id' => 233,
                    'group' => 'action',
                    'name' => '添加新操作',
                    'action' => 'App\\Http\\Controllers\\Backend\\ActionController@create',
                    'description' => '添加新操作',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:28:02',
                    'updated_at' => '2016-06-24 17:28:02',
                ),
            34 =>
                array (
                    'id' =>234,
                    'group' => 'action',
                    'name' => '添加时保存操作',
                    'action' => 'App\\Http\\Controllers\\Backend\\ActionController@store',
                    'description' => '添加时保存操作',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:28:02',
                    'updated_at' => '2016-06-24 17:28:02',
                ),
            35 =>
                array (
                    'id' => 235,
                    'group' => 'action',
                    'name' => '编辑操作',
                    'action' => 'App\\Http\\Controllers\\Backend\\ActionController@edit',
                    'description' => '编辑操作',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:28:11',
                    'updated_at' => '2016-06-24 17:28:44',
                ),
            36 =>
                array (
                    'id' => 236,
                    'group' => 'action',
                    'name' => '编辑时保存操作',
                    'action' => 'App\\Http\\Controllers\\Backend\\ActionController@update',
                    'description' => '编辑时保存操作',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:28:11',
                    'updated_at' => '2016-06-24 17:28:44',
                ),

            37 =>
                array (
                    'id' => 237,
                    'group' => 'action',
                    'name' => '删除操作',
                    'action' => 'App\\Http\\Controllers\\Backend\\ActionController@destroy',
                    'description' => '删除操作',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:29:19',
                    'updated_at' => '2016-06-24 17:29:19',
                ),

            38 =>
                array (
                    'id' => 238,
                    'group' => 'action',
                    'name' => '删除所选操作',
                    'action' => 'App\\Http\\Controllers\\Backend\\ActionController@selectdelete',
                    'description' => '删除所选操作',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:28:20',
                    'updated_at' => '2016-06-24 17:28:49',
                ),
            39 =>
                array (
                    'id' => 239,
                    'group' => 'action',
                    'name' => '操作的模糊查询',
                    'action' => 'App\\Http\\Controllers\\Backend\\ActionController@search',
                    'description' => '操作的模糊查询',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:28:20',
                    'updated_at' => '2016-06-24 17:28:49',
                )

        ));


    }
}
