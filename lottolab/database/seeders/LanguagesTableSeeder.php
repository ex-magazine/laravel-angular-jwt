<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'English',
                'code' => 'en',
                'icon' => '5f15968db08911595250317.png',
                'text_align' => 0,
                'is_default' => 0,
                'created_at' => '2020-07-06 10:47:55',
                'updated_at' => '2021-05-18 12:37:23',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Hindi',
                'code' => 'hn',
                'icon' => NULL,
                'text_align' => 0,
                'is_default' => 0,
                'created_at' => '2020-12-29 09:20:07',
                'updated_at' => '2020-12-29 09:20:16',
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'Bangla',
                'code' => 'bn',
                'icon' => NULL,
                'text_align' => 0,
                'is_default' => 0,
                'created_at' => '2021-03-14 11:37:41',
                'updated_at' => '2021-05-12 12:34:06',
            ),
        ));
        
        
    }
}