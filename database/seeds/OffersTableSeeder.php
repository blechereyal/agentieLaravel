<?php
 
use Illuminate\Database\Seeder;
 
class OffersTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('offers')->delete();
 
        $offers = array(
            ['id' => 1, 'destination_id' => '1', 'name' => 'Offer 1', 'slug' => 'offer-1', 'description' => 'description of offer 1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'destination_id' => '1', 'name' => 'Offer 2', 'slug' => 'offer-2', 'description' => 'description of offer 2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'destination_id' => '1', 'name' => 'Offer 3', 'slug' => 'offer-3', 'description' => 'description of offer 3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'destination_id' => '3', 'name' => 'Offer 4', 'slug' => 'offer-4', 'description' => 'description of offer 4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        
        );
 
        // Uncomment the below to run the seeder
        DB::table('offers')->insert($offers);
    }
 
}
 