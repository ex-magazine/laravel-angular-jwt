<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserVerificationCodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_verification_codes')->delete();
        
        \DB::table('user_verification_codes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'type' => 1,
                'code' => '357342',
                'expired_at' => '2022-10-05',
                'status' => 0,
                'created_at' => '2022-09-25 05:35:44',
                'updated_at' => '2022-09-25 05:35:44',
            ),
        ));
        
        
    }
}