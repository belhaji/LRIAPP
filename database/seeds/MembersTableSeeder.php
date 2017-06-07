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
            'password' => sha1('admin'),
            'role' => 'admin',
            'active' => 1
        ]);


    }
}
