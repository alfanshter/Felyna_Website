<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KeranjangModel;


class Home extends BaseController
{
    //biar dapat dipanggil di semua function
    protected $produkModel;
    protected $keranjangModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->keranjangModel = new KeranjangModel();
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

    public function keranjang()
    {

        $username = session()->get('username');
        if (!$username == null) {
            $data = [
                'title' => 'Webiste | Felyna',
                'produk' => $this->keranjangModel->getKeranjang($username)
            ];

            return view('pages/keranjang', $data);
        } else {
            $data = [
                'title' => 'Webiste | Felyna'
            ];

            return view('pages/keranjangvalid', $data);
        }
    }

    public function hapuskeranjang($id_barang)
    {


        $this->keranjangModel->deleteKeranjang($id_barang);
        return redirect()->to('home/keranjang/' . $id_barang);
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

    public function erroadmin()
    {
        $data = [
            'title' => 'Frontend | Felyna'
        ];
        return view('pages/error', $data);
    }


    public function addcart()
    {

        $session = session()->get('role');
        $username = session()->get('username');
        if ($session == '1') {
            return redirect()->to('home/erroadmin');
        } else if ($session == '0') {
            $curl = curl_init();

            $data = array(
                "nama_barang" => $this->request->getVar('nama_barang'),
                "harga_barang" => $this->request->getVar('harga_barang'),
                "foto_barang" => $this->request->getVar('foto_barang'),
                "jenis_software" => $this->request->getVar('jenis_software'),
                "nama_database" => $this->request->getVar('nama_database'),
                "slug" => $this->request->getVar('slug'),
                "username" => $username,
            );
            $postdata = json_encode($data);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://localhost/bebitoko/create.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postdata,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;
            return redirect()->to('home/keranjang/' . $username);
        } else {
            return redirect()->to('admin/login');
        }
    }
}
