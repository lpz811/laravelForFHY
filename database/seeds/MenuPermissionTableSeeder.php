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
                    'menu_id'       => 1,
                ],
            1  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 2,
                ],
            2  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 3,
                ],
            3  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 4,
                ],
            4  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 5,
                ],
            5  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 6,
                ],
            6  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 7,
                ],
            7  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 8,
                ],
            8  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 9,
                ],
            9  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 10,
                ],
            10  =>
                [
                    'permission_id' => 1,
                    'menu_id'       => 11,
                ],
            11  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 1,
                ],
            12  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 2,
                ],
            23  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 3,
                ],
            14  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 4,
                ],
            15  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 5,
                ],
            16  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 6,
                ],
            17  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 7,
                ],
            18  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 8,
                ],
            19  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 9,
                ],
            20  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 10,
                ],
            21  =>
                [
                    'permission_id' => 3,
                    'menu_id'       => 11,
                ],
            22  =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 1,
                ],
            23  =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 2,
                ],
            24  =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 3,
                ],
            25 =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 4,
                ],
            26  =>
                [
                    'permission_id' => 4,
                    'menu_id'       => 5,
                ],

            ]);
    }
}
