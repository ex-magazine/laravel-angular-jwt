<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_tag')->delete();
        
        
        
    }
}