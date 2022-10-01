<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WinBonusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('win_bonuses')->delete();
        
        \DB::table('win_bonuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'level' => 1,
                'amount' => '13',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            1 => 
            array (
                'id' => 2,
                'level' => 2,
                'amount' => '32',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            2 => 
            array (
                'id' => 3,
                'level' => 3,
                'amount' => '11',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            3 => 
            array (
                'id' => 4,
                'level' => 4,
                'amount' => '44',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            4 => 
            array (
                'id' => 5,
                'level' => 5,
                'amount' => '66',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            5 => 
            array (
                'id' => 6,
                'level' => 6,
                'amount' => '5',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            6 => 
            array (
                'id' => 7,
                'level' => 7,
                'amount' => '7',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            7 => 
            array (
                'id' => 8,
                'level' => 8,
                'amount' => '55',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            8 => 
            array (
                'id' => 9,
                'level' => 9,
                'amount' => '73',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            9 => 
            array (
                'id' => 10,
                'level' => 10,
                'amount' => '222',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            10 => 
            array (
                'id' => 11,
                'level' => 11,
                'amount' => '667',
                'lottery_id' => 1,
                'status' => 1,
                'created_at' => '2022-08-07 09:31:24',
                'updated_at' => '2022-08-07 09:31:24',
            ),
            11 => 
            array (
                'id' => 12,
                'level' => 1,
                'amount' => '11',
                'lottery_id' => 2,
                'status' => 1,
                'created_at' => '2022-08-07 09:38:13',
                'updated_at' => '2022-08-07 09:38:13',
            ),
            12 => 
            array (
                'id' => 13,
                'level' => 2,
                'amount' => '55',
                'lottery_id' => 2,
                'status' => 1,
                'created_at' => '2022-08-07 09:38:13',
                'updated_at' => '2022-08-07 09:38:13',
            ),
            13 => 
            array (
                'id' => 14,
                'level' => 1,
                'amount' => '66',
                'lottery_id' => 3,
                'status' => 1,
                'created_at' => '2022-08-12 13:39:28',
                'updated_at' => '2022-08-12 13:39:28',
            ),
            14 => 
            array (
                'id' => 15,
                'level' => 2,
                'amount' => '33',
                'lottery_id' => 3,
                'status' => 1,
                'created_at' => '2022-08-12 13:39:28',
                'updated_at' => '2022-08-12 13:39:28',
            ),
            15 => 
            array (
                'id' => 16,
                'level' => 3,
                'amount' => '77',
                'lottery_id' => 3,
                'status' => 1,
                'created_at' => '2022-08-12 13:39:28',
                'updated_at' => '2022-08-12 13:39:28',
            ),
            16 => 
            array (
                'id' => 17,
                'level' => 1,
                'amount' => '112',
                'lottery_id' => 4,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:11',
                'updated_at' => '2022-08-12 13:40:11',
            ),
            17 => 
            array (
                'id' => 18,
                'level' => 2,
                'amount' => '24',
                'lottery_id' => 4,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:11',
                'updated_at' => '2022-08-12 13:40:11',
            ),
            18 => 
            array (
                'id' => 19,
                'level' => 3,
                'amount' => '14',
                'lottery_id' => 4,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:11',
                'updated_at' => '2022-08-12 13:40:11',
            ),
            19 => 
            array (
                'id' => 20,
                'level' => 4,
                'amount' => '345',
                'lottery_id' => 4,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:11',
                'updated_at' => '2022-08-12 13:40:11',
            ),
            20 => 
            array (
                'id' => 21,
                'level' => 5,
                'amount' => '32',
                'lottery_id' => 4,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:11',
                'updated_at' => '2022-08-12 13:40:11',
            ),
            21 => 
            array (
                'id' => 22,
                'level' => 6,
                'amount' => '5',
                'lottery_id' => 4,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:11',
                'updated_at' => '2022-08-12 13:40:11',
            ),
            22 => 
            array (
                'id' => 23,
                'level' => 7,
                'amount' => '2',
                'lottery_id' => 4,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:11',
                'updated_at' => '2022-08-12 13:40:11',
            ),
            23 => 
            array (
                'id' => 24,
                'level' => 1,
                'amount' => '13',
                'lottery_id' => 5,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:48',
                'updated_at' => '2022-08-12 13:40:48',
            ),
            24 => 
            array (
                'id' => 25,
                'level' => 2,
                'amount' => '534',
                'lottery_id' => 5,
                'status' => 1,
                'created_at' => '2022-08-12 13:40:48',
                'updated_at' => '2022-08-12 13:40:48',
            ),
        ));
        
        
    }
}