<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Grocery',
                'slug' => 'grocery',
                'icon' => 'FruitsVegetable',
                'image' => NULL,
                'created_at' => '2021-03-08 00:18:25',
                'updated_at' => '2021-03-08 00:18:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bakery',
                'slug' => 'bakery',
                'icon' => 'Bakery',
                'image' => NULL,
                'created_at' => '2021-03-08 00:18:46',
                'updated_at' => '2021-03-08 00:18:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Makeup',
                'slug' => 'makeup',
                'icon' => 'FacialCare',
                'image' => NULL,
                'created_at' => '2021-03-08 00:19:12',
                'updated_at' => '2021-03-08 00:19:12',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Bags',
                'slug' => 'bags',
                'icon' => 'Handbag',
                'image' => NULL,
                'created_at' => '2021-03-08 00:19:28',
                'updated_at' => '2021-03-08 00:19:28',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Clothing',
                'slug' => 'clothing',
                'icon' => 'DressIcon',
                'image' => NULL,
                'created_at' => '2021-03-08 00:19:38',
                'updated_at' => '2021-03-08 00:19:38',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Furniture',
                'slug' => 'furniture',
                'icon' => 'FurnitureIcon',
                'image' => NULL,
                'created_at' => '2021-03-08 00:19:49',
                'updated_at' => '2021-03-08 00:19:49',
            ),
        ));
        
        
    }
}