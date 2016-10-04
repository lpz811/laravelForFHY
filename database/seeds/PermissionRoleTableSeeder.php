<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('permission_role')->delete();

        \DB::table('permission_role')->insert([
            0 =>
                [
                    'permission_id' => 1,
                    'role_id'       => 1,
                ],
            1 =>
                [
                    'permission_id' => 2,
                    'role_id'       => 1,
                ],
            2 =>
                [
                    'permission_id' => 3,
                    'role_id'       => 3,
                ],
            3 =>
                [
                    'permission_id' => 4,
                    'role_id'       => 2,
                ],
            4 =>
                [
                    'permission_id' => 5,
                    'role_id'       => 2,
                ],

        ]);

    }
}
