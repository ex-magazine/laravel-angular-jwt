<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PricingPlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pricing_plans')->delete();
        
        \DB::table('pricing_plans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Lorem Ipsum',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'price' => '45.53',
                'duration' => 30,
                'status' => 1,
                'created_at' => '2022-09-25 12:06:55',
                'updated_at' => '2022-09-28 09:53:01',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'PageMaker',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'price' => '45.53',
                'duration' => 30,
                'status' => 1,
                'created_at' => '2022-09-25 12:08:24',
                'updated_at' => '2022-09-28 09:52:49',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Various',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'price' => '42.90',
                'duration' => 365,
                'status' => 1,
                'created_at' => '2022-09-25 12:09:18',
                'updated_at' => '2022-09-28 09:53:34',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Established',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                'price' => '44.30',
                'duration' => 365,
                'status' => 1,
                'created_at' => '2022-09-28 09:54:09',
                'updated_at' => '2022-09-28 09:54:09',
            ),
        ));
        
        
    }
}