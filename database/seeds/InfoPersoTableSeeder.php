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
        $resp  = \App\Member::where('email', "responsable@gmail.com")->get()->first();
        $doc = \App\Member::where('email', "doctorant@gmail.com")->get()->first();


        $admin->infoPerso()->save(new \App\InfoPerso([
            "nom" => 'admin'
        ]));

        $resp->infoPerso()->save(new \App\InfoPerso([
            'nom' => 'responsable'
        ]));

        $doc->infoPerso()->save(new \App\InfoPerso([
            'nom' => 'doctorant'
        ]));

    }
}
