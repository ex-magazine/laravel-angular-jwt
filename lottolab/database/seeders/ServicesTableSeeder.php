<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'injected humour and the like',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'image' => '632d6df7d4abc1663921655.jpg',
                'status' => 1,
                'created_at' => '2022-09-23 08:27:35',
                'updated_at' => '2022-09-23 08:27:35',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'injected humour and the like 3',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'image' => '632d6e81660f51663921793.jpg',
                'status' => 1,
                'created_at' => '2022-09-23 08:29:53',
                'updated_at' => '2022-09-25 12:13:00',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'use Lorem Ipsum as their',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'image' => '633045be96cf91664107966.jpg',
                'status' => 1,
                'created_at' => '2022-09-25 12:12:46',
                'updated_at' => '2022-09-25 12:12:46',
            ),
        ));
        
        
    }
}