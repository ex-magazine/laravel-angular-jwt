<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => '07BkJ7F1iZqRyt2c1IIAmUdN5J3DcshthEEZl6Hb',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0VsTGxQUG9GQlVXRElrWVZqM1lRZm8zVHBrVlpXSDdTRjI4U2phNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9pdHRyYXZlbC5sb2NhbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
                'last_activity' => 1664424690,
            ),
            1 => 
            array (
                'id' => '7DxNAbUMUoSTNvsTz4vx6UgRc0UR9K3c4LGCVFbQ',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWdBRjVkc2FNQUt0WXhneUtlZWY2d2dIWlNPVVFwcURaRXEyS09MNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9pdHRyYXZlbC5sb2NhbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
                'last_activity' => 1664500932,
            ),
            2 => 
            array (
                'id' => 'Bbx6rseceZgShvPqhivwF01VAT30Fjjb6Vp6oKVV',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTjUzU21GWmEydnhLcmI1Q3o4bWFQQmtHaXlwMGhkR0lSMnhmdFBsRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9pdHRyYXZlbC5sb2NhbC8tZ3JhcGhpcWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
                'last_activity' => 1664440557,
            ),
            3 => 
            array (
                'id' => 'dNfmw0XHRGhFGvuGgczYxAfsCnbkIkuECfBqHflV',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53',
                'payload' => 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWmJMellHdncxektkY1VLOHlFMUdqUlZFYnFIelU0VjVOaExUTHFoTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
                'last_activity' => 1664586112,
            ),
            4 => 
            array (
                'id' => 'Fk9V7hMmcvqAeTwYr2BILoTiAHlUDhHN5pfRULfO',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRERoamRBaDNaeXoxT1c1cTEwR2o1TTRuY3lORllNSWRmVGNxQ0V3ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9pdHRyYXZlbC5sb2NhbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
                'last_activity' => 1664500932,
            ),
            5 => 
            array (
                'id' => 'ITxnfYkpFd0cMltGkkQnssVM6orTKpggyP7jVIbU',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR0tJWUxwVXhqV0JseEphRE9HN1MxaFVFbnZnV0NRS0RWRXlZOUVYTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9pdHRyYXZlbC5sb2NhbC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTU6ImNvb2tpZV9hY2NlcHRlZCI7YjoxO30=',
                'last_activity' => 1664588929,
            ),
            6 => 
            array (
                'id' => 'SNMo0LXYi0kShDr4HtYU2bFRfjqKUp9hiBc5M56Q',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNTB5dzJqNlRvQTh1Tk5lNkc0dVpxZEg4bzNzN21mdmlWWUFwMDhDeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjUwOiJodHRwOi8vaXR0cmF2ZWwubG9jYWwvYWRtaW4vYW1tZWxpYXMtdXNlci1kZXRhaWxzL2V5SnBkaUk2SWk5VmEzQlNZWE5KWkRsUGVFdFFUVkZpV1ZWSGNHYzlQU0lzSW5aaGJIVmxJam9pUjNZMk5YRndaVGx2TkV4b2QzaHpkSFpQZERsMFVUMDlJaXdpYldGaklqb2lOR0prTURKa05EYzVaRE5oTjJZd01qVTJORFF5TmpNM04yUm1OR1V6TVRJd01HTTNaR1F3TnpZM1lUSXlaVGN3TVRjM05qVXdZVFUxTTJZek16QmhaQ0lzSW5SaFp5STZJaUo5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxNToiY29va2llX2FjY2VwdGVkIjtiOjE7czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',
                'last_activity' => 1664589114,
            ),
            7 => 
            array (
                'id' => 'vYbZo1xBDjhypbCvcqiADttNYt0pvpOzztEAcqqX',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZUNobUlTSHVZRGhNeGZrSE9VMmFrZm91ODRuRGlDNDBMQXlidnlMaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTM6Imh0dHA6Ly9pdHRyYXZlbC5sb2NhbC9ibG9nLzg4L2xhYm9yaW9zYW0tZGlzdGluY3Rpby1uaXNpLWRlYml0aXMtZGVsZW5pdGktdm9sdXB0YXR1bS1jb3Jwb3JpcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTU6ImNvb2tpZV9hY2NlcHRlZCI7YjoxO3M6NDoibGFuZyI7czoyOiJlbiI7fQ==',
                'last_activity' => 1664501092,
            ),
            8 => 
            array (
                'id' => 'YULXNHtU7MDAo9BV0qNJCTsZ0bTkQX6C6XPE4S0z',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUWM5SWZYRlZ2ZDFKN0pwdEdES0cyMTY5V2pzMzhvbzdRa2hCaER1diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9pdHRyYXZlbC5sb2NhbC9hZG1pbi9hbW1lbGlhcy1wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',
                'last_activity' => 1664413661,
            ),
        ));
        
        
    }
}