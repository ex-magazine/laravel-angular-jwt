<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'EID2',
                'description' => NULL,
                'image' => '{"id": "874", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/872/2%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/872/conversions/2%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 2.0,
                'active_from' => '2021-03-10T21:48:15.784Z',
                'expire_at' => '2021-07-27T21:48:15.000Z',
                'created_at' => '2021-03-10 14:49:46',
                'updated_at' => '2021-03-27 22:46:30',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'FOO',
                'description' => NULL,
                'image' => '{"id": "873", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/871/8%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/871/conversions/8%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 8.0,
                'active_from' => '2021-03-27T05:33:22.336Z',
                'expire_at' => '2021-05-26T05:33:22.000Z',
                'created_at' => '2021-03-26 22:34:30',
                'updated_at' => '2021-03-27 22:46:09',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'EID12',
                'description' => NULL,
                'image' => '{"id": "872", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/870/12%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/870/conversions/12%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 12.0,
                'active_from' => '2021-03-27T20:48:28.601Z',
                'expire_at' => '2021-05-26T20:48:28.000Z',
                'created_at' => '2021-03-27 13:49:30',
                'updated_at' => '2021-03-27 22:50:05',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'HELLO15',
                'description' => NULL,
                'image' => '{"id": "871", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/869/15%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/869/conversions/15%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 15.0,
                'active_from' => '2021-03-27T20:48:28.601Z',
                'expire_at' => '2021-04-23T20:48:28.000Z',
                'created_at' => '2021-03-27 13:53:35',
                'updated_at' => '2021-03-27 22:49:55',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'BAZAR18',
                'description' => NULL,
                'image' => '{"id": "870", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/868/18%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/868/conversions/18%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 18.0,
                'active_from' => '2021-03-27T20:55:49.616Z',
                'expire_at' => '2021-04-15T20:55:49.000Z',
                'created_at' => '2021-03-27 13:56:23',
                'updated_at' => '2021-03-27 22:49:44',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'BAZAR20',
                'description' => NULL,
                'image' => '{"id": "869", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/867/20%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/867/conversions/20%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 20.0,
                'active_from' => '2021-03-27T20:55:49.616Z',
                'expire_at' => '2022-04-26T20:55:49.000Z',
                'created_at' => '2021-03-27 14:00:04',
                'updated_at' => '2021-03-27 22:49:29',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'BAZAR10',
                'description' => NULL,
                'image' => '{"id": "875", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/873/10%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/873/conversions/10%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 10.0,
                'active_from' => '2021-03-28T05:46:42.514Z',
                'expire_at' => '2021-05-26T05:46:42.000Z',
                'created_at' => '2021-03-27 22:47:25',
                'updated_at' => '2021-03-27 22:49:14',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'OFF6',
                'description' => NULL,
                'image' => '{"id": "876", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/874/6%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/874/conversions/6%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 6.0,
                'active_from' => '2021-03-28T05:46:42.514Z',
                'expire_at' => '2021-07-14T05:46:42.000Z',
                'created_at' => '2021-03-27 22:47:55',
                'updated_at' => '2021-03-27 22:47:55',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '5OFF',
                'description' => NULL,
                'image' => '{"id": "877", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/875/5%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/875/conversions/5%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 5.0,
                'active_from' => '2021-03-28T05:46:42.514Z',
                'expire_at' => '2021-06-23T05:46:42.000Z',
                'created_at' => '2021-03-27 22:48:16',
                'updated_at' => '2021-03-27 22:48:16',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '4OFF',
                'description' => NULL,
                'image' => '{"id": "878", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/876/4%402x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/876/conversions/4%402x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 4.0,
                'active_from' => '2021-03-28T05:46:42.514Z',
                'expire_at' => '2021-03-28T05:46:42.514Z',
                'created_at' => '2021-03-27 22:48:39',
                'updated_at' => '2021-03-27 22:48:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}