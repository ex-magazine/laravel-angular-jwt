<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserBlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_blogs')->delete();
        
        \DB::table('user_blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ip' => '127.0.0.1',
                'blog_id' => 1,
                'status' => 1,
                'created_at' => '2022-09-24 17:03:17',
                'updated_at' => '2022-09-24 23:03:17',
            ),
            1 => 
            array (
                'id' => 2,
                'ip' => '127.0.0.1',
                'blog_id' => 3,
                'status' => 1,
                'created_at' => '2022-09-24 12:39:56',
                'updated_at' => '2022-09-18 12:39:56',
            ),
            2 => 
            array (
                'id' => 3,
                'ip' => '127.0.0.1',
                'blog_id' => 2,
                'status' => 1,
                'created_at' => '2022-09-21 12:39:56',
                'updated_at' => '2022-09-20 12:39:56',
            ),
        ));
        
        
    }
}