<?php

use Illuminate\Database\Seeder;

class SousDomaineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sdo1 = new \App\SousDomaine([
            "titre" => 'sous domaine 1'
        ]);
        $sdo1->save();

        $sdo2 = new \App\SousDomaine([
            "titre" => 'sous domaine 2'
        ]);
        $sdo2->save();

        \App\Domaine::find(1)->sousDomaines()->save($sdo1);
        \App\Domaine::find(2)->sousDomaines()->save($sdo2);



    }
}
