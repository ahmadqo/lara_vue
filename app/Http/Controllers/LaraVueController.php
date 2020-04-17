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

    public function getPrice()
    {
        $data = [
            [
                "packetFor" => 'Bayi',
                "oldPrice" => 'Rp 19.000',
                "newPrice" => 'Rp 14.900/bln',
                "totalUser" => 938,
                "description" => [
                    "0.5X Resource Power",
                    "500 MB Disk Space",
                    "Unlimited Bandwith",
                    'Unlimited Databases',
                    '1 Domain',
                    'Instant Backup',
                    'Unlimited SSL Gratis Selamanya'
                ]
            ],
            [
                "packetFor" => 'Dewasa',
                "oldPrice" => 'Rp 46.000',
                "newPrice" => 'Rp 23.450/bln',
                "totalUser" => 4168,
                "description" => [
                    "1X Resource Power",
                    "Unlimited Disk Space",
                    "Unlimited Bandwith",
                    "Unlimited POP3 Email",
                    'Unlimited Databases',
                    '10 Addon Domain',
                    'Instant Backup',
                    "Domain Gratis Selamanya",
                    'Unlimited SSL Gratis Selamanya'
                ]
            ], [
                "packetFor" => 'Personal',
                "oldPrice" => 'Rp 58.000',
                "newPrice" => 'Rp 38.900/bln',
                "totalUser" => 10.017,
                "description" => [
                    "2X Resource Power",
                    "Unlimited Disk Space",
                    "Unlimited Bandwith",
                    "Unlimited POP3 Email",
                    'Unlimited Databases',
                    'Unlimited Addon Domain',
                    'Instant Backup',
                    "Domain Gratis Selamanya",
                    'Unlimited SSL Gratis Selamanya',
                    'Private Name Server',
                    'SpamAssasin Mail Protection'
                ]
            ], [
                "packetFor" => 'Bisnis',
                "oldPrice" => 'Rp 19.000',
                "newPrice" => 'Rp 14.900/bln',
                "totalUser" => 938,
                "description" => [
                    "3X Resource Power",
                    "Unlimited Disk Space",
                    "Unlimited Bandwith",
                    "Unlimited POP3 Email",
                    'Unlimited Databases',
                    'Unlimited Addon Domain',
                    'Magic Auto Backup & Restore',
                    "Domain Gratis Selamanya",
                    'Unlimited SSL Gratis Selamanya',
                    'Private Name Server',
                    'Prioritas Layanan Support',
                    'SamExpert Pro Mail Protection'
                ]
            ]
        ];
        return response()->json([
            'data'    => $data
        ]);
    }
}
