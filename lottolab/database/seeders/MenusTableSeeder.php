<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Home',
                'slug' => 'home',
                'component' => 'HomePage',
                'data_order' => 0,
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2022-09-24 13:56:55',
                'updated_at' => '2022-09-24 13:56:55',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'About Us',
                'slug' => 'about-us',
                'component' => 'AboutUs',
                'data_order' => 0,
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2022-09-28 07:56:57',
                'updated_at' => '2022-09-28 07:56:57',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Services',
                'slug' => 'services',
                'component' => 'Services',
                'data_order' => 0,
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2022-09-28 07:57:18',
                'updated_at' => '2022-09-28 07:57:18',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Teams',
                'slug' => 'teams',
                'component' => 'TeamPage',
                'data_order' => 0,
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2022-09-28 07:57:32',
                'updated_at' => '2022-09-28 07:57:32',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Portfolio',
                'slug' => 'portfolio',
                'component' => 'Portfolio',
                'data_order' => 0,
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2022-09-28 07:57:51',
                'updated_at' => '2022-09-28 07:57:51',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Gallery',
                'slug' => 'gallery',
                'component' => 'Gallery',
                'data_order' => 0,
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2022-09-28 07:58:05',
                'updated_at' => '2022-09-28 07:58:05',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Blogs',
                'slug' => 'blogs',
                'component' => 'BlogLists',
                'data_order' => 0,
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2022-09-28 07:58:18',
                'updated_at' => '2022-09-28 07:58:18',
            ),
        ));
        
        
    }
}