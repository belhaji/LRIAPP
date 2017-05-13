<?php

use Illuminate\Database\Seeder;

class PublicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pub1 = new \App\Publication([
            'titre' => 'pub 1'
        ]);
        $pub1->save();

        $pub2 = new \App\Publication([
            'titre' => 'pub 2'
        ]);
        $pub2->save();

        \App\Member::find(1)->publications()->save($pub1);
        \App\Member::find(2)->publications()->save($pub2);

    }
}
