<?php

use Illuminate\Database\Seeder;

class FormationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f1 = new \App\Formation([
            'titre' => 'f 1'
        ]);
        $f1->save();

        $f2 = new \App\Formation([
            'titre' => 'f 2'
        ]);
        $f2->save();

        \App\Member::find(1)->publications()->save($f1);
        \App\Member::find(2)->publications()->save($f2);
    }
}
