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
                    'id' => 1,
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
                    'id' => 2,
                    'group' => 'menu',
                    'name' => '添加新菜单时保存菜单',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@store',
                    'description' => '添加时保存菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:10:59',
                    'updated_at' => '2016-06-24 17:10:59',
                ),
            2 =>
                array (
                    'id' => 3,
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
                    'id' => 4,
                    'group' => 'menu',
                    'name' => '编辑菜单时保存',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@update',
                    'description' => '编辑时保存菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:11:28',
                    'updated_at' => '2016-06-24 17:11:28',
                ),
            4 =>
                array (
                    'id' => 5,
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
                    'id' => 6,
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
                    'id' => 7,
                    'group' => 'menu',
                    'name' => '菜单的模糊查询',
                    'action' => 'App\\Http\\Controllers\\Backend\\MenuController@search',
                    'description' => '搜索菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:11:39',
                    'updated_at' => '2016-06-24 17:11:39',
                ),
            7 =>
                array (
                    'id' => 8,
                    'group' => 'user',
                    'name' => '添加新用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@create',
                    'description' => '添加新用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:13:38',
                    'updated_at' => '2016-06-24 17:13:38',
                ),
            8 =>
                array (
                    'id' => 9,
                    'group' => 'user',
                    'name' => '添加时保存用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@store',
                    'description' => '添加时保存用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:13:38',
                    'updated_at' => '2016-06-24 17:13:38',
                ),
            9 =>
                array (
                    'id' => 10,
                    'group' => 'user',
                    'name' => '编辑用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@edit',
                    'description' => '编辑用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:08',
                    'updated_at' => '2016-06-24 17:14:08',
                ),
            10 =>
                array (
                    'id' => 11,
                    'group' => 'user',
                    'name' => '编辑时保存用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@update',
                    'description' => '编辑时保存用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:08',
                    'updated_at' => '2016-06-24 17:14:08',
                ),
            11 =>
                array (
                    'id' => 12,
                    'group' => 'user',
                    'name' => '删除用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@destroy',
                    'description' => '删除用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:16',
                    'updated_at' => '2016-06-24 17:14:16',
                ),
            12 =>
                array (
                    'id' => 13,
                    'group' => 'user',
                    'name' => '删除所选用户',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@selectdelete',
                    'description' => '删除所选用户',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:16',
                    'updated_at' => '2016-06-24 17:14:16',
                ),
            13 =>
                array (
                    'id' => 14,
                    'group' => 'user',
                    'name' => '用户模糊查询',
                    'action' => 'App\\Http\\Controllers\\Backend\\UserController@search',
                    'description' => '用户模糊查询',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:14:16',
                    'updated_at' => '2016-06-24 17:14:16',
                ),




            14 =>
                array (
                    'id' => 15,
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
                    'id' => 16,
                    'group' => 'role',
                    'name' => '角色授权保存',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@associatePermission',
                    'description' => '角色授权时保存',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:22:47',
                    'updated_at' => '2016-06-24 17:22:47',
                ),
            16 =>
                array (
                    'id' => 17,
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
                    'id' => 18,
                    'group' => 'role',
                    'name' => '保存时保存菜单',
                    'action' => 'App\\Http\\Controllers\\Backend\\RoleController@store',
                    'description' => '保存时保存菜单',
                    'state' => 1,
                    'created_at' => '2016-06-24 17:23:06',
                    'updated_at' => '2016-06-24 17:23:06',
                ),
            18 =>
                array (
                    'id' => 19,
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
                    'id' => 20,
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
                    'id' => 21,
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
                    'id' => 22,
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
                    'id' => 23,
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
                    'id' => 24,
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
                    'id' => 25,
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
                    'id' => 26,
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
                    'id' => 27,
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
                    'id' => 28,
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
                    'id' => 29,
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
                    'id' => 30,
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
                    'id' => 31,
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
                    'id' => 32,
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
                    'id' => 33,
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
                    'id' => 34,
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
                    'id' => 35,
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
                    'id' => 36,
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
                    'id' => 37,
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
                    'id' => 38,
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
                    'id' => 39,
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
                    'id' => 40,
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
