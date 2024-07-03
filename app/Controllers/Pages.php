<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function index()
    {
        //
        $data = [
            'title'=> 'Beranda | MindList'
        ];
        echo view ('pages/home', $data);
    }
    
    public function about(){
        $data = [
            'title'=> 'About'
        ];
        echo view ('pages/about', $data);
    }

    public function dashboard(){
        $data = [
            'title'=> 'Dashboard'
        ];
        echo view ('pages/dashboard', $data);
    }

    public function help(){
        $data = [
            'title'=> 'Help'
        ];
        echo view ('pages/help', $data);
    }
    public function manage(){
        $data = [
            'title'=> 'Menejemen'
        ];
        echo view ('pages/manage', $data);
    }
}
