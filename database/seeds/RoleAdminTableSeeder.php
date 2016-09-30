<?php

use Illuminate\Database\Seeder;

class RoleAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('role_admin')->delete();

        \DB::table('role_admin')->insert([
            0 =>
                [
                    'admin_id' => 1,
                    'role_id' => 1,
                ],
            1 =>
                [
                    'admin_id' => 1,
                    'role_id' => 2,
                ],
            2 =>
                [
                    'admin_id' => 2,
                    'role_id' => 3,
                ],
        ]);
    }
}
