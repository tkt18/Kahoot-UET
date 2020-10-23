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
            FakePlayerSeeder::class,
            FakeQuestionSeeder::class,
            FakeRoomSeeder::class,
            FakeUserSeeder::class,
            TopicSeeder::class

        ]);
    }
}
