<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'dummy text of',
                'profession' => 'typesetting',
                'messages' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                'image' => '632dcc9da58cf1663945885.jpg',
                'status' => 1,
                'created_at' => '2022-09-23 15:11:25',
                'updated_at' => '2022-09-28 09:51:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'as opposed to using',
                'profession' => 'Using',
                'messages' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                'image' => '633418f6871761664358646.jpg',
                'status' => 1,
                'created_at' => '2022-09-28 09:50:46',
                'updated_at' => '2022-09-28 09:50:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'less normal distribution',
                'profession' => 'It is a long established',
                'messages' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                'image' => '63341931cc6d41664358705.jpg',
                'status' => 1,
                'created_at' => '2022-09-28 09:51:46',
                'updated_at' => '2022-09-28 09:51:46',
            ),
        ));
        
        
    }
}