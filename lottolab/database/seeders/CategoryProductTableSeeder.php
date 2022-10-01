<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_product')->delete();
        
        \DB::table('category_product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'category_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'category_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'category_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 2,
                'category_id' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 3,
                'category_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 3,
                'category_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 4,
                'category_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 4,
                'category_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 5,
                'category_id' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 6,
                'category_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 6,
                'category_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 7,
                'category_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 7,
                'category_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 8,
                'category_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 8,
                'category_id' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 9,
                'category_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 9,
                'category_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 10,
                'category_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 10,
                'category_id' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 11,
                'category_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 11,
                'category_id' => 3,
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 12,
                'category_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 12,
                'category_id' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 13,
                'category_id' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 13,
                'category_id' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 14,
                'category_id' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 14,
                'category_id' => 3,
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 15,
                'category_id' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 15,
                'category_id' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 16,
                'category_id' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 16,
                'category_id' => 3,
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 17,
                'category_id' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 17,
                'category_id' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 18,
                'category_id' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 18,
                'category_id' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 19,
                'category_id' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 19,
                'category_id' => 3,
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 20,
                'category_id' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 20,
                'category_id' => 3,
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 21,
                'category_id' => 50,
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 21,
                'category_id' => 51,
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 22,
                'category_id' => 50,
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 22,
                'category_id' => 51,
            ),
            43 => 
            array (
                'id' => 44,
                'product_id' => 23,
                'category_id' => 50,
            ),
            44 => 
            array (
                'id' => 45,
                'product_id' => 23,
                'category_id' => 51,
            ),
            45 => 
            array (
                'id' => 46,
                'product_id' => 24,
                'category_id' => 50,
            ),
            46 => 
            array (
                'id' => 47,
                'product_id' => 24,
                'category_id' => 51,
            ),
            47 => 
            array (
                'id' => 48,
                'product_id' => 25,
                'category_id' => 50,
            ),
            48 => 
            array (
                'id' => 49,
                'product_id' => 25,
                'category_id' => 51,
            ),
            49 => 
            array (
                'id' => 50,
                'product_id' => 26,
                'category_id' => 50,
            ),
            50 => 
            array (
                'id' => 51,
                'product_id' => 26,
                'category_id' => 52,
            ),
            51 => 
            array (
                'id' => 52,
                'product_id' => 27,
                'category_id' => 50,
            ),
            52 => 
            array (
                'id' => 53,
                'product_id' => 27,
                'category_id' => 53,
            ),
            53 => 
            array (
                'id' => 54,
                'product_id' => 28,
                'category_id' => 50,
            ),
            54 => 
            array (
                'id' => 55,
                'product_id' => 28,
                'category_id' => 53,
            ),
            55 => 
            array (
                'id' => 56,
                'product_id' => 29,
                'category_id' => 50,
            ),
            56 => 
            array (
                'id' => 57,
                'product_id' => 29,
                'category_id' => 53,
            ),
            57 => 
            array (
                'id' => 58,
                'product_id' => 30,
                'category_id' => 50,
            ),
            58 => 
            array (
                'id' => 59,
                'product_id' => 30,
                'category_id' => 53,
            ),
            59 => 
            array (
                'id' => 60,
                'product_id' => 31,
                'category_id' => 50,
            ),
            60 => 
            array (
                'id' => 61,
                'product_id' => 31,
                'category_id' => 53,
            ),
            61 => 
            array (
                'id' => 62,
                'product_id' => 32,
                'category_id' => 50,
            ),
            62 => 
            array (
                'id' => 63,
                'product_id' => 32,
                'category_id' => 53,
            ),
            63 => 
            array (
                'id' => 64,
                'product_id' => 33,
                'category_id' => 50,
            ),
            64 => 
            array (
                'id' => 65,
                'product_id' => 33,
                'category_id' => 53,
            ),
            65 => 
            array (
                'id' => 66,
                'product_id' => 34,
                'category_id' => 50,
            ),
            66 => 
            array (
                'id' => 67,
                'product_id' => 34,
                'category_id' => 53,
            ),
            67 => 
            array (
                'id' => 68,
                'product_id' => 35,
                'category_id' => 50,
            ),
            68 => 
            array (
                'id' => 69,
                'product_id' => 35,
                'category_id' => 53,
            ),
            69 => 
            array (
                'id' => 70,
                'product_id' => 36,
                'category_id' => 50,
            ),
            70 => 
            array (
                'id' => 71,
                'product_id' => 36,
                'category_id' => 52,
            ),
            71 => 
            array (
                'id' => 72,
                'product_id' => 37,
                'category_id' => 50,
            ),
            72 => 
            array (
                'id' => 73,
                'product_id' => 37,
                'category_id' => 52,
            ),
            73 => 
            array (
                'id' => 74,
                'product_id' => 38,
                'category_id' => 50,
            ),
            74 => 
            array (
                'id' => 75,
                'product_id' => 38,
                'category_id' => 52,
            ),
            75 => 
            array (
                'id' => 76,
                'product_id' => 39,
                'category_id' => 50,
            ),
            76 => 
            array (
                'id' => 77,
                'product_id' => 39,
                'category_id' => 52,
            ),
            77 => 
            array (
                'id' => 78,
                'product_id' => 40,
                'category_id' => 50,
            ),
            78 => 
            array (
                'id' => 79,
                'product_id' => 40,
                'category_id' => 52,
            ),
            79 => 
            array (
                'id' => 80,
                'product_id' => 41,
                'category_id' => 50,
            ),
            80 => 
            array (
                'id' => 81,
                'product_id' => 41,
                'category_id' => 52,
            ),
            81 => 
            array (
                'id' => 82,
                'product_id' => 42,
                'category_id' => 50,
            ),
            82 => 
            array (
                'id' => 83,
                'product_id' => 42,
                'category_id' => 52,
            ),
            83 => 
            array (
                'id' => 84,
                'product_id' => 43,
                'category_id' => 54,
            ),
            84 => 
            array (
                'id' => 85,
                'product_id' => 43,
                'category_id' => 55,
            ),
            85 => 
            array (
                'id' => 86,
                'product_id' => 44,
                'category_id' => 54,
            ),
            86 => 
            array (
                'id' => 87,
                'product_id' => 44,
                'category_id' => 55,
            ),
            87 => 
            array (
                'id' => 88,
                'product_id' => 45,
                'category_id' => 54,
            ),
            88 => 
            array (
                'id' => 89,
                'product_id' => 45,
                'category_id' => 56,
            ),
            89 => 
            array (
                'id' => 90,
                'product_id' => 46,
                'category_id' => 54,
            ),
            90 => 
            array (
                'id' => 91,
                'product_id' => 46,
                'category_id' => 56,
            ),
            91 => 
            array (
                'id' => 92,
                'product_id' => 47,
                'category_id' => 54,
            ),
            92 => 
            array (
                'id' => 93,
                'product_id' => 47,
                'category_id' => 57,
            ),
            93 => 
            array (
                'id' => 94,
                'product_id' => 48,
                'category_id' => 54,
            ),
            94 => 
            array (
                'id' => 95,
                'product_id' => 48,
                'category_id' => 55,
            ),
            95 => 
            array (
                'id' => 96,
                'product_id' => 49,
                'category_id' => 54,
            ),
            96 => 
            array (
                'id' => 97,
                'product_id' => 49,
                'category_id' => 55,
            ),
            97 => 
            array (
                'id' => 98,
                'product_id' => 50,
                'category_id' => 54,
            ),
            98 => 
            array (
                'id' => 99,
                'product_id' => 50,
                'category_id' => 55,
            ),
            99 => 
            array (
                'id' => 100,
                'product_id' => 51,
                'category_id' => 54,
            ),
            100 => 
            array (
                'id' => 101,
                'product_id' => 51,
                'category_id' => 55,
            ),
            101 => 
            array (
                'id' => 102,
                'product_id' => 52,
                'category_id' => 54,
            ),
            102 => 
            array (
                'id' => 103,
                'product_id' => 52,
                'category_id' => 55,
            ),
            103 => 
            array (
                'id' => 104,
                'product_id' => 53,
                'category_id' => 54,
            ),
            104 => 
            array (
                'id' => 105,
                'product_id' => 53,
                'category_id' => 55,
            ),
            105 => 
            array (
                'id' => 106,
                'product_id' => 54,
                'category_id' => 54,
            ),
            106 => 
            array (
                'id' => 107,
                'product_id' => 54,
                'category_id' => 55,
            ),
            107 => 
            array (
                'id' => 108,
                'product_id' => 55,
                'category_id' => 54,
            ),
            108 => 
            array (
                'id' => 109,
                'product_id' => 55,
                'category_id' => 56,
            ),
            109 => 
            array (
                'id' => 110,
                'product_id' => 56,
                'category_id' => 54,
            ),
            110 => 
            array (
                'id' => 111,
                'product_id' => 56,
                'category_id' => 56,
            ),
            111 => 
            array (
                'id' => 112,
                'product_id' => 57,
                'category_id' => 54,
            ),
            112 => 
            array (
                'id' => 113,
                'product_id' => 57,
                'category_id' => 56,
            ),
            113 => 
            array (
                'id' => 114,
                'product_id' => 58,
                'category_id' => 54,
            ),
            114 => 
            array (
                'id' => 115,
                'product_id' => 58,
                'category_id' => 56,
            ),
            115 => 
            array (
                'id' => 116,
                'product_id' => 59,
                'category_id' => 54,
            ),
            116 => 
            array (
                'id' => 117,
                'product_id' => 59,
                'category_id' => 56,
            ),
            117 => 
            array (
                'id' => 118,
                'product_id' => 60,
                'category_id' => 54,
            ),
            118 => 
            array (
                'id' => 119,
                'product_id' => 60,
                'category_id' => 56,
            ),
            119 => 
            array (
                'id' => 120,
                'product_id' => 61,
                'category_id' => 54,
            ),
            120 => 
            array (
                'id' => 121,
                'product_id' => 61,
                'category_id' => 57,
            ),
            121 => 
            array (
                'id' => 122,
                'product_id' => 62,
                'category_id' => 54,
            ),
            122 => 
            array (
                'id' => 123,
                'product_id' => 62,
                'category_id' => 57,
            ),
            123 => 
            array (
                'id' => 124,
                'product_id' => 63,
                'category_id' => 54,
            ),
            124 => 
            array (
                'id' => 125,
                'product_id' => 63,
                'category_id' => 57,
            ),
            125 => 
            array (
                'id' => 126,
                'product_id' => 64,
                'category_id' => 54,
            ),
            126 => 
            array (
                'id' => 127,
                'product_id' => 64,
                'category_id' => 57,
            ),
            127 => 
            array (
                'id' => 128,
                'product_id' => 65,
                'category_id' => 58,
            ),
            128 => 
            array (
                'id' => 129,
                'product_id' => 65,
                'category_id' => 60,
            ),
            129 => 
            array (
                'id' => 130,
                'product_id' => 66,
                'category_id' => 58,
            ),
            130 => 
            array (
                'id' => 131,
                'product_id' => 66,
                'category_id' => 60,
            ),
            131 => 
            array (
                'id' => 132,
                'product_id' => 67,
                'category_id' => 58,
            ),
            132 => 
            array (
                'id' => 134,
                'product_id' => 68,
                'category_id' => 58,
            ),
            133 => 
            array (
                'id' => 135,
                'product_id' => 68,
                'category_id' => 60,
            ),
            134 => 
            array (
                'id' => 136,
                'product_id' => 69,
                'category_id' => 58,
            ),
            135 => 
            array (
                'id' => 137,
                'product_id' => 69,
                'category_id' => 61,
            ),
            136 => 
            array (
                'id' => 138,
                'product_id' => 67,
                'category_id' => 59,
            ),
            137 => 
            array (
                'id' => 139,
                'product_id' => 70,
                'category_id' => 58,
            ),
            138 => 
            array (
                'id' => 140,
                'product_id' => 70,
                'category_id' => 61,
            ),
            139 => 
            array (
                'id' => 141,
                'product_id' => 71,
                'category_id' => 58,
            ),
            140 => 
            array (
                'id' => 142,
                'product_id' => 71,
                'category_id' => 61,
            ),
            141 => 
            array (
                'id' => 143,
                'product_id' => 72,
                'category_id' => 58,
            ),
            142 => 
            array (
                'id' => 144,
                'product_id' => 72,
                'category_id' => 61,
            ),
            143 => 
            array (
                'id' => 145,
                'product_id' => 73,
                'category_id' => 58,
            ),
            144 => 
            array (
                'id' => 146,
                'product_id' => 73,
                'category_id' => 61,
            ),
            145 => 
            array (
                'id' => 147,
                'product_id' => 74,
                'category_id' => 58,
            ),
            146 => 
            array (
                'id' => 148,
                'product_id' => 74,
                'category_id' => 59,
            ),
            147 => 
            array (
                'id' => 149,
                'product_id' => 75,
                'category_id' => 58,
            ),
            148 => 
            array (
                'id' => 150,
                'product_id' => 75,
                'category_id' => 59,
            ),
            149 => 
            array (
                'id' => 151,
                'product_id' => 76,
                'category_id' => 58,
            ),
            150 => 
            array (
                'id' => 152,
                'product_id' => 76,
                'category_id' => 59,
            ),
            151 => 
            array (
                'id' => 153,
                'product_id' => 77,
                'category_id' => 58,
            ),
            152 => 
            array (
                'id' => 154,
                'product_id' => 77,
                'category_id' => 59,
            ),
            153 => 
            array (
                'id' => 155,
                'product_id' => 78,
                'category_id' => 58,
            ),
            154 => 
            array (
                'id' => 156,
                'product_id' => 78,
                'category_id' => 59,
            ),
            155 => 
            array (
                'id' => 157,
                'product_id' => 79,
                'category_id' => 58,
            ),
            156 => 
            array (
                'id' => 158,
                'product_id' => 79,
                'category_id' => 60,
            ),
            157 => 
            array (
                'id' => 159,
                'product_id' => 80,
                'category_id' => 58,
            ),
            158 => 
            array (
                'id' => 160,
                'product_id' => 80,
                'category_id' => 60,
            ),
            159 => 
            array (
                'id' => 161,
                'product_id' => 81,
                'category_id' => 58,
            ),
            160 => 
            array (
                'id' => 162,
                'product_id' => 81,
                'category_id' => 60,
            ),
            161 => 
            array (
                'id' => 163,
                'product_id' => 82,
                'category_id' => 58,
            ),
            162 => 
            array (
                'id' => 164,
                'product_id' => 82,
                'category_id' => 60,
            ),
            163 => 
            array (
                'id' => 165,
                'product_id' => 83,
                'category_id' => 17,
            ),
            164 => 
            array (
                'id' => 166,
                'product_id' => 84,
                'category_id' => 17,
            ),
            165 => 
            array (
                'id' => 167,
                'product_id' => 85,
                'category_id' => 17,
            ),
            166 => 
            array (
                'id' => 168,
                'product_id' => 86,
                'category_id' => 17,
            ),
            167 => 
            array (
                'id' => 169,
                'product_id' => 87,
                'category_id' => 49,
            ),
            168 => 
            array (
                'id' => 170,
                'product_id' => 88,
                'category_id' => 49,
            ),
            169 => 
            array (
                'id' => 171,
                'product_id' => 89,
                'category_id' => 49,
            ),
            170 => 
            array (
                'id' => 172,
                'product_id' => 90,
                'category_id' => 49,
            ),
            171 => 
            array (
                'id' => 173,
                'product_id' => 91,
                'category_id' => 49,
            ),
            172 => 
            array (
                'id' => 174,
                'product_id' => 92,
                'category_id' => 49,
            ),
            173 => 
            array (
                'id' => 175,
                'product_id' => 93,
                'category_id' => 48,
            ),
            174 => 
            array (
                'id' => 176,
                'product_id' => 94,
                'category_id' => 65,
            ),
            175 => 
            array (
                'id' => 177,
                'product_id' => 95,
                'category_id' => 65,
            ),
            176 => 
            array (
                'id' => 178,
                'product_id' => 96,
                'category_id' => 65,
            ),
            177 => 
            array (
                'id' => 179,
                'product_id' => 97,
                'category_id' => 65,
            ),
            178 => 
            array (
                'id' => 180,
                'product_id' => 98,
                'category_id' => 67,
            ),
            179 => 
            array (
                'id' => 181,
                'product_id' => 99,
                'category_id' => 67,
            ),
            180 => 
            array (
                'id' => 182,
                'product_id' => 100,
                'category_id' => 67,
            ),
            181 => 
            array (
                'id' => 183,
                'product_id' => 101,
                'category_id' => 67,
            ),
            182 => 
            array (
                'id' => 184,
                'product_id' => 102,
                'category_id' => 84,
            ),
            183 => 
            array (
                'id' => 185,
                'product_id' => 103,
                'category_id' => 84,
            ),
            184 => 
            array (
                'id' => 186,
                'product_id' => 104,
                'category_id' => 84,
            ),
            185 => 
            array (
                'id' => 187,
                'product_id' => 105,
                'category_id' => 84,
            ),
            186 => 
            array (
                'id' => 188,
                'product_id' => 106,
                'category_id' => 84,
            ),
            187 => 
            array (
                'id' => 189,
                'product_id' => 107,
                'category_id' => 84,
            ),
            188 => 
            array (
                'id' => 190,
                'product_id' => 108,
                'category_id' => 84,
            ),
            189 => 
            array (
                'id' => 191,
                'product_id' => 109,
                'category_id' => 84,
            ),
            190 => 
            array (
                'id' => 192,
                'product_id' => 110,
                'category_id' => 68,
            ),
            191 => 
            array (
                'id' => 193,
                'product_id' => 110,
                'category_id' => 69,
            ),
            192 => 
            array (
                'id' => 194,
                'product_id' => 111,
                'category_id' => 68,
            ),
            193 => 
            array (
                'id' => 195,
                'product_id' => 111,
                'category_id' => 71,
            ),
            194 => 
            array (
                'id' => 196,
                'product_id' => 112,
                'category_id' => 86,
            ),
            195 => 
            array (
                'id' => 197,
                'product_id' => 113,
                'category_id' => 68,
            ),
            196 => 
            array (
                'id' => 198,
                'product_id' => 113,
                'category_id' => 70,
            ),
            197 => 
            array (
                'id' => 199,
                'product_id' => 114,
                'category_id' => 68,
            ),
            198 => 
            array (
                'id' => 200,
                'product_id' => 114,
                'category_id' => 71,
            ),
            199 => 
            array (
                'id' => 201,
                'product_id' => 115,
                'category_id' => 85,
            ),
            200 => 
            array (
                'id' => 202,
                'product_id' => 116,
                'category_id' => 72,
            ),
            201 => 
            array (
                'id' => 203,
                'product_id' => 116,
                'category_id' => 75,
            ),
            202 => 
            array (
                'id' => 204,
                'product_id' => 117,
                'category_id' => 72,
            ),
            203 => 
            array (
                'id' => 205,
                'product_id' => 117,
                'category_id' => 75,
            ),
            204 => 
            array (
                'id' => 206,
                'product_id' => 118,
                'category_id' => 72,
            ),
            205 => 
            array (
                'id' => 207,
                'product_id' => 118,
                'category_id' => 75,
            ),
            206 => 
            array (
                'id' => 208,
                'product_id' => 119,
                'category_id' => 72,
            ),
            207 => 
            array (
                'id' => 209,
                'product_id' => 119,
                'category_id' => 76,
            ),
            208 => 
            array (
                'id' => 210,
                'product_id' => 120,
                'category_id' => 72,
            ),
            209 => 
            array (
                'id' => 211,
                'product_id' => 120,
                'category_id' => 76,
            ),
            210 => 
            array (
                'id' => 212,
                'product_id' => 121,
                'category_id' => 72,
            ),
            211 => 
            array (
                'id' => 213,
                'product_id' => 121,
                'category_id' => 76,
            ),
            212 => 
            array (
                'id' => 214,
                'product_id' => 122,
                'category_id' => 72,
            ),
            213 => 
            array (
                'id' => 215,
                'product_id' => 122,
                'category_id' => 73,
            ),
            214 => 
            array (
                'id' => 216,
                'product_id' => 123,
                'category_id' => 85,
            ),
            215 => 
            array (
                'id' => 217,
                'product_id' => 124,
                'category_id' => 72,
            ),
            216 => 
            array (
                'id' => 218,
                'product_id' => 124,
                'category_id' => 73,
            ),
            217 => 
            array (
                'id' => 219,
                'product_id' => 125,
                'category_id' => 85,
            ),
            218 => 
            array (
                'id' => 220,
                'product_id' => 126,
                'category_id' => 72,
            ),
            219 => 
            array (
                'id' => 221,
                'product_id' => 126,
                'category_id' => 73,
            ),
            220 => 
            array (
                'id' => 222,
                'product_id' => 127,
                'category_id' => 85,
            ),
            221 => 
            array (
                'id' => 223,
                'product_id' => 128,
                'category_id' => 72,
            ),
            222 => 
            array (
                'id' => 224,
                'product_id' => 128,
                'category_id' => 73,
            ),
            223 => 
            array (
                'id' => 225,
                'product_id' => 129,
                'category_id' => 85,
            ),
            224 => 
            array (
                'id' => 226,
                'product_id' => 130,
                'category_id' => 72,
            ),
            225 => 
            array (
                'id' => 227,
                'product_id' => 130,
                'category_id' => 73,
            ),
            226 => 
            array (
                'id' => 228,
                'product_id' => 131,
                'category_id' => 85,
            ),
            227 => 
            array (
                'id' => 229,
                'product_id' => 132,
                'category_id' => 72,
            ),
            228 => 
            array (
                'id' => 230,
                'product_id' => 132,
                'category_id' => 75,
            ),
            229 => 
            array (
                'id' => 231,
                'product_id' => 133,
                'category_id' => 72,
            ),
            230 => 
            array (
                'id' => 232,
                'product_id' => 133,
                'category_id' => 75,
            ),
            231 => 
            array (
                'id' => 233,
                'product_id' => 134,
                'category_id' => 72,
            ),
            232 => 
            array (
                'id' => 234,
                'product_id' => 134,
                'category_id' => 75,
            ),
            233 => 
            array (
                'id' => 235,
                'product_id' => 135,
                'category_id' => 72,
            ),
            234 => 
            array (
                'id' => 236,
                'product_id' => 135,
                'category_id' => 75,
            ),
            235 => 
            array (
                'id' => 237,
                'product_id' => 136,
                'category_id' => 72,
            ),
            236 => 
            array (
                'id' => 238,
                'product_id' => 136,
                'category_id' => 75,
            ),
            237 => 
            array (
                'id' => 239,
                'product_id' => 137,
                'category_id' => 72,
            ),
            238 => 
            array (
                'id' => 240,
                'product_id' => 137,
                'category_id' => 73,
            ),
            239 => 
            array (
                'id' => 241,
                'product_id' => 138,
                'category_id' => 72,
            ),
            240 => 
            array (
                'id' => 242,
                'product_id' => 138,
                'category_id' => 73,
            ),
            241 => 
            array (
                'id' => 243,
                'product_id' => 139,
                'category_id' => 72,
            ),
            242 => 
            array (
                'id' => 244,
                'product_id' => 139,
                'category_id' => 73,
            ),
            243 => 
            array (
                'id' => 245,
                'product_id' => 140,
                'category_id' => 72,
            ),
            244 => 
            array (
                'id' => 246,
                'product_id' => 140,
                'category_id' => 73,
            ),
            245 => 
            array (
                'id' => 247,
                'product_id' => 141,
                'category_id' => 72,
            ),
            246 => 
            array (
                'id' => 248,
                'product_id' => 141,
                'category_id' => 74,
            ),
            247 => 
            array (
                'id' => 249,
                'product_id' => 142,
                'category_id' => 72,
            ),
            248 => 
            array (
                'id' => 250,
                'product_id' => 142,
                'category_id' => 74,
            ),
            249 => 
            array (
                'id' => 251,
                'product_id' => 143,
                'category_id' => 72,
            ),
            250 => 
            array (
                'id' => 252,
                'product_id' => 143,
                'category_id' => 74,
            ),
            251 => 
            array (
                'id' => 253,
                'product_id' => 144,
                'category_id' => 72,
            ),
            252 => 
            array (
                'id' => 254,
                'product_id' => 144,
                'category_id' => 74,
            ),
            253 => 
            array (
                'id' => 255,
                'product_id' => 145,
                'category_id' => 72,
            ),
            254 => 
            array (
                'id' => 256,
                'product_id' => 145,
                'category_id' => 74,
            ),
            255 => 
            array (
                'id' => 257,
                'product_id' => 146,
                'category_id' => 72,
            ),
            256 => 
            array (
                'id' => 258,
                'product_id' => 146,
                'category_id' => 76,
            ),
            257 => 
            array (
                'id' => 259,
                'product_id' => 147,
                'category_id' => 72,
            ),
            258 => 
            array (
                'id' => 260,
                'product_id' => 147,
                'category_id' => 76,
            ),
            259 => 
            array (
                'id' => 261,
                'product_id' => 148,
                'category_id' => 72,
            ),
            260 => 
            array (
                'id' => 262,
                'product_id' => 148,
                'category_id' => 76,
            ),
            261 => 
            array (
                'id' => 263,
                'product_id' => 149,
                'category_id' => 72,
            ),
            262 => 
            array (
                'id' => 264,
                'product_id' => 149,
                'category_id' => 76,
            ),
            263 => 
            array (
                'id' => 265,
                'product_id' => 150,
                'category_id' => 72,
            ),
            264 => 
            array (
                'id' => 266,
                'product_id' => 150,
                'category_id' => 76,
            ),
            265 => 
            array (
                'id' => 267,
                'product_id' => 151,
                'category_id' => 72,
            ),
            266 => 
            array (
                'id' => 268,
                'product_id' => 151,
                'category_id' => 76,
            ),
            267 => 
            array (
                'id' => 269,
                'product_id' => 152,
                'category_id' => 72,
            ),
            268 => 
            array (
                'id' => 270,
                'product_id' => 152,
                'category_id' => 76,
            ),
            269 => 
            array (
                'id' => 271,
                'product_id' => 153,
                'category_id' => 72,
            ),
            270 => 
            array (
                'id' => 272,
                'product_id' => 153,
                'category_id' => 76,
            ),
            271 => 
            array (
                'id' => 273,
                'product_id' => 154,
                'category_id' => 72,
            ),
            272 => 
            array (
                'id' => 274,
                'product_id' => 154,
                'category_id' => 76,
            ),
            273 => 
            array (
                'id' => 275,
                'product_id' => 155,
                'category_id' => 77,
            ),
            274 => 
            array (
                'id' => 276,
                'product_id' => 155,
                'category_id' => 79,
            ),
            275 => 
            array (
                'id' => 277,
                'product_id' => 156,
                'category_id' => 77,
            ),
            276 => 
            array (
                'id' => 278,
                'product_id' => 156,
                'category_id' => 80,
            ),
            277 => 
            array (
                'id' => 279,
                'product_id' => 157,
                'category_id' => 77,
            ),
            278 => 
            array (
                'id' => 280,
                'product_id' => 157,
                'category_id' => 80,
            ),
            279 => 
            array (
                'id' => 281,
                'product_id' => 158,
                'category_id' => 77,
            ),
            280 => 
            array (
                'id' => 282,
                'product_id' => 158,
                'category_id' => 78,
            ),
            281 => 
            array (
                'id' => 283,
                'product_id' => 159,
                'category_id' => 77,
            ),
            282 => 
            array (
                'id' => 284,
                'product_id' => 159,
                'category_id' => 80,
            ),
            283 => 
            array (
                'id' => 285,
                'product_id' => 160,
                'category_id' => 77,
            ),
            284 => 
            array (
                'id' => 286,
                'product_id' => 160,
                'category_id' => 79,
            ),
            285 => 
            array (
                'id' => 287,
                'product_id' => 161,
                'category_id' => 77,
            ),
            286 => 
            array (
                'id' => 288,
                'product_id' => 161,
                'category_id' => 79,
            ),
            287 => 
            array (
                'id' => 289,
                'product_id' => 162,
                'category_id' => 77,
            ),
            288 => 
            array (
                'id' => 290,
                'product_id' => 162,
                'category_id' => 79,
            ),
            289 => 
            array (
                'id' => 291,
                'product_id' => 163,
                'category_id' => 77,
            ),
            290 => 
            array (
                'id' => 292,
                'product_id' => 163,
                'category_id' => 79,
            ),
            291 => 
            array (
                'id' => 293,
                'product_id' => 164,
                'category_id' => 77,
            ),
            292 => 
            array (
                'id' => 294,
                'product_id' => 164,
                'category_id' => 79,
            ),
            293 => 
            array (
                'id' => 295,
                'product_id' => 165,
                'category_id' => 77,
            ),
            294 => 
            array (
                'id' => 296,
                'product_id' => 165,
                'category_id' => 79,
            ),
            295 => 
            array (
                'id' => 297,
                'product_id' => 166,
                'category_id' => 77,
            ),
            296 => 
            array (
                'id' => 298,
                'product_id' => 166,
                'category_id' => 78,
            ),
            297 => 
            array (
                'id' => 299,
                'product_id' => 167,
                'category_id' => 77,
            ),
            298 => 
            array (
                'id' => 300,
                'product_id' => 167,
                'category_id' => 78,
            ),
            299 => 
            array (
                'id' => 301,
                'product_id' => 168,
                'category_id' => 77,
            ),
            300 => 
            array (
                'id' => 302,
                'product_id' => 168,
                'category_id' => 78,
            ),
            301 => 
            array (
                'id' => 303,
                'product_id' => 169,
                'category_id' => 77,
            ),
            302 => 
            array (
                'id' => 304,
                'product_id' => 169,
                'category_id' => 80,
            ),
            303 => 
            array (
                'id' => 305,
                'product_id' => 170,
                'category_id' => 77,
            ),
            304 => 
            array (
                'id' => 306,
                'product_id' => 170,
                'category_id' => 80,
            ),
            305 => 
            array (
                'id' => 307,
                'product_id' => 171,
                'category_id' => 77,
            ),
            306 => 
            array (
                'id' => 308,
                'product_id' => 171,
                'category_id' => 80,
            ),
            307 => 
            array (
                'id' => 309,
                'product_id' => 172,
                'category_id' => 77,
            ),
            308 => 
            array (
                'id' => 310,
                'product_id' => 172,
                'category_id' => 80,
            ),
            309 => 
            array (
                'id' => 311,
                'product_id' => 173,
                'category_id' => 77,
            ),
            310 => 
            array (
                'id' => 312,
                'product_id' => 173,
                'category_id' => 80,
            ),
            311 => 
            array (
                'id' => 313,
                'product_id' => 174,
                'category_id' => 81,
            ),
            312 => 
            array (
                'id' => 314,
                'product_id' => 175,
                'category_id' => 82,
            ),
            313 => 
            array (
                'id' => 315,
                'product_id' => 176,
                'category_id' => 82,
            ),
            314 => 
            array (
                'id' => 316,
                'product_id' => 177,
                'category_id' => 82,
            ),
            315 => 
            array (
                'id' => 317,
                'product_id' => 178,
                'category_id' => 82,
            ),
            316 => 
            array (
                'id' => 318,
                'product_id' => 179,
                'category_id' => 83,
            ),
            317 => 
            array (
                'id' => 319,
                'product_id' => 180,
                'category_id' => 83,
            ),
            318 => 
            array (
                'id' => 320,
                'product_id' => 181,
                'category_id' => 4,
            ),
            319 => 
            array (
                'id' => 321,
                'product_id' => 181,
                'category_id' => 5,
            ),
            320 => 
            array (
                'id' => 322,
                'product_id' => 182,
                'category_id' => 4,
            ),
            321 => 
            array (
                'id' => 323,
                'product_id' => 182,
                'category_id' => 5,
            ),
            322 => 
            array (
                'id' => 324,
                'product_id' => 183,
                'category_id' => 4,
            ),
            323 => 
            array (
                'id' => 325,
                'product_id' => 183,
                'category_id' => 5,
            ),
            324 => 
            array (
                'id' => 326,
                'product_id' => 184,
                'category_id' => 4,
            ),
            325 => 
            array (
                'id' => 327,
                'product_id' => 184,
                'category_id' => 5,
            ),
            326 => 
            array (
                'id' => 328,
                'product_id' => 185,
                'category_id' => 4,
            ),
            327 => 
            array (
                'id' => 329,
                'product_id' => 185,
                'category_id' => 5,
            ),
            328 => 
            array (
                'id' => 330,
                'product_id' => 186,
                'category_id' => 4,
            ),
            329 => 
            array (
                'id' => 331,
                'product_id' => 186,
                'category_id' => 6,
            ),
            330 => 
            array (
                'id' => 332,
                'product_id' => 187,
                'category_id' => 4,
            ),
            331 => 
            array (
                'id' => 333,
                'product_id' => 187,
                'category_id' => 6,
            ),
            332 => 
            array (
                'id' => 334,
                'product_id' => 188,
                'category_id' => 4,
            ),
            333 => 
            array (
                'id' => 335,
                'product_id' => 188,
                'category_id' => 6,
            ),
            334 => 
            array (
                'id' => 336,
                'product_id' => 189,
                'category_id' => 4,
            ),
            335 => 
            array (
                'id' => 337,
                'product_id' => 189,
                'category_id' => 6,
            ),
            336 => 
            array (
                'id' => 338,
                'product_id' => 190,
                'category_id' => 4,
            ),
            337 => 
            array (
                'id' => 339,
                'product_id' => 190,
                'category_id' => 6,
            ),
            338 => 
            array (
                'id' => 340,
                'product_id' => 191,
                'category_id' => 7,
            ),
            339 => 
            array (
                'id' => 341,
                'product_id' => 191,
                'category_id' => 8,
            ),
            340 => 
            array (
                'id' => 342,
                'product_id' => 192,
                'category_id' => 7,
            ),
            341 => 
            array (
                'id' => 343,
                'product_id' => 192,
                'category_id' => 8,
            ),
            342 => 
            array (
                'id' => 344,
                'product_id' => 193,
                'category_id' => 7,
            ),
            343 => 
            array (
                'id' => 345,
                'product_id' => 193,
                'category_id' => 8,
            ),
            344 => 
            array (
                'id' => 346,
                'product_id' => 194,
                'category_id' => 7,
            ),
            345 => 
            array (
                'id' => 347,
                'product_id' => 194,
                'category_id' => 8,
            ),
            346 => 
            array (
                'id' => 348,
                'product_id' => 195,
                'category_id' => 7,
            ),
            347 => 
            array (
                'id' => 349,
                'product_id' => 195,
                'category_id' => 8,
            ),
            348 => 
            array (
                'id' => 350,
                'product_id' => 196,
                'category_id' => 7,
            ),
            349 => 
            array (
                'id' => 351,
                'product_id' => 196,
                'category_id' => 8,
            ),
            350 => 
            array (
                'id' => 352,
                'product_id' => 197,
                'category_id' => 7,
            ),
            351 => 
            array (
                'id' => 353,
                'product_id' => 197,
                'category_id' => 8,
            ),
            352 => 
            array (
                'id' => 354,
                'product_id' => 198,
                'category_id' => 7,
            ),
            353 => 
            array (
                'id' => 355,
                'product_id' => 198,
                'category_id' => 8,
            ),
            354 => 
            array (
                'id' => 356,
                'product_id' => 199,
                'category_id' => 7,
            ),
            355 => 
            array (
                'id' => 357,
                'product_id' => 199,
                'category_id' => 8,
            ),
            356 => 
            array (
                'id' => 358,
                'product_id' => 200,
                'category_id' => 7,
            ),
            357 => 
            array (
                'id' => 359,
                'product_id' => 200,
                'category_id' => 9,
            ),
            358 => 
            array (
                'id' => 360,
                'product_id' => 201,
                'category_id' => 7,
            ),
            359 => 
            array (
                'id' => 361,
                'product_id' => 201,
                'category_id' => 9,
            ),
            360 => 
            array (
                'id' => 362,
                'product_id' => 202,
                'category_id' => 7,
            ),
            361 => 
            array (
                'id' => 363,
                'product_id' => 202,
                'category_id' => 9,
            ),
            362 => 
            array (
                'id' => 364,
                'product_id' => 203,
                'category_id' => 7,
            ),
            363 => 
            array (
                'id' => 365,
                'product_id' => 203,
                'category_id' => 9,
            ),
            364 => 
            array (
                'id' => 366,
                'product_id' => 204,
                'category_id' => 7,
            ),
            365 => 
            array (
                'id' => 367,
                'product_id' => 204,
                'category_id' => 9,
            ),
            366 => 
            array (
                'id' => 368,
                'product_id' => 205,
                'category_id' => 7,
            ),
            367 => 
            array (
                'id' => 369,
                'product_id' => 205,
                'category_id' => 9,
            ),
            368 => 
            array (
                'id' => 370,
                'product_id' => 206,
                'category_id' => 7,
            ),
            369 => 
            array (
                'id' => 371,
                'product_id' => 206,
                'category_id' => 9,
            ),
            370 => 
            array (
                'id' => 372,
                'product_id' => 207,
                'category_id' => 7,
            ),
            371 => 
            array (
                'id' => 373,
                'product_id' => 207,
                'category_id' => 9,
            ),
            372 => 
            array (
                'id' => 374,
                'product_id' => 208,
                'category_id' => 7,
            ),
            373 => 
            array (
                'id' => 375,
                'product_id' => 208,
                'category_id' => 9,
            ),
            374 => 
            array (
                'id' => 376,
                'product_id' => 209,
                'category_id' => 7,
            ),
            375 => 
            array (
                'id' => 377,
                'product_id' => 209,
                'category_id' => 9,
            ),
            376 => 
            array (
                'id' => 378,
                'product_id' => 210,
                'category_id' => 7,
            ),
            377 => 
            array (
                'id' => 379,
                'product_id' => 210,
                'category_id' => 9,
            ),
            378 => 
            array (
                'id' => 380,
                'product_id' => 211,
                'category_id' => 7,
            ),
            379 => 
            array (
                'id' => 381,
                'product_id' => 211,
                'category_id' => 9,
            ),
            380 => 
            array (
                'id' => 382,
                'product_id' => 212,
                'category_id' => 7,
            ),
            381 => 
            array (
                'id' => 383,
                'product_id' => 212,
                'category_id' => 10,
            ),
            382 => 
            array (
                'id' => 384,
                'product_id' => 213,
                'category_id' => 7,
            ),
            383 => 
            array (
                'id' => 385,
                'product_id' => 213,
                'category_id' => 10,
            ),
            384 => 
            array (
                'id' => 386,
                'product_id' => 214,
                'category_id' => 7,
            ),
            385 => 
            array (
                'id' => 387,
                'product_id' => 214,
                'category_id' => 10,
            ),
            386 => 
            array (
                'id' => 388,
                'product_id' => 215,
                'category_id' => 7,
            ),
            387 => 
            array (
                'id' => 389,
                'product_id' => 215,
                'category_id' => 10,
            ),
            388 => 
            array (
                'id' => 390,
                'product_id' => 216,
                'category_id' => 7,
            ),
            389 => 
            array (
                'id' => 391,
                'product_id' => 216,
                'category_id' => 10,
            ),
            390 => 
            array (
                'id' => 392,
                'product_id' => 217,
                'category_id' => 7,
            ),
            391 => 
            array (
                'id' => 393,
                'product_id' => 217,
                'category_id' => 10,
            ),
            392 => 
            array (
                'id' => 394,
                'product_id' => 218,
                'category_id' => 7,
            ),
            393 => 
            array (
                'id' => 395,
                'product_id' => 218,
                'category_id' => 10,
            ),
            394 => 
            array (
                'id' => 396,
                'product_id' => 219,
                'category_id' => 7,
            ),
            395 => 
            array (
                'id' => 397,
                'product_id' => 219,
                'category_id' => 10,
            ),
            396 => 
            array (
                'id' => 398,
                'product_id' => 220,
                'category_id' => 7,
            ),
            397 => 
            array (
                'id' => 399,
                'product_id' => 220,
                'category_id' => 10,
            ),
            398 => 
            array (
                'id' => 400,
                'product_id' => 221,
                'category_id' => 7,
            ),
            399 => 
            array (
                'id' => 401,
                'product_id' => 221,
                'category_id' => 10,
            ),
            400 => 
            array (
                'id' => 402,
                'product_id' => 222,
                'category_id' => 7,
            ),
            401 => 
            array (
                'id' => 403,
                'product_id' => 222,
                'category_id' => 10,
            ),
            402 => 
            array (
                'id' => 404,
                'product_id' => 223,
                'category_id' => 7,
            ),
            403 => 
            array (
                'id' => 405,
                'product_id' => 223,
                'category_id' => 10,
            ),
            404 => 
            array (
                'id' => 406,
                'product_id' => 224,
                'category_id' => 7,
            ),
            405 => 
            array (
                'id' => 407,
                'product_id' => 224,
                'category_id' => 10,
            ),
            406 => 
            array (
                'id' => 408,
                'product_id' => 225,
                'category_id' => 7,
            ),
            407 => 
            array (
                'id' => 409,
                'product_id' => 225,
                'category_id' => 10,
            ),
            408 => 
            array (
                'id' => 410,
                'product_id' => 226,
                'category_id' => 7,
            ),
            409 => 
            array (
                'id' => 411,
                'product_id' => 226,
                'category_id' => 11,
            ),
            410 => 
            array (
                'id' => 412,
                'product_id' => 227,
                'category_id' => 7,
            ),
            411 => 
            array (
                'id' => 413,
                'product_id' => 227,
                'category_id' => 11,
            ),
            412 => 
            array (
                'id' => 414,
                'product_id' => 228,
                'category_id' => 7,
            ),
            413 => 
            array (
                'id' => 415,
                'product_id' => 228,
                'category_id' => 11,
            ),
            414 => 
            array (
                'id' => 416,
                'product_id' => 229,
                'category_id' => 7,
            ),
            415 => 
            array (
                'id' => 417,
                'product_id' => 229,
                'category_id' => 11,
            ),
            416 => 
            array (
                'id' => 418,
                'product_id' => 230,
                'category_id' => 7,
            ),
            417 => 
            array (
                'id' => 419,
                'product_id' => 230,
                'category_id' => 11,
            ),
            418 => 
            array (
                'id' => 420,
                'product_id' => 231,
                'category_id' => 7,
            ),
            419 => 
            array (
                'id' => 421,
                'product_id' => 231,
                'category_id' => 11,
            ),
            420 => 
            array (
                'id' => 422,
                'product_id' => 232,
                'category_id' => 1,
            ),
            421 => 
            array (
                'id' => 423,
                'product_id' => 232,
                'category_id' => 2,
            ),
            422 => 
            array (
                'id' => 424,
                'product_id' => 233,
                'category_id' => 7,
            ),
            423 => 
            array (
                'id' => 425,
                'product_id' => 233,
                'category_id' => 11,
            ),
            424 => 
            array (
                'id' => 426,
                'product_id' => 234,
                'category_id' => 7,
            ),
            425 => 
            array (
                'id' => 427,
                'product_id' => 234,
                'category_id' => 11,
            ),
            426 => 
            array (
                'id' => 428,
                'product_id' => 235,
                'category_id' => 7,
            ),
            427 => 
            array (
                'id' => 429,
                'product_id' => 235,
                'category_id' => 8,
            ),
            428 => 
            array (
                'id' => 430,
                'product_id' => 236,
                'category_id' => 7,
            ),
            429 => 
            array (
                'id' => 431,
                'product_id' => 236,
                'category_id' => 8,
            ),
            430 => 
            array (
                'id' => 432,
                'product_id' => 237,
                'category_id' => 7,
            ),
            431 => 
            array (
                'id' => 433,
                'product_id' => 237,
                'category_id' => 8,
            ),
            432 => 
            array (
                'id' => 434,
                'product_id' => 238,
                'category_id' => 7,
            ),
            433 => 
            array (
                'id' => 435,
                'product_id' => 238,
                'category_id' => 8,
            ),
            434 => 
            array (
                'id' => 436,
                'product_id' => 239,
                'category_id' => 7,
            ),
            435 => 
            array (
                'id' => 437,
                'product_id' => 239,
                'category_id' => 8,
            ),
            436 => 
            array (
                'id' => 438,
                'product_id' => 240,
                'category_id' => 7,
            ),
            437 => 
            array (
                'id' => 439,
                'product_id' => 240,
                'category_id' => 8,
            ),
            438 => 
            array (
                'id' => 440,
                'product_id' => 241,
                'category_id' => 7,
            ),
            439 => 
            array (
                'id' => 441,
                'product_id' => 241,
                'category_id' => 8,
            ),
            440 => 
            array (
                'id' => 442,
                'product_id' => 242,
                'category_id' => 7,
            ),
            441 => 
            array (
                'id' => 443,
                'product_id' => 242,
                'category_id' => 8,
            ),
            442 => 
            array (
                'id' => 444,
                'product_id' => 243,
                'category_id' => 7,
            ),
            443 => 
            array (
                'id' => 445,
                'product_id' => 243,
                'category_id' => 8,
            ),
            444 => 
            array (
                'id' => 446,
                'product_id' => 244,
                'category_id' => 7,
            ),
            445 => 
            array (
                'id' => 447,
                'product_id' => 244,
                'category_id' => 8,
            ),
            446 => 
            array (
                'id' => 448,
                'product_id' => 245,
                'category_id' => 7,
            ),
            447 => 
            array (
                'id' => 449,
                'product_id' => 245,
                'category_id' => 8,
            ),
            448 => 
            array (
                'id' => 450,
                'product_id' => 246,
                'category_id' => 7,
            ),
            449 => 
            array (
                'id' => 451,
                'product_id' => 246,
                'category_id' => 11,
            ),
            450 => 
            array (
                'id' => 452,
                'product_id' => 247,
                'category_id' => 7,
            ),
            451 => 
            array (
                'id' => 453,
                'product_id' => 247,
                'category_id' => 11,
            ),
            452 => 
            array (
                'id' => 454,
                'product_id' => 248,
                'category_id' => 7,
            ),
            453 => 
            array (
                'id' => 455,
                'product_id' => 248,
                'category_id' => 11,
            ),
            454 => 
            array (
                'id' => 456,
                'product_id' => 249,
                'category_id' => 7,
            ),
            455 => 
            array (
                'id' => 457,
                'product_id' => 249,
                'category_id' => 11,
            ),
            456 => 
            array (
                'id' => 458,
                'product_id' => 250,
                'category_id' => 7,
            ),
            457 => 
            array (
                'id' => 459,
                'product_id' => 250,
                'category_id' => 11,
            ),
            458 => 
            array (
                'id' => 460,
                'product_id' => 251,
                'category_id' => 7,
            ),
            459 => 
            array (
                'id' => 461,
                'product_id' => 251,
                'category_id' => 11,
            ),
            460 => 
            array (
                'id' => 462,
                'product_id' => 252,
                'category_id' => 7,
            ),
            461 => 
            array (
                'id' => 463,
                'product_id' => 252,
                'category_id' => 11,
            ),
            462 => 
            array (
                'id' => 464,
                'product_id' => 253,
                'category_id' => 7,
            ),
            463 => 
            array (
                'id' => 465,
                'product_id' => 253,
                'category_id' => 12,
            ),
            464 => 
            array (
                'id' => 466,
                'product_id' => 254,
                'category_id' => 7,
            ),
            465 => 
            array (
                'id' => 467,
                'product_id' => 254,
                'category_id' => 12,
            ),
            466 => 
            array (
                'id' => 468,
                'product_id' => 255,
                'category_id' => 7,
            ),
            467 => 
            array (
                'id' => 469,
                'product_id' => 255,
                'category_id' => 12,
            ),
            468 => 
            array (
                'id' => 470,
                'product_id' => 256,
                'category_id' => 7,
            ),
            469 => 
            array (
                'id' => 471,
                'product_id' => 256,
                'category_id' => 12,
            ),
            470 => 
            array (
                'id' => 472,
                'product_id' => 257,
                'category_id' => 7,
            ),
            471 => 
            array (
                'id' => 473,
                'product_id' => 257,
                'category_id' => 12,
            ),
            472 => 
            array (
                'id' => 474,
                'product_id' => 258,
                'category_id' => 7,
            ),
            473 => 
            array (
                'id' => 475,
                'product_id' => 258,
                'category_id' => 12,
            ),
            474 => 
            array (
                'id' => 476,
                'product_id' => 259,
                'category_id' => 7,
            ),
            475 => 
            array (
                'id' => 477,
                'product_id' => 259,
                'category_id' => 12,
            ),
            476 => 
            array (
                'id' => 478,
                'product_id' => 260,
                'category_id' => 7,
            ),
            477 => 
            array (
                'id' => 479,
                'product_id' => 260,
                'category_id' => 14,
            ),
            478 => 
            array (
                'id' => 480,
                'product_id' => 261,
                'category_id' => 7,
            ),
            479 => 
            array (
                'id' => 481,
                'product_id' => 261,
                'category_id' => 14,
            ),
            480 => 
            array (
                'id' => 482,
                'product_id' => 262,
                'category_id' => 7,
            ),
            481 => 
            array (
                'id' => 483,
                'product_id' => 262,
                'category_id' => 14,
            ),
            482 => 
            array (
                'id' => 484,
                'product_id' => 263,
                'category_id' => 7,
            ),
            483 => 
            array (
                'id' => 485,
                'product_id' => 263,
                'category_id' => 14,
            ),
            484 => 
            array (
                'id' => 486,
                'product_id' => 264,
                'category_id' => 7,
            ),
            485 => 
            array (
                'id' => 487,
                'product_id' => 264,
                'category_id' => 14,
            ),
            486 => 
            array (
                'id' => 488,
                'product_id' => 265,
                'category_id' => 13,
            ),
            487 => 
            array (
                'id' => 489,
                'product_id' => 265,
                'category_id' => 15,
            ),
            488 => 
            array (
                'id' => 490,
                'product_id' => 266,
                'category_id' => 13,
            ),
            489 => 
            array (
                'id' => 491,
                'product_id' => 266,
                'category_id' => 15,
            ),
            490 => 
            array (
                'id' => 492,
                'product_id' => 267,
                'category_id' => 13,
            ),
            491 => 
            array (
                'id' => 493,
                'product_id' => 267,
                'category_id' => 15,
            ),
            492 => 
            array (
                'id' => 494,
                'product_id' => 268,
                'category_id' => 13,
            ),
            493 => 
            array (
                'id' => 495,
                'product_id' => 268,
                'category_id' => 15,
            ),
            494 => 
            array (
                'id' => 496,
                'product_id' => 269,
                'category_id' => 13,
            ),
            495 => 
            array (
                'id' => 497,
                'product_id' => 269,
                'category_id' => 15,
            ),
            496 => 
            array (
                'id' => 498,
                'product_id' => 270,
                'category_id' => 13,
            ),
            497 => 
            array (
                'id' => 499,
                'product_id' => 270,
                'category_id' => 15,
            ),
            498 => 
            array (
                'id' => 500,
                'product_id' => 271,
                'category_id' => 13,
            ),
            499 => 
            array (
                'id' => 501,
                'product_id' => 271,
                'category_id' => 15,
            ),
        ));
        \DB::table('category_product')->insert(array (
            0 => 
            array (
                'id' => 502,
                'product_id' => 272,
                'category_id' => 13,
            ),
            1 => 
            array (
                'id' => 503,
                'product_id' => 272,
                'category_id' => 16,
            ),
            2 => 
            array (
                'id' => 504,
                'product_id' => 273,
                'category_id' => 13,
            ),
            3 => 
            array (
                'id' => 505,
                'product_id' => 273,
                'category_id' => 16,
            ),
            4 => 
            array (
                'id' => 506,
                'product_id' => 274,
                'category_id' => 13,
            ),
            5 => 
            array (
                'id' => 507,
                'product_id' => 274,
                'category_id' => 16,
            ),
            6 => 
            array (
                'id' => 508,
                'product_id' => 275,
                'category_id' => 13,
            ),
            7 => 
            array (
                'id' => 509,
                'product_id' => 275,
                'category_id' => 16,
            ),
            8 => 
            array (
                'id' => 510,
                'product_id' => 276,
                'category_id' => 13,
            ),
            9 => 
            array (
                'id' => 511,
                'product_id' => 276,
                'category_id' => 16,
            ),
            10 => 
            array (
                'id' => 512,
                'product_id' => 277,
                'category_id' => 13,
            ),
            11 => 
            array (
                'id' => 513,
                'product_id' => 277,
                'category_id' => 16,
            ),
            12 => 
            array (
                'id' => 514,
                'product_id' => 278,
                'category_id' => 13,
            ),
            13 => 
            array (
                'id' => 515,
                'product_id' => 278,
                'category_id' => 16,
            ),
            14 => 
            array (
                'id' => 516,
                'product_id' => 279,
                'category_id' => 18,
            ),
            15 => 
            array (
                'id' => 517,
                'product_id' => 279,
                'category_id' => 19,
            ),
            16 => 
            array (
                'id' => 518,
                'product_id' => 280,
                'category_id' => 18,
            ),
            17 => 
            array (
                'id' => 519,
                'product_id' => 280,
                'category_id' => 19,
            ),
            18 => 
            array (
                'id' => 520,
                'product_id' => 281,
                'category_id' => 18,
            ),
            19 => 
            array (
                'id' => 521,
                'product_id' => 281,
                'category_id' => 19,
            ),
            20 => 
            array (
                'id' => 522,
                'product_id' => 282,
                'category_id' => 18,
            ),
            21 => 
            array (
                'id' => 523,
                'product_id' => 282,
                'category_id' => 19,
            ),
            22 => 
            array (
                'id' => 524,
                'product_id' => 283,
                'category_id' => 18,
            ),
            23 => 
            array (
                'id' => 525,
                'product_id' => 283,
                'category_id' => 19,
            ),
            24 => 
            array (
                'id' => 526,
                'product_id' => 284,
                'category_id' => 18,
            ),
            25 => 
            array (
                'id' => 527,
                'product_id' => 284,
                'category_id' => 19,
            ),
            26 => 
            array (
                'id' => 528,
                'product_id' => 285,
                'category_id' => 18,
            ),
            27 => 
            array (
                'id' => 529,
                'product_id' => 285,
                'category_id' => 19,
            ),
            28 => 
            array (
                'id' => 530,
                'product_id' => 286,
                'category_id' => 18,
            ),
            29 => 
            array (
                'id' => 531,
                'product_id' => 286,
                'category_id' => 19,
            ),
            30 => 
            array (
                'id' => 532,
                'product_id' => 287,
                'category_id' => 18,
            ),
            31 => 
            array (
                'id' => 533,
                'product_id' => 287,
                'category_id' => 20,
            ),
            32 => 
            array (
                'id' => 534,
                'product_id' => 288,
                'category_id' => 18,
            ),
            33 => 
            array (
                'id' => 535,
                'product_id' => 288,
                'category_id' => 20,
            ),
            34 => 
            array (
                'id' => 536,
                'product_id' => 289,
                'category_id' => 18,
            ),
            35 => 
            array (
                'id' => 537,
                'product_id' => 289,
                'category_id' => 20,
            ),
            36 => 
            array (
                'id' => 538,
                'product_id' => 290,
                'category_id' => 18,
            ),
            37 => 
            array (
                'id' => 539,
                'product_id' => 290,
                'category_id' => 20,
            ),
            38 => 
            array (
                'id' => 540,
                'product_id' => 291,
                'category_id' => 18,
            ),
            39 => 
            array (
                'id' => 541,
                'product_id' => 291,
                'category_id' => 20,
            ),
            40 => 
            array (
                'id' => 542,
                'product_id' => 292,
                'category_id' => 18,
            ),
            41 => 
            array (
                'id' => 543,
                'product_id' => 292,
                'category_id' => 20,
            ),
            42 => 
            array (
                'id' => 544,
                'product_id' => 293,
                'category_id' => 18,
            ),
            43 => 
            array (
                'id' => 545,
                'product_id' => 293,
                'category_id' => 20,
            ),
            44 => 
            array (
                'id' => 546,
                'product_id' => 294,
                'category_id' => 18,
            ),
            45 => 
            array (
                'id' => 547,
                'product_id' => 294,
                'category_id' => 22,
            ),
            46 => 
            array (
                'id' => 548,
                'product_id' => 295,
                'category_id' => 18,
            ),
            47 => 
            array (
                'id' => 549,
                'product_id' => 295,
                'category_id' => 22,
            ),
            48 => 
            array (
                'id' => 550,
                'product_id' => 296,
                'category_id' => 18,
            ),
            49 => 
            array (
                'id' => 551,
                'product_id' => 296,
                'category_id' => 22,
            ),
            50 => 
            array (
                'id' => 552,
                'product_id' => 297,
                'category_id' => 18,
            ),
            51 => 
            array (
                'id' => 553,
                'product_id' => 297,
                'category_id' => 22,
            ),
            52 => 
            array (
                'id' => 554,
                'product_id' => 298,
                'category_id' => 18,
            ),
            53 => 
            array (
                'id' => 555,
                'product_id' => 298,
                'category_id' => 22,
            ),
            54 => 
            array (
                'id' => 556,
                'product_id' => 299,
                'category_id' => 18,
            ),
            55 => 
            array (
                'id' => 557,
                'product_id' => 299,
                'category_id' => 22,
            ),
            56 => 
            array (
                'id' => 558,
                'product_id' => 300,
                'category_id' => 18,
            ),
            57 => 
            array (
                'id' => 559,
                'product_id' => 300,
                'category_id' => 22,
            ),
            58 => 
            array (
                'id' => 560,
                'product_id' => 301,
                'category_id' => 23,
            ),
            59 => 
            array (
                'id' => 561,
                'product_id' => 301,
                'category_id' => 25,
            ),
            60 => 
            array (
                'id' => 562,
                'product_id' => 302,
                'category_id' => 23,
            ),
            61 => 
            array (
                'id' => 563,
                'product_id' => 302,
                'category_id' => 25,
            ),
            62 => 
            array (
                'id' => 564,
                'product_id' => 303,
                'category_id' => 23,
            ),
            63 => 
            array (
                'id' => 565,
                'product_id' => 303,
                'category_id' => 25,
            ),
            64 => 
            array (
                'id' => 566,
                'product_id' => 304,
                'category_id' => 23,
            ),
            65 => 
            array (
                'id' => 567,
                'product_id' => 304,
                'category_id' => 25,
            ),
            66 => 
            array (
                'id' => 568,
                'product_id' => 305,
                'category_id' => 23,
            ),
            67 => 
            array (
                'id' => 569,
                'product_id' => 305,
                'category_id' => 25,
            ),
            68 => 
            array (
                'id' => 570,
                'product_id' => 306,
                'category_id' => 23,
            ),
            69 => 
            array (
                'id' => 571,
                'product_id' => 306,
                'category_id' => 25,
            ),
            70 => 
            array (
                'id' => 572,
                'product_id' => 307,
                'category_id' => 23,
            ),
            71 => 
            array (
                'id' => 573,
                'product_id' => 307,
                'category_id' => 26,
            ),
            72 => 
            array (
                'id' => 574,
                'product_id' => 308,
                'category_id' => 23,
            ),
            73 => 
            array (
                'id' => 575,
                'product_id' => 308,
                'category_id' => 26,
            ),
            74 => 
            array (
                'id' => 576,
                'product_id' => 309,
                'category_id' => 23,
            ),
            75 => 
            array (
                'id' => 577,
                'product_id' => 309,
                'category_id' => 26,
            ),
            76 => 
            array (
                'id' => 578,
                'product_id' => 310,
                'category_id' => 23,
            ),
            77 => 
            array (
                'id' => 579,
                'product_id' => 310,
                'category_id' => 26,
            ),
            78 => 
            array (
                'id' => 580,
                'product_id' => 311,
                'category_id' => 23,
            ),
            79 => 
            array (
                'id' => 581,
                'product_id' => 311,
                'category_id' => 26,
            ),
            80 => 
            array (
                'id' => 582,
                'product_id' => 312,
                'category_id' => 23,
            ),
            81 => 
            array (
                'id' => 583,
                'product_id' => 312,
                'category_id' => 26,
            ),
            82 => 
            array (
                'id' => 584,
                'product_id' => 313,
                'category_id' => 23,
            ),
            83 => 
            array (
                'id' => 585,
                'product_id' => 313,
                'category_id' => 24,
            ),
            84 => 
            array (
                'id' => 586,
                'product_id' => 314,
                'category_id' => 23,
            ),
            85 => 
            array (
                'id' => 587,
                'product_id' => 314,
                'category_id' => 24,
            ),
            86 => 
            array (
                'id' => 588,
                'product_id' => 315,
                'category_id' => 23,
            ),
            87 => 
            array (
                'id' => 589,
                'product_id' => 315,
                'category_id' => 24,
            ),
            88 => 
            array (
                'id' => 590,
                'product_id' => 316,
                'category_id' => 23,
            ),
            89 => 
            array (
                'id' => 591,
                'product_id' => 316,
                'category_id' => 24,
            ),
            90 => 
            array (
                'id' => 592,
                'product_id' => 317,
                'category_id' => 23,
            ),
            91 => 
            array (
                'id' => 593,
                'product_id' => 317,
                'category_id' => 24,
            ),
            92 => 
            array (
                'id' => 594,
                'product_id' => 318,
                'category_id' => 23,
            ),
            93 => 
            array (
                'id' => 595,
                'product_id' => 318,
                'category_id' => 24,
            ),
            94 => 
            array (
                'id' => 596,
                'product_id' => 319,
                'category_id' => 23,
            ),
            95 => 
            array (
                'id' => 597,
                'product_id' => 319,
                'category_id' => 27,
            ),
            96 => 
            array (
                'id' => 598,
                'product_id' => 320,
                'category_id' => 23,
            ),
            97 => 
            array (
                'id' => 599,
                'product_id' => 320,
                'category_id' => 27,
            ),
            98 => 
            array (
                'id' => 600,
                'product_id' => 321,
                'category_id' => 23,
            ),
            99 => 
            array (
                'id' => 601,
                'product_id' => 321,
                'category_id' => 27,
            ),
            100 => 
            array (
                'id' => 602,
                'product_id' => 322,
                'category_id' => 23,
            ),
            101 => 
            array (
                'id' => 603,
                'product_id' => 322,
                'category_id' => 27,
            ),
            102 => 
            array (
                'id' => 604,
                'product_id' => 323,
                'category_id' => 23,
            ),
            103 => 
            array (
                'id' => 605,
                'product_id' => 323,
                'category_id' => 27,
            ),
            104 => 
            array (
                'id' => 606,
                'product_id' => 324,
                'category_id' => 23,
            ),
            105 => 
            array (
                'id' => 607,
                'product_id' => 324,
                'category_id' => 27,
            ),
            106 => 
            array (
                'id' => 608,
                'product_id' => 325,
                'category_id' => 28,
            ),
            107 => 
            array (
                'id' => 609,
                'product_id' => 325,
                'category_id' => 29,
            ),
            108 => 
            array (
                'id' => 610,
                'product_id' => 326,
                'category_id' => 28,
            ),
            109 => 
            array (
                'id' => 611,
                'product_id' => 326,
                'category_id' => 29,
            ),
            110 => 
            array (
                'id' => 612,
                'product_id' => 327,
                'category_id' => 28,
            ),
            111 => 
            array (
                'id' => 613,
                'product_id' => 327,
                'category_id' => 29,
            ),
            112 => 
            array (
                'id' => 614,
                'product_id' => 328,
                'category_id' => 28,
            ),
            113 => 
            array (
                'id' => 615,
                'product_id' => 328,
                'category_id' => 29,
            ),
            114 => 
            array (
                'id' => 616,
                'product_id' => 329,
                'category_id' => 28,
            ),
            115 => 
            array (
                'id' => 617,
                'product_id' => 329,
                'category_id' => 29,
            ),
            116 => 
            array (
                'id' => 618,
                'product_id' => 330,
                'category_id' => 28,
            ),
            117 => 
            array (
                'id' => 619,
                'product_id' => 330,
                'category_id' => 29,
            ),
            118 => 
            array (
                'id' => 620,
                'product_id' => 331,
                'category_id' => 28,
            ),
            119 => 
            array (
                'id' => 621,
                'product_id' => 331,
                'category_id' => 30,
            ),
            120 => 
            array (
                'id' => 622,
                'product_id' => 332,
                'category_id' => 28,
            ),
            121 => 
            array (
                'id' => 623,
                'product_id' => 332,
                'category_id' => 30,
            ),
            122 => 
            array (
                'id' => 624,
                'product_id' => 333,
                'category_id' => 28,
            ),
            123 => 
            array (
                'id' => 625,
                'product_id' => 333,
                'category_id' => 30,
            ),
            124 => 
            array (
                'id' => 626,
                'product_id' => 334,
                'category_id' => 28,
            ),
            125 => 
            array (
                'id' => 627,
                'product_id' => 334,
                'category_id' => 30,
            ),
            126 => 
            array (
                'id' => 628,
                'product_id' => 335,
                'category_id' => 28,
            ),
            127 => 
            array (
                'id' => 629,
                'product_id' => 335,
                'category_id' => 30,
            ),
            128 => 
            array (
                'id' => 630,
                'product_id' => 336,
                'category_id' => 28,
            ),
            129 => 
            array (
                'id' => 631,
                'product_id' => 336,
                'category_id' => 30,
            ),
            130 => 
            array (
                'id' => 632,
                'product_id' => 337,
                'category_id' => 28,
            ),
            131 => 
            array (
                'id' => 633,
                'product_id' => 337,
                'category_id' => 31,
            ),
            132 => 
            array (
                'id' => 634,
                'product_id' => 338,
                'category_id' => 28,
            ),
            133 => 
            array (
                'id' => 635,
                'product_id' => 338,
                'category_id' => 31,
            ),
            134 => 
            array (
                'id' => 636,
                'product_id' => 339,
                'category_id' => 28,
            ),
            135 => 
            array (
                'id' => 637,
                'product_id' => 339,
                'category_id' => 31,
            ),
            136 => 
            array (
                'id' => 638,
                'product_id' => 340,
                'category_id' => 28,
            ),
            137 => 
            array (
                'id' => 639,
                'product_id' => 340,
                'category_id' => 31,
            ),
            138 => 
            array (
                'id' => 640,
                'product_id' => 341,
                'category_id' => 28,
            ),
            139 => 
            array (
                'id' => 641,
                'product_id' => 341,
                'category_id' => 31,
            ),
            140 => 
            array (
                'id' => 642,
                'product_id' => 342,
                'category_id' => 28,
            ),
            141 => 
            array (
                'id' => 643,
                'product_id' => 342,
                'category_id' => 31,
            ),
            142 => 
            array (
                'id' => 644,
                'product_id' => 343,
                'category_id' => 28,
            ),
            143 => 
            array (
                'id' => 645,
                'product_id' => 343,
                'category_id' => 31,
            ),
            144 => 
            array (
                'id' => 646,
                'product_id' => 344,
                'category_id' => 28,
            ),
            145 => 
            array (
                'id' => 647,
                'product_id' => 344,
                'category_id' => 31,
            ),
            146 => 
            array (
                'id' => 648,
                'product_id' => 345,
                'category_id' => 28,
            ),
            147 => 
            array (
                'id' => 649,
                'product_id' => 345,
                'category_id' => 31,
            ),
            148 => 
            array (
                'id' => 650,
                'product_id' => 346,
                'category_id' => 33,
            ),
            149 => 
            array (
                'id' => 651,
                'product_id' => 346,
                'category_id' => 34,
            ),
            150 => 
            array (
                'id' => 652,
                'product_id' => 347,
                'category_id' => 33,
            ),
            151 => 
            array (
                'id' => 653,
                'product_id' => 347,
                'category_id' => 34,
            ),
            152 => 
            array (
                'id' => 654,
                'product_id' => 348,
                'category_id' => 33,
            ),
            153 => 
            array (
                'id' => 655,
                'product_id' => 348,
                'category_id' => 34,
            ),
            154 => 
            array (
                'id' => 656,
                'product_id' => 349,
                'category_id' => 33,
            ),
            155 => 
            array (
                'id' => 657,
                'product_id' => 349,
                'category_id' => 34,
            ),
            156 => 
            array (
                'id' => 658,
                'product_id' => 350,
                'category_id' => 33,
            ),
            157 => 
            array (
                'id' => 659,
                'product_id' => 350,
                'category_id' => 34,
            ),
            158 => 
            array (
                'id' => 660,
                'product_id' => 351,
                'category_id' => 33,
            ),
            159 => 
            array (
                'id' => 661,
                'product_id' => 351,
                'category_id' => 34,
            ),
            160 => 
            array (
                'id' => 662,
                'product_id' => 352,
                'category_id' => 33,
            ),
            161 => 
            array (
                'id' => 663,
                'product_id' => 352,
                'category_id' => 34,
            ),
            162 => 
            array (
                'id' => 664,
                'product_id' => 353,
                'category_id' => 33,
            ),
            163 => 
            array (
                'id' => 665,
                'product_id' => 353,
                'category_id' => 35,
            ),
            164 => 
            array (
                'id' => 666,
                'product_id' => 354,
                'category_id' => 33,
            ),
            165 => 
            array (
                'id' => 667,
                'product_id' => 354,
                'category_id' => 35,
            ),
            166 => 
            array (
                'id' => 668,
                'product_id' => 355,
                'category_id' => 33,
            ),
            167 => 
            array (
                'id' => 670,
                'product_id' => 356,
                'category_id' => 33,
            ),
            168 => 
            array (
                'id' => 671,
                'product_id' => 356,
                'category_id' => 34,
            ),
            169 => 
            array (
                'id' => 672,
                'product_id' => 357,
                'category_id' => 33,
            ),
            170 => 
            array (
                'id' => 674,
                'product_id' => 358,
                'category_id' => 33,
            ),
            171 => 
            array (
                'id' => 675,
                'product_id' => 358,
                'category_id' => 34,
            ),
            172 => 
            array (
                'id' => 676,
                'product_id' => 357,
                'category_id' => 35,
            ),
            173 => 
            array (
                'id' => 677,
                'product_id' => 355,
                'category_id' => 35,
            ),
            174 => 
            array (
                'id' => 678,
                'product_id' => 359,
                'category_id' => 33,
            ),
            175 => 
            array (
                'id' => 679,
                'product_id' => 359,
                'category_id' => 36,
            ),
            176 => 
            array (
                'id' => 680,
                'product_id' => 360,
                'category_id' => 33,
            ),
            177 => 
            array (
                'id' => 681,
                'product_id' => 360,
                'category_id' => 36,
            ),
            178 => 
            array (
                'id' => 682,
                'product_id' => 361,
                'category_id' => 33,
            ),
            179 => 
            array (
                'id' => 683,
                'product_id' => 361,
                'category_id' => 36,
            ),
            180 => 
            array (
                'id' => 684,
                'product_id' => 362,
                'category_id' => 37,
            ),
            181 => 
            array (
                'id' => 685,
                'product_id' => 362,
                'category_id' => 38,
            ),
            182 => 
            array (
                'id' => 686,
                'product_id' => 363,
                'category_id' => 37,
            ),
            183 => 
            array (
                'id' => 687,
                'product_id' => 363,
                'category_id' => 38,
            ),
            184 => 
            array (
                'id' => 688,
                'product_id' => 364,
                'category_id' => 37,
            ),
            185 => 
            array (
                'id' => 689,
                'product_id' => 364,
                'category_id' => 38,
            ),
            186 => 
            array (
                'id' => 690,
                'product_id' => 365,
                'category_id' => 37,
            ),
            187 => 
            array (
                'id' => 691,
                'product_id' => 365,
                'category_id' => 38,
            ),
            188 => 
            array (
                'id' => 692,
                'product_id' => 366,
                'category_id' => 37,
            ),
            189 => 
            array (
                'id' => 693,
                'product_id' => 366,
                'category_id' => 39,
            ),
            190 => 
            array (
                'id' => 694,
                'product_id' => 367,
                'category_id' => 39,
            ),
            191 => 
            array (
                'id' => 695,
                'product_id' => 368,
                'category_id' => 39,
            ),
            192 => 
            array (
                'id' => 696,
                'product_id' => 369,
                'category_id' => 39,
            ),
            193 => 
            array (
                'id' => 697,
                'product_id' => 370,
                'category_id' => 37,
            ),
            194 => 
            array (
                'id' => 698,
                'product_id' => 370,
                'category_id' => 40,
            ),
            195 => 
            array (
                'id' => 699,
                'product_id' => 371,
                'category_id' => 37,
            ),
            196 => 
            array (
                'id' => 700,
                'product_id' => 371,
                'category_id' => 40,
            ),
            197 => 
            array (
                'id' => 701,
                'product_id' => 372,
                'category_id' => 37,
            ),
            198 => 
            array (
                'id' => 702,
                'product_id' => 372,
                'category_id' => 40,
            ),
            199 => 
            array (
                'id' => 703,
                'product_id' => 373,
                'category_id' => 37,
            ),
            200 => 
            array (
                'id' => 704,
                'product_id' => 373,
                'category_id' => 40,
            ),
            201 => 
            array (
                'id' => 705,
                'product_id' => 374,
                'category_id' => 37,
            ),
            202 => 
            array (
                'id' => 706,
                'product_id' => 374,
                'category_id' => 40,
            ),
            203 => 
            array (
                'id' => 707,
                'product_id' => 375,
                'category_id' => 37,
            ),
            204 => 
            array (
                'id' => 708,
                'product_id' => 375,
                'category_id' => 41,
            ),
            205 => 
            array (
                'id' => 709,
                'product_id' => 376,
                'category_id' => 37,
            ),
            206 => 
            array (
                'id' => 710,
                'product_id' => 376,
                'category_id' => 41,
            ),
            207 => 
            array (
                'id' => 711,
                'product_id' => 377,
                'category_id' => 37,
            ),
            208 => 
            array (
                'id' => 712,
                'product_id' => 377,
                'category_id' => 41,
            ),
            209 => 
            array (
                'id' => 713,
                'product_id' => 378,
                'category_id' => 37,
            ),
            210 => 
            array (
                'id' => 714,
                'product_id' => 378,
                'category_id' => 41,
            ),
            211 => 
            array (
                'id' => 715,
                'product_id' => 379,
                'category_id' => 37,
            ),
            212 => 
            array (
                'id' => 716,
                'product_id' => 379,
                'category_id' => 41,
            ),
            213 => 
            array (
                'id' => 717,
                'product_id' => 380,
                'category_id' => 37,
            ),
            214 => 
            array (
                'id' => 718,
                'product_id' => 380,
                'category_id' => 41,
            ),
            215 => 
            array (
                'id' => 719,
                'product_id' => 381,
                'category_id' => 37,
            ),
            216 => 
            array (
                'id' => 720,
                'product_id' => 381,
                'category_id' => 42,
            ),
            217 => 
            array (
                'id' => 721,
                'product_id' => 382,
                'category_id' => 37,
            ),
            218 => 
            array (
                'id' => 722,
                'product_id' => 382,
                'category_id' => 42,
            ),
            219 => 
            array (
                'id' => 723,
                'product_id' => 383,
                'category_id' => 37,
            ),
            220 => 
            array (
                'id' => 724,
                'product_id' => 383,
                'category_id' => 42,
            ),
            221 => 
            array (
                'id' => 725,
                'product_id' => 384,
                'category_id' => 37,
            ),
            222 => 
            array (
                'id' => 726,
                'product_id' => 384,
                'category_id' => 42,
            ),
            223 => 
            array (
                'id' => 727,
                'product_id' => 385,
                'category_id' => 37,
            ),
            224 => 
            array (
                'id' => 728,
                'product_id' => 385,
                'category_id' => 42,
            ),
            225 => 
            array (
                'id' => 729,
                'product_id' => 386,
                'category_id' => 43,
            ),
            226 => 
            array (
                'id' => 730,
                'product_id' => 386,
                'category_id' => 44,
            ),
            227 => 
            array (
                'id' => 731,
                'product_id' => 387,
                'category_id' => 43,
            ),
            228 => 
            array (
                'id' => 732,
                'product_id' => 387,
                'category_id' => 44,
            ),
            229 => 
            array (
                'id' => 733,
                'product_id' => 388,
                'category_id' => 43,
            ),
            230 => 
            array (
                'id' => 734,
                'product_id' => 388,
                'category_id' => 44,
            ),
            231 => 
            array (
                'id' => 735,
                'product_id' => 389,
                'category_id' => 43,
            ),
            232 => 
            array (
                'id' => 736,
                'product_id' => 389,
                'category_id' => 44,
            ),
            233 => 
            array (
                'id' => 737,
                'product_id' => 390,
                'category_id' => 43,
            ),
            234 => 
            array (
                'id' => 738,
                'product_id' => 390,
                'category_id' => 44,
            ),
            235 => 
            array (
                'id' => 739,
                'product_id' => 391,
                'category_id' => 43,
            ),
            236 => 
            array (
                'id' => 740,
                'product_id' => 391,
                'category_id' => 45,
            ),
            237 => 
            array (
                'id' => 741,
                'product_id' => 392,
                'category_id' => 43,
            ),
            238 => 
            array (
                'id' => 742,
                'product_id' => 392,
                'category_id' => 45,
            ),
            239 => 
            array (
                'id' => 743,
                'product_id' => 393,
                'category_id' => 43,
            ),
            240 => 
            array (
                'id' => 744,
                'product_id' => 393,
                'category_id' => 45,
            ),
            241 => 
            array (
                'id' => 745,
                'product_id' => 394,
                'category_id' => 43,
            ),
            242 => 
            array (
                'id' => 746,
                'product_id' => 394,
                'category_id' => 45,
            ),
            243 => 
            array (
                'id' => 747,
                'product_id' => 395,
                'category_id' => 43,
            ),
            244 => 
            array (
                'id' => 748,
                'product_id' => 395,
                'category_id' => 46,
            ),
            245 => 
            array (
                'id' => 749,
                'product_id' => 396,
                'category_id' => 43,
            ),
            246 => 
            array (
                'id' => 750,
                'product_id' => 396,
                'category_id' => 46,
            ),
            247 => 
            array (
                'id' => 751,
                'product_id' => 397,
                'category_id' => 43,
            ),
            248 => 
            array (
                'id' => 752,
                'product_id' => 397,
                'category_id' => 46,
            ),
            249 => 
            array (
                'id' => 753,
                'product_id' => 398,
                'category_id' => 43,
            ),
            250 => 
            array (
                'id' => 754,
                'product_id' => 398,
                'category_id' => 46,
            ),
            251 => 
            array (
                'id' => 755,
                'product_id' => 399,
                'category_id' => 43,
            ),
            252 => 
            array (
                'id' => 756,
                'product_id' => 399,
                'category_id' => 46,
            ),
            253 => 
            array (
                'id' => 757,
                'product_id' => 400,
                'category_id' => 43,
            ),
            254 => 
            array (
                'id' => 758,
                'product_id' => 400,
                'category_id' => 48,
            ),
            255 => 
            array (
                'id' => 759,
                'product_id' => 401,
                'category_id' => 43,
            ),
            256 => 
            array (
                'id' => 760,
                'product_id' => 401,
                'category_id' => 48,
            ),
            257 => 
            array (
                'id' => 761,
                'product_id' => 402,
                'category_id' => 43,
            ),
            258 => 
            array (
                'id' => 762,
                'product_id' => 402,
                'category_id' => 48,
            ),
            259 => 
            array (
                'id' => 763,
                'product_id' => 403,
                'category_id' => 43,
            ),
            260 => 
            array (
                'id' => 764,
                'product_id' => 403,
                'category_id' => 47,
            ),
            261 => 
            array (
                'id' => 765,
                'product_id' => 404,
                'category_id' => 43,
            ),
            262 => 
            array (
                'id' => 766,
                'product_id' => 404,
                'category_id' => 47,
            ),
            263 => 
            array (
                'id' => 767,
                'product_id' => 405,
                'category_id' => 43,
            ),
            264 => 
            array (
                'id' => 768,
                'product_id' => 405,
                'category_id' => 47,
            ),
            265 => 
            array (
                'id' => 769,
                'product_id' => 406,
                'category_id' => 43,
            ),
            266 => 
            array (
                'id' => 770,
                'product_id' => 406,
                'category_id' => 47,
            ),
            267 => 
            array (
                'id' => 771,
                'product_id' => 407,
                'category_id' => 43,
            ),
            268 => 
            array (
                'id' => 772,
                'product_id' => 407,
                'category_id' => 49,
            ),
            269 => 
            array (
                'id' => 773,
                'product_id' => 408,
                'category_id' => 43,
            ),
            270 => 
            array (
                'id' => 774,
                'product_id' => 408,
                'category_id' => 49,
            ),
            271 => 
            array (
                'id' => 775,
                'product_id' => 409,
                'category_id' => 43,
            ),
            272 => 
            array (
                'id' => 776,
                'product_id' => 409,
                'category_id' => 49,
            ),
            273 => 
            array (
                'id' => 777,
                'product_id' => 410,
                'category_id' => 43,
            ),
            274 => 
            array (
                'id' => 778,
                'product_id' => 410,
                'category_id' => 49,
            ),
            275 => 
            array (
                'id' => 779,
                'product_id' => 411,
                'category_id' => 43,
            ),
            276 => 
            array (
                'id' => 780,
                'product_id' => 411,
                'category_id' => 49,
            ),
            277 => 
            array (
                'id' => 781,
                'product_id' => 412,
                'category_id' => 101,
            ),
            278 => 
            array (
                'id' => 782,
                'product_id' => 412,
                'category_id' => 102,
            ),
            279 => 
            array (
                'id' => 783,
                'product_id' => 413,
                'category_id' => 101,
            ),
            280 => 
            array (
                'id' => 784,
                'product_id' => 413,
                'category_id' => 102,
            ),
            281 => 
            array (
                'id' => 785,
                'product_id' => 414,
                'category_id' => 101,
            ),
            282 => 
            array (
                'id' => 786,
                'product_id' => 414,
                'category_id' => 102,
            ),
            283 => 
            array (
                'id' => 787,
                'product_id' => 415,
                'category_id' => 101,
            ),
            284 => 
            array (
                'id' => 788,
                'product_id' => 415,
                'category_id' => 102,
            ),
            285 => 
            array (
                'id' => 789,
                'product_id' => 416,
                'category_id' => 101,
            ),
            286 => 
            array (
                'id' => 790,
                'product_id' => 416,
                'category_id' => 102,
            ),
            287 => 
            array (
                'id' => 791,
                'product_id' => 417,
                'category_id' => 101,
            ),
            288 => 
            array (
                'id' => 792,
                'product_id' => 417,
                'category_id' => 102,
            ),
            289 => 
            array (
                'id' => 793,
                'product_id' => 418,
                'category_id' => 101,
            ),
            290 => 
            array (
                'id' => 794,
                'product_id' => 418,
                'category_id' => 102,
            ),
            291 => 
            array (
                'id' => 795,
                'product_id' => 419,
                'category_id' => 101,
            ),
            292 => 
            array (
                'id' => 796,
                'product_id' => 419,
                'category_id' => 102,
            ),
            293 => 
            array (
                'id' => 797,
                'product_id' => 420,
                'category_id' => 101,
            ),
            294 => 
            array (
                'id' => 798,
                'product_id' => 420,
                'category_id' => 102,
            ),
            295 => 
            array (
                'id' => 799,
                'product_id' => 421,
                'category_id' => 101,
            ),
            296 => 
            array (
                'id' => 800,
                'product_id' => 421,
                'category_id' => 103,
            ),
            297 => 
            array (
                'id' => 801,
                'product_id' => 422,
                'category_id' => 101,
            ),
            298 => 
            array (
                'id' => 802,
                'product_id' => 422,
                'category_id' => 103,
            ),
            299 => 
            array (
                'id' => 803,
                'product_id' => 423,
                'category_id' => 101,
            ),
            300 => 
            array (
                'id' => 804,
                'product_id' => 423,
                'category_id' => 103,
            ),
            301 => 
            array (
                'id' => 805,
                'product_id' => 424,
                'category_id' => 101,
            ),
            302 => 
            array (
                'id' => 806,
                'product_id' => 424,
                'category_id' => 103,
            ),
            303 => 
            array (
                'id' => 807,
                'product_id' => 425,
                'category_id' => 101,
            ),
            304 => 
            array (
                'id' => 808,
                'product_id' => 425,
                'category_id' => 103,
            ),
            305 => 
            array (
                'id' => 809,
                'product_id' => 426,
                'category_id' => 101,
            ),
            306 => 
            array (
                'id' => 810,
                'product_id' => 426,
                'category_id' => 103,
            ),
            307 => 
            array (
                'id' => 811,
                'product_id' => 427,
                'category_id' => 101,
            ),
            308 => 
            array (
                'id' => 812,
                'product_id' => 427,
                'category_id' => 103,
            ),
            309 => 
            array (
                'id' => 813,
                'product_id' => 428,
                'category_id' => 101,
            ),
            310 => 
            array (
                'id' => 814,
                'product_id' => 428,
                'category_id' => 103,
            ),
            311 => 
            array (
                'id' => 815,
                'product_id' => 429,
                'category_id' => 101,
            ),
            312 => 
            array (
                'id' => 816,
                'product_id' => 429,
                'category_id' => 103,
            ),
            313 => 
            array (
                'id' => 817,
                'product_id' => 430,
                'category_id' => 101,
            ),
            314 => 
            array (
                'id' => 818,
                'product_id' => 430,
                'category_id' => 104,
            ),
            315 => 
            array (
                'id' => 819,
                'product_id' => 431,
                'category_id' => 101,
            ),
            316 => 
            array (
                'id' => 820,
                'product_id' => 431,
                'category_id' => 104,
            ),
            317 => 
            array (
                'id' => 821,
                'product_id' => 432,
                'category_id' => 101,
            ),
            318 => 
            array (
                'id' => 822,
                'product_id' => 432,
                'category_id' => 104,
            ),
            319 => 
            array (
                'id' => 823,
                'product_id' => 433,
                'category_id' => 101,
            ),
            320 => 
            array (
                'id' => 824,
                'product_id' => 433,
                'category_id' => 104,
            ),
            321 => 
            array (
                'id' => 825,
                'product_id' => 434,
                'category_id' => 101,
            ),
            322 => 
            array (
                'id' => 826,
                'product_id' => 434,
                'category_id' => 104,
            ),
            323 => 
            array (
                'id' => 827,
                'product_id' => 435,
                'category_id' => 105,
            ),
            324 => 
            array (
                'id' => 828,
                'product_id' => 435,
                'category_id' => 106,
            ),
            325 => 
            array (
                'id' => 829,
                'product_id' => 436,
                'category_id' => 109,
            ),
            326 => 
            array (
                'id' => 830,
                'product_id' => 436,
                'category_id' => 110,
            ),
            327 => 
            array (
                'id' => 831,
                'product_id' => 437,
                'category_id' => 109,
            ),
            328 => 
            array (
                'id' => 832,
                'product_id' => 437,
                'category_id' => 110,
            ),
            329 => 
            array (
                'id' => 833,
                'product_id' => 438,
                'category_id' => 109,
            ),
            330 => 
            array (
                'id' => 834,
                'product_id' => 438,
                'category_id' => 111,
            ),
            331 => 
            array (
                'id' => 835,
                'product_id' => 439,
                'category_id' => 109,
            ),
            332 => 
            array (
                'id' => 836,
                'product_id' => 439,
                'category_id' => 111,
            ),
            333 => 
            array (
                'id' => 837,
                'product_id' => 440,
                'category_id' => 109,
            ),
            334 => 
            array (
                'id' => 838,
                'product_id' => 440,
                'category_id' => 111,
            ),
            335 => 
            array (
                'id' => 839,
                'product_id' => 441,
                'category_id' => 109,
            ),
            336 => 
            array (
                'id' => 840,
                'product_id' => 441,
                'category_id' => 111,
            ),
            337 => 
            array (
                'id' => 841,
                'product_id' => 442,
                'category_id' => 109,
            ),
            338 => 
            array (
                'id' => 842,
                'product_id' => 442,
                'category_id' => 111,
            ),
            339 => 
            array (
                'id' => 843,
                'product_id' => 443,
                'category_id' => 109,
            ),
            340 => 
            array (
                'id' => 844,
                'product_id' => 443,
                'category_id' => 111,
            ),
            341 => 
            array (
                'id' => 845,
                'product_id' => 444,
                'category_id' => 109,
            ),
            342 => 
            array (
                'id' => 846,
                'product_id' => 444,
                'category_id' => 111,
            ),
            343 => 
            array (
                'id' => 847,
                'product_id' => 445,
                'category_id' => 109,
            ),
            344 => 
            array (
                'id' => 848,
                'product_id' => 445,
                'category_id' => 111,
            ),
            345 => 
            array (
                'id' => 849,
                'product_id' => 446,
                'category_id' => 109,
            ),
            346 => 
            array (
                'id' => 850,
                'product_id' => 446,
                'category_id' => 111,
            ),
            347 => 
            array (
                'id' => 851,
                'product_id' => 447,
                'category_id' => 109,
            ),
            348 => 
            array (
                'id' => 852,
                'product_id' => 447,
                'category_id' => 112,
            ),
            349 => 
            array (
                'id' => 853,
                'product_id' => 448,
                'category_id' => 109,
            ),
            350 => 
            array (
                'id' => 854,
                'product_id' => 448,
                'category_id' => 112,
            ),
            351 => 
            array (
                'id' => 855,
                'product_id' => 449,
                'category_id' => 109,
            ),
            352 => 
            array (
                'id' => 856,
                'product_id' => 449,
                'category_id' => 112,
            ),
            353 => 
            array (
                'id' => 857,
                'product_id' => 450,
                'category_id' => 109,
            ),
            354 => 
            array (
                'id' => 858,
                'product_id' => 450,
                'category_id' => 112,
            ),
            355 => 
            array (
                'id' => 859,
                'product_id' => 451,
                'category_id' => 109,
            ),
            356 => 
            array (
                'id' => 860,
                'product_id' => 451,
                'category_id' => 112,
            ),
            357 => 
            array (
                'id' => 861,
                'product_id' => 452,
                'category_id' => 113,
            ),
            358 => 
            array (
                'id' => 862,
                'product_id' => 452,
                'category_id' => 114,
            ),
            359 => 
            array (
                'id' => 863,
                'product_id' => 453,
                'category_id' => 113,
            ),
            360 => 
            array (
                'id' => 864,
                'product_id' => 453,
                'category_id' => 114,
            ),
            361 => 
            array (
                'id' => 865,
                'product_id' => 454,
                'category_id' => 113,
            ),
            362 => 
            array (
                'id' => 866,
                'product_id' => 454,
                'category_id' => 114,
            ),
            363 => 
            array (
                'id' => 867,
                'product_id' => 455,
                'category_id' => 113,
            ),
            364 => 
            array (
                'id' => 868,
                'product_id' => 455,
                'category_id' => 114,
            ),
            365 => 
            array (
                'id' => 869,
                'product_id' => 456,
                'category_id' => 113,
            ),
            366 => 
            array (
                'id' => 870,
                'product_id' => 456,
                'category_id' => 114,
            ),
            367 => 
            array (
                'id' => 871,
                'product_id' => 457,
                'category_id' => 113,
            ),
            368 => 
            array (
                'id' => 872,
                'product_id' => 457,
                'category_id' => 114,
            ),
            369 => 
            array (
                'id' => 873,
                'product_id' => 458,
                'category_id' => 113,
            ),
            370 => 
            array (
                'id' => 874,
                'product_id' => 458,
                'category_id' => 114,
            ),
            371 => 
            array (
                'id' => 875,
                'product_id' => 459,
                'category_id' => 113,
            ),
            372 => 
            array (
                'id' => 876,
                'product_id' => 459,
                'category_id' => 114,
            ),
            373 => 
            array (
                'id' => 877,
                'product_id' => 460,
                'category_id' => 113,
            ),
            374 => 
            array (
                'id' => 878,
                'product_id' => 460,
                'category_id' => 116,
            ),
            375 => 
            array (
                'id' => 879,
                'product_id' => 461,
                'category_id' => 113,
            ),
            376 => 
            array (
                'id' => 880,
                'product_id' => 461,
                'category_id' => 116,
            ),
            377 => 
            array (
                'id' => 881,
                'product_id' => 462,
                'category_id' => 113,
            ),
            378 => 
            array (
                'id' => 882,
                'product_id' => 462,
                'category_id' => 116,
            ),
            379 => 
            array (
                'id' => 883,
                'product_id' => 463,
                'category_id' => 113,
            ),
            380 => 
            array (
                'id' => 884,
                'product_id' => 463,
                'category_id' => 116,
            ),
            381 => 
            array (
                'id' => 885,
                'product_id' => 464,
                'category_id' => 113,
            ),
            382 => 
            array (
                'id' => 886,
                'product_id' => 464,
                'category_id' => 116,
            ),
            383 => 
            array (
                'id' => 887,
                'product_id' => 465,
                'category_id' => 113,
            ),
            384 => 
            array (
                'id' => 888,
                'product_id' => 465,
                'category_id' => 116,
            ),
            385 => 
            array (
                'id' => 889,
                'product_id' => 466,
                'category_id' => 113,
            ),
            386 => 
            array (
                'id' => 890,
                'product_id' => 466,
                'category_id' => 116,
            ),
            387 => 
            array (
                'id' => 891,
                'product_id' => 467,
                'category_id' => 89,
            ),
            388 => 
            array (
                'id' => 892,
                'product_id' => 468,
                'category_id' => 89,
            ),
            389 => 
            array (
                'id' => 893,
                'product_id' => 469,
                'category_id' => 89,
            ),
            390 => 
            array (
                'id' => 894,
                'product_id' => 470,
                'category_id' => 89,
            ),
            391 => 
            array (
                'id' => 895,
                'product_id' => 471,
                'category_id' => 89,
            ),
            392 => 
            array (
                'id' => 896,
                'product_id' => 472,
                'category_id' => 89,
            ),
            393 => 
            array (
                'id' => 897,
                'product_id' => 473,
                'category_id' => 90,
            ),
            394 => 
            array (
                'id' => 898,
                'product_id' => 474,
                'category_id' => 90,
            ),
            395 => 
            array (
                'id' => 899,
                'product_id' => 475,
                'category_id' => 90,
            ),
            396 => 
            array (
                'id' => 900,
                'product_id' => 476,
                'category_id' => 90,
            ),
            397 => 
            array (
                'id' => 901,
                'product_id' => 477,
                'category_id' => 90,
            ),
            398 => 
            array (
                'id' => 902,
                'product_id' => 478,
                'category_id' => 90,
            ),
            399 => 
            array (
                'id' => 903,
                'product_id' => 479,
                'category_id' => 90,
            ),
            400 => 
            array (
                'id' => 904,
                'product_id' => 480,
                'category_id' => 91,
            ),
            401 => 
            array (
                'id' => 905,
                'product_id' => 481,
                'category_id' => 91,
            ),
            402 => 
            array (
                'id' => 906,
                'product_id' => 482,
                'category_id' => 91,
            ),
            403 => 
            array (
                'id' => 907,
                'product_id' => 483,
                'category_id' => 91,
            ),
            404 => 
            array (
                'id' => 908,
                'product_id' => 484,
                'category_id' => 91,
            ),
            405 => 
            array (
                'id' => 909,
                'product_id' => 485,
                'category_id' => 91,
            ),
            406 => 
            array (
                'id' => 910,
                'product_id' => 486,
                'category_id' => 92,
            ),
            407 => 
            array (
                'id' => 911,
                'product_id' => 487,
                'category_id' => 92,
            ),
            408 => 
            array (
                'id' => 912,
                'product_id' => 488,
                'category_id' => 92,
            ),
            409 => 
            array (
                'id' => 913,
                'product_id' => 489,
                'category_id' => 92,
            ),
            410 => 
            array (
                'id' => 914,
                'product_id' => 490,
                'category_id' => 92,
            ),
            411 => 
            array (
                'id' => 915,
                'product_id' => 491,
                'category_id' => 92,
            ),
            412 => 
            array (
                'id' => 916,
                'product_id' => 492,
                'category_id' => 93,
            ),
            413 => 
            array (
                'id' => 917,
                'product_id' => 493,
                'category_id' => 93,
            ),
            414 => 
            array (
                'id' => 918,
                'product_id' => 494,
                'category_id' => 93,
            ),
            415 => 
            array (
                'id' => 919,
                'product_id' => 495,
                'category_id' => 93,
            ),
            416 => 
            array (
                'id' => 920,
                'product_id' => 496,
                'category_id' => 93,
            ),
            417 => 
            array (
                'id' => 921,
                'product_id' => 497,
                'category_id' => 93,
            ),
            418 => 
            array (
                'id' => 922,
                'product_id' => 498,
                'category_id' => 94,
            ),
            419 => 
            array (
                'id' => 923,
                'product_id' => 499,
                'category_id' => 94,
            ),
            420 => 
            array (
                'id' => 924,
                'product_id' => 500,
                'category_id' => 94,
            ),
            421 => 
            array (
                'id' => 925,
                'product_id' => 501,
                'category_id' => 94,
            ),
            422 => 
            array (
                'id' => 926,
                'product_id' => 502,
                'category_id' => 94,
            ),
            423 => 
            array (
                'id' => 927,
                'product_id' => 503,
                'category_id' => 95,
            ),
            424 => 
            array (
                'id' => 928,
                'product_id' => 504,
                'category_id' => 95,
            ),
            425 => 
            array (
                'id' => 929,
                'product_id' => 505,
                'category_id' => 95,
            ),
            426 => 
            array (
                'id' => 930,
                'product_id' => 506,
                'category_id' => 95,
            ),
            427 => 
            array (
                'id' => 931,
                'product_id' => 507,
                'category_id' => 95,
            ),
            428 => 
            array (
                'id' => 932,
                'product_id' => 508,
                'category_id' => 95,
            ),
            429 => 
            array (
                'id' => 933,
                'product_id' => 509,
                'category_id' => 96,
            ),
            430 => 
            array (
                'id' => 934,
                'product_id' => 510,
                'category_id' => 96,
            ),
            431 => 
            array (
                'id' => 935,
                'product_id' => 511,
                'category_id' => 96,
            ),
            432 => 
            array (
                'id' => 936,
                'product_id' => 512,
                'category_id' => 96,
            ),
            433 => 
            array (
                'id' => 937,
                'product_id' => 513,
                'category_id' => 96,
            ),
            434 => 
            array (
                'id' => 938,
                'product_id' => 514,
                'category_id' => 96,
            ),
            435 => 
            array (
                'id' => 939,
                'product_id' => 515,
                'category_id' => 97,
            ),
            436 => 
            array (
                'id' => 940,
                'product_id' => 516,
                'category_id' => 97,
            ),
            437 => 
            array (
                'id' => 941,
                'product_id' => 517,
                'category_id' => 97,
            ),
            438 => 
            array (
                'id' => 942,
                'product_id' => 518,
                'category_id' => 97,
            ),
            439 => 
            array (
                'id' => 943,
                'product_id' => 519,
                'category_id' => 97,
            ),
            440 => 
            array (
                'id' => 944,
                'product_id' => 520,
                'category_id' => 97,
            ),
            441 => 
            array (
                'id' => 945,
                'product_id' => 521,
                'category_id' => 98,
            ),
            442 => 
            array (
                'id' => 946,
                'product_id' => 522,
                'category_id' => 98,
            ),
            443 => 
            array (
                'id' => 947,
                'product_id' => 523,
                'category_id' => 98,
            ),
            444 => 
            array (
                'id' => 948,
                'product_id' => 524,
                'category_id' => 98,
            ),
            445 => 
            array (
                'id' => 949,
                'product_id' => 525,
                'category_id' => 98,
            ),
            446 => 
            array (
                'id' => 950,
                'product_id' => 526,
                'category_id' => 98,
            ),
            447 => 
            array (
                'id' => 951,
                'product_id' => 527,
                'category_id' => 99,
            ),
            448 => 
            array (
                'id' => 952,
                'product_id' => 528,
                'category_id' => 99,
            ),
            449 => 
            array (
                'id' => 953,
                'product_id' => 529,
                'category_id' => 99,
            ),
            450 => 
            array (
                'id' => 954,
                'product_id' => 530,
                'category_id' => 99,
            ),
            451 => 
            array (
                'id' => 955,
                'product_id' => 531,
                'category_id' => 99,
            ),
            452 => 
            array (
                'id' => 956,
                'product_id' => 532,
                'category_id' => 99,
            ),
            453 => 
            array (
                'id' => 957,
                'product_id' => 533,
                'category_id' => 100,
            ),
            454 => 
            array (
                'id' => 958,
                'product_id' => 534,
                'category_id' => 100,
            ),
            455 => 
            array (
                'id' => 959,
                'product_id' => 535,
                'category_id' => 100,
            ),
            456 => 
            array (
                'id' => 960,
                'product_id' => 536,
                'category_id' => 100,
            ),
            457 => 
            array (
                'id' => 961,
                'product_id' => 537,
                'category_id' => 100,
            ),
            458 => 
            array (
                'id' => 962,
                'product_id' => 538,
                'category_id' => 100,
            ),
            459 => 
            array (
                'id' => 963,
                'product_id' => 539,
                'category_id' => 100,
            ),
            460 => 
            array (
                'id' => 964,
                'product_id' => 538,
                'category_id' => 4,
            ),
        ));
        
        
    }
}