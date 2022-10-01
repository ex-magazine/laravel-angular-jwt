<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolios')->delete();
        
        \DB::table('portfolios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 2,
                'title' => 'Many desktop publishing packages',
                'image' => '|63344a845caa4.jpg|63344a84caffc.jpg|',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'experience' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'client' => 'Various versions',
                'date' => '2022-09-21',
                'demo' => 'https://expressmagazine.net/',
                'status' => 1,
                'created_at' => '2022-09-28 13:22:13',
                'updated_at' => '2022-09-28 13:22:13',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 4,
                'title' => 'Many desktop publishing',
                'image' => '|63344ae7882dd.jpg|63344ae7c4ceb.jpg|',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'experience' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'client' => 'Many desktop',
                'date' => '2022-09-21',
                'demo' => 'https://expressmagazine.net/',
                'status' => 1,
                'created_at' => '2022-09-28 13:23:52',
                'updated_at' => '2022-09-28 13:23:52',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 5,
                'title' => 'Aldus PageMaker',
                'image' => '|63344c3b0226f.jpg|63344c3b4a580.jpg|',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'experience' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'client' => 'Various versions',
                'date' => '2022-09-21',
                'demo' => 'https://expressmagazine.net/',
                'status' => 1,
                'created_at' => '2022-09-28 13:29:31',
                'updated_at' => '2022-09-28 13:29:45',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 5,
                'title' => 'Versions of Lorem Ipsum',
                'image' => '|63344c6953a84.jpg|63344c69be904.jpg|',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'experience' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'client' => 'Various versions',
                'date' => '2022-09-21',
                'demo' => 'https://expressmagazine.net/',
                'status' => 1,
                'created_at' => '2022-09-28 13:30:18',
                'updated_at' => '2022-09-28 13:30:18',
            ),
        ));
        
        
    }
}