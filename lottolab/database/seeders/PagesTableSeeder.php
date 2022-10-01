<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home',
                'slug' => 'home',
                'tempname' => 'templates.basic.',
                'secs' => '["lottery","how_work","statistics","cta","feature","faq","recent_winners","testimonial","payments"]',
                'is_default' => 1,
                'created_at' => '2020-07-11 13:23:58',
                'updated_at' => '2021-06-12 19:19:57',
            ),
            1 => 
            array (
                'id' => 15,
                'name' => 'About',
                'slug' => 'about',
                'tempname' => 'templates.basic.',
                'secs' => '["about","feature","testimonial"]',
                'is_default' => 0,
                'created_at' => '2021-06-12 20:03:40',
                'updated_at' => '2021-06-12 20:04:45',
            ),
        ));
        
        
    }
}