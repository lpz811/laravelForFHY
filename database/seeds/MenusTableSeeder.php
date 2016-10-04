<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('menus')->delete();

        \DB::table('menus')->insert(array (
            0 =>
                array (
                    'id'             => 200,
                    'parent_id'      => 0,
                    'icon'           =>'fa fa-desktop',
                    'name'           => '系统配置',
                    'route'          => 'backend.system',
                    'description'    => '系统配置',
                    'tab_id'         =>'#',
                    'data_fresh'     => 0,
                    'sort'           => 1,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            1 =>
                array (
                    'id'             => 201,
                    'parent_id'       => 200,
                    'icon'           =>'fa fa-list-alt',
                    'name'           => '菜单管理',
                    'route'          => 'backend.menu',
                    'description'    => '菜单管理',
                    'tab_id'         =>'#',
                    'data_fresh'     => 0,
                    'sort'           => 1,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            2 =>
                array (
                    'id'             => 202,
                    'parent_id'      => 201 ,
                    'icon'           =>'fa fa-list',
                    'name'           => '菜单列表',
                    'route'          => 'backend.menu.index',
                    'description'    => '菜单列表',
                    'tab_id'         =>'menuslist',
                    'data_fresh'     => 1,
                    'sort'           => 1,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            3 =>
                array (
                    'id'             => 203,
                    'parent_id'      => 200,
                    'icon'           =>'fa fa-user',
                    'name'           => '用户管理',
                    'route'          => 'backend.admin',
                    'description'    => '用户管理',
                    'tab_id'         =>'#',
                    'data_fresh'     => 1,
                    'sort'           => 2,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            4 =>
                array (
                    'id'             => 204,
                    'parent_id'      => 203,
                    'icon'           =>'fa fa-list',
                    'name'           => '用户列表',
                    'route'          => 'backend.admin.index',
                    'description'    => '用户列表',
                    'tab_id'         =>'adminslist',
                    'data_fresh'     => 1,
                    'sort'           => 1,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            5 =>
                array (
                    'id'             => 205,
                    'parent_id'      => 200,
                    'icon'           =>'fa fa-users',
                    'name'           => '角色管理',
                    'route'          => 'backend.role',
                    'description'    => '角色管理',
                    'tab_id'         =>'#',
                    'data_fresh'     => 1,
                    'sort'           => 3,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            6 =>
                array (
                    'id'             => 206,
                    'parent_id'      => 205,
                    'icon'           =>'fa fa-list',
                    'name'           => '角色列表',
                    'route'          => 'backend.role.index',
                    'description'    => '角色列表',
                    'tab_id'         =>'roleslist',
                    'data_fresh'     => 1,
                    'sort'           => 1,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            7 =>
                array (
                    'id'             => 207,
                    'parent_id'      => 200,
                    'icon'           =>'fa fa-check',
                    'name'           => '权限管理',
                    'route'          => 'backend.permission',
                    'description'    => '权限管理',
                    'tab_id'         =>'#',
                    'data_fresh'     => 1,
                    'sort'           => 4,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            8 =>
                array (
                    'id'             => 208,
                    'parent_id'      => 207,
                    'icon'           =>'fa fa-list',
                    'name'           => '权限列表',
                    'route'          => 'backend.permission.index',
                    'description'    => '权限列表',
                    'tab_id'         =>'permissionslist',
                    'data_fresh'     => 1,
                    'sort'           => 1,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            9 =>
                array (
                    'id'             => 209,
                    'parent_id'      => 200,
                    'icon'           =>'fa fa-keyboard-o',
                    'name'           => '操作管理',
                    'route'          => 'backend.action',
                    'description'    => '操作管理',
                    'tab_id'         =>'#',
                    'data_fresh'     => 1,
                    'sort'           => 5,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                ),
            10 =>
                array (
                    'id'             => 210,
                    'parent_id'      => 209,
                    'icon'           =>'fa fa-list',
                    'name'           => '操作列表',
                    'route'          => 'backend.action.index',
                    'description'    => '操作列表',
                    'tab_id'         =>'actionslist',
                    'data_fresh'     => 1,
                    'sort'           => 1,
                    'hide'           => 0,
                    'created_at'     => '2016-05-03 19:55:02',
                    'updated_at'     => '2016-06-22 17:17:01',
                )
        ));


    }
}
