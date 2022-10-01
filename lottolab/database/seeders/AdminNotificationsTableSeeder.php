<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminNotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_notifications')->delete();
        
        \DB::table('admin_notifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'title' => 'New member registered',
                'read_status' => 0,
                'click_url' => '/admin/user/detail/1',
                'created_at' => '2022-08-11 15:42:58',
                'updated_at' => '2022-08-11 15:42:58',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'title' => 'New member registered',
                'read_status' => 0,
                'click_url' => '/admin/user/detail/2',
                'created_at' => '2022-08-11 15:44:03',
                'updated_at' => '2022-08-11 15:44:03',
            ),
        ));
        
        
    }
}