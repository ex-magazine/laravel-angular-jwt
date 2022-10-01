<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommissionLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('commission_logs')->delete();
        
        
        
    }
}