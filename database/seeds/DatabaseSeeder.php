<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MembersTableSeeder::class);
        $this->call(InfoPersoTableSeeder::class);
        $this->call(DomaineTableSeeder::class);
        $this->call(SousDomaineTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(PublicationTableSeeder::class);
        $this->call(FormationTableSeeder::class);
    }
}
