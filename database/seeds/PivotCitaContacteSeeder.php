<?php
 
use Illuminate\Database\Seeder;
 
class PivotCitaContacteSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('cita_contacte')->delete();
 
        $cita_contacte = array(
            ['cita_id' => 1, 'contacte_id' => '1' ,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['cita_id' => 3, 'contacte_id' => '1' ,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['cita_id' => 1, 'contacte_id' => '3' ,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['cita_id' => 3, 'contacte_id' => '4' ,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['cita_id' => 3, 'contacte_id' => '6' ,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['cita_id' => 1, 'contacte_id' => '8' ,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['cita_id' => 1, 'contacte_id' => '9' ,'created_at' => new DateTime, 'updated_at' => new DateTime],
           
        );
 
        // Uncomment the below to run the seeder
        DB::table('cita_contacte')->insert($cita_contacte);
    }
 
}