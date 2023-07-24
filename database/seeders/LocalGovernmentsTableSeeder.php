<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocalGovernmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('local_governments')->delete();
        
        \DB::table('local_governments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aba North',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aba South',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Arochukwu',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Bende',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ikwuano',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Isiala Ngwa North',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Isiala Ngwa South',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Isuikwuato',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Obi Ngwa',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Ohafia',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Osisioma',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ugwunagbo',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ukwa East',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Ukwa West',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Umuahia North',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Umuahia South',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Umu Nneochi',
                'state_id' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Demsa',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Fufure',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Ganye',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Gayuk',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Gombi',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Grie',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Hong',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Jada',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Larmurde',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Madagali',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Maiha',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Mayo Belwa',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Michika',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Mubi North',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Mubi South',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Numan',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Shelleng',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Song',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Toungo',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Yola North',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Yola South',
                'state_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Abak',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Eastern Obolo',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Eket',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Esit Eket',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Essien Udim',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Etim Ekpo',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Etinan',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Ibeno',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Ibesikpo Asutan',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Ibiono-Ibom',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Ika',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Ikono',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Ikot Abasi',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Ikot Ekpene',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Ini',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Itu',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Mbo',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Mkpat-Enin',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Nsit-Atai',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Nsit-Ibom',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Nsit-Ubium',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Obot Akara',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Okobo',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Onna',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Oron',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Oruk Anam',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Udung-Uko',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Ukanafun',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Uruan',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Urue-Offong/Oruko',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Uyo',
                'state_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Aguata',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Anambra East',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Anambra West',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Anaocha',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Awka North',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Awka South',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Ayamelum',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Dunukofia',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Ekwusigo',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Idemili North',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Idemili South',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Ihiala',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Njikoka',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Nnewi North',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Nnewi South',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Ogbaru',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Onitsha North',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Onitsha South',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Orumba North',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Orumba South',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Oyi',
                'state_id' => 4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Alkaleri',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Bauchi',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Bogoro',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Damban',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Darazo',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Dass',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Gamawa',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Ganjuwa',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Giade',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Itas/Gadau',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Jama\'are',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Katagum',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Kirfi',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Misau',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Ningi',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Shira',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Tafawa Balewa',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Toro',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Warji',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Zaki',
                'state_id' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Brass',
                'state_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Ekeremor',
                'state_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Kolokuma/Opokuma',
                'state_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Nembe',
                'state_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Ogbia',
                'state_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Sagbama',
                'state_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Southern Ijaw',
                'state_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Yenagoa',
                'state_id' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Agatu',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Apa',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Ado',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Buruku',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Gboko',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Guma',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Gwer East',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Gwer West',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Katsina-Ala',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Konshisha',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Kwande',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Logo',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Makurdi',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Obi',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Ogbadibo',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Ohimini',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Oju',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Okpokwu',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Oturkpo',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Tarka',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Ukum',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Ushongo',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Vandeikya',
                'state_id' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Abadam',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Askira/Uba',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Bama',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Bayo',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Biu',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Chibok',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Damboa',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Dikwa',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Gubio',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Guzamala',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Gwoza',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Hawul',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Jere',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Kaga',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Kala/Balge',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Konduga',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Kukawa',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Kwaya Kusar',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Mafa',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Magumeri',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Maiduguri',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Marte',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Mobbar',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Monguno',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Ngala',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Nganzai',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Shani',
                'state_id' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Abi',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Akamkpa',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Akpabuyo',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Bakassi',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Bekwarra',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Biase',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Boki',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Calabar Municipal',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Calabar South',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Etung',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Ikom',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Obanliku',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Obubra',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Obudu',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Odukpani',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Ogoja',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Yakuur',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Yala',
                'state_id' => 9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Aniocha North',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Aniocha South',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Bomadi',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Burutu',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Ethiope East',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Ethiope West',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Ika North East',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Ika South',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Isoko North',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Isoko South',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Ndokwa East',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Ndokwa West',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Okpe',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Oshimili North',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Oshimili South',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Patani',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Sapele, Delta',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Udu',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Ughelli North',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Ughelli South',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Ukwuani',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Uvwie',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Warri North',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Warri South',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Warri South West',
                'state_id' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Abakaliki',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Afikpo North',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Afikpo South',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Ebonyi',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Ezza North',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Ezza South',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Ikwo',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Ishielu',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Ivo',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Izzi',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Ohaozara',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Ohaukwu',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Onicha',
                'state_id' => 11,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Akoko-Edo',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Egor',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Esan Central',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Esan North-East',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Esan South-East',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Esan West',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Etsako Central',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Etsako East',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Etsako West',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Igueben',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Ikpoba Okha',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Orhionmwon',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Oredo',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Ovia North-East',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Ovia South-West',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Owan East',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Owan West',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Uhunmwonde',
                'state_id' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Ado Ekiti',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Efon',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Ekiti East',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Ekiti South-West',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Ekiti West',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Emure',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Gbonyin',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Ido Osi',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Ijero',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Ikere',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Ikole',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Ilejemeje',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Irepodun/Ifelodun',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Ise/Orun',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Moba',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Oye',
                'state_id' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Aninri',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Awgu',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Enugu East',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Enugu North',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Enugu South',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Ezeagu',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Igbo Etiti',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Igbo Eze North',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Igbo Eze South',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Isi Uzo',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Nkanu East',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Nkanu West',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Nsukka',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Oji River',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Udenu',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Udi',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Uzo Uwani',
                'state_id' => 14,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Abaji',
                'state_id' => 15,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Bwari',
                'state_id' => 15,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Gwagwalada',
                'state_id' => 15,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Kuje',
                'state_id' => 15,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Kwali',
                'state_id' => 15,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Municipal Area Council',
                'state_id' => 15,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Akko',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Balanga',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Billiri',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Dukku',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Funakaye',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Gombe',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Kaltungo',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Kwami',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Nafada',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Shongom',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Yamaltu/Deba',
                'state_id' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Aboh Mbaise',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Ahiazu Mbaise',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Ehime Mbano',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Ezinihitte',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Ideato North',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Ideato South',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Ihitte/Uboma',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Ikeduru',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Isiala Mbano',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Isu',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Mbaitoli',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Ngor Okpala',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Njaba',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Nkwerre',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Nwangele',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Obowo',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Oguta',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Ohaji/Egbema',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Okigwe',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Orlu',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Orsu',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Oru East',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Oru West',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Owerri Municipal',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Owerri North',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Owerri West',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Unuimo',
                'state_id' => 17,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Auyo',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Babura',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Biriniwa',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Birnin Kudu',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Buji',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Dutse',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Gagarawa',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Garki',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Gumel',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Guri',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Gwaram',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Gwiwa',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Hadejia',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Jahun',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Kafin Hausa',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Kazaure',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Kiri Kasama',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Kiyawa',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Kaugama',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Maigatari',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Malam Madori',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Miga',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Ringim',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Roni',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Sule Tankarkar',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Taura',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Yankwashi',
                'state_id' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Birnin Gwari',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Chikun',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Giwa',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Igabi',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Ikara',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Jaba',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Jema\'a',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Kachia',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Kaduna North',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Kaduna South',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Kagarko',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Kajuru',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Kaura',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Kauru',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Kubau',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Kudan',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Lere',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Makarfi',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Sabon Gari',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Sanga',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Soba',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Zangon Kataf',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Zaria',
                'state_id' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Ajingi',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Albasu',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Bagwai',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Bebeji',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Bichi',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Bunkure',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Dala',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Dambatta',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Dawakin Kudu',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Dawakin Tofa',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Doguwa',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Fagge',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Gabasawa',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Garko',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'Garun Mallam',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Gaya',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Gezawa',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Gwale',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Gwarzo',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Kabo',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Kano Municipal',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Karaye',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Kibiya',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Kiru',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Kumbotso',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Kunchi',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Kura',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Madobi',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Makoda',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Minjibir',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Nasarawa',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Rano',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Rimin Gado',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Rogo',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Shanono',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Sumaila',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'Takai',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Tarauni',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Tofa',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Tsanyawa',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Tudun Wada',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'Ungogo',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'Warawa',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'Wudil',
                'state_id' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'Bakori',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Batagarawa',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Batsari',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Baure',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Bindawa',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Charanchi',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'Dandume',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'Danja',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'Dan Musa',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Daura',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Dutsi',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'Dutsin Ma',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Faskari',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Funtua',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'Ingawa',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Jibia',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Kafur',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Kaita',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Kankara',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Kankia',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'Katsina',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Kurfi',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Kusada',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Mai\'Adua',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Malumfashi',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Mani',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Mashi',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Matazu',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Musawa',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Rimi',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Sabuwa',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'Safana',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'Sandamu',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'Zango',
                'state_id' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'Aleiro',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'Arewa Dandi',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'Argungu',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Augie',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Bagudo',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'Birnin Kebbi',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Bunza',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Dandi',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Fakai',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Gwandu',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'Jega',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Kalgo',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'Koko/Besse',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Maiyama',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'Ngaski',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Sakaba',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Shanga',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Suru',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'Wasagu/Danko',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'Yauri',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Zuru',
                'state_id' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Adavi',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Ajaokuta',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Ankpa',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Bassa',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Dekina',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Ibaji',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Idah',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'Igalamela Odolu',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'Ijumu',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'Kabba/Bunu',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Kogi',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Lokoja',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'Mopa Muro',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Ofu',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'Ogori/Magongo',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Okehi',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Okene',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'Olamaboro',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Omala',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Yagba East',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'Yagba West',
                'state_id' => 23,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Asa',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Baruten',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Edu',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Ekiti, Kwara State',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Ifelodun',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Ilorin East',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Ilorin South',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Ilorin West',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Irepodun',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Isin',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'Kaiama',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
        ));
        \DB::table('local_governments')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Moro',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Offa',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'Oke Ero',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'Oyun',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Pategi',
                'state_id' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Agege',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'Ajeromi-Ifelodun',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Alimosho',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'Amuwo-Odofin',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Apapa',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Badagry',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'Epe',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'Eti Osa',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Ibeju-Lekki',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Ifako-Ijaiye',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Ikeja',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Ikorodu',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Kosofe',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'Lagos Island',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'Lagos Mainland',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'Mushin',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'Ojo',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Oshodi-Isolo',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'Shomolu',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Surulere, Lagos State',
                'state_id' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Akwanga',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'Awe',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'Doma',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'Karu',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'Keana',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'Keffi',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'Kokona',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'Lafia',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'Nasarawa',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Nasarawa Egon',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'Obi',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'Toto',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Wamba',
                'state_id' => 26,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Agaie',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'Agwara',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'Bida',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'Borgu',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'Bosso',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'Chanchaga',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'Edati',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'Gbako',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'Gurara',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'Katcha',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'Kontagora',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'Lapai',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'Lavun',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'Magama',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'Mariga',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'Mashegu',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'Mokwa',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'Moya',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'Paikoro',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'Rafi',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'Rijau',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'Shiroro',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'Suleja',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'Tafa',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'Wushishi',
                'state_id' => 27,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'Abeokuta North',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'Abeokuta South',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'Ado-Odo/Ota',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'Egbado North',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'Egbado South',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'Ewekoro',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'Ifo',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'Ijebu East',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'Ijebu North',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'Ijebu North East',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'Ijebu Ode',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'Ikenne',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'Imeko Afon',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'Ipokia',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'Obafemi Owode',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'Odeda',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'Odogbolu',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'Ogun Waterside',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'Remo North',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'Shagamu',
                'state_id' => 28,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'Akoko North-East',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'Akoko North-West',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'Akoko South-West',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'Akoko South-East',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'Akure North',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'Akure South',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'Ese Odo',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'Idanre',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'Ifedore',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'Ilaje',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'Ile Oluji/Okeigbo',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'Irele',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'Odigbo',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'Okitipupa',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'Ondo East',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'Ondo West',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'Ose',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'Owo',
                'state_id' => 29,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'Atakunmosa East',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'Atakunmosa West',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'Aiyedaade',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'Aiyedire',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'Boluwaduro',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'Boripe',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'Ede North',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'Ede South',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'Ife Central',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'Ife East',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'Ife North',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'Ife South',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'Egbedore',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'Ejigbo',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'Ifedayo',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'Ifelodun',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'Ila',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'Ilesa East',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'Ilesa West',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'Irepodun',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'Irewole',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'Isokan',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'Iwo',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'Obokun',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'Odo Otin',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'Ola Oluwa',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'Olorunda',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'Oriade',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'Orolu',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'Osogbo',
                'state_id' => 30,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'Afijio',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'Akinyele',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'Atiba',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'Atisbo',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'Egbeda',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'Ibadan North',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'Ibadan North-East',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'Ibadan North-West',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'Ibadan South-East',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'Ibadan South-West',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'Ibarapa Central',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'Ibarapa East',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'Ibarapa North',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'Ido',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'Irepo',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'Iseyin',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'Itesiwaju',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'Iwajowa',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'Kajola',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'Lagelu',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'Ogbomosho North',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'Ogbomosho South',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'Ogo Oluwa',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'Olorunsogo',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'Oluyole',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'Ona Ara',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'Orelope',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'Ori Ire',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'Oyo',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'Oyo East',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'Saki East',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'Saki West',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'Surulere, Oyo State',
                'state_id' => 31,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'Bokkos',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'Barkin Ladi',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'Bassa',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'Jos East',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'Jos North',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'Jos South',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'Kanam',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'Kanke',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'Langtang South',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'Langtang North',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'Mangu',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'Mikang',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'Pankshin',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'Qua\'an Pan',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'Riyom',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'Shendam',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'Wase',
                'state_id' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'Abua/Odual',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'Ahoada East',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'Ahoada West',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'Akuku-Toru',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'Andoni',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'Asari-Toru',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'Bonny',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'Degema',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'Eleme',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'Emuoha',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'Etche',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'Gokana',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'Ikwerre',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'Khana',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'Obio/Akpor',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'Ogba/Egbema/Ndoni',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'Ogu/Bolo',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'Okrika',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'Omuma',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'Opobo/Nkoro',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'Oyigbo',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'Port Harcourt',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'Tai',
                'state_id' => 33,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'Binji',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'Bodinga',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'Dange Shuni',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'Gada',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'Goronyo',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'Gudu',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'Gwadabawa',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'Illela',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'Isa',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'Kebbe',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'Kware',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'Rabah',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'Sabon Birni',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'Shagari',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'Silame',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'Sokoto North',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'Sokoto South',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'Tambuwal',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'Tangaza',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'Tureta',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'Wamako',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'Wurno',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'Yabo',
                'state_id' => 34,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'Ardo Kola',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'Bali',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'Donga',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'Gashaka',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'Gassol',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'Ibi',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'Jalingo',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'Karim Lamido',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'Kumi',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'Lau',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'Sardauna',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'Takum',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'Ussa',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'Wukari',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'Yorro',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'Zing',
                'state_id' => 35,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'Bade',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'Bursari',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'Damaturu',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'Fika',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'Fune',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'Geidam',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'Gujba',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'Gulani',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'Jakusko',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'Karasuwa',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'Machina',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'Nangere',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'Nguru',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'Potiskum',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'Tarmuwa',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'Yunusari',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'Yusufari',
                'state_id' => 36,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'Anka',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'Bakura',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'Birnin Magaji/Kiyaw',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'Bukkuyum',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'Bungudu',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'Gummi',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'Gusau',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'Kaura Namoda',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'Maradun',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'Maru',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'Shinkafi',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'Talata Mafara',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'Chafe',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'Zurmi',
                'state_id' => 37,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ),
        ));
        
        
    }
}