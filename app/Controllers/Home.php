<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function pencarian()
    {
        return view('pencarian');
    }

    public function foto()
    {
        return view('foto');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
