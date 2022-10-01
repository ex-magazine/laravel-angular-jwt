<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BalancesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('balances')->delete();
        
        \DB::table('balances')->insert(array (
            0 => 
            array (
                'id' => 1,
                'shop_id' => 1,
                'admin_commission_rate' => 10.0,
                'total_earnings' => 0.0,
                'withdrawn_amount' => 0.0,
                'current_balance' => 0.0,
                'payment_info' => '{"bank": "Bank1", "name": "furniture shop", "email": "furniture@demo.com", "account": 1121213131414141}',
                'created_at' => '2021-06-27 01:54:32',
                'updated_at' => '2021-06-30 07:14:40',
            ),
            1 => 
            array (
                'id' => 4,
                'shop_id' => 6,
                'admin_commission_rate' => 10.0,
                'total_earnings' => 0.0,
                'withdrawn_amount' => 0.0,
                'current_balance' => 0.0,
                'payment_info' => '{"bank": "Bank6", "name": "Grocery Shop", "email": "grocery@demo.com", "account": 231321635465465}',
                'created_at' => '2021-06-27 20:48:49',
                'updated_at' => '2021-06-30 07:18:52',
            ),
            2 => 
            array (
                'id' => 5,
                'shop_id' => 5,
                'admin_commission_rate' => 10.0,
                'total_earnings' => 0.0,
                'withdrawn_amount' => 0.0,
                'current_balance' => 0.0,
                'payment_info' => '{"bank": "Bank5", "name": "Bakery Shop", "email": "bakery@demo.com", "account": 86453213548641330}',
                'created_at' => '2021-06-27 20:49:25',
                'updated_at' => '2021-06-30 07:23:05',
            ),
            3 => 
            array (
                'id' => 6,
                'shop_id' => 4,
                'admin_commission_rate' => 10.0,
                'total_earnings' => 0.0,
                'withdrawn_amount' => 0.0,
                'current_balance' => 0.0,
                'payment_info' => '{"bank": "Bank4", "name": "Makeup Shop", "email": "makeup@demo.com", "account": 5.6210303648761e18}',
                'created_at' => '2021-06-27 20:49:56',
                'updated_at' => '2021-06-30 07:17:44',
            ),
            4 => 
            array (
                'id' => 7,
                'shop_id' => 3,
                'admin_commission_rate' => 10.0,
                'total_earnings' => 0.0,
                'withdrawn_amount' => 0.0,
                'current_balance' => 0.0,
                'payment_info' => '{"bank": "Bank3", "name": "Bag Shop", "email": "bag@demo.com", "account": 632145987000364}',
                'created_at' => '2021-06-27 20:50:00',
                'updated_at' => '2021-06-30 07:23:46',
            ),
            5 => 
            array (
                'id' => 8,
                'shop_id' => 2,
                'admin_commission_rate' => 10.0,
                'total_earnings' => 0.0,
                'withdrawn_amount' => 0.0,
                'current_balance' => 0.0,
                'payment_info' => '{"bank": "Bank2", "name": "Clothing Shop", "email": "clothing@demo.com", "account": 1236521002454}',
                'created_at' => '2021-06-27 20:50:04',
                'updated_at' => '2021-06-30 07:19:31',
            ),
        ));
        
        
    }
}