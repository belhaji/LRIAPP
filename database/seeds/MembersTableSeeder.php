<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'role' => 'admin'
        ]);
        DB::table('members')->insert([
            'email' => 'responsable@gmail.com',
            'password' => 'responsable',
            'role' => 'responsable'
        ]);
        DB::table('members')->insert([
            'email' => 'doctorant@gmail.com',
            'password' => 'doctorant',
            'role' => 'doctorant'
        ]);


    }
}
