<?php
 
use Illuminate\Database\Seeder;
 
class CitasTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('citas')->delete();
 
        $citas = array(
            ['id' => 1, 'dataCita' => '2015-05-01', 'slug' => 'cita-1', 'titol' => 'cita 1' , 'descripcio' => 'cita numero 1 de prova', 'lloc' => 'lloc 1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'dataCita' => '2015-05-01', 'slug' => 'cita-2', 'titol' => 'cita 2' , 'descripcio' => 'cita numero 2 de prova', 'lloc' => 'lloc 2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'dataCita' => '2015-05-01', 'slug' => 'cita-3', 'titol' => 'cita 3' , 'descripcio' => 'cita numero 3 de prova', 'lloc' => 'lloc 3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('citas')->insert($citas);
    }
 
}