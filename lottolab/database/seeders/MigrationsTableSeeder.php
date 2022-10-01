<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 208,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 209,
                'migration' => '2022_08_13_085258_ammelias_create_admin_settings_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 210,
                'migration' => '2022_08_13_085312_ammelias_create_blog_categories_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 211,
                'migration' => '2022_08_13_085325_ammelias_create_categories_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 212,
                'migration' => '2022_08_13_085330_ammelias_create_contacts_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 213,
                'migration' => '2022_08_13_085342_ammelias_create_gallery_categories_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 214,
                'migration' => '2022_08_13_085350_ammelias_create_menus_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 215,
                'migration' => '2022_08_13_085356_ammelias_create_oauth_auth_codes_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 216,
                'migration' => '2022_08_13_085404_ammelias_create_oauth_clients_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 217,
                'migration' => '2022_08_13_085414_ammelias_create_oauth_personal_access_clients_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 218,
                'migration' => '2022_08_13_085420_ammelias_create_oauth_refresh_tokens_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 219,
                'migration' => '2022_08_13_085426_ammelias_create_password_resets_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 220,
                'migration' => '2022_08_13_085438_ammelias_create_portfolio_categories_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 221,
                'migration' => '2022_08_13_085450_ammelias_create_pricing_plans_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 222,
                'migration' => '2022_08_13_085458_ammelias_create_services_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 223,
                'migration' => '2022_08_13_085503_ammelias_create_subscribers_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 224,
                'migration' => '2022_08_13_085508_ammelias_create_teams_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 225,
                'migration' => '2022_08_13_085518_ammelias_create_testimonials_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 226,
                'migration' => '2022_08_13_085531_ammelias_create_users_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 227,
                'migration' => '2022_08_13_085541_ammelias_create_user_verification_codes_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 228,
                'migration' => '2022_08_13_090430_ammelias_create_oauth_access_tokens_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 229,
                'migration' => '2022_08_13_092532_ammelias_create_blogs_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 230,
                'migration' => '2022_08_13_092645_ammelias_create_galleries_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 231,
                'migration' => '2022_08_13_092759_ammelias_create_portfolios_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 232,
                'migration' => '2022_08_13_092850_ammelias_create_pricing_features_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 233,
                'migration' => '2022_08_13_093841_ammelias_create_blog_comments_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 234,
                'migration' => '2022_08_13_094005_ammelias_create_user_blogs_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 235,
                'migration' => '2022_08_14_013308_smartend_create_ltm_translations_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 236,
                'migration' => '2022_08_14_013706_smartend_create_users_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 237,
                'migration' => '2022_08_14_013807_smartend_create_password_resets_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 238,
                'migration' => '2022_08_14_013904_smartend_create_failed_jobs_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 239,
                'migration' => '2022_08_14_014108_smartend_create_sessions_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 240,
                'migration' => '2022_08_14_020311_smartend_create_webmaster_settings_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 241,
                'migration' => '2022_08_14_020520_smartend_create_webmaster_sections_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'id' => 242,
                'migration' => '2022_08_14_020609_smartend_create_webmaster_banners_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'id' => 243,
                'migration' => '2022_08_14_020653_smartend_create_webmails_groups_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'id' => 244,
                'migration' => '2022_08_14_020735_smartend_create_webmails_files_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'id' => 245,
                'migration' => '2022_08_14_020827_smartend_create_webmails_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'id' => 246,
                'migration' => '2022_08_14_020913_smartend_create_topics_table',
                'batch' => 1,
            ),
            39 => 
            array (
                'id' => 247,
                'migration' => '2022_08_14_021000_smartend_create_settings_table',
                'batch' => 1,
            ),
            40 => 
            array (
                'id' => 248,
                'migration' => '2022_08_14_021042_smartend_create_sections_table',
                'batch' => 1,
            ),
            41 => 
            array (
                'id' => 249,
                'migration' => '2022_08_14_021216_smartend_create_photos_table',
                'batch' => 1,
            ),
            42 => 
            array (
                'id' => 250,
                'migration' => '2022_08_14_021304_smartend_create_permissions_table',
                'batch' => 1,
            ),
            43 => 
            array (
                'id' => 251,
                'migration' => '2022_08_14_021423_smartend_create_menus_table',
                'batch' => 1,
            ),
            44 => 
            array (
                'id' => 252,
                'migration' => '2022_08_14_021619_smartend_create_maps_table',
                'batch' => 1,
            ),
            45 => 
            array (
                'id' => 253,
                'migration' => '2022_08_14_021717_smartend_create_events_table',
                'batch' => 1,
            ),
            46 => 
            array (
                'id' => 254,
                'migration' => '2022_08_14_021808_smartend_create_countries_table',
                'batch' => 1,
            ),
            47 => 
            array (
                'id' => 255,
                'migration' => '2022_08_14_021903_smartend_create_contacts_groups_table',
                'batch' => 1,
            ),
            48 => 
            array (
                'id' => 256,
                'migration' => '2022_08_14_021954_smartend_create_contacts_table',
                'batch' => 1,
            ),
            49 => 
            array (
                'id' => 257,
                'migration' => '2022_08_14_022104_smartend_create_comments_table',
                'batch' => 1,
            ),
            50 => 
            array (
                'id' => 258,
                'migration' => '2022_08_14_022151_smartend_create_banners_table',
                'batch' => 1,
            ),
            51 => 
            array (
                'id' => 259,
                'migration' => '2022_08_14_022235_smartend_create_attach_files_table',
                'batch' => 1,
            ),
            52 => 
            array (
                'id' => 260,
                'migration' => '2022_08_14_022357_smartend_create_analytics_visitors_table',
                'batch' => 1,
            ),
            53 => 
            array (
                'id' => 261,
                'migration' => '2022_08_14_022446_smartend_create_analytics_pages_table',
                'batch' => 1,
            ),
            54 => 
            array (
                'id' => 262,
                'migration' => '2022_08_14_022526_smartend_create_related_topics_table',
                'batch' => 1,
            ),
            55 => 
            array (
                'id' => 263,
                'migration' => '2022_08_14_022610_smartend_create_topic_categories_table',
                'batch' => 1,
            ),
            56 => 
            array (
                'id' => 264,
                'migration' => '2022_08_14_022710_smartend_create_topic_fields_table',
                'batch' => 1,
            ),
            57 => 
            array (
                'id' => 265,
                'migration' => '2022_08_14_022754_smartend_create_webmaster_section_fields_table',
                'batch' => 1,
            ),
            58 => 
            array (
                'id' => 266,
                'migration' => '2022_08_14_022838_smartend_create_webmaster_languages_table',
                'batch' => 1,
            ),
            59 => 
            array (
                'id' => 267,
                'migration' => '2022_08_15_200000_add_two_factor_columns_to_users_table',
                'batch' => 1,
            ),
            60 => 
            array (
                'id' => 268,
                'migration' => '2022_08_21_084915_create_sessions_table',
                'batch' => 2,
            ),
            61 => 
            array (
                'id' => 269,
                'migration' => '2022_09_23_023101_create_categories_table',
                'batch' => 3,
            ),
            62 => 
            array (
                'id' => 270,
                'migration' => '2022_09_23_023130_create_teams_table',
                'batch' => 4,
            ),
            63 => 
            array (
                'id' => 271,
                'migration' => '2022_09_23_073037_create_admin_settings_table',
                'batch' => 5,
            ),
            64 => 
            array (
                'id' => 272,
                'migration' => '2022_09_23_080936_create_services_table',
                'batch' => 6,
            ),
            65 => 
            array (
                'id' => 273,
                'migration' => '2022_09_23_133035_create_portfolio_categories_table',
                'batch' => 7,
            ),
            66 => 
            array (
                'id' => 274,
                'migration' => '2022_09_23_133048_create_portfolios_table',
                'batch' => 8,
            ),
            67 => 
            array (
                'id' => 275,
                'migration' => '2022_09_23_144700_create_testimonials_table',
                'batch' => 9,
            ),
            68 => 
            array (
                'id' => 276,
                'migration' => '2022_09_23_144832_create_blog_categories_table',
                'batch' => 10,
            ),
            69 => 
            array (
                'id' => 277,
                'migration' => '2022_09_23_144850_create_blogs_table',
                'batch' => 11,
            ),
            70 => 
            array (
                'id' => 278,
                'migration' => '2022_09_23_145123_create_menus_table',
                'batch' => 12,
            ),
            71 => 
            array (
                'id' => 279,
                'migration' => '2022_09_23_145254_create_user_blogs_table',
                'batch' => 13,
            ),
            72 => 
            array (
                'id' => 280,
                'migration' => '2022_09_23_150019_add_slug_at_blog_table',
                'batch' => 14,
            ),
            73 => 
            array (
                'id' => 281,
                'migration' => '2022_09_23_150346_add_status_at_subscriber_table',
                'batch' => 15,
            ),
            74 => 
            array (
                'id' => 282,
                'migration' => '2022_09_23_152130_create_gallery_categories_table',
                'batch' => 16,
            ),
            75 => 
            array (
                'id' => 283,
                'migration' => '2022_09_23_152137_create_galleries_table',
                'batch' => 17,
            ),
            76 => 
            array (
                'id' => 284,
                'migration' => '2022_09_23_152540_create_pricing_plans_table',
                'batch' => 18,
            ),
            77 => 
            array (
                'id' => 285,
                'migration' => '2022_09_23_153204_create_pricing_features_table',
                'batch' => 19,
            ),
            78 => 
            array (
                'id' => 286,
                'migration' => '2022_09_24_092458_alter_users_table_add_more',
                'batch' => 20,
            ),
            79 => 
            array (
                'id' => 287,
                'migration' => '2016_06_01_000001_create_oauth_auth_codes_table',
                'batch' => 21,
            ),
            80 => 
            array (
                'id' => 288,
                'migration' => '2016_06_01_000002_create_oauth_access_tokens_table',
                'batch' => 22,
            ),
            81 => 
            array (
                'id' => 289,
                'migration' => '2016_06_01_000003_create_oauth_refresh_tokens_table',
                'batch' => 23,
            ),
            82 => 
            array (
                'id' => 290,
                'migration' => '2016_06_01_000004_create_oauth_clients_table',
                'batch' => 24,
            ),
            83 => 
            array (
                'id' => 291,
                'migration' => '2016_06_01_000005_create_oauth_personal_access_clients_table',
                'batch' => 25,
            ),
            84 => 
            array (
                'id' => 292,
                'migration' => '2018_12_26_075334_create_user_verification_codes_table',
                'batch' => 26,
            ),
            85 => 
            array (
                'id' => 293,
                'migration' => '2022_09_25_062816_create_blog_comments_table',
                'batch' => 27,
            ),
            86 => 
            array (
                'id' => 294,
                'migration' => '2022_09_25_115727_create_contacts_table',
                'batch' => 28,
            ),
        ));
        
        
    }
}