<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_comments')->delete();
        
        \DB::table('blog_comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'blog_id' => 3,
                'name' => 'Tommy',
                'email' => 'thuy.tranthanh.bd@gmail.com',
                'comment' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                'status' => 1,
                'created_at' => '2022-09-28 09:56:30',
                'updated_at' => '2022-09-28 14:09:34',
            ),
            1 => 
            array (
                'id' => 2,
                'blog_id' => 3,
                'name' => 'Tommy',
                'email' => 'thuy.tranthanh.bd@gmail.com',
            'comment' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'status' => 1,
                'created_at' => '2022-09-28 14:11:05',
                'updated_at' => '2022-09-28 14:11:34',
            ),
        ));
        
        
    }
}