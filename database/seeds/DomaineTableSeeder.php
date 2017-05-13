<?php

use Illuminate\Database\Seeder;

class DomaineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domaine1 = new \App\Domaine([
            'titre' => "domaine 1"
        ]);
        $domaine1->save();

        $domaine2 = new \App\Domaine([
            'titre' => "domaine 2"
        ]);
        $domaine2->save();
    }
}
