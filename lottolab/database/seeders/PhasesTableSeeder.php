<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('phases')->delete();
        
        \DB::table('phases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'phase_number' => 1,
                'lottery_id' => 2,
                'start' => '2022-08-01 12:00:00',
                'end' => '2022-11-30 12:00:00',
                'quantity' => 325,
                'available' => 323,
                'salled' => 2,
                'draw_status' => 1,
                'at_dr' => 0,
                'status' => 1,
                'created_at' => '2022-08-07 09:39:07',
                'updated_at' => '2022-08-13 08:28:11',
            ),
            1 => 
            array (
                'id' => 2,
                'phase_number' => 1,
                'lottery_id' => 1,
                'start' => '2022-08-03 12:00:00',
                'end' => '2023-01-05 12:00:00',
                'quantity' => 333,
                'available' => 333,
                'salled' => 0,
                'draw_status' => 0,
                'at_dr' => 0,
                'status' => 1,
                'created_at' => '2022-08-07 09:39:26',
                'updated_at' => '2022-08-07 09:39:26',
            ),
            2 => 
            array (
                'id' => 3,
                'phase_number' => 1,
                'lottery_id' => 5,
                'start' => '2022-06-22 12:00:00',
                'end' => '2023-05-26 12:00:00',
                'quantity' => 2,
                'available' => 2,
                'salled' => 0,
                'draw_status' => 0,
                'at_dr' => 1,
                'status' => 1,
                'created_at' => '2022-08-12 13:41:47',
                'updated_at' => '2022-08-12 13:41:47',
            ),
            3 => 
            array (
                'id' => 4,
                'phase_number' => 1,
                'lottery_id' => 4,
                'start' => '2022-08-04 12:00:00',
                'end' => '2023-01-28 12:00:00',
                'quantity' => 44,
                'available' => 44,
                'salled' => 0,
                'draw_status' => 0,
                'at_dr' => 0,
                'status' => 1,
                'created_at' => '2022-08-12 13:42:18',
                'updated_at' => '2022-08-12 13:42:18',
            ),
            4 => 
            array (
                'id' => 5,
                'phase_number' => 1,
                'lottery_id' => 3,
                'start' => '2022-08-11 12:00:00',
                'end' => '2022-08-31 12:00:00',
                'quantity' => 2,
                'available' => 0,
                'salled' => 2,
                'draw_status' => 1,
                'at_dr' => 1,
                'status' => 1,
                'created_at' => '2022-08-12 13:42:51',
                'updated_at' => '2022-08-13 08:26:27',
            ),
        ));
        
        
    }
}