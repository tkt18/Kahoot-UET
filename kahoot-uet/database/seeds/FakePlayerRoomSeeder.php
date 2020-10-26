<?php

use Illuminate\Database\Seeder;
use App\PlayerRoom;

class FakePlayerRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberRecord = 1000;
        factory(PlayerRoom::class, $numberRecord)->create();
    }
}
