<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_profiles')->delete();
        
        \DB::table('user_profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'avatar' => '{"id": "883", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/881/aatik-tasneem-7omHUGhhmZ0-unsplash%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/881/conversions/aatik-tasneem-7omHUGhhmZ0-unsplash%402x-thumbnail.jpg"}',
                'bio' => 'This is the store owner and we have 6 shops under our banner. We are running all the shops to give our customers hassle-free service and quality products. Our goal is to provide best possible customer service and products for our clients',
                'socials' => NULL,
                'contact' => '12365141641631',
                'customer_id' => 1,
                'created_at' => '2021-06-30 04:20:29',
                'updated_at' => '2021-06-30 07:13:53',
            ),
        ));
        
        
    }
}