<?php

use Illuminate\Database\Seeder;

class FakeAllDataSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           FakePlayerRoomSeeder::class,
           TopicSeeder::class,
           FakePlayerSeeder::class,
           FakeRoomSeeder::class,
           FakeUserSeeder::class
        ]);
    }
}
