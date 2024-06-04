<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesCompletedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('completeds')->insert([
                'times_completed' => 0,
                'time_completed_in' => '00:00:00',
                // Add other necessary fields here
            ]);
        }
    }
}
