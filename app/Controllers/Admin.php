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

    public function create()
    {
        $data = ['title' => 'Create | Felyna'];

        return view('admin/create', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->produkModel->save([
            'slug' => $slug,
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan');

        return redirect()->to('admin/insert');
    }
}
