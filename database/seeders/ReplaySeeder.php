<?php

namespace Database\Seeders;

use App\Models\Replay;
use Illuminate\Database\Seeder;

class ReplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Replay::factory()->count(500)->create();
    }
}
