<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //echo 'Você está em Controller -> Home -> Index';
        //return view('welcome_message');
        $data['titulo'] = 'MODULO DE TESTE';
        echo view('layout/header',$data);
        

        
        echo view('layout/footer');            
    }

    public function teste()
    {
        echo 'Você está em Controller -> Home -> teste';
        return view('welcome_message');
    }
}
