<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'use Lorem Ipsum as their',
                'category_id' => 1,
                'image' => '633045540f6f01664107860.jpg',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2022-09-25 12:11:00',
                'updated_at' => '2022-09-25 12:11:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'page editors now use Lorem',
                'category_id' => 2,
                'image' => '63304572b0dbb1664107890.jpg',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2022-09-25 12:11:30',
                'updated_at' => '2022-09-25 12:11:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Various versions have',
                'category_id' => 1,
                'image' => '63344f2dab3f91664372525.jpg',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2022-09-28 13:42:05',
                'updated_at' => '2022-09-28 13:42:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lorem Ipsum as their default',
                'category_id' => 1,
                'image' => '63344f50b638d1664372560.jpg',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2022-09-28 13:42:41',
                'updated_at' => '2022-09-28 13:42:41',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'For \'lorem ipsum',
                'category_id' => 1,
                'image' => '63344facedae01664372652.jpg',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2022-09-28 13:44:13',
                'updated_at' => '2022-09-28 13:44:13',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Still in their infancy',
                'category_id' => 1,
                'image' => '63344fc458dfa1664372676.jpg',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2022-09-28 13:44:36',
                'updated_at' => '2022-09-28 13:44:36',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'A page when looking',
                'category_id' => 2,
                'image' => '63344fdc6d5d21664372700.jpg',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2022-09-28 13:45:00',
                'updated_at' => '2022-09-28 13:45:00',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'established fact',
                'category_id' => 1,
                'image' => '63344ff396e481664372723.jpg',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2022-09-28 13:45:23',
                'updated_at' => '2022-09-28 13:45:23',
            ),
        ));
        
        
    }
}