<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('front/principal');
    // }

    public function index()
    {
        echo view ('front\head_view');
        echo view ('front\navbar_view');
        echo view ('front\principal');
        echo view ('front\footer_view');
    }
    public function quienes_somos()
    {
        echo view ('front\head_view');
        echo view ('front\navbar_view');
        echo view ('front\principal');
        echo view ('front\footer_view');
    }
    public function acerca_de()
    {
        echo view ('front\head_view');
        echo view ('front\navbar_view');
        echo view ('front\principal');
        echo view ('front\footer_view');
    }
    public function registro()
    {
        echo view ('front\head_view');
        echo view ('front\navbar_view');
        echo view ('front\principal');
        echo view ('front\footer_view');
    }
    public function login()
    {
        echo view ('front\head_view');
        echo view ('front\navbar_view');
        echo view ('front\principal');
        echo view ('front\footer_view');
    }
}
