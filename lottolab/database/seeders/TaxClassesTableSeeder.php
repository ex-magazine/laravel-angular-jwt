<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tax_classes')->delete();
        
        \DB::table('tax_classes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country' => NULL,
                'state' => NULL,
                'zip' => NULL,
                'city' => NULL,
                'rate' => 2.0,
                'name' => 'Global',
                'is_global' => NULL,
                'priority' => NULL,
                'on_shipping' => 1,
                'created_at' => '2021-03-25 06:26:57',
                'updated_at' => '2021-03-25 09:07:18',
            ),
        ));
        
        
    }
}