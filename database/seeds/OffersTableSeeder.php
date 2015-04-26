<?php
 
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
                'description' => $faker->realText(),
                'slug' => 'offer' . $i,
                'destination_id' => $faker->randomElement($destinations),
                'expires_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
                'places' => $faker->numberBetween(2,40),
                'image' => 'Ocw9rRURVv1rWVsiIFZjDr8gOAtjtWjW.jpg'
            ]);
        }
    }
 
}
 