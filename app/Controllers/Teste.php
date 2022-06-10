<?php namespace App\Controllers;

//defined('baseURL') or EXIT('AÇÃO NÃO PERMITIDA');

class Teste extends BaseController
{
    
    public function index(){
        $data['titulo'] = 'MODULO DE TESTE';
        echo view('layout/header',$data);
        

        //$model = new \App\Models\TesteModel();
        //$data['result'] = $model->getTesteDB();            
        //echo view('teste',$data);
        
        echo view('layout/footer');            
        
    } 

    public function teste(){
        $data['titulo'] = 'MODULO DE TESTE';
        echo view('layout/header',$data);
        

        //$model = new \App\Models\TesteModel();
        //$data['result'] = $model->getTesteDB();            
        //echo view('teste',$data);
        
        echo view('layout/footer');            
        
    }     

    public function BD(){
        $data['titulo'] = 'MODULO DE TESTE - Banco de Dados';
        echo view('layout/header',$data);
        

        $model = new \App\Models\TesteModel();
        $resultado = $model->testeBd();            
        

        if ($resultado) { 
            
            echo 'Registros encontrados, gerando tabela abaixo: <br /> <br /> <br />';
            $table = new \CodeIgniter\View\Table();
            echo $table->generate($resultado);
        } 
        
        echo view('layout/footer');            
        
    }     
    
}