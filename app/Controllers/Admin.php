<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        echo view('admin/layout/header');
        echo view('admin/layout/sidebar');
        echo view('admin/layout/topbar');
        echo view('admin/index');
        echo view('admin/layout/footer');
    }
}
