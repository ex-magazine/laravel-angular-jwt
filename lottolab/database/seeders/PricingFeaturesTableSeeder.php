<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PricingFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pricing_features')->delete();
        
        \DB::table('pricing_features')->insert(array (
            0 => 
            array (
                'id' => 9,
                'plan_id' => 2,
                'title' => 'OK',
                'created_at' => '2022-09-28 09:52:49',
                'updated_at' => '2022-09-28 09:52:49',
            ),
            1 => 
            array (
                'id' => 10,
                'plan_id' => 2,
                'title' => 'OK 2',
                'created_at' => '2022-09-28 09:52:49',
                'updated_at' => '2022-09-28 09:52:49',
            ),
            2 => 
            array (
                'id' => 11,
                'plan_id' => 1,
                'title' => 'OK',
                'created_at' => '2022-09-28 09:53:01',
                'updated_at' => '2022-09-28 09:53:01',
            ),
            3 => 
            array (
                'id' => 12,
                'plan_id' => 1,
                'title' => 'OK 2',
                'created_at' => '2022-09-28 09:53:01',
                'updated_at' => '2022-09-28 09:53:01',
            ),
            4 => 
            array (
                'id' => 13,
                'plan_id' => 3,
                'title' => 'OK 2',
                'created_at' => '2022-09-28 09:53:34',
                'updated_at' => '2022-09-28 09:53:34',
            ),
            5 => 
            array (
                'id' => 14,
                'plan_id' => 3,
                'title' => 'OK 6',
                'created_at' => '2022-09-28 09:53:34',
                'updated_at' => '2022-09-28 09:53:34',
            ),
            6 => 
            array (
                'id' => 15,
                'plan_id' => 4,
                'title' => 'Lorem Ipsum',
                'created_at' => '2022-09-28 09:54:09',
                'updated_at' => '2022-09-28 09:54:09',
            ),
            7 => 
            array (
                'id' => 16,
                'plan_id' => 4,
                'title' => 'Lorem',
                'created_at' => '2022-09-28 09:54:09',
                'updated_at' => '2022-09-28 09:54:09',
            ),
        ));
        
        
    }
}