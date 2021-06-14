<?php

namespace App\Controllers;

class Insert extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('admin/insert');
	}

	public function add()
	{
		echo view('layout/header');
		echo view('admin/add');
	}
}
