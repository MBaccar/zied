<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PlaceSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(LocalSeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(ReviewSeeder::class);
    }
}
