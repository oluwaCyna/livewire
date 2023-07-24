<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Abia',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Adamawa',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Akwa Ibom',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Anambra',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bauchi',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Benue',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Borno',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Bayelsa',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Cross River',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Delta',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Ebonyi',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Edo',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ekiti',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Enugu',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Federal Capital Territory',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Gombe',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Imo',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Jigawa',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Kebbi',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Kaduna',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Kano',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Kogi',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Katsina',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Kwara',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Lagos',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Nasarawa',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Niger',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Ogun',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Ondo',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Osun',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Oyo',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Plateau',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Rivers',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Sokoto',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Taraba',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Yobe',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Zamfara',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
        ));
        
        
    }
}