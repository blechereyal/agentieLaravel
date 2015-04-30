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
                'description' =>  implode("<br>", $faker->paragraphs($nb = 10)),
                'slug' => 'destination' . $i,
                'image' => 'jotSFnfK3S0Obrvx4c8bVq6yWKiWAqVo.png'
            ]);
        }
    }
 
}
