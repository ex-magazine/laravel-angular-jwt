<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscribersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscribers')->delete();
        
        \DB::table('subscribers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'thuy.tranthanh.bd@gmail.com',
                'status' => 1,
                'created_at' => '2022-08-07 09:41:07',
                'updated_at' => '2022-08-07 09:41:07',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'tranthanhbinhmathdephcm@gmail.com',
                'status' => 1,
                'created_at' => '2022-08-07 09:41:24',
                'updated_at' => '2022-08-07 09:41:24',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'admin@expressmagazine.net',
                'status' => 1,
                'created_at' => '2022-08-07 09:41:27',
                'updated_at' => '2022-08-07 09:41:27',
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'asaleotestf@gmail.com',
                'status' => 1,
                'created_at' => '2022-08-07 10:34:38',
                'updated_at' => '2022-08-07 10:34:38',
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'thuy.tranthanh.bd.001@gmail.com',
                'status' => 1,
                'created_at' => '2022-08-14 10:36:32',
                'updated_at' => '2022-08-14 10:36:32',
            ),
            5 => 
            array (
                'id' => 6,
                'email' => 'thuymath@hotmail.com.vn',
                'status' => 1,
                'created_at' => '2022-09-28 14:12:31',
                'updated_at' => '2022-09-28 14:12:31',
            ),
            6 => 
            array (
                'id' => 7,
                'email' => 'thuy.tranthanh.bd01@gmail.com',
                'status' => 1,
                'created_at' => '2022-09-28 14:12:51',
                'updated_at' => '2022-09-28 14:12:51',
            ),
            7 => 
            array (
                'id' => 8,
                'email' => 'thuy.tranthanh.bd02@gmail.com',
                'status' => 1,
                'created_at' => '2022-09-28 14:13:06',
                'updated_at' => '2022-09-28 14:13:06',
            ),
            8 => 
            array (
                'id' => 9,
                'email' => 'thuy.tranthanh.bd03@gmail.com',
                'status' => 1,
                'created_at' => '2022-09-28 14:13:21',
                'updated_at' => '2022-09-28 14:13:21',
            ),
            9 => 
            array (
                'id' => 10,
                'email' => 'thuy.tranthanh.bd04@gmail.com',
                'status' => 1,
                'created_at' => '2022-09-28 14:13:27',
                'updated_at' => '2022-09-28 14:13:27',
            ),
            10 => 
            array (
                'id' => 11,
                'email' => 'thuy.tranthanh.bd05@gmail.com',
                'status' => 1,
                'created_at' => '2022-09-28 14:13:34',
                'updated_at' => '2022-09-28 14:13:34',
            ),
            11 => 
            array (
                'id' => 12,
                'email' => 'thuy.tranthanh.bd06@gmail.com',
                'status' => 1,
                'created_at' => '2022-09-28 14:13:39',
                'updated_at' => '2022-09-28 14:13:39',
            ),
            12 => 
            array (
                'id' => 13,
                'email' => 'store_owner@demo.com',
                'status' => 1,
                'created_at' => '2022-10-01 02:01:06',
                'updated_at' => '2022-10-01 02:01:06',
            ),
        ));
        
        
    }
}