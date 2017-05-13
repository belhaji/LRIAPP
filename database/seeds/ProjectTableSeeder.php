<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project1 = new \App\Project([
            'titre' => 'projet 1'
        ]);
        $project1->save();

        $project2 = new \App\Project([
            'titre' => 'projet 2'
        ]);
        $project2->save();

        \App\Member::find(1)->projects()->save($project1);
        \App\Member::find(2)->projects()->save($project2);

        \App\SousDomaine::find(1)->projects()->save($project1);
        \App\SousDomaine::find(2)->projects()->save($project2);

    }
}
