<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new \App\Post([
            'titre' => 'post 1'
        ]);
        $post1->save();

        $post2 = new \App\Post([
            'titre' => 'post 2'
        ]);
        $post2->save();

        \App\Member::find(1)->posts()->save($post1);
        \App\Member::find(2)->posts()->save($post2);

    }
}
