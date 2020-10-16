<?php

namespace Database\Seeders;

use App\Models\Boxer;
use Illuminate\Database\Seeder;

class BoxerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boxer::factory() -> times (50)-> create();
    }
}
