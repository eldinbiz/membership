<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('packages')->delete();
        
        \DB::table('packages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Basic',
                'month_duration' => 1,
                'price' => '50000.00',
                'deleted_at' => NULL,
                'created_at' => '2022-11-23 03:28:03',
                'updated_at' => '2022-11-23 07:33:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Middle',
                'month_duration' => 1,
                'price' => '130000.00',
                'deleted_at' => NULL,
                'created_at' => '2022-11-23 07:43:40',
                'updated_at' => '2022-11-23 07:43:40',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Advance',
                'month_duration' => 1,
                'price' => '250000.00',
                'deleted_at' => NULL,
                'created_at' => '2022-11-23 07:59:13',
                'updated_at' => '2022-11-23 07:59:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'asdf',
                'month_duration' => 1,
                'price' => '0.00',
                'deleted_at' => '2022-11-23 08:06:17',
                'created_at' => '2022-11-23 08:05:48',
                'updated_at' => '2022-11-23 08:06:17',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'asdgf',
                'month_duration' => 1,
                'price' => '0.00',
                'deleted_at' => '2022-11-23 08:06:35',
                'created_at' => '2022-11-23 08:06:27',
                'updated_at' => '2022-11-23 08:06:35',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'package 1',
                'month_duration' => 3,
                'price' => '100000.00',
                'deleted_at' => '2022-11-23 08:08:29',
                'created_at' => '2022-11-23 08:08:18',
                'updated_at' => '2022-11-23 08:08:29',
            ),
        ));
        
        
    }
}