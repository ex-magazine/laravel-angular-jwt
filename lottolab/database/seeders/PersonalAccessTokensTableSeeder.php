<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tokenable_type' => 'App\\Models\\UserShop',
                'tokenable_id' => 2,
                'name' => 'auth_token',
                'token' => '20df32c221f34eadf0f30d4ae5b6709eac23d27aac5d4803dc31131f8819ee70',
                'abilities' => '["*"]',
                'last_used_at' => '2022-09-28 23:48:53',
                'created_at' => '2022-09-28 23:44:47',
                'updated_at' => '2022-09-28 23:48:53',
            ),
        ));
        
        
    }
}