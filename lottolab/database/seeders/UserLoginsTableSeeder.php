<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserLoginsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_logins')->delete();
        
        \DB::table('user_logins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2022-08-11 15:42:59',
                'updated_at' => '2022-08-11 15:42:59',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2022-08-11 15:44:03',
                'updated_at' => '2022-08-11 15:44:03',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2022-08-13 08:23:54',
                'updated_at' => '2022-08-13 08:23:54',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2022-08-14 01:09:43',
                'updated_at' => '2022-08-14 01:09:43',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2022-08-14 02:53:37',
                'updated_at' => '2022-08-14 02:53:37',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2022-09-22 13:46:32',
                'updated_at' => '2022-09-22 13:46:32',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2022-09-24 11:02:44',
                'updated_at' => '2022-09-24 11:02:44',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'user_ip' => '127.0.0.1',
                'city' => '',
                'country' => '',
                'country_code' => '',
                'longitude' => '',
                'latitude' => '',
                'browser' => 'Chrome',
                'os' => 'Windows 10',
                'created_at' => '2022-09-27 14:52:39',
                'updated_at' => '2022-09-27 14:52:39',
            ),
        ));
        
        
    }
}