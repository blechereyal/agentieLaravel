<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('offers')->delete();

        $faker = Faker\Factory::create();
        $destinations = \App\Destination::all()->lists('id');
        for ($i = 0; $i < 100; $i++) {

            \App\Offer::create([
                'name' => $faker->name,
                'description' =>  implode("<br>", $faker->paragraphs($nb = 3)),
                'slug' => 'offer' . $i,
                'destination_id' => $faker->randomElement($destinations),
                'expires_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks'),
                'ends_at' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+3 weeks'),
                'places' => $faker->numberBetween(2,40),
                'image' => '7BTTe45FQH48jYaygyAJMe16mAPsBye6.jpg',
                'price' => $faker->numberBetween(300,400)
            ]);
        }
    }

}
