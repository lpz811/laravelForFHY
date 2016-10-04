<?php

use Illuminate\Database\Seeder;

class MenuPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menu_permission')->delete();

        \DB::table('menu_permission')->insert([
            0  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 200,
                ],
            1  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 201,
                ],
            2  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 202,
                ],
            3  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 203,
                ],
            4  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 204,
                ],
            5  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 205,
                ],
            6  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 206,
                ],
            7  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 207,
                ],
            8  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 208,
                ],
            9  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 209,
                ],
            10  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 210,
                ],
            11  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 200,
                ],
            12  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 201,
                ],
            23  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 202,
                ],
            14  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 203,
                ],
            15  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 204,
                ],
            16  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 205,
                ],
            17  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 206,
                ],
            18  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 207,
                ],
            19  =>
                [
                    'permission_id' => 3,
                    'menu_id'       =>208,
                ],
            20  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 209,
                ],
            21  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 210,
                ],
            22  =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 200,
                ],
            23  =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 201,
                ],
            24  =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 202,
                ],
            25 =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 203,
                ],
            26  =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 204,
                ],

            ]);
    }
}
