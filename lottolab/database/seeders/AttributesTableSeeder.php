<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'id' => 3,
                'slug' => 'color',
                'name' => 'Color',
                'shop_id' => 2,
                'created_at' => '2021-05-09 09:10:31',
                'updated_at' => '2021-05-09 09:10:31',
            ),
            1 => 
            array (
                'id' => 4,
                'slug' => 'size',
                'name' => 'Size',
                'shop_id' => 2,
                'created_at' => '2021-05-09 09:10:40',
                'updated_at' => '2021-05-09 09:10:40',
            ),
        ));
        
        
    }
}