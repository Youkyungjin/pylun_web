<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {

        return $this->list();
    }

    public function list()
    {
        return view('product/list');
    }

    public function add()
    {
        return view('product/add');
    }
}
