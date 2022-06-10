<?php

namespace App\Controllers;

class Relatorios extends BaseController
{
    public function index()
    {
        //echo 'Você está em Controller -> Relatorios -> Index';
        $data['titulo'] = ' Relatorios - Index';
        echo view('layout/header',$data);

        //$model = new \App\Models\RelatoriosModel();
        //$data['result'] = $model->listarContratos();            
        
        echo 'Você está em Controller -> Relatorios -> Index';
        //echo view('nome_da_view',$data);

        echo view('layout/footer');            
    }

    public function clientes_ativos()
    {
        //echo 'Você está em Controller -> Relatorios -> clientes ativos';
        $data['titulo'] = 'Relatorios - Clientes Ativos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->clientes_ativos();            
        echo 'Você está em Controller -> Relatorios -> clientes ativos';
        //echo view('nome_da_view',$data);        

        echo view('layout/footer');            
    }    
    
    public function clientes_inativos()
    {
        //echo 'Você está em Controller -> Relatorios -> clientes inativos';
        $data['titulo'] = 'Relatorios - Clientes Inativos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->clientes_inativos();            
        echo 'Você está em Controller -> Relatorios -> clientes inativos';
        //echo view('nome_da_view',$data);        

        echo view('layout/footer');            
    }    

    public function contratos_vencidos()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos vencidos';
        $data['titulo'] = 'Relatorios - Contratos vencidos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_vencidos();            
        echo 'Você está em Controller -> Relatorios -> Contratos vencidos';
        //echo view('nome_da_view',$data);        

        echo view('layout/footer');            
    }     
    
    public function contratos_vencendo()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos vencendo';
        $data['titulo'] = 'Relatorios - Contratos vencendo';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_vencendo();            
        echo 'Você está em Controller -> Relatorios -> Contratos vencendo';
        //echo view('nome_da_view',$data);        

        echo view('layout/footer');            
    }     

    public function contratos_avencer()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos a vencer';
        $data['titulo'] = 'Relatorios - Contratos a vencer';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_avencer();            
        echo 'Você está em Controller -> Relatorios -> Contratos a vencer';
        //echo view('nome_da_view',$data);        

        echo view('layout/footer');            
    }     
    
    public function contratos_todos()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos todos';
        $data['titulo'] = 'Relatorios - Contratos a vencer';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_todos();            
        echo 'Você está em Controller -> Relatorios -> Contratos todos';
        //echo view('nome_da_view',$data);        

        echo view('layout/footer');            
    }     


}
