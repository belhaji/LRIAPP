<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoPersoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin  = \App\Member::where('email', "admin@gmail.com")->get()->first();

        $admin->infoPerso()->save(new \App\InfoPerso([
            "nom" => 'admin'
        ]));


    }
}
