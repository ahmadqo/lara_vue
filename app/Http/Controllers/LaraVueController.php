<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaraVueController extends Controller
{
    public function getMenu()
    {
        $dataMenu = [
            'Hosting',
            'Domain',
            'Server',
            'Website',
            'Afiliasi',
            'Promo',
            'Pembayaran',
            'Review',
            'Kontak',
            'Blog'
        ];
        return response()->json([
            'data'    => $dataMenu
        ]);
    }

    public function getFasilitasPaket()
    {
        $data = [
            [
                'src' => 'assets/svg/icon_PHP_Hosting_PHP_Semua_Versi.svg',
                'alt' => 'Semua Versi',
                'title' => 'PHP Semua Versi',
                'desc' => 'Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!'
            ],
            [
                'src' => 'assets/svg/icon_PHP_Hosting_My_SQL.svg',
                'alt' => 'My SQL',
                'title' => 'MySQL Versio 5.6',
                'desc' => 'Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.'
            ],
            [
                'src' => 'assets/svg/icon_PHP_Hosting_CPanel.svg',
                'alt' => 'cpanel',
                'title' => 'Panel Hosting cPanel',
                'desc' => 'Kelola website dengan panel canggih yang familiar di hati Anda.'
            ],
            [
                'src' => 'assets/svg/icon_PHP_Hosting_garansi_uptime.svg',
                'alt' => 'garansi',
                'title' => 'Garanse Uptime 99.9%',
                'desc' => 'Data center yang mendukung kelangsungan website Anda 24/7.'
            ],
            [
                'src' => 'assets/svg/icon_PHP_Hosting_InnoDB.svg',
                'alt' => 'inno Db',
                'title' => 'Database InnoDB Unlimited',
                'desc' => 'Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.'
            ],
            [
                'src' => 'assets/svg/icon_PHP_Hosting_My_SQL_remote.svg',
                'alt' => 'remote db',
                'title' => 'Wildcard Remot MySQL',
                'desc' => 'Mendukung s/d 25 max_user_connections dan 100 max_connections.'
            ],

        ];

        return response()->json([
            'data'    => $data
        ]);
    }
}
