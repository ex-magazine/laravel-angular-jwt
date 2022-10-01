<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_values')->delete();
        
        \DB::table('attribute_values')->insert(array (
            0 => 
            array (
                'id' => 8,
                'attribute_id' => 3,
                'value' => 'Red',
                'meta' => '#ce1f6a',
                'created_at' => '2021-05-09 09:10:56',
                'updated_at' => '2021-05-09 11:53:16',
            ),
            1 => 
            array (
                'id' => 9,
                'attribute_id' => 3,
                'value' => 'Blue',
                'meta' => '#344fa1',
                'created_at' => '2021-05-09 09:11:20',
                'updated_at' => '2021-05-09 11:52:35',
            ),
            2 => 
            array (
                'id' => 10,
                'attribute_id' => 3,
                'value' => 'White',
                'meta' => '#e1e5ea',
                'created_at' => '2021-05-09 09:11:35',
                'updated_at' => '2021-05-09 11:58:16',
            ),
            3 => 
            array (
                'id' => 11,
                'attribute_id' => 4,
                'value' => 'S',
                'meta' => NULL,
                'created_at' => '2021-05-09 09:11:43',
                'updated_at' => '2021-05-09 09:11:43',
            ),
            4 => 
            array (
                'id' => 12,
                'attribute_id' => 4,
                'value' => 'M',
                'meta' => NULL,
                'created_at' => '2021-05-09 09:11:50',
                'updated_at' => '2021-05-09 09:11:50',
            ),
            5 => 
            array (
                'id' => 13,
                'attribute_id' => 4,
                'value' => 'L',
                'meta' => NULL,
                'created_at' => '2021-05-09 10:45:30',
                'updated_at' => '2021-05-09 10:45:30',
            ),
            6 => 
            array (
                'id' => 14,
                'attribute_id' => 4,
                'value' => 'XL',
                'meta' => NULL,
                'created_at' => '2021-05-09 10:45:39',
                'updated_at' => '2021-05-09 10:45:39',
            ),
        ));
        
        
    }
}