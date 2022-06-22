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
        
        $data['titulo_relatorio'] =  'Você está em Controller -> Relatorios -> Index';
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
        $data['titulo_relatorio'] = 'Você está em Controller -> Relatorios -> clientes ativos';
        
        echo view('relatorios/clientes_ativos',$data);        

        echo view('layout/footer');            
    }    
    
    public function clientes_inativos()
    {
        //echo 'Você está em Controller -> Relatorios -> clientes inativos';
        $data['titulo'] = 'Relatorios - Clientes Inativos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->clientes_inativos();            
        $data['titulo_relatorio'] = 'Você está em Controller -> Relatorios -> clientes inativos';
        echo view('relatorios/clientes_inativos',$data);      

        echo view('layout/footer');            
    }    

    public function contratos_vencidos()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos vencidos';
        $data['titulo'] = 'Relatorios - Contratos vencidos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_vencidos();            
        $data['titulo_relatorio'] = 'Você está em Controller -> Relatorios -> Contratos vencidos';
        echo view('relatorios/contratos_vencidos',$data);       

        echo view('layout/footer');            
    }     
    
    public function contratos_vencendo()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos vencendo';
        $data['titulo'] = 'Relatorios - Contratos vencendo';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_vencendo();            
        $data['titulo_relatorio'] = 'Você está em Controller -> Relatorios -> Contratos vencendo';
        echo view('relatorios/contratos_vencendo',$data);  

        echo view('layout/footer');            
    }     

    public function contratos_avencer()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos a vencer';
        $data['titulo'] = 'Relatorios - Contratos a vencer';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_avencer();            
        $data['titulo_relatorio'] = 'Você está em Controller -> Relatorios -> Contratos a vencer';
        echo view('relatorios/contratos_avencer',$data);       

        echo view('layout/footer');            
    }     
    
    public function contratos_todos()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos todos';
        $data['titulo'] = 'Relatorios - Contratos a vencer';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_todos();            
        $data['titulo_relatorio'] = 'Você está em Controller -> Relatorios -> Contratos todos';
        echo view('relatorios/contratos_todos',$data);     

        echo view('layout/footer');            
    }     


}
