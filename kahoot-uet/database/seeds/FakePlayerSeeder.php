<?php

use Illuminate\Database\Seeder;
use App\Players;

class FakePlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberRecord = 1000;
        factory(Players::class, $numberRecord)->create();
    }
}
