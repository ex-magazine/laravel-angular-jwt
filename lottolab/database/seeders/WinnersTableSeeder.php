<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WinnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('winners')->delete();
        
        \DB::table('winners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ticket_id' => 1,
                'user_id' => 1,
                'phase_id' => 3,
                'ticket_number' => '1',
                'level' => 0,
                'win_bonus' => '21.00000000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}