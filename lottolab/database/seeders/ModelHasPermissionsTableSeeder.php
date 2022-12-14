<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModelHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('model_has_permissions')->delete();
        
        \DB::table('model_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'model_type' => 'App\\Models\\UserShop',
                'model_id' => 2,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'model_type' => 'App\\Models\\UserShop',
                'model_id' => 1,
            ),
            2 => 
            array (
                'permission_id' => 2,
                'model_type' => 'App\\Models\\UserShop',
                'model_id' => 2,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'model_type' => 'App\\Models\\UserShop',
                'model_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 3,
                'model_type' => 'App\\Models\\UserShop',
                'model_id' => 2,
            ),
        ));
        
        
    }
}