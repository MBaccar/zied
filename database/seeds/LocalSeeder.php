<?php

use Illuminate\Database\Seeder;
use App\Local;
class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Local::class, 100)->create();
    }
}
