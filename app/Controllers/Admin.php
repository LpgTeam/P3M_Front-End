<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenelitianModel;

class Admin extends BaseController
{
    public function index()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('adminPPPM/tampilan/index', $data);
    }

    public function anggaran()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('adminPPPM/tampilan/anggaran', $data);
    }

    public function penelitian()
    {
        $penelitianModel = new PenelitianModel();
        $data = [
            'title' => 'PPPM Politeknik Statistika STIS',
            'penelitian' => $penelitianModel->getData(),
        ];
        return view('adminPPPM/tampilan/penelitian', $data);
    }

    public function pkm()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('adminPPPM/tampilan/pkm', $data);
    }
}
