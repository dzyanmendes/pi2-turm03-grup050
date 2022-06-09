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
    
}