<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    public function index()
    {
        //echo 'Você está em Controller -> Clientes -> Index';
        $data['titulo'] = 'Clientes - index';
        echo view('layout/header',$data);

        $model = new \App\Models\ClientesModel();
        $data['result'] = $model->listarClientes();            
        
        echo 'Você está em Controller -> Clientes -> Index';
        //echo view('nome_da_view',$data);

        echo view('layout/footer');            
    }

    public function incluir()
    {
        //echo 'Você está em Controller -> Clientes -> incluir';
        $data['titulo'] = 'Clientes - incluir';
        echo view('layout/header',$data);

        $model = new \App\Models\ClientesModel();
        $data['result'] = $model->incluirCliente();            
        echo view('nome_da_view',$data);        

        echo view('layout/footer');            
    }    
    
    public function alterar()
    {
        //echo 'Você está em Controller -> Clientes -> alterar';
        $data['titulo'] = 'Clientes - alterar';
        echo view('layout/header',$data);

        $model = new \App\Models\ClientesModel();
        $data['result'] = $model->alterarCliente();            
        echo view('nome_da_view',$data);
        
        echo view('layout/footer');            
    }       

    public function excluir()
    {
        //echo 'Você está em Controller -> Clientes -> excluir';
        $data['titulo'] = 'Clientes - excluir';
        echo view('layout/header',$data);

        $model = new \App\Models\ClientesModel();
        $data['result'] = $model->excluirCliente();            
        echo view('nome_da_view',$data);
        
        echo view('layout/footer');            
    }           
    
}
