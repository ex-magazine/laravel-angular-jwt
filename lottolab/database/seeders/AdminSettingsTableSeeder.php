<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_settings')->delete();
        
        \DB::table('admin_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'app_title',
                'value' => 'Khatdecor LLC',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2022-09-25 13:16:42',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'logo',
                'value' => '6333fd5d6951c1664351581.png',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2022-09-28 07:53:01',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'login_logo',
                'value' => '6333fd5dc0d001664351581.png',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2022-09-28 07:53:01',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'favicon',
                'value' => '6333fd5db27a01664351581.jpg',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2022-09-28 07:53:01',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'copyright_text',
                'value' => 'Copyrights @2020 Khatdecor LLC',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2022-09-25 13:16:42',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'lang',
                'value' => 'en',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2020-01-07 07:51:25',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'primary_email',
                'value' => 'Khatdecor@email.com',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2022-09-25 13:16:42',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'contact_number',
                'value' => '',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2020-01-07 07:51:25',
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'user_registration',
                'value' => '1',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2020-01-07 07:51:25',
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'login_text',
                'value' => 'Ammelias',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2022-09-25 13:16:42',
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'signup_text',
                'value' => 'Khatdecor LLC',
                'created_at' => '2020-01-07 07:51:25',
                'updated_at' => '2022-09-25 13:16:42',
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'about_banner_title',
                'value' => 'Ready to solve problems and eager to',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-28 09:44:36',
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'about_title',
                'value' => 'SparkIT For Your Business Solution',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => 'about_video_id',
                'value' => 'Fe que todo llega...',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => 'about_section_title1',
                'value' => 'Our History 7 z',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            15 => 
            array (
                'id' => 16,
                'slug' => 'about_section_des1',
                'value' => 'The making of WigWag. Exposing the secret behind the complex story behind the brand we all know.',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            16 => 
            array (
                'id' => 17,
                'slug' => 'about_section_title2',
                'value' => 'Our Principles',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            17 => 
            array (
                'id' => 18,
                'slug' => 'about_section_des2',
                'value' => 'Ready to solve problems and eager to apply new ideas. This is the brave territory where we come together, and it’s hard to get there if you’re not having fun..',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            18 => 
            array (
                'id' => 19,
                'slug' => 'about_section_title3',
                'value' => 'Business success',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            19 => 
            array (
                'id' => 20,
                'slug' => 'about_section_des3',
                'value' => 'Ready to solve problems and eager to apply new ideas. This is the brave territory where we come together, and it’s hard to get there if you’re not having fun..',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            20 => 
            array (
                'id' => 21,
                'slug' => 'about_section_title4',
                'value' => 'Digital Solution',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            21 => 
            array (
                'id' => 22,
                'slug' => 'about_section_des4',
                'value' => 'Ready to solve problems and eager to apply new ideas. This is the brave territory where we come together, and it’s hard to get there if you’re not having fun..',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            22 => 
            array (
                'id' => 23,
                'slug' => 'about_sub_title',
                'value' => 'Know About Ammelias',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            23 => 
            array (
                'id' => 24,
                'slug' => 'about_description',
                'value' => 'Building your online presence helps attract more potential clients. Our integrated marketing team will work directly with you to understand what makes your business unique, and provide more qualified leads to achieve success in your industry',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            24 => 
            array (
                'id' => 25,
                'slug' => 'about_last_section_header_title',
                'value' => 'About Digital agency',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            25 => 
            array (
                'id' => 26,
                'slug' => 'about_last_section_title',
                'value' => 'Attract Customers With Content And SEO',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            26 => 
            array (
                'id' => 27,
                'slug' => 'about_last_section_sub_title',
                'value' => 'How Can Help Your Business?',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            27 => 
            array (
                'id' => 28,
                'slug' => 'about_last_description',
                'value' => 'Building your online presence helps attract more potential clients. Our integrated marketing team will work directly with you to understand what makes your business unique, and provide more qualified leads to achieve success in your industry',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-25 12:52:15',
            ),
            28 => 
            array (
                'id' => 29,
                'slug' => 'about_right_image',
                'value' => '63341784de55f1664358276.jpg',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-28 09:44:37',
            ),
            29 => 
            array (
                'id' => 30,
                'slug' => 'about_banner_image',
                'value' => '6334178530ee21664358277.jpg',
                'created_at' => '2022-09-25 12:52:15',
                'updated_at' => '2022-09-28 09:44:37',
            ),
            30 => 
            array (
                'id' => 31,
                'slug' => 'about_left_image',
                'value' => '633417d6776221664358358.jpg',
                'created_at' => '2022-09-25 12:52:16',
                'updated_at' => '2022-09-28 09:45:58',
            ),
            31 => 
            array (
                'id' => 32,
                'slug' => 'home_banner_title',
                'value' => 'Making it look like readable English',
                'created_at' => '2022-09-25 12:53:35',
                'updated_at' => '2022-09-28 08:03:07',
            ),
            32 => 
            array (
                'id' => 33,
                'slug' => 'home_banner_sub_title',
                'value' => 'Lorem Ipsum is that it has a more-or-less',
                'created_at' => '2022-09-25 12:53:35',
                'updated_at' => '2022-09-28 08:03:07',
            ),
            33 => 
            array (
                'id' => 34,
                'slug' => 'home_section_title2',
                'value' => 'Test Second Section Title',
                'created_at' => '2022-09-25 12:53:35',
                'updated_at' => '2022-09-28 08:03:07',
            ),
            34 => 
            array (
                'id' => 35,
                'slug' => 'home_banner_des',
                'value' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                'created_at' => '2022-09-25 12:53:35',
                'updated_at' => '2022-09-28 08:03:29',
            ),
            35 => 
            array (
                'id' => 36,
                'slug' => 'home_section_des2',
            'value' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2022-09-25 12:53:35',
                'updated_at' => '2022-09-28 08:03:07',
            ),
            36 => 
            array (
                'id' => 37,
                'slug' => 'home_testimonial_title',
                'value' => 'It is a long established',
                'created_at' => '2022-09-25 12:53:35',
                'updated_at' => '2022-09-28 08:03:07',
            ),
            37 => 
            array (
                'id' => 38,
                'slug' => 'home_blog_title',
                'value' => 'Test Blog Section Title',
                'created_at' => '2022-09-25 12:53:35',
                'updated_at' => '2022-09-28 08:03:07',
            ),
            38 => 
            array (
                'id' => 39,
                'slug' => 'home_banner_image',
                'value' => '633400df3b8431664352479.jpg',
                'created_at' => '2022-09-25 12:53:35',
                'updated_at' => '2022-09-28 08:07:59',
            ),
            39 => 
            array (
                'id' => 40,
                'slug' => 'home_second_section_image',
                'value' => '633400df82e5e1664352479.jpg',
                'created_at' => '2022-09-25 12:53:36',
                'updated_at' => '2022-09-28 08:08:00',
            ),
            40 => 
            array (
                'id' => 41,
                'slug' => 'service_banner_title',
                'value' => 'Our Main',
                'created_at' => '2022-09-25 12:53:52',
                'updated_at' => '2022-09-25 12:53:52',
            ),
            41 => 
            array (
                'id' => 42,
                'slug' => 'service_banner_des',
                'value' => 'Let us put your website consumers at moment in time they are searching your products services.',
                'created_at' => '2022-09-25 12:53:52',
                'updated_at' => '2022-09-25 12:53:52',
            ),
            42 => 
            array (
                'id' => 43,
                'slug' => 'service_banner_image',
                'value' => '63304f60f3d661664110432.jpg',
                'created_at' => '2022-09-25 12:53:53',
                'updated_at' => '2022-09-25 12:53:53',
            ),
            43 => 
            array (
                'id' => 44,
                'slug' => 'team_banner_title',
                'value' => 'Let us put your website',
                'created_at' => '2022-09-25 12:55:17',
                'updated_at' => '2022-09-25 12:55:17',
            ),
            44 => 
            array (
                'id' => 45,
                'slug' => 'team_banner_des',
                'value' => 'Let us put your website consumers at moment in time they are searching your products services.',
                'created_at' => '2022-09-25 12:55:17',
                'updated_at' => '2022-09-25 12:55:17',
            ),
            45 => 
            array (
                'id' => 46,
                'slug' => 'team_banner_image',
                'value' => '63304fb5921cf1664110517.jpg',
                'created_at' => '2022-09-25 12:55:17',
                'updated_at' => '2022-09-25 12:55:17',
            ),
            46 => 
            array (
                'id' => 47,
                'slug' => 'portfolio_banner_title',
                'value' => 'they are searching your products services.',
                'created_at' => '2022-09-25 12:55:34',
                'updated_at' => '2022-09-25 12:55:34',
            ),
            47 => 
            array (
                'id' => 48,
                'slug' => 'portfolio_banner_des',
                'value' => 'consumers at moment in time they are searching your products services.',
                'created_at' => '2022-09-25 12:55:34',
                'updated_at' => '2022-09-25 12:55:34',
            ),
            48 => 
            array (
                'id' => 49,
                'slug' => 'portfolio_banner_image',
                'value' => '63304fc690f7f1664110534.jpg',
                'created_at' => '2022-09-25 12:55:34',
                'updated_at' => '2022-09-25 12:55:34',
            ),
            49 => 
            array (
                'id' => 50,
                'slug' => 'gallery_banner_title',
                'value' => 'consumers at moment in time',
                'created_at' => '2022-09-25 12:55:46',
                'updated_at' => '2022-09-25 12:55:46',
            ),
            50 => 
            array (
                'id' => 51,
                'slug' => 'gallery_banner_des',
                'value' => 'consumers at moment in time',
                'created_at' => '2022-09-25 12:55:46',
                'updated_at' => '2022-09-25 12:55:46',
            ),
            51 => 
            array (
                'id' => 52,
                'slug' => 'gallery_banner_image',
                'value' => '63304fd2835391664110546.jpg',
                'created_at' => '2022-09-25 12:55:46',
                'updated_at' => '2022-09-25 12:55:46',
            ),
            52 => 
            array (
                'id' => 53,
                'slug' => 'achievement_title',
                'value' => 'We Help To Increase Sales By Improving SEO.',
                'created_at' => '2022-09-25 12:56:32',
                'updated_at' => '2022-09-25 12:56:32',
            ),
            53 => 
            array (
                'id' => 54,
                'slug' => 'achievement_sub_title',
                'value' => 'Know About Ammelias',
                'created_at' => '2022-09-25 12:56:32',
                'updated_at' => '2022-09-25 12:56:32',
            ),
            54 => 
            array (
                'id' => 55,
                'slug' => 'achievement_des',
                'value' => 'Nam quis laoreet nisl. Vivamus nec quam magna.interdum etus blandit hendrerit ornare. Sed id leo nulla.',
                'created_at' => '2022-09-25 12:56:32',
                'updated_at' => '2022-09-25 12:56:32',
            ),
            55 => 
            array (
                'id' => 56,
                'slug' => 'achievement_list1_title',
                'value' => 'Projects',
                'created_at' => '2022-09-25 12:56:32',
                'updated_at' => '2022-09-25 12:56:32',
            ),
            56 => 
            array (
                'id' => 57,
                'slug' => 'achievement_list2_title',
                'value' => 'Cups of Coffee',
                'created_at' => '2022-09-25 12:56:32',
                'updated_at' => '2022-09-25 12:56:32',
            ),
            57 => 
            array (
                'id' => 58,
                'slug' => 'achievement_list3_title',
                'value' => 'Projects',
                'created_at' => '2022-09-25 12:56:32',
                'updated_at' => '2022-09-25 12:56:32',
            ),
            58 => 
            array (
                'id' => 59,
                'slug' => 'achievement_list4_title',
                'value' => 'Customer',
                'created_at' => '2022-09-25 12:56:33',
                'updated_at' => '2022-09-25 12:56:33',
            ),
            59 => 
            array (
                'id' => 60,
                'slug' => 'achievement_list5_title',
                'value' => 'Clients',
                'created_at' => '2022-09-25 12:56:33',
                'updated_at' => '2022-09-25 12:56:33',
            ),
            60 => 
            array (
                'id' => 61,
                'slug' => 'achievement_list5_count',
                'value' => '8',
                'created_at' => '2022-09-25 12:56:33',
                'updated_at' => '2022-09-25 12:56:33',
            ),
            61 => 
            array (
                'id' => 62,
                'slug' => 'achievement_list4_count',
                'value' => '11',
                'created_at' => '2022-09-25 12:56:33',
                'updated_at' => '2022-09-25 12:56:33',
            ),
            62 => 
            array (
                'id' => 63,
                'slug' => 'achievement_list3_count',
                'value' => '32',
                'created_at' => '2022-09-25 12:56:33',
                'updated_at' => '2022-09-25 12:56:33',
            ),
            63 => 
            array (
                'id' => 64,
                'slug' => 'achievement_list2_count',
                'value' => '11',
                'created_at' => '2022-09-25 12:56:33',
                'updated_at' => '2022-09-25 12:56:33',
            ),
            64 => 
            array (
                'id' => 65,
                'slug' => 'achievement_list1_count',
                'value' => '32',
                'created_at' => '2022-09-25 12:56:33',
                'updated_at' => '2022-09-25 12:56:33',
            ),
            65 => 
            array (
                'id' => 66,
                'slug' => 'work_header_title',
                'value' => 'Say hello!',
                'created_at' => '2022-09-25 12:57:00',
                'updated_at' => '2022-09-28 13:34:16',
            ),
            66 => 
            array (
                'id' => 67,
                'slug' => 'work_title',
                'value' => 'Work inquiry',
                'created_at' => '2022-09-25 12:57:00',
                'updated_at' => '2022-09-25 12:57:00',
            ),
            67 => 
            array (
                'id' => 68,
                'slug' => 'work_sub_title',
                'value' => 'Is to deliver awesome for our clients. By awesome, this should be a tangible impact on their business',
                'created_at' => '2022-09-25 12:57:00',
                'updated_at' => '2022-09-25 12:57:00',
            ),
            68 => 
            array (
                'id' => 69,
                'slug' => 'work_des',
                'value' => 'We exist as a partner to businesses, crafting strategies that are aligned with our client’s business goals.',
                'created_at' => '2022-09-25 12:57:00',
                'updated_at' => '2022-09-25 12:57:00',
            ),
            69 => 
            array (
                'id' => 70,
                'slug' => 'work_image',
                'value' => '63344ec6723cf1664372422.jpg',
                'created_at' => '2022-09-25 12:57:00',
                'updated_at' => '2022-09-28 13:40:22',
            ),
            70 => 
            array (
                'id' => 71,
                'slug' => 'address',
                'value' => '61 Arlington St. Suite 100 Boston, CA 01118, USA',
                'created_at' => '2022-09-25 13:16:42',
                'updated_at' => '2022-09-25 13:16:42',
            ),
            71 => 
            array (
                'id' => 72,
                'slug' => 'front_base_color',
                'value' => '#c69901',
                'created_at' => '2022-09-25 13:16:42',
                'updated_at' => '2022-09-28 08:18:39',
            ),
            72 => 
            array (
                'id' => 73,
                'slug' => 'google_capcha_site_key',
                'value' => '6LeDrckUAAAAAP2PISECcnuOO8agpcPgB2PXVAPb',
                'created_at' => '2022-09-25 13:16:42',
                'updated_at' => '2022-09-25 13:16:42',
            ),
            73 => 
            array (
                'id' => 74,
                'slug' => 'privacy_policy',
                'value' => 'Best Health Ketom Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Este es una prueba',
                'created_at' => '2022-09-25 13:18:20',
                'updated_at' => '2022-09-25 13:18:20',
            ),
            74 => 
            array (
                'id' => 75,
                'slug' => 'terms_conditions',
                'value' => 'Terms And Conditions:
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.-prueba',
                'created_at' => '2022-09-25 13:18:20',
                'updated_at' => '2022-09-25 13:18:20',
            ),
        ));
        
        
    }
}