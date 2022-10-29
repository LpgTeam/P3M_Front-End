<?php

namespace App\Controllers;

use App\Models\UserModelCode;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PenelitianModel;
use App\Models\DosenModel;
use App\Models\TimPenelitiModel;
use CodeIgniter\I18n\Time;


class Penelitian extends BaseController
{
    use ResponseTrait;
    protected $penelitianModel;
    protected $timpenelitiModel;
    public function __construct()
    {
        $this->penelitianModel = new PenelitianModel();
        $this->timpenelitiModel = new TimPenelitiModel();
    }

    public function index()
    {

        //pager initialize
        $pager = \Config\Services::pager();
        // $penelitianModel = new PenelitianModel();
        $data = array(
            // 'posts' => $postModel->paginate(2, 'post'),
            // 'penelitian' => $penelitianModel,
            // 'pager' => $postModel->pager
        );
        $data['title'] = 'Penelitian';


        return view('penelitian/index', $data);
    }


    public function save()
    {
        // //validasi input
        // if (!$this->validate([
        //     // 'nama_obat' => 'required|is_unique[obat.nama_obat]'
        //     'nama_obat' => [
        //         'rules' => 'required|is_unique[obat.nama_obat]',
        //         'errors' => [
        //             'required' => '{field} obat harus diisi.',
        //             'is_unique' => '{field} obat sudah terdaftar.'
        //         ]
        //     ],
        //     'sampul' => [
        //         'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //             'max_size' => "Ukuran gambar terlalu besar",
        //             'is_image' => "Yang anda pilih bukan gambar",
        //             'mime_in' => "Yang anda pilih bukan gambar"
        //         ]
        //     ]

        // ])) {
        //     // $validation = \Config\Services::validation();
        //     // dd($validation);
        //     // return redirect()->to('/obat/create')->withInput()->with('validation', $validation);
        //     return redirect()->to('/add-penelitian')->withInput();
        // }

        // $slug = url_title($this->request->getVar('judul_penelitian'), '-', true);

        // dd($this->request->getVar());
        $this->penelitianModel->save([
            // 'jenis_penelitian' => "mandiri",
            // 'judul_penelitian' => $this->request->getVar('judul_penelitian'),
            // 'nama_subunit_kajian' => $this->request->getVar('bidang'),
            // 'tanggal_pengajuan' => Time::now(),
            // 'file_proposal' => 'belumada',
            // 'status_pengajuan' => 'diajukan',
            // 'biaya' => rand(10000000, 100000000),
            // 'jenis_penelitian' => $this->request->getVar('jenis_penelitian'),
            'jenis_penelitian' => $this->request->getVar('jenis_penelitian'),
            'judul_penelitian' => $this->request->getVar('judul_penelitian'),
            'bidang' => $this->request->getVar('bidang'),
            'tanggal_pengajuan' => Time::now(),
            'id_status' => '1',
            'status_pengajuan' => 'diajukan',
            // 'file_proposal' => $this->request->getVar(''),
            // 'biaya'  => '8348538319439'

        ]);

        // $idpenelitian = $this->penelitianModel->getPenelitian($this->request->getVar('judul_penelitian'));

        // $timpenelitiModel = new TimPenelitiModel();

        // $timpenelitiModel->save([
        //     'id_penelitian' => $idpenelitian['id_penelitian'],
        //     'fullname'      => $this->request->getVar('fullname'),
        //     'jabatan'       => $this->request->getVar('jabatan'),
        //     'nohp'          => $this->request->getVar('nohp'),
        //     'email'         => $this->request->getVar('email'),
        //     'peran'         => "Ketua Penelitian",
        // ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        // $response = ['status' => 200, 'error' => null, 'messages' => ['success' => 'Data produk berhasil ditambah.']];

        return redirect()->to('/penelitianDosen');
        // return $this->respondCreated($response);
    }
}
