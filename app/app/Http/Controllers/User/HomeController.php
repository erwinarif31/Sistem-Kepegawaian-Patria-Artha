<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $heads = [
            'Jenis PDD',
            'Jenis Ajuan',
            'Tanggal Ajuan',
            'Tanggal Verifikasi',
            'Umur Ajuan (Hari)',
            'Status Ajuan',
            ['label' => 'Aksi', 'no-export' => true, 'width' => 5],
        ];

        $btnDetails = '<a href="" class="btn btn-info">
                   <i class="fas fa-info-circle"></i>
               </a>';

        $config = [
            'data' => [
                ['Pendidikan Formal', 'Ajuan Update Data', '12 Maret 2020', '15 Maret 2019', '12', 'Diterima', '<nobr>' . $btnDetails . '</nobr>'],
            ],
            'order' => [[1, 'asc']],
        ];

        return view('user.home', compact('heads', 'config'));
    }
}
