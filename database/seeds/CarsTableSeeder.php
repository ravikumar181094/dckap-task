<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cars')->delete();
        
        \DB::table('cars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company' => 'Tata',
                'model' => 'Nano',
                'owner_name' => 'Raj',
                'address' => 'Adambakkam, Chennai',
                'vehicle_number' => 'TN12 AF2367',
                'price' => 1200.0,
                'created_at' => '2020-11-23 17:32:07',
                'updated_at' => '2020-11-23 18:03:21',
            ),
            1 => 
            array (
                'id' => 2,
                'company' => 'Honda',
                'model' => 'Unicorn',
                'owner_name' => 'Sesu',
                'address' => '1000 Lights, Chennai',
                'vehicle_number' => 'KL 02 DF1230',
                'price' => 7000.0,
                'created_at' => '2020-11-23 17:32:24',
                'updated_at' => '2020-11-23 18:01:28',
            ),
            2 => 
            array (
                'id' => 3,
                'company' => 'Renault',
                'model' => 'Duster',
                'owner_name' => 'Ravi Kumar',
                'address' => 'No 12, West Maambalam Chennai',
                'vehicle_number' => 'TN 1 A0066',
                'price' => 2800.0,
                'created_at' => '2020-11-23 17:32:59',
                'updated_at' => '2020-11-23 17:58:44',
            ),
            3 => 
            array (
                'id' => 4,
                'company' => 'Maruthi',
                'model' => 'is 800',
                'owner_name' => 'Ravi Kumar',
                'address' => 'No 12, Thirumalai nagar, Chennai',
                'vehicle_number' => 'TN 59 AJ1029',
                'price' => 1800.0,
                'created_at' => '2020-11-23 17:34:43',
                'updated_at' => '2020-11-23 17:57:33',
            ),
            4 => 
            array (
                'id' => 5,
                'company' => 'BMW',
                'model' => 'X-1',
                'owner_name' => 'David Salomon',
                'address' => 'Neelankarai, Chennai',
                'vehicle_number' => 'TN 01 A0011',
                'price' => 8000.0,
                'created_at' => '2020-11-23 18:00:10',
                'updated_at' => '2020-11-23 18:00:10',
            ),
        ));
        
        
    }
}