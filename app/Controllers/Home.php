<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Felyna'
        ];

        echo view('layout/header', $data);
        echo view('pages/index');
        echo view('layout/footer');
    }

    public function about()
    {

        $data = [
            'title' => 'About | Felyna'
        ];

        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }

    public function programming()
    {
        $data = [
            'title' => 'Programming | Felyna'
        ];

        echo view('layout/header', $data);
        echo view('pages/programming');
        echo view('layout/footer');
    }

    public function website()
    {
        $data = [
            'title' => 'Website | Felyna'
        ];

        echo view('layout/header', $data);
        echo view('pages/website');
        echo view('layout/footer');
    }

    public function frontend()
    {
        $data = [
            'title' => 'Frontend | Felyna'
        ];

        echo view('layout/header', $data);
        echo view('pages/frontend');
        echo view('layout/footer');
    }

    public function backend()
    {
        $data = [
            'title' => 'Backend | Felyna'
        ];

        echo view('layout/header', $data);
        echo view('pages/backend');
        echo view('layout/footer');
    }
}
