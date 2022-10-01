<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'options' => '{"logo": {"id": "862", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/860/PickBazar.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/860/conversions/PickBazar-thumbnail.jpg"}, "currency": "USD", "taxClass": "1", "siteTitle": "Pickbazar", "siteSubtitle": "Your next ecommerce", "shippingClass": "1"}',
                'created_at' => '2021-03-24 08:30:18',
                'updated_at' => '2021-03-27 04:12:25',
            ),
        ));
        
        
    }
}