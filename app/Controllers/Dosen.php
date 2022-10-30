<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenelitianModel;

class Dosen extends BaseController
{
    public function index()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/index', $data);
    }

    public function anggaran()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/anggaran', $data);
    }

    public function penelitian()
    {
        $penelitianModel = new PenelitianModel();
        $data = [
            'title' => 'PPPM Politeknik Statistika STIS',
            'penelitian' => $penelitianModel->getData(),
        ];
        return view('dosen/tampilan/penelitian', $data);
    }

    public function pkm()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/pkm', $data);
    }

    public function pkmjenis()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/pkmjenis', $data);
    }

    public function penelitianjenis()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/penelitianjenis', $data);
    }

    public function penelitianMandiri()
    {
        $data = [
            'title' => 'PPPM Politeknik Statistika STIS',
            'jenis' => 'Mandiri'
        ];
        return view('dosen/tampilan/penelitianForm1', $data);
    }

    public function penelitianKerjasama()
    {
        $data = [
            'title' => 'PPPM Politeknik Statistika STIS',
            'jenis' => 'Kerjasama'
        ];
        return view('dosen/tampilan/penelitianForm1', $data);
    }

    public function penelitianSemiMandiri()
    {
        $data = [
            'title' => 'PPPM Politeknik Statistika STIS',
            'jenis' => 'Semi Mandiri'
        ];
        return view('dosen/tampilan/penelitianForm2', $data);
    }

    public function penelitianDidanaiInstitusi()
    {
        $data = [
            'title' => 'PPPM Politeknik Statistika STIS',
            'jenis' => 'Di Danai Institusi'
        ];
        return view('dosen/tampilan/penelitianForm2', $data);
    }

    public function penelitianInstitusi()
    {
        $data = [
            'title' => 'PPPM Politeknik Statistika STIS',
            'jenis' => 'Institusi'
        ];
        return view('dosen/tampilan/penelitianForm2', $data);
    }

    public function pkmMandiri()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/pkmMandiri', $data);
    }

    public function pkmKelompok()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/pkmKelompok', $data);
    }

    public function pkmTerstruktur()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/pkmTerstruktur', $data);
    }

    public function penelitianSemiMandiri1()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/penelitianProses/penelitianSemiMandiri1', $data);
    }

    public function penelitianSemiMandiri2()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/penelitianProses/penelitianSemiMandiri2', $data);
    }

    public function penelitianSemiMandiri3()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/penelitianProses/penelitianSemiMandiri3', $data);
    }

    public function penelitianSemiMandiri4()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/penelitianProses/penelitianSemiMandiri4', $data);
    }

    public function penelitianSelesai()
    {
        $data = ['title' => 'PPPM Politeknik Statistika STIS'];
        return view('dosen/tampilan/penelitianProses/penelitianSelesai', $data);
    }
}
