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
}
