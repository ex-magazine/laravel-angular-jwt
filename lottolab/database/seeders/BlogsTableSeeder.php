<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Lorem Ipsum passages, and more',
                'slug' => 'lorem-ipsum-passages,-and-more',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => '632ed4b8668901664013496.jpg',
                'status' => 1,
                'created_at' => '2022-09-24 09:58:16',
                'updated_at' => '2022-09-24 09:58:16',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'PageMaker including versions of Lorem Ipsum.',
                'slug' => 'pagemaker-including-versions-of-lorem-ipsum.',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => '632ed6a73a4291664013991.jpg',
                'status' => 1,
                'created_at' => '2022-09-24 10:06:31',
                'updated_at' => '2022-09-24 10:06:31',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'and more recently with desktop publishing software like Aldus PageMaker',
                'slug' => 'and-more-recently-with-desktop-publishing-software-like-aldus-pagemaker',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => '632ed6be343821664014014.jpg',
                'status' => 1,
                'created_at' => '2022-09-24 10:06:54',
                'updated_at' => '2022-09-24 10:06:54',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'PageMaker including versions of Lorem Ipsum',
                'slug' => 'pagemaker-including-versions-of-lorem-ipsum',
            'description' => '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;"><br></span><br></p>',
                'image' => '632ffeef84a221664089839.jpg',
                'status' => 1,
                'created_at' => '2022-09-25 06:23:17',
                'updated_at' => '2022-09-25 07:10:39',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'opposed to using \'Content here, content here\', making',
                'slug' => 'opposed-to-using-\'content-here,-content-here\',-making',
            'description' => '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;"><br></span><br></p>',
                'image' => '632ffefa4dfdd1664089850.jpg',
                'status' => 1,
                'created_at' => '2022-09-25 06:24:28',
                'updated_at' => '2022-09-25 07:10:50',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'PageMaker including versions of Lorem Ipsum',
                'slug' => 'pagemaker-including-versions-of-lorem-ipsum-1',
                'description' => '<p>PageMaker including versions of Lorem Ipsum<br></p>',
                'image' => '633007cb6714b1664092107.jpg',
                'status' => 1,
                'created_at' => '2022-09-25 07:48:27',
                'updated_at' => '2022-09-25 07:48:27',
            ),
        ));
        
        
    }
}