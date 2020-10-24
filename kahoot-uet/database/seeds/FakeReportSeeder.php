<?php

use Illuminate\Database\Seeder;
use App\Reports;
class FakeReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberRecord = 500;
        factory(Reports::class, $numberRecord)->create();
    }
}
