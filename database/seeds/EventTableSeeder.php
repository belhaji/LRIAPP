<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event1 = new \App\Event([
            'titre' => 'event 1'
        ]);
        $event1->save();

        $event2 = new \App\Event([
            'titre' => 'event 2'
        ]);
        $event2->save();

        \App\Member::find(1)->events()->save($event1);
        \App\Member::find(2)->events()->save($event2);
    }
}
