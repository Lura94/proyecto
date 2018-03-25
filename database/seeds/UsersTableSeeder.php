<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456789'),
                'id_rollet' => 1,
                'phone' => "12324343",
            ),
        ));
    }
}
