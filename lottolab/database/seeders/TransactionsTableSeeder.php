<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'amount' => '65555.00000000',
                'charge' => '0.00000000',
                'post_balance' => '65555.00000000',
                'trx_type' => '+',
                'trx' => 'YKOYPD526QEP',
                'details' => 'Added Balance Via Admin',
                'created_at' => '2022-08-13 08:25:39',
                'updated_at' => '2022-08-13 08:25:39',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'amount' => '48.00000000',
                'charge' => '0.00000000',
                'post_balance' => '65507.00000000',
                'trx_type' => '-',
                'trx' => 'JYFA7O598PHO',
                'details' => 'Payment from user balance for 1 ticket of lottery Energy Football',
                'created_at' => '2022-08-13 08:25:54',
                'updated_at' => '2022-08-13 08:25:54',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'amount' => '48.00000000',
                'charge' => '0.00000000',
                'post_balance' => '65459.00000000',
                'trx_type' => '-',
                'trx' => 'BOB8SAOFUJXG',
                'details' => 'Payment from user balance for 1 ticket of lottery Energy Football',
                'created_at' => '2022-08-13 08:26:27',
                'updated_at' => '2022-08-13 08:26:27',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'amount' => '500.00000000',
                'charge' => '0.00000000',
                'post_balance' => '64959.00000000',
                'trx_type' => '-',
                'trx' => 'VSSSY3MB16JW',
                'details' => 'Payment from user balance for 1 ticket of lottery Energy Ball',
                'created_at' => '2022-08-13 08:28:00',
                'updated_at' => '2022-08-13 08:28:00',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'amount' => '500.00000000',
                'charge' => '0.00000000',
                'post_balance' => '64459.00000000',
                'trx_type' => '-',
                'trx' => '7Q42HCX8D7F4',
                'details' => 'Payment from user balance for 1 ticket of lottery Energy Ball',
                'created_at' => '2022-08-13 08:28:11',
                'updated_at' => '2022-08-13 08:28:11',
            ),
        ));
        
        
    }
}