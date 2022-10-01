<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_categories')->delete();
        
        \DB::table('portfolio_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lorem Ipsum is simply',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => '632dbb0d947d11663941389.jpg',
                'status' => 1,
                'created_at' => '2022-09-23 13:56:29',
                'updated_at' => '2022-09-23 13:56:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Lorem Ipsum is simply',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => '632dbb754436d1663941493.jpg',
                'status' => 1,
                'created_at' => '2022-09-23 13:58:13',
                'updated_at' => '2022-09-23 13:58:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Lorem Ipsum passages',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => '632dbb8ca3bad1663941516.jpg',
                'status' => 1,
                'created_at' => '2022-09-23 13:58:36',
                'updated_at' => '2022-09-23 13:58:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Opposed to using',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                'image' => '63341ae5de4d91664359141.jpg',
                'status' => 1,
                'created_at' => '2022-09-28 09:59:02',
                'updated_at' => '2022-09-28 09:59:02',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Distracted by the readable',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                'image' => '63341b02ade931664359170.jpg',
                'status' => 1,
                'created_at' => '2022-09-28 09:59:30',
                'updated_at' => '2022-09-28 09:59:30',
            ),
        ));
        
        
    }
}