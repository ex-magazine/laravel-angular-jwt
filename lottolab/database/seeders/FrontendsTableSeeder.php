<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrontendsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontends')->delete();
        
        \DB::table('frontends')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_keys' => 'seo.data',
                'data_values' => '{"seo_image":"1","keywords":["LottoLab","Lottery Platform","Online Lottery","Live Lotter"],"description":"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit","social_title":"LottoLab","social_description":"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff","image":"60c9fa144e3321623849492.jpg"}',
                'views' => 0,
                'created_at' => '2020-07-05 06:42:52',
                'updated_at' => '2021-06-16 19:48:12',
            ),
            1 => 
            array (
                'id' => 24,
                'data_keys' => 'about.content',
                'data_values' => '{"has_image":"1","title":"About Us","content":"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, ex. Similique harum facilis animi id, eligendi voluptate repellendus mollitia quidem odit eius! Optio, perspiciatis. Voluptates aliquam vel similique eveniet soluta.\\u00a0<div><br \\/><\\/div><div>\\u00a0Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, a! Praesentium ipsa expedita deleniti beatae rem, eos qui nihil earum architecto consequuntur dicta inventore corrupti vel. Nam quas dolores consectetur quam quibusdam ipsum id, quaerat ea harum non. Impedit harum laboriosam eum nobis cumque ipsum corrupti quaerat ad reiciendis ipsam. Optio, perspiciatis. Voluptates aliquam vel similique eveniet soluta consectetur quam quibusdam ipsum. Impedit harum laboriosam eum nobis cumque ipsum corrupti quaerat ad reiciendis ipsam.<\\/div>","image":"60c4b8f1002c51623505137.jpg"}',
                'views' => 0,
                'created_at' => '2020-10-28 07:51:20',
                'updated_at' => '2021-06-12 20:08:57',
            ),
            2 => 
            array (
                'id' => 25,
                'data_keys' => 'blog.content',
                'data_values' => '{"heading":"Our Latest News","sub_heading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse voluptatum eaque earum quos quia Id aspernatur ratione, voluptas nulla rerum laudantium neque ipsam eaque"}',
                'views' => 0,
                'created_at' => '2020-10-28 07:51:34',
                'updated_at' => '2021-06-14 17:43:11',
            ),
            3 => 
            array (
                'id' => 27,
                'data_keys' => 'contact_us.content',
                'data_values' => '{"title":"Auctor gravida vestibulu","short_details":"55f55","email_address":"5555f","contact_details":"5555h","contact_number":"5555a","latitude":"5555h","longitude":"5555s","website_footer":"5555qqq"}',
                'views' => 0,
                'created_at' => '2020-10-28 07:59:19',
                'updated_at' => '2020-11-01 11:51:54',
            ),
            4 => 
            array (
                'id' => 28,
                'data_keys' => 'counter.content',
                'data_values' => '{"heading":"Latest News","sub_heading":"Register New Account"}',
                'views' => 0,
                'created_at' => '2020-10-28 08:04:02',
                'updated_at' => '2020-10-28 08:04:02',
            ),
            5 => 
            array (
                'id' => 31,
                'data_keys' => 'social_icon.element',
                'data_values' => '{"title":"Facebook","social_icon":"<i class=\\"las la-expand\\"><\\/i>","url":"https:\\/\\/www.google.com\\/"}',
                'views' => 0,
                'created_at' => '2020-11-12 11:07:30',
                'updated_at' => '2021-05-12 12:56:59',
            ),
            6 => 
            array (
                'id' => 33,
                'data_keys' => 'feature.content',
                'data_values' => '{"heading":"Why You Trust Our Service"}',
                'views' => 0,
                'created_at' => '2021-01-04 06:40:54',
                'updated_at' => '2021-06-12 18:01:52',
            ),
            7 => 
            array (
                'id' => 35,
                'data_keys' => 'service.element',
                'data_values' => '{"trx_type":"withdraw","service_icon":"<i class=\\"las la-highlighter\\"><\\/i>","title":"asdfasdf","description":"asdfasdfasdfasdf"}',
                'views' => 0,
                'created_at' => '2021-03-06 08:12:10',
                'updated_at' => '2021-03-06 08:12:10',
            ),
            8 => 
            array (
                'id' => 36,
                'data_keys' => 'service.content',
                'data_values' => '{"trx_type":"withdraw","heading":"asdf fffff","sub_heading":"asdf asdfasdf"}',
                'views' => 0,
                'created_at' => '2021-03-06 08:27:34',
                'updated_at' => '2021-03-06 09:19:39',
            ),
            9 => 
            array (
                'id' => 39,
                'data_keys' => 'banner.content',
                'data_values' => '{"has_image":"1","heading":"Play lottery and get chance to get reward","sub_heading":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quibusdam eveniet similique magni accusantium soluta totam incidunt quam quis architecto amet.","button":"Get Started","button_link":"login","background_image":"60c4850e83a371623491854.jpg"}',
                'views' => 0,
                'created_at' => '2021-05-02 13:09:30',
                'updated_at' => '2021-06-12 16:29:05',
            ),
            10 => 
            array (
                'id' => 41,
                'data_keys' => 'cookie.data',
                'data_values' => '{"link":"#","description":"<font color=\\"#ffffff\\" face=\\"Exo, sans-serif\\"><span style=\\"font-size: 18px;\\">We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.<\\/span><\\/font><br>","status":1}',
                'views' => 0,
                'created_at' => '2020-07-05 06:42:52',
                'updated_at' => '2021-06-06 16:43:37',
            ),
            11 => 
            array (
                'id' => 42,
                'data_keys' => 'footer.content',
                'data_values' => '{"copyright":"Copyright \\u00a9 2021 All Right Reserved"}',
                'views' => 0,
                'created_at' => '2021-06-12 15:45:11',
                'updated_at' => '2021-06-12 15:45:11',
            ),
            12 => 
            array (
                'id' => 43,
                'data_keys' => 'footer.element',
                'data_values' => '{"social_icon":"<i class=\\"lab la-instagram\\"><\\/i>","social_link":"www.instagram.com"}',
                'views' => 0,
                'created_at' => '2021-06-12 15:45:27',
                'updated_at' => '2021-06-12 15:45:27',
            ),
            13 => 
            array (
                'id' => 44,
                'data_keys' => 'footer.element',
                'data_values' => '{"social_icon":"<i class=\\"lab la-linkedin-in\\"><\\/i>","social_link":"https:\\/\\/www.linkedin.com"}',
                'views' => 0,
                'created_at' => '2021-06-12 15:46:01',
                'updated_at' => '2021-06-12 15:46:01',
            ),
            14 => 
            array (
                'id' => 45,
                'data_keys' => 'footer.element',
                'data_values' => '{"social_icon":"<i class=\\"lab la-twitter\\"><\\/i>","social_link":"https:\\/\\/www.twitter.com"}',
                'views' => 0,
                'created_at' => '2021-06-12 15:46:25',
                'updated_at' => '2021-06-12 15:46:25',
            ),
            15 => 
            array (
                'id' => 46,
                'data_keys' => 'footer.element',
                'data_values' => '{"social_icon":"<i class=\\"lab la-facebook-f\\"><\\/i>","social_link":"https:\\/\\/www.facebook.com"}',
                'views' => 0,
                'created_at' => '2021-06-12 15:46:33',
                'updated_at' => '2021-06-12 15:46:33',
            ),
            16 => 
            array (
                'id' => 47,
                'data_keys' => 'extra.element',
            'data_values' => '{"title":"Terms and Condition","description":"<h3>What information do we collect?<\\/h3><div>We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/div><div><br \\/><\\/div><h3>How do we protect your information?<\\/h3><div>All provided delicate\\/credit data is sent through Stripe.<\\/div><div>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/div><div><br \\/><\\/div><h3>Do we disclose any information to outside parties?<\\/h3><div>We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/div><div><br \\/><\\/div><h3>Children\'s Online Privacy Protection Act Compliance<\\/h3><div>We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/div><div><br \\/><\\/div><h3>Changes to our Privacy Policy<\\/h3><div>If we decide to change our privacy policy, we will post those changes on this page.<\\/div><div><br \\/><\\/div><h3>How long we retain your information?<\\/h3><div>At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/div><div><br \\/><\\/div><h3>What we don\\u2019t do with your data<\\/h3><div>We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/div>"}',
                'views' => 0,
                'created_at' => '2021-06-12 15:50:04',
                'updated_at' => '2021-06-15 13:24:02',
            ),
            17 => 
            array (
                'id' => 48,
                'data_keys' => 'extra.element',
            'data_values' => '{"title":"Privacy Policy","description":"<h3>What information do we collect?<\\/h3><div>We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/div><div><br \\/><\\/div><h3>How do we protect your information?<\\/h3><div>All provided delicate\\/credit data is sent through Stripe.<\\/div><div>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/div><div><br \\/><\\/div><h3>Do we disclose any information to outside parties?<\\/h3><div>We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/div><div><br \\/><\\/div><h3>Children\'s Online Privacy Protection Act Compliance<\\/h3><div>We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/div><div><br \\/><\\/div><h3>Changes to our Privacy Policy<\\/h3><div>If we decide to change our privacy policy, we will post those changes on this page.<\\/div><div><br \\/><\\/div><h3>How long we retain your information?<\\/h3><div>At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/div><div><br \\/><\\/div><h3>What we don\\u2019t do with your data<\\/h3><div>We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/div>"}',
                'views' => 0,
                'created_at' => '2021-06-12 15:50:12',
                'updated_at' => '2021-06-16 13:14:55',
            ),
            18 => 
            array (
                'id' => 49,
                'data_keys' => 'breadcrumb.content',
                'data_values' => '{"has_image":"1","background_image":"60c47f3294a841623490354.jpg"}',
                'views' => 0,
                'created_at' => '2021-06-12 16:02:34',
                'updated_at' => '2021-06-12 16:02:34',
            ),
            19 => 
            array (
                'id' => 50,
                'data_keys' => 'overview.element',
                'data_values' => '{"icon":"<i class=\\"las la-users\\"><\\/i>","title":"Total Users","number":"78,00,000"}',
                'views' => 0,
                'created_at' => '2021-06-12 16:35:15',
                'updated_at' => '2021-06-12 16:35:15',
            ),
            20 => 
            array (
                'id' => 51,
                'data_keys' => 'overview.element',
                'data_values' => '{"icon":"<i class=\\"las la-trophy\\"><\\/i>","title":"Total Winners","number":"58,00,000"}',
                'views' => 0,
                'created_at' => '2021-06-12 16:35:42',
                'updated_at' => '2021-06-12 16:35:42',
            ),
            21 => 
            array (
                'id' => 52,
                'data_keys' => 'overview.element',
                'data_values' => '{"icon":"<i class=\\"las la-eye\\"><\\/i>","title":"Total Visitors","number":"68,00,000"}',
                'views' => 0,
                'created_at' => '2021-06-12 16:36:16',
                'updated_at' => '2021-06-12 16:36:16',
            ),
            22 => 
            array (
                'id' => 53,
                'data_keys' => 'latest_games.content',
                'data_values' => '{"heading":"Latest Online Games"}',
                'views' => 0,
                'created_at' => '2021-06-12 16:46:32',
                'updated_at' => '2021-06-12 16:46:32',
            ),
            23 => 
            array (
                'id' => 54,
                'data_keys' => 'how_work.content',
                'data_values' => '{"heading":"It\'s Easy to Join and get reward","sub_heading":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consequatur ipsam ab aperiam facilis ad deserunt debitis ullam. Labore dolore odio magnam corporis in iure."}',
                'views' => 0,
                'created_at' => '2021-06-12 17:12:45',
                'updated_at' => '2021-06-12 17:12:45',
            ),
            24 => 
            array (
                'id' => 55,
                'data_keys' => 'how_work.element',
                'data_values' => '{"title":"Create an Account","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, modi omnis."}',
                'views' => 0,
                'created_at' => '2021-06-12 17:13:09',
                'updated_at' => '2021-06-12 17:13:09',
            ),
            25 => 
            array (
                'id' => 56,
                'data_keys' => 'how_work.element',
                'data_values' => '{"title":"Choose Lottery","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, modi omnis."}',
                'views' => 0,
                'created_at' => '2021-06-12 17:13:19',
                'updated_at' => '2021-06-12 17:13:19',
            ),
            26 => 
            array (
                'id' => 57,
                'data_keys' => 'how_work.element',
                'data_values' => '{"title":"Pick Lottery","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, modi omnis."}',
                'views' => 0,
                'created_at' => '2021-06-12 17:13:31',
                'updated_at' => '2021-06-12 17:13:31',
            ),
            27 => 
            array (
                'id' => 58,
                'data_keys' => 'how_work.element',
                'data_values' => '{"title":"Win Lottery","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, modi omnis."}',
                'views' => 0,
                'created_at' => '2021-06-12 17:13:39',
                'updated_at' => '2021-06-12 17:13:39',
            ),
            28 => 
            array (
                'id' => 59,
                'data_keys' => 'statistics.content',
                'data_values' => '{"heading":"Recent Statistics"}',
                'views' => 0,
                'created_at' => '2021-06-12 17:17:50',
                'updated_at' => '2021-06-12 17:17:50',
            ),
            29 => 
            array (
                'id' => 60,
                'data_keys' => 'cta.content',
                'data_values' => '{"has_image":"1","heading":"Buy ticket and get million dollars for a click","sub_heading":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias amet, cum qui praesentium, esse deleniti nostrum eaque aut officiis magnam odit. Libero quaerat ad, numquam eum non.","button":"Get Started","button_link":"login","background_image":"60c9d53c66c691623840060.jpg"}',
                'views' => 0,
                'created_at' => '2021-06-12 17:50:02',
                'updated_at' => '2021-06-16 17:11:00',
            ),
            30 => 
            array (
                'id' => 61,
                'data_keys' => 'feature.element',
                'data_values' => '{"icon":"<i class=\\"las la-certificate\\"><\\/i>","title":"Best Lottery Platform","content":"Lorem ipsum dolor sit amet consectetur adicding elit. Pariatur dolore laborum corrupti repreherit nemo facere voluptate similique id earum dinctio."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:02:25',
                'updated_at' => '2021-06-12 18:02:25',
            ),
            31 => 
            array (
                'id' => 62,
                'data_keys' => 'feature.element',
                'data_values' => '{"icon":"<i class=\\"las la-wallet\\"><\\/i>","title":"Quick Deposit","content":"Lorem ipsum dolor sit amet consectetur adicding elit. Pariatur dolore laborum corrupti repreherit nemo facere voluptate similique id earum dinctio."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:02:43',
                'updated_at' => '2021-06-12 18:02:43',
            ),
            32 => 
            array (
                'id' => 63,
                'data_keys' => 'feature.element',
                'data_values' => '{"icon":"<i class=\\"lar la-credit-card\\"><\\/i>","title":"Quick Withdraw","content":"Lorem ipsum dolor sit amet consectetur adicding elit. Pariatur dolore laborum corrupti repreherit nemo facere voluptate similique id earum dinctio."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:03:09',
                'updated_at' => '2021-06-12 18:03:09',
            ),
            33 => 
            array (
                'id' => 64,
                'data_keys' => 'faq.content',
                'data_values' => '{"has_image":"1","image":"60c49f20c008a1623498528.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:18:48',
                'updated_at' => '2021-06-12 18:18:48',
            ),
            34 => 
            array (
                'id' => 65,
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"Lorem ipsum dolor sit amet, consectetur adipisicing elit.","answer":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni soluta."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:19:24',
                'updated_at' => '2021-06-12 18:19:24',
            ),
            35 => 
            array (
                'id' => 66,
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"Doloremque perspiciatis harum voluptatibus natus.","answer":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni soluta."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:19:36',
                'updated_at' => '2021-06-12 18:19:36',
            ),
            36 => 
            array (
                'id' => 67,
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"Nesciunt eius similique tenetur corporis fuga.","answer":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni soluta."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:19:48',
                'updated_at' => '2021-06-12 18:19:48',
            ),
            37 => 
            array (
                'id' => 68,
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"Eligendi in enim quisquam dolor voluptates nihil.","answer":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni soluta."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:19:57',
                'updated_at' => '2021-06-12 18:19:57',
            ),
            38 => 
            array (
                'id' => 69,
                'data_keys' => 'faq.element',
                'data_values' => '{"question":"Doloremque perspiciatis harum voluptatibus natus.","answer":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis harum voluptatibus natus alias nesciunt eius similique tenetur corporis fuga eligendi in enim quisquam dolor voluptates nihil obcaecati pariatur commodi facilis, officiis nobis porro eum architecto! Delectus ut voluptatibus voluptatem, aliquam tenetur et facilis, quia veritatis temporibus, ex magni soluta."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:20:14',
                'updated_at' => '2021-06-12 18:20:14',
            ),
            39 => 
            array (
                'id' => 70,
                'data_keys' => 'recent_winners.content',
                'data_values' => '{"heading":"Recent Winners"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:25:29',
                'updated_at' => '2021-06-12 18:25:29',
            ),
            40 => 
            array (
                'id' => 71,
                'data_keys' => 'testimonial.content',
                'data_values' => '{"heading":"What User Say About Us","sub_heading":"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi suscipit, sunt obcaecati porro consequuntur quo deleniti voluptatum at qui eum quibusdam sapiente laborum."}',
                'views' => 0,
                'created_at' => '2021-06-12 18:36:28',
                'updated_at' => '2021-06-12 18:36:28',
            ),
            41 => 
            array (
                'id' => 72,
                'data_keys' => 'testimonial.element',
                'data_values' => '{"has_image":"1","name":"John Doe","designation":"Lottery winner","rating":"5","review":"Lorem ipsum dolor sit amet, consectetur adicing elit. Eius aut odit non. Sunt, laborum Nemo erunt sit libero eius corporis voluptates sapie smoss.","image":"60c4a387727371623499655.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:37:35',
                'updated_at' => '2021-06-12 18:37:35',
            ),
            42 => 
            array (
                'id' => 73,
                'data_keys' => 'testimonial.element',
                'data_values' => '{"has_image":"1","name":"Jane Doe","designation":"Lottery winner","rating":"4","review":"Lorem ipsum dolor sit amet, consectetur adicing elit. Eius aut odit non. Sunt, laborum Nemo erunt sit libero eius corporis voluptates sapie smoss.","image":"60c4a39eb110a1623499678.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:37:58',
                'updated_at' => '2021-06-12 18:37:58',
            ),
            43 => 
            array (
                'id' => 74,
                'data_keys' => 'testimonial.element',
                'data_values' => '{"has_image":"1","name":"Jeff Ray","designation":"Lottery winner","rating":"5","review":"Lorem ipsum dolor sit amet, consectetur adicing elit. Eius aut odit non. Sunt, laborum Nemo erunt sit libero eius corporis voluptates sapie smoss.","image":"60c4a3c0a06f91623499712.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:38:32',
                'updated_at' => '2021-06-12 18:38:32',
            ),
            44 => 
            array (
                'id' => 75,
                'data_keys' => 'payments.content',
                'data_values' => '{"heading":"Payment We Accept","sub_heading":"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse voluptatum eaque earum quos quia? Id aspernatur ratione, voluptas nulla rerum laudantium neque ipsam eaque"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:03',
                'updated_at' => '2021-06-12 18:50:03',
            ),
            45 => 
            array (
                'id' => 76,
                'data_keys' => 'payments.element',
                'data_values' => '{"has_image":"1","image":"60c4a67e1e61a1623500414.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:14',
                'updated_at' => '2021-06-12 18:50:14',
            ),
            46 => 
            array (
                'id' => 77,
                'data_keys' => 'payments.element',
                'data_values' => '{"has_image":"1","image":"60c4a682a2bd21623500418.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:18',
                'updated_at' => '2021-06-12 18:50:18',
            ),
            47 => 
            array (
                'id' => 78,
                'data_keys' => 'payments.element',
                'data_values' => '{"has_image":"1","image":"60c4a6876fa0a1623500423.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:23',
                'updated_at' => '2021-06-12 18:50:23',
            ),
            48 => 
            array (
                'id' => 79,
                'data_keys' => 'payments.element',
                'data_values' => '{"has_image":"1","image":"60c4a68c1fc2c1623500428.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:28',
                'updated_at' => '2021-06-12 18:50:28',
            ),
            49 => 
            array (
                'id' => 80,
                'data_keys' => 'payments.element',
                'data_values' => '{"has_image":"1","image":"60c4a690c65c41623500432.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:32',
                'updated_at' => '2021-06-12 18:50:32',
            ),
            50 => 
            array (
                'id' => 81,
                'data_keys' => 'payments.element',
                'data_values' => '{"has_image":"1","image":"60c4a695c80c01623500437.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:37',
                'updated_at' => '2021-06-12 18:50:37',
            ),
            51 => 
            array (
                'id' => 82,
                'data_keys' => 'payments.element',
                'data_values' => '{"has_image":"1","image":"60c4a69a291041623500442.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:42',
                'updated_at' => '2021-06-12 18:50:42',
            ),
            52 => 
            array (
                'id' => 83,
                'data_keys' => 'payments.element',
                'data_values' => '{"has_image":"1","image":"60c4a69f4f24d1623500447.png"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:50:47',
                'updated_at' => '2021-06-12 18:50:47',
            ),
            53 => 
            array (
                'id' => 84,
                'data_keys' => 'subscribe.content',
                'data_values' => '{"heading":"Join our mail list to get latest announcement"}',
                'views' => 0,
                'created_at' => '2021-06-12 18:53:49',
                'updated_at' => '2021-06-12 18:53:49',
            ),
            54 => 
            array (
                'id' => 85,
                'data_keys' => 'lottery.content',
                'data_values' => '{"heading":"Lottery Calendar"}',
                'views' => 0,
                'created_at' => '2021-06-12 19:04:21',
                'updated_at' => '2021-06-12 19:04:21',
            ),
            55 => 
            array (
                'id' => 86,
                'data_keys' => 'contact.content',
                'data_values' => '{"title":"Get in Touch","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt voluptates rerum corporis molestias dolores.","address":"Medino, NY 10012, USA","phone":"5488848798","email":"demo@demo.com"}',
                'views' => 0,
                'created_at' => '2021-06-12 20:19:41',
                'updated_at' => '2021-06-12 20:19:41',
            ),
            56 => 
            array (
                'id' => 87,
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Laboriosam distinctio nisi debitis deleniti voluptatum corporis.","short_description":"Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.","description_nic":"<div>Consectetuer in non nibh lorem posuere, sapien dictum dolor libero aliquam suspendisse, diam a eu tristique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum molestie, tortor ut orci ornare mi purus. Rhoncus vestibulum quam auctor id per, a luctus, in sed wisi. Arcu et, pulvinar non semper ac neque facilisis nec, pellentesque porttitor dapibus etiam non. Sit tempor nulla vivamus condimentum lorem tempus, velit diam in nullam semper culpa. Erat mattis. Volutpat vel vitae wisi nulla ipsum, non lorem dui mi, ut neque sed maecenas nonummy<\\/div><div><br \\/><\\/div><div>duis, interdum platea enim pretium suspendisse non enim. Ullamcorper duis, fermentum nulla. Suspendisse nec vestibulum odio proin ipsum tincidunt. Adipiscing pede dictum tellus nulla eget integer, felis wisi donec vehicula vel turpis ipsum.<\\/div><div><br \\/><\\/div><div>Aenean metus lectus at id. Morbi aliquet commodo a sodales eget. Eu justo ante nibh et a turpis, aliquam phasellus hymenaeos, imperdiet eget cras sociosqu, tincidunt a amet. Faucibus urna luctus, arcu ni<\\/div><div>Inceptos quam, nam felis tortor tortor sed porta, a facilisis dictumst luctus ipsum phasellus, faucibus aliquam diam ullamcorper, a id ultrices non suscipit nulla. Nam nulla aliquet, imperdiet sit in massa a enim, amet suscipit dui sodales class vestibulum, in ut nec urna sed quis vestibulum. Quisque quis amet turpis, rhoncus integer, sed elit sed amet in mi, amet magna feugiat.tique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit<\\/div><div><br \\/><\\/div><div>quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum dignissim suspendisse purus. Amet vivamus vivamus netus nec orci molestie, nisl morbi pulvinar vulputate eget, mi a mauris odio vel vulputate, cubilia praesent posuere tellus at velit.urpis nec ligula, pulvinar erat<\\/div><div><br \\/><\\/div><div>Quam arcu ac, at adipiscing justo lectus sit nibh massa. Quam euismod, nam eu tellus, et massa non mauris consequat, consequat lectus ultrices. Mi laoreet nunc consequat erat amet. Sem dignissim. Dignissim ac non, convallis id, vitae aliquam id urna a, placerat urna mauris aliquet lorem molestie nec.<\\/div>","image":"60c73a74705b61623669364.jpg"}',
                'views' => 4,
                'created_at' => '2021-06-14 17:46:04',
                'updated_at' => '2022-09-30 01:23:02',
            ),
            57 => 
            array (
                'id' => 88,
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Laboriosam distinctio nisi debitis deleniti voluptatum corporis.","short_description":"Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.","description_nic":"<div>Consectetuer in non nibh lorem posuere, sapien dictum dolor libero aliquam suspendisse, diam a eu tristique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum molestie, tortor ut orci ornare mi purus. Rhoncus vestibulum quam auctor id per, a luctus, in sed wisi. Arcu et, pulvinar non semper ac neque facilisis nec, pellentesque porttitor dapibus etiam non. Sit tempor nulla vivamus condimentum lorem tempus, velit diam in nullam semper culpa. Erat mattis. Volutpat vel vitae wisi nulla ipsum, non lorem dui mi, ut neque sed maecenas nonummy<\\/div><div><br \\/><\\/div><div>duis, interdum platea enim pretium suspendisse non enim. Ullamcorper duis, fermentum nulla. Suspendisse nec vestibulum odio proin ipsum tincidunt. Adipiscing pede dictum tellus nulla eget integer, felis wisi donec vehicula vel turpis ipsum.<\\/div><div><br \\/><\\/div><div>Aenean metus lectus at id. Morbi aliquet commodo a sodales eget. Eu justo ante nibh et a turpis, aliquam phasellus hymenaeos, imperdiet eget cras sociosqu, tincidunt a amet. Faucibus urna luctus, arcu ni<\\/div><div>Inceptos quam, nam felis tortor tortor sed porta, a facilisis dictumst luctus ipsum phasellus, faucibus aliquam diam ullamcorper, a id ultrices non suscipit nulla. Nam nulla aliquet, imperdiet sit in massa a enim, amet suscipit dui sodales class vestibulum, in ut nec urna sed quis vestibulum. Quisque quis amet turpis, rhoncus integer, sed elit sed amet in mi, amet magna feugiat.tique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit<\\/div><div><br \\/><\\/div><div>quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum dignissim suspendisse purus. Amet vivamus vivamus netus nec orci molestie, nisl morbi pulvinar vulputate eget, mi a mauris odio vel vulputate, cubilia praesent posuere tellus at velit.urpis nec ligula, pulvinar erat<\\/div><div><br \\/><\\/div><div>Quam arcu ac, at adipiscing justo lectus sit nibh massa. Quam euismod, nam eu tellus, et massa non mauris consequat, consequat lectus ultrices. Mi laoreet nunc consequat erat amet. Sem dignissim. Dignissim ac non, convallis id, vitae aliquam id urna a, placerat urna mauris aliquet lorem molestie nec.<\\/div>","image":"60c73a95ec3891623669397.jpg"}',
                'views' => 5,
                'created_at' => '2021-06-14 17:46:37',
                'updated_at' => '2022-09-30 01:24:52',
            ),
            58 => 
            array (
                'id' => 89,
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Laboriosam distinctio nisi debitis deleniti voluptatum corporis.","short_description":"Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.","description_nic":"<div>Consectetuer in non nibh lorem posuere, sapien dictum dolor libero aliquam suspendisse, diam a eu tristique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum molestie, tortor ut orci ornare mi purus. Rhoncus vestibulum quam auctor id per, a luctus, in sed wisi. Arcu et, pulvinar non semper ac neque facilisis nec, pellentesque porttitor dapibus etiam non. Sit tempor nulla vivamus condimentum lorem tempus, velit diam in nullam semper culpa. Erat mattis. Volutpat vel vitae wisi nulla ipsum, non lorem dui mi, ut neque sed maecenas nonummy<\\/div><div><br \\/><\\/div><div>duis, interdum platea enim pretium suspendisse non enim. Ullamcorper duis, fermentum nulla. Suspendisse nec vestibulum odio proin ipsum tincidunt. Adipiscing pede dictum tellus nulla eget integer, felis wisi donec vehicula vel turpis ipsum.<\\/div><div><br \\/><\\/div><div>Aenean metus lectus at id. Morbi aliquet commodo a sodales eget. Eu justo ante nibh et a turpis, aliquam phasellus hymenaeos, imperdiet eget cras sociosqu, tincidunt a amet. Faucibus urna luctus, arcu ni<\\/div><div>Inceptos quam, nam felis tortor tortor sed porta, a facilisis dictumst luctus ipsum phasellus, faucibus aliquam diam ullamcorper, a id ultrices non suscipit nulla. Nam nulla aliquet, imperdiet sit in massa a enim, amet suscipit dui sodales class vestibulum, in ut nec urna sed quis vestibulum. Quisque quis amet turpis, rhoncus integer, sed elit sed amet in mi, amet magna feugiat.tique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit<\\/div><div><br \\/><\\/div><div>quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum dignissim suspendisse purus. Amet vivamus vivamus netus nec orci molestie, nisl morbi pulvinar vulputate eget, mi a mauris odio vel vulputate, cubilia praesent posuere tellus at velit.urpis nec ligula, pulvinar erat<\\/div><div><br \\/><\\/div><div>Quam arcu ac, at adipiscing justo lectus sit nibh massa. Quam euismod, nam eu tellus, et massa non mauris consequat, consequat lectus ultrices. Mi laoreet nunc consequat erat amet. Sem dignissim. Dignissim ac non, convallis id, vitae aliquam id urna a, placerat urna mauris aliquet lorem molestie nec.<\\/div>","image":"60c73aafdcdea1623669423.jpg"}',
                'views' => 7,
                'created_at' => '2021-06-14 17:47:03',
                'updated_at' => '2022-08-21 09:05:30',
            ),
            59 => 
            array (
                'id' => 90,
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Laboriosam distinctio nisi debitis deleniti voluptatum corporis.","short_description":"Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.","description_nic":"<div>Consectetuer in non nibh lorem posuere, sapien dictum dolor libero aliquam suspendisse, diam a eu tristique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum molestie, tortor ut orci ornare mi purus. Rhoncus vestibulum quam auctor id per, a luctus, in sed wisi. Arcu et, pulvinar non semper ac neque facilisis nec, pellentesque porttitor dapibus etiam non. Sit tempor nulla vivamus condimentum lorem tempus, velit diam in nullam semper culpa. Erat mattis. Volutpat vel vitae wisi nulla ipsum, non lorem dui mi, ut neque sed maecenas nonummy<\\/div><div><br \\/><\\/div><div>duis, interdum platea enim pretium suspendisse non enim. Ullamcorper duis, fermentum nulla. Suspendisse nec vestibulum odio proin ipsum tincidunt. Adipiscing pede dictum tellus nulla eget integer, felis wisi donec vehicula vel turpis ipsum.<\\/div><div><br \\/><\\/div><div>Aenean metus lectus at id. Morbi aliquet commodo a sodales eget. Eu justo ante nibh et a turpis, aliquam phasellus hymenaeos, imperdiet eget cras sociosqu, tincidunt a amet. Faucibus urna luctus, arcu ni<\\/div><div>Inceptos quam, nam felis tortor tortor sed porta, a facilisis dictumst luctus ipsum phasellus, faucibus aliquam diam ullamcorper, a id ultrices non suscipit nulla. Nam nulla aliquet, imperdiet sit in massa a enim, amet suscipit dui sodales class vestibulum, in ut nec urna sed quis vestibulum. Quisque quis amet turpis, rhoncus integer, sed elit sed amet in mi, amet magna feugiat.tique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit<\\/div><div><br \\/><\\/div><div>quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum dignissim suspendisse purus. Amet vivamus vivamus netus nec orci molestie, nisl morbi pulvinar vulputate eget, mi a mauris odio vel vulputate, cubilia praesent posuere tellus at velit.urpis nec ligula, pulvinar erat<\\/div><div><br \\/><\\/div><div>Quam arcu ac, at adipiscing justo lectus sit nibh massa. Quam euismod, nam eu tellus, et massa non mauris consequat, consequat lectus ultrices. Mi laoreet nunc consequat erat amet. Sem dignissim. Dignissim ac non, convallis id, vitae aliquam id urna a, placerat urna mauris aliquet lorem molestie nec.<\\/div>","image":"60c73ac4a014c1623669444.jpg"}',
                'views' => 4,
                'created_at' => '2021-06-14 17:47:24',
                'updated_at' => '2022-09-30 01:22:49',
            ),
            60 => 
            array (
                'id' => 91,
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Laboriosam distinctio nisi debitis deleniti voluptatum corporis.","short_description":"Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.","description_nic":"<div>Consectetuer in non nibh lorem posuere, sapien dictum dolor libero aliquam suspendisse, diam a eu tristique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum molestie, tortor ut orci ornare mi purus. Rhoncus vestibulum quam auctor id per, a luctus, in sed wisi. Arcu et, pulvinar non semper ac neque facilisis nec, pellentesque porttitor dapibus etiam non. Sit tempor nulla vivamus condimentum lorem tempus, velit diam in nullam semper culpa. Erat mattis. Volutpat vel vitae wisi nulla ipsum, non lorem dui mi, ut neque sed maecenas nonummy<\\/div><div><br \\/><\\/div><div>duis, interdum platea enim pretium suspendisse non enim. Ullamcorper duis, fermentum nulla. Suspendisse nec vestibulum odio proin ipsum tincidunt. Adipiscing pede dictum tellus nulla eget integer, felis wisi donec vehicula vel turpis ipsum.<\\/div><div><br \\/><\\/div><div>Aenean metus lectus at id. Morbi aliquet commodo a sodales eget. Eu justo ante nibh et a turpis, aliquam phasellus hymenaeos, imperdiet eget cras sociosqu, tincidunt a amet. Faucibus urna luctus, arcu ni<\\/div><div>Inceptos quam, nam felis tortor tortor sed porta, a facilisis dictumst luctus ipsum phasellus, faucibus aliquam diam ullamcorper, a id ultrices non suscipit nulla. Nam nulla aliquet, imperdiet sit in massa a enim, amet suscipit dui sodales class vestibulum, in ut nec urna sed quis vestibulum. Quisque quis amet turpis, rhoncus integer, sed elit sed amet in mi, amet magna feugiat.tique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit<\\/div><div><br \\/><\\/div><div>quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum dignissim suspendisse purus. Amet vivamus vivamus netus nec orci molestie, nisl morbi pulvinar vulputate eget, mi a mauris odio vel vulputate, cubilia praesent posuere tellus at velit.urpis nec ligula, pulvinar erat<\\/div><div><br \\/><\\/div><div>Quam arcu ac, at adipiscing justo lectus sit nibh massa. Quam euismod, nam eu tellus, et massa non mauris consequat, consequat lectus ultrices. Mi laoreet nunc consequat erat amet. Sem dignissim. Dignissim ac non, convallis id, vitae aliquam id urna a, placerat urna mauris aliquet lorem molestie nec.<\\/div>","image":"60c73ae590f041623669477.jpg"}',
                'views' => 13,
                'created_at' => '2021-06-14 17:47:57',
                'updated_at' => '2022-09-30 01:22:42',
            ),
            61 => 
            array (
                'id' => 92,
                'data_keys' => 'blog.element',
                'data_values' => '{"has_image":["1"],"title":"Laboriosam distinctio nisi debitis deleniti voluptatum corporis.","short_description":"Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.","description_nic":"<div>Consectetuer in non nibh lorem posuere, sapien dictum dolor libero aliquam suspendisse, diam a eu tristique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum molestie, tortor ut orci ornare mi purus. Rhoncus vestibulum quam auctor id per, a luctus, in sed wisi. Arcu et, pulvinar non semper ac neque facilisis nec, pellentesque porttitor dapibus etiam non. Sit tempor nulla vivamus condimentum lorem tempus, velit diam in nullam semper culpa. Erat mattis. Volutpat vel vitae wisi nulla ipsum, non lorem dui mi, ut neque sed maecenas nonummy<\\/div><div><br \\/><\\/div><div>duis, interdum platea enim pretium suspendisse non enim. Ullamcorper duis, fermentum nulla. Suspendisse nec vestibulum odio proin ipsum tincidunt. Adipiscing pede dictum tellus nulla eget integer, felis wisi donec vehicula vel turpis ipsum.<\\/div><div><br \\/><\\/div><div>Aenean metus lectus at id. Morbi aliquet commodo a sodales eget. Eu justo ante nibh et a turpis, aliquam phasellus hymenaeos, imperdiet eget cras sociosqu, tincidunt a amet. Faucibus urna luctus, arcu ni<\\/div><div>Inceptos quam, nam felis tortor tortor sed porta, a facilisis dictumst luctus ipsum phasellus, faucibus aliquam diam ullamcorper, a id ultrices non suscipit nulla. Nam nulla aliquet, imperdiet sit in massa a enim, amet suscipit dui sodales class vestibulum, in ut nec urna sed quis vestibulum. Quisque quis amet turpis, rhoncus integer, sed elit sed amet in mi, amet magna feugiat.tique amet donec, sed vestibulum elit ut sollicitudin. Lacus vivamus elit<\\/div><div><br \\/><\\/div><div>quam lorem, arcu justo pede eget vivamus, fringilla vestibulum sit nec magna duis, vel sed condimentum vestibulum dignissim suspendisse purus. Amet vivamus vivamus netus nec orci molestie, nisl morbi pulvinar vulputate eget, mi a mauris odio vel vulputate, cubilia praesent posuere tellus at velit.urpis nec ligula, pulvinar erat<\\/div><div><br \\/><\\/div><div>Quam arcu ac, at adipiscing justo lectus sit nibh massa. Quam euismod, nam eu tellus, et massa non mauris consequat, consequat lectus ultrices. Mi laoreet nunc consequat erat amet. Sem dignissim. Dignissim ac non, convallis id, vitae aliquam id urna a, placerat urna mauris aliquet lorem molestie nec.<\\/div>","image":"60c73afce52f71623669500.jpg"}',
                'views' => 37,
                'created_at' => '2021-06-14 17:48:20',
                'updated_at' => '2022-09-30 01:23:08',
            ),
        ));
        
        
    }
}