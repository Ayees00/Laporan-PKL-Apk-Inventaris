<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SI Inventaris'
        ];



        return view('home/index', $data);
    }
}
