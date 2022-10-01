<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_status')->delete();
        
        \DB::table('order_status')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Order Received',
                'serial' => 1,
                'color' => '#23b848',
                'created_at' => '2021-03-08 14:33:52',
                'updated_at' => '2021-03-08 14:34:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Order Processing',
                'serial' => 2,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:01:42',
                'updated_at' => '2021-03-13 08:01:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ready To Dispatch',
                'serial' => 3,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:02:15',
                'updated_at' => '2021-03-13 08:02:15',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Order Dispatched',
                'serial' => 4,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:02:49',
                'updated_at' => '2021-03-13 08:02:49',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'At Local Facility',
                'serial' => 5,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:03:15',
                'updated_at' => '2021-03-13 08:03:15',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Out For Delivery',
                'serial' => 6,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:04:13',
                'updated_at' => '2021-03-13 08:04:13',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Delivered',
                'serial' => 11,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:04:26',
                'updated_at' => '2021-03-13 08:09:03',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Failed to collect payment',
                'serial' => 8,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:04:57',
                'updated_at' => '2021-03-13 08:04:57',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'falied to contact Consignee',
                'serial' => 9,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:05:18',
                'updated_at' => '2021-03-13 08:05:18',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Shipment Refused by Consignee',
                'serial' => 10,
                'color' => '#d87b64',
                'created_at' => '2021-03-13 08:05:35',
                'updated_at' => '2021-03-13 08:05:35',
            ),
        ));
        
        
    }
}