<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super_admin',
                'guard_name' => 'api',
                'created_at' => '2021-06-26 21:13:00',
                'updated_at' => '2021-06-26 21:13:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'customer',
                'guard_name' => 'api',
                'created_at' => '2021-06-26 21:13:00',
                'updated_at' => '2021-06-26 21:13:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'store_owner',
                'guard_name' => 'api',
                'created_at' => '2021-06-26 21:13:00',
                'updated_at' => '2021-06-26 21:13:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'staff',
                'guard_name' => 'api',
                'created_at' => '2021-06-26 21:13:00',
                'updated_at' => '2021-06-26 21:13:00',
            ),
        ));
        
        
    }
}