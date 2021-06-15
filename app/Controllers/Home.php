<?php

namespace App\Controllers;

use App\Models\ProdukModel;


class Home extends BaseController
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
            'title' => 'Home | Felyna'
        ];

        return view('pages/index', $data);
    }

    public function about()
    {

        $data = [
            'title' => 'About | Felyna'
        ];
        return view('pages/about', $data);
    }

    public function programming()
    {
        $data = [
            'title' => 'Programming | Felyna'
        ];

        return view('pages/programming', $data);
    }

    public function website()
    {

        // $produk = $this->produkModel->findAll();

        $data = [
            'title' => 'Webiste | Felyna',
            'produk' => $this->produkModel->getProduk()
        ];

        return view('pages/website', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail | Felyna',
            'produk' => $this->produkModel->getProduk($slug)
        ];

        return view('pages/detail_website', $data);
    }

    public function frontend()
    {
        $data = [
            'title' => 'Frontend | Felyna'
        ];

        return view('pages/frontend', $data);
    }

    public function backend()
    {
        $data = [
            'title' => 'Backend | Felyna',
            'produk' => [
                'nama' => 'Toko Online private',
                'harga' => 'Rp. 2500.000',
                'database' => 'Firebase'
            ],
            [
                'nama' => 'Toko Online public',
                'harga' => 'Rp. 5000.000',
                'database' => 'Firebase'
            ],
            [
                'nama' => 'Toko Online public Speisal',
                'harga' => 'Rp. 15.000.000',
                'database' => 'MongoDB'
            ]
        ];

        return view('pages/backend', $data);
    }
}
