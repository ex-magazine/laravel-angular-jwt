<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipping_classes')->delete();
        
        \DB::table('shipping_classes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Global',
                'amount' => 50.0,
                'is_global' => '1',
                'type' => 'fixed',
                'created_at' => '2021-03-25 06:27:49',
                'updated_at' => '2021-03-25 06:27:49',
            ),
        ));
        
        
    }
}