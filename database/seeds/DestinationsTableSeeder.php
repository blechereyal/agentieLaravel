<?php
 
use Illuminate\Database\Seeder;
 
class DestinationsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('destinations')->delete();
 
        $destinations = array(
            ['id' => 1, 'name' => 'Destination 1', 'slug' => 'destination-1', 'description' => 'description of destination 1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Destination 2', 'slug' => 'destination-2', 'description' => 'description of destination 2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Destination 3', 'slug' => 'destination-3', 'description' => 'description of destination 3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('destinations')->insert($destinations);
    }
 
}
 