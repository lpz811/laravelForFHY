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
                    'id'             => 1,
                    'parent_id'      => 0,
                    'data_id'        => 0,
                    'data_pid'       => 0,
                    'icon'           =>'fa fa-file-word-o',
                    'icon_close'     =>'star-o',
                    'name'           => 'ui.system.group',
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
                    'id'             => 2,
                    'parent_id'      => 1,
                    'data_id'        => 1,
                    'data_pid'       => 0,
                    'icon'           =>'folder-open-o',
                    'icon_close'     =>'folder-o',
                    'name'           => 'ui.menu.group',
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
                    'id'             => 3,
                    'parent_id'      => 2,
                    'data_id'        => 11,
                    'data_pid'       => 1,
                    'icon'           =>'fa fa-list',
                    'icon_close'     =>'fa fa-list',
                    'name'           => 'ui.menu.list',
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
                    'id'             => 4,
                    'parent_id'      => 1,
                    'data_id'        => 2,
                    'data_pid'       => 0,
                    'icon'           =>'fa fa-user',
                    'icon_close'     =>'fa fa-user',
                    'name'           => 'ui.admin.group',
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
                    'id'             => 5,
                    'parent_id'      => 4,
                    'data_id'        => 21,
                    'data_pid'       => 2,
                    'icon'           =>'fa fa-list',
                    'icon_close'     =>'fa fa-list',
                    'name'           => 'ui.admin.list',
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
                    'id'             => 6,
                    'parent_id'      => 1,
                    'data_id'        => 3,
                    'data_pid'       => 0,
                    'icon'           =>'fa fa-user',
                    'icon_close'     =>'fa fa-user',
                    'name'           => 'ui.role.group',
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
                    'id'             => 7,
                    'parent_id'      => 6,
                    'data_id'        => 31,
                    'data_pid'       => 3,
                    'icon'           =>'fa fa-list',
                    'icon_close'     =>'fa fa-list',
                    'name'           => 'ui.role.list',
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
                    'id'             => 8,
                    'parent_id'      => 1,
                    'data_id'        => 4,
                    'data_pid'       => 0,
                    'icon'           =>'fa fa-check',
                    'icon_close'     =>'fa fa-check',
                    'name'           => 'ui.permission.group',
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
                    'id'             => 9,
                    'parent_id'      => 8,
                    'data_id'        => 41,
                    'data_pid'       => 4,
                    'icon'           =>'fa fa-list',
                    'icon_close'     =>'fa fa-list',
                    'name'           => 'ui.permission.list',
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
                    'id'             => 10,
                    'parent_id'      => 1,
                    'data_id'        => 5,
                    'data_pid'       => 0,
                    'icon'           =>'fa fa-keyboard-o',
                    'icon_close'     =>'fa fa-keyboard-o',
                    'name'           => 'ui.action.group',
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
                    'id'             => 11,
                    'parent_id'      => 10,
                    'data_id'        => 51,
                    'data_pid'       => 5,
                    'icon'           =>'fa fa-plus',
                    'icon_close'     =>'fa fa-plus',
                    'name'           => 'ui.action.list',
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
