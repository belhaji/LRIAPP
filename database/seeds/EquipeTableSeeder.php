<?php

use Illuminate\Database\Seeder;

class EquipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eq1 = new \App\Equipe([
            "nom" => "equipe 1"
        ]);
        $eq1->save();

        $eq2 = new \App\Equipe([
            "nom" => "equipe 2"
        ]);
        $eq2->save();

        $admin  = \App\Member::where('email', "admin@gmail.com")->get()->first();
        $eq1->members()->save($admin);

        $resp  = \App\Member::where('email', "responsable@gmail.com")->get()->first();
        $eq1->members()->save($resp);

        $doc = \App\Member::where('email', "doctorant@gmail.com")->get()->first();
        $eq2->members()->save($doc);

    }
}
