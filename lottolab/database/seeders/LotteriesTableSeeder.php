<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LotteriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lotteries')->delete();
        
        \DB::table('lotteries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'US Powerball',
                'image' => '62ef864ee8f451659864654.png',
                'status' => 1,
                'detail' => 'Waiting For Draw<br />',
                'price' => '260.00000000',
                'created_at' => '2022-08-07 09:30:55',
                'updated_at' => '2022-08-07 09:30:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Energy Ball',
                'image' => '62ef87e58060a1659865061.png',
                'status' => 1,
                'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. <div><br /></div><div>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" 1914 translation by H. Rackham "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?<br /></div>',
                'price' => '500.00000000',
                'created_at' => '2022-08-07 09:37:41',
                'updated_at' => '2022-08-07 09:37:41',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Energy Football',
                'image' => '62f65805666961660311557.png',
                'status' => 1,
            'detail' => '<span style="color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br />',
                'price' => '48.00000000',
                'created_at' => '2022-08-12 13:39:17',
                'updated_at' => '2022-08-12 13:39:17',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Energy Latecy',
                'image' => '62f6582f07a4b1660311599.png',
                'status' => 1,
            'detail' => '<span style="color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br />',
                'price' => '33.00000000',
                'created_at' => '2022-08-12 13:39:59',
                'updated_at' => '2022-08-12 13:39:59',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Energy York',
                'image' => '62f65858ddb941660311640.png',
                'status' => 1,
            'detail' => '<span style="color:rgb(0,0,0);font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br />',
                'price' => '553.00000000',
                'created_at' => '2022-08-12 13:40:40',
                'updated_at' => '2022-08-12 13:40:40',
            ),
        ));
        
        
    }
}