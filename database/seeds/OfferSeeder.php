<?php

use Illuminate\Database\Seeder;
use App\Offre;
class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Offre::class, 10)->create();
    }
}
