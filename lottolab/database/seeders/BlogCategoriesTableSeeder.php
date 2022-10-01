<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_categories')->delete();
        
        \DB::table('blog_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Lipsum Cate',
                'status' => 1,
                'created_at' => '2022-09-24 09:51:59',
                'updated_at' => '2022-09-24 09:51:59',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Lipsum Cate 2',
                'status' => 1,
                'created_at' => '2022-09-24 09:53:36',
                'updated_at' => '2022-09-24 09:53:36',
            ),
        ));
        
        
    }
}