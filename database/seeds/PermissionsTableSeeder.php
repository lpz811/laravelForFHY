<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert([
            0 =>
                [
                    'id'           => 1,
                    'type'         => 'menu',
                    'name'         => 'all.menus.visible',
                    'display_name' => '全部菜单可见',
                    'description'  => '全部菜单可见',
                    'created_at'   => '2016-06-14 11:53:36',
                    'updated_at'   => '2016-06-14 13:41:58',
                ],
            1 =>
                [
                    'id'           => 2,
                    'type'         => 'action',
                    'name'         => 'all.actions.available',
                    'display_name' => '所有操作权限',
                    'description'  => '所有操作权限',
                    'created_at'   => '2016-06-15 16:34:26',
                    'updated_at'   => '2016-06-15 16:34:26',
                ],
            2 =>
                [
                    'id'           => 3,
                    'type'         => 'menu',
                    'name'         => 'tourist.menu.visible',
                    'display_name' => '游客--仅见所有菜单页面',
                    'description'  => '游客--仅见所有菜单页面',
                    'created_at'   => '2016-06-20 14:07:13',
                    'updated_at'   => '2016-06-20 14:07:13',
                ],
            3 =>
                [
                    'id'           => 4,
                    'type'         => 'menu',
                    'name'         => 'management.menu.visible',
                    'display_name' => '普通管理员管理的菜单页面',
                    'description'  => '普通管理员管理的菜单页面',
                    'created_at'   => '2016-06-20 14:07:13',
                    'updated_at'   => '2016-06-20 14:07:13',
                ],
            4 =>
                [
                    'id'           => 5,
                    'type'         => 'action',
                    'name'         => 'management.action.visible',
                    'display_name' => '普通管理员管理的操作权限',
                    'description'  => '普通管理员管理的操作权限',
                    'created_at'   => '2016-06-20 14:07:13',
                    'updated_at'   => '2016-06-20 14:07:13',
                ]
        ]);

    }
}
