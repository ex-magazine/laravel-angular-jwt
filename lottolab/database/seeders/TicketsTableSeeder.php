<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tickets')->delete();
        
        \DB::table('tickets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lottery_id' => 3,
                'phase_id' => 5,
                'user_id' => 1,
                'ticket_number' => '3988795227',
                'total_price' => '48.00000000',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'lottery_id' => 3,
                'phase_id' => 5,
                'user_id' => 1,
                'ticket_number' => '6057274072',
                'total_price' => '48.00000000',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'lottery_id' => 2,
                'phase_id' => 1,
                'user_id' => 1,
                'ticket_number' => '2596592640',
                'total_price' => '500.00000000',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'lottery_id' => 2,
                'phase_id' => 1,
                'user_id' => 1,
                'ticket_number' => '1733683663',
                'total_price' => '500.00000000',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}