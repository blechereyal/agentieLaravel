<?php
 
use Illuminate\Database\Seeder;
 
class DestinationsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('destinations')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\Destination::create([
                'name' => $faker->country,
                'description' => $faker->realText(),
                'slug' => 'destination' . $i,
                'image' => 'Ocw9rRURVv1rWVsiIFZjDr8gOAtjtWjW.jpg'
            ]);
        }
    }
 
}
