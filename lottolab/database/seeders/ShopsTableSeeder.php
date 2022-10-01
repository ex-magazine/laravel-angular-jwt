<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'id' => 1,
                'owner_id' => 1,
                'name' => 'Furniture Shop',
                'slug' => 'furniture-shop',
                'description' => 'The furniture shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => '{"id": "885", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/Untitled-6.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/conversions/Untitled-6-thumbnail.jpg"}',
                'logo' => '{"id": "884", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/Furniture.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/conversions/Furniture-thumbnail.jpg"}',
                'is_active' => 1,
                'address' => '{"zip": "08753", "city": "East Dover", "state": "New Jersey", "country": "USA", "street_address": "588  Finwood Road"}',
                'settings' => '{"contact": "21342121221", "socials": [{"url": "https://www.instagram.com/", "icon": "InstagramIcon"}], "website": "https://redq.io/", "location": {"lat": 40.757272, "lng": -74.089508, "city": "Kearny", "state": "NJ", "country": "United States", "formattedAddress": "New Jersey Turnpike, Kearny, NJ, USA"}}',
                'created_at' => '2021-06-26 20:46:14',
                'updated_at' => '2021-07-08 02:27:14',
            ),
            1 => 
            array (
                'id' => 2,
                'owner_id' => 1,
                'name' => 'Clothing Shop',
                'slug' => 'clothing-shop',
                'description' => 'The clothing shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => '{"id": "886", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/884/Untitled-4.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/884/conversions/Untitled-4-thumbnail.jpg"}',
                'logo' => '{"id": "896", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/894/fashion.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/894/conversions/fashion-thumbnail.jpg"}',
                'is_active' => 1,
                'address' => '{"zip": "62656", "city": "Lincoln", "state": "Illinois", "country": "USA", "street_address": "4885  Spring Street"}',
                'settings' => '{"contact": "212901921221", "socials": [{"url": "https://www.facebook.com/", "icon": "FacebookIcon"}], "website": "https://redq.io/", "location": {"lat": 40.1576691, "lng": -89.38529779999999, "city": "Lincoln", "state": "IL", "country": "United States", "formattedAddress": "IL-121, Lincoln, IL, USA"}}',
                'created_at' => '2021-06-26 20:47:10',
                'updated_at' => '2021-07-08 02:26:24',
            ),
            2 => 
            array (
                'id' => 3,
                'owner_id' => 1,
                'name' => 'Bags Shop',
                'slug' => 'bags-shop',
                'description' => 'The Bag shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => '{"id": "889", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/887/Untitled-1-%281%29.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/887/conversions/Untitled-1-%281%29-thumbnail.jpg"}',
                'logo' => '{"id": "888", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/886/Backpack.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/886/conversions/Backpack-thumbnail.jpg"}',
                'is_active' => 1,
                'address' => '{"zip": "35203", "city": "Michigan", "state": "Alabama", "country": "USA", "street_address": "1740  Bedford Street"}',
                'settings' => '{"contact": "01920192102", "socials": [{"url": "https://www.facebook.com/", "icon": "FacebookIcon"}, {"url": "https://www.instagram.com/", "icon": "InstagramIcon"}], "website": "https://redq.io/", "location": {"lat": -37.1374024, "lng": 174.9685924, "zip": "2579", "city": "Ramarama", "state": "Auckland", "country": "New Zealand", "formattedAddress": "Waharau Lane, Ramarama 2579, New Zealand"}}',
                'created_at' => '2021-06-26 20:47:23',
                'updated_at' => '2021-07-08 02:25:34',
            ),
            3 => 
            array (
                'id' => 4,
                'owner_id' => 1,
                'name' => 'Makeup Shop',
                'slug' => 'makeup-shop',
                'description' => 'The makeup shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => '{"id": "890", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/888/Untitled-3.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/888/conversions/Untitled-3-thumbnail.jpg"}',
                'logo' => '{"id": "891", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/889/Makeup.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/889/conversions/Makeup-thumbnail.jpg"}',
                'is_active' => 1,
                'address' => '{"zip": "70001", "city": "Metairie", "state": "Louisiana", "country": "USA", "street_address": "2960  Rose Avenue"}',
                'settings' => '{"contact": "092281221223", "socials": [{"url": "https://www.instagram.com/", "icon": "InstagramIcon"}, {"url": "https://www.twitter.com/", "icon": "TwitterIcon"}], "website": "https://redq.io/", "location": {"lat": 51.5176117, "lng": -0.210149, "state": "England", "country": "United Kingdom", "formattedAddress": "Ladbroke Grove, London, UK"}}',
                'created_at' => '2021-06-26 20:47:49',
                'updated_at' => '2021-07-08 02:24:28',
            ),
            4 => 
            array (
                'id' => 5,
                'owner_id' => 1,
                'name' => 'Bakery Shop',
                'slug' => 'bakery-shop',
                'description' => 'The bakery shop is the best shop around the city. This is being run under the store owner and our aim is to provide fresh and quality product and hassle free customer service.',
                'cover_image' => '{"id": "895", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/893/Untitled-5.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/893/conversions/Untitled-5-thumbnail.jpg"}',
                'logo' => '{"id": "892", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/890/bakery.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/890/conversions/bakery-thumbnail.jpg"}',
                'is_active' => 1,
                'address' => '{"zip": "27801", "city": "Rocky Mount", "state": "Carolina", "country": "USA", "street_address": "4422  Fort Street"}',
                'settings' => '{"contact": "12902232121", "socials": [{"url": "https://www.facebook.com/", "icon": "FacebookIcon"}, {"url": "https://www.instagram.com/", "icon": "InstagramIcon"}], "website": "https://redq.io/", "location": {"lat": 40.7315115, "lng": -73.99582730000002, "city": "New York", "state": "NY", "country": "United States", "formattedAddress": "Washington Mews, New York, NY, USA"}}',
                'created_at' => '2021-06-26 20:48:11',
                'updated_at' => '2021-07-08 02:23:37',
            ),
            5 => 
            array (
                'id' => 6,
                'owner_id' => 1,
                'name' => 'Grocery Shop',
                'slug' => 'grocery-shop',
                'description' => 'The grocery shop is the best shop around the city. This is being run under the store owner and our aim is to provide fresh and quality product and hassle free customer service.',
                'cover_image' => '{"id": "894", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/892/Untitled-2.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/892/conversions/Untitled-2-thumbnail.jpg"}',
                'logo' => '{"id": "893", "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/891/Group-36321.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/891/conversions/Group-36321-thumbnail.jpg"}',
                'is_active' => 1,
                'address' => '{"zip": "61032", "city": "Freeport", "state": "Illinois", "country": "USA", "street_address": "1986  Spinnaker Lane"}',
                'settings' => '{"contact": "018927525111", "socials": [{"url": "https://www.facebook.com/", "icon": "FacebookIcon"}, {"url": "https://www.instagram.com/", "icon": "InstagramIcon"}, {"url": "https://www.twitter.com/", "icon": "TwitterIcon"}], "website": "https://redq.io/", "location": {"lat": 38.9032325, "lng": -77.0211068, "city": "Washington", "state": "DC", "country": "United States", "formattedAddress": "New York Ave NW, Washington, DC, USA"}}',
                'created_at' => '2021-06-26 20:48:23',
                'updated_at' => '2021-07-08 02:22:38',
            ),
        ));
        
        
    }
}