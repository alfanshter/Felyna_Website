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
}
