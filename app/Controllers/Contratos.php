<?php

namespace App\Controllers;

class Contratos extends BaseController
{
    public function index()
    {
        //echo 'Você está em Controller -> Contratos -> Index';
        $data['titulo'] = ' Contratos - Index';
        echo view('layout/header',$data);

        $model = new \App\Models\ContratosModel();
        $data['result'] = $model->listarContratos();            
        
        echo 'Você está em Controller -> Contratos -> Index';
        //echo view('nome_da_view',$data);

        echo view('layout/footer');            
    }

    public function incluir()
    {
        //echo 'Você está em Controller -> Contratos -> incluir';
        $data['titulo'] = 'Contratos - Incluir Novo';
        echo view('layout/header',$data);

        $model = new \App\Models\ContratosModel();
        $data['result'] = $model->incluirContrato();            
        echo view('nome_da_view',$data);        

        echo view('layout/footer');            
    }    
    
    public function alterar()
    {
        //echo 'Você está em Controller -> Contratos -> alterar';
        $data['titulo'] = 'Contratos - Alterar';
        echo view('layout/header',$data);

        $model = new \App\Models\ContratosModel();
        $data['result'] = $model->alterarContrato();            
        echo view('nome_da_view',$data);
        
        echo view('layout/footer');            
    }       

    public function excluir()
    {
        //echo 'Você está em Controller -> Contratos -> excluir';
        $data['titulo'] = 'Contratos - Excluir';
        echo view('layout/header',$data);

        $model = new \App\Models\ContratosModel();
        $data['result'] = $model->excluirContrato();            
        echo view('nome_da_view',$data);
        
        echo view('layout/footer');            
    }           
    
}