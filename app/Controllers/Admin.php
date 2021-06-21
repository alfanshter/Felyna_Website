<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\UserModel;


class Admin extends BaseController
{

    //biar dapat dipanggil di semua function
    protected $produkModel;
    protected $userModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->userModel = new UserModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Admin | Felyna'
        ];

        return view('admin/index');
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Felyna',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/login', $data);
    }

    public function loginproses()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin/login');
    }


    public function register()
    {
        $data = [
            'title' => 'Register | Felyna',
            'validation' => \Config\Services::validation()
        ];


        return view('admin/register', $data);
    }

    public function registerproses()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users_felina.username]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} tidak boleh sama'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.',
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $username = $this->request->getVar('username');
        $password = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);

        $this->userModel->insert([
            'username' => $username,
            'password' => $password,
            'role' => 0
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan');

        return redirect()->to('admin/login');
    }

    public function insert()
    {
        $data = [
            'title' => 'Admin | Felyna',
            'produk' => $this->produkModel->getProduk()
        ];

        return view('admin/insert', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail | Felyna',
            'produk' => $this->produkModel->getProduk($slug)
        ];

        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk' . $slug . 'tidak ditemukan');
        }
        return view('admin/detail', $data);
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Update | Felyna',
            'validation' => \Config\Services::validation(),
            'produk' => $this->produkModel->getProduk($slug)
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {

        //cek judul terlebih dahulu
        $produklama = $this->produkModel->getProduk($this->request->getVar('slug'));
        if ($produklama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[produk.nama]';
        }


        if (!$this->validate([
            'nama' => [
                'rules' => $rule_nama,
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} tidak boleh sama'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar melebihi batas',
                    'is_image' => 'File hanya berisi gambar',
                    'mime_in' => 'hanya support untuk jpg,jpeg,png'
                ]
            ]
        ])) {

            return redirect()->to('admin/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $filefoto = $this->request->getFile('foto');
        dd($filefoto);
        // cek gambar, apakah tetap gambar lama
        if ($filefoto->getError() == 4) {
            $namafoto = $this->request->getFile('fotolama');
        } else {
            //generate file random 
            $namafoto = $filefoto->getRandomName();
            //pindahkan gambar
            $filefoto->move('assets/img/' . $namafoto);
            //hapus file lama
            unlink('assets/img/' . $this->request->getFile('foto'));
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->produkModel->save([
            'id' => $id,
            'slug' => $slug,
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'foto' => $namafoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di ubah');

        return redirect()->to('admin/insert/');
    }

    public function create()
    {
        $data = [
            'title' => 'Create | Felyna',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function delete($id)
    {
        //ambil data foto
        $filefoto = $this->produkModel->find($id);
        //hapus foto dari lokasi
        unlink('assets/img/' . $filefoto['foto']);

        //memanggil fungsi delete pada model dengan parameter id
        $this->produkModel->delete($id);
        //akan mengambil data session
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        //setelah di delete akan meredirect ke url admin/insert
        return redirect()->to('admin/insert');
    }

    public function save()
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[produk.nama]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} tidak boleh sama'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar foto terlebih dahulu',
                    'max_size' => 'Ukuran gambar melebihi batas',
                    'is_image' => 'File hanya berisi gambar',
                    'mime_in' => 'hanya support untuk jpg,jpeg,png'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/create')->withInput();
        }

        //ambil file gambar
        $filefoto = $this->request->getFile('foto');
        //generate nama foto random
        $namafoto = $filefoto->getRandomName();

        //pindahkan file ke folder public img
        $filefoto->move('assets/img', $namafoto);


        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->produkModel->save([
            'slug' => $slug,
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'foto' => $namafoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan');

        return redirect()->to('admin/insert');
    }
}
