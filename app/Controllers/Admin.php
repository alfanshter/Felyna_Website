<?php

namespace App\Controllers;

use App\Models\ProdukModel;


class Admin extends BaseController
{

    //biar dapat dipanggil di semua function
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Admin | Felyna'
        ];

        return view('admin/index');
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
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('admin/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->produkModel->save([
            'id' => $id,
            'slug' => $slug,
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga')
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
