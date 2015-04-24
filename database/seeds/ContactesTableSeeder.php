<?php
 
use Illuminate\Database\Seeder;
 
class ContactesTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contactes')->delete();
 
        $contactes = array(
            ['id' => 1, 'slug' => 'contacte-1', 'nom' => 'contacte 1' , 'email' => 'example1@exmail.com', 'tlf' => '123456781', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'slug' => 'contacte-2', 'nom' => 'contacte 2' , 'email' => 'example2@exmail.com', 'tlf' => '123456782', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'slug' => 'contacte-3', 'nom' => 'contacte 3' , 'email' => 'example3@exmail.com', 'tlf' => '123456783', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'slug' => 'contacte-4', 'nom' => 'contacte 4' , 'email' => 'example4@exmail.com', 'tlf' => '123456784', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'slug' => 'contacte-5', 'nom' => 'contacte 5' , 'email' => 'example5@exmail.com', 'tlf' => '123456785', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'slug' => 'contacte-6', 'nom' => 'contacte 6' , 'email' => 'example6@exmail.com', 'tlf' => '123456786', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'slug' => 'contacte-7', 'nom' => 'contacte 7' , 'email' => 'example7@exmail.com', 'tlf' => '123456787', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'slug' => 'contacte-8', 'nom' => 'contacte 8' , 'email' => 'example8@exmail.com', 'tlf' => '123456788', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'slug' => 'contacte-9', 'nom' => 'contacte 9' , 'email' => 'example9@exmail.com', 'tlf' => '123456789', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            );
 
        // Uncomment the below to run the seeder
        DB::table('contactes')->insert($contactes);
    }
 
}