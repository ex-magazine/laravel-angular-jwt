<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'thuy.tranthanh.bd@gmail.com',
                'username' => 'admin',
                'email_verified_at' => NULL,
                'image' => '63303fd201acf1664106450.jpg',
                'password' => '$2y$10$2qcOUKrDIUqyyCklvHp7IO8fGNcJ1gAXtxouTn1isZPHu6H8CfHPq',
                'created_at' => NULL,
                'updated_at' => '2022-09-25 11:47:30',
            ),
        ));
        
        
    }
}