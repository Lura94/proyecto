<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(array(
            array(
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456789'),
                'curp' => '54DSR43FFDSR',
                'grade' => '6°',
                'group' => 'A',
                'ncontrol' => '12070043',
                'last_name' => 'Perez',
                'last_name2' => 'Castro',
                'specialty' => 'DBA'
            ),
        ));
    }
}
