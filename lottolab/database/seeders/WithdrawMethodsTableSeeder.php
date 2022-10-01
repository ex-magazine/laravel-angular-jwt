<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WithdrawMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('withdraw_methods')->delete();
        
        
        
    }
}