<?php

namespace App\Controllers;

use DateTime;

class Contratos extends BaseController
{
    public function index()
    {
        //echo 'Você está em Controller -> Clientes -> Index';
        $data['titulo'] = 'Clientes - index';
        echo view('layout/header',$data);
        
        $model = new \App\Models\ContratosModel();
        //$data['result'] = $model->listarClientes();            
        
        //echo 'Você está em Controller -> Clientes -> Index';
        echo view('contratos/contratos_listartodos', [
                    'result' => $model->listarContratos(),
                    'titulo_interno' => 'Listagem de todos os Contratos'
                 ] );
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

    public function incluir_cliente($clienteCodigo)
    {
        //echo 'Você está em Controller -> Contratos -> incluir';
        $data['titulo'] = 'Contratos - Incluir Novo';
        echo view('layout/header',$data);

        $data['clienteCodigo'] = $clienteCodigo;
        $data['titulo_interno'] = 'Contratos - Incluir Novo';        
        echo view('contratos/contratos_incluir',$data);        
        echo view('layout/footer');            
    }    
    
    public function alterar($codigo)
    {
        //echo 'Você está em Controller -> Contratos -> alterar';
        $data['titulo'] = 'Contratos - Alterar';
        $data['titulo_interno'] = 'Contratos - Alterar';
        echo view('layout/header',$data);

        $model = new \App\Models\ContratosModel();
        $data['result'] = $model->alterarContrato($codigo);            
        //dd($data['result']);
        echo view('contratos/contratos_alterar',$data);
        
        echo view('layout/footer');            
    }       

    public function excluir($codigo)
    {
        //echo 'Você está em Controller -> Contratos -> excluir';
        $data['titulo'] = 'Contratos - Excluir';
        echo view('layout/header',$data);

        $model = new \App\Models\ContratosModel();
        $data['excluido'] = $model->excluirContrato($codigo);            
        
        $data['titulo'] = 'Contratos - excluir';
        echo view('layout/header',$data);
        //echo view('nome_da_view',$data);
        echo view('contratos/contratos_listartodos', [
            'result' => $model->listarContratos(),
            'titulo_interno' => 'Listagem de todos os Clientes'
         ] );
        echo view('layout/footer'); 
    }           

    public function salvar()
    {
        //echo 'Você está em Controller -> Clientes -> alterar';
        $data['titulo'] = 'Contratos - Listar Todos';
        echo view('layout/header',$data);
        $model = new \App\Models\ContratosModel();
        $data = $this->request->getPost();
        $datetime = new DateTime($data['dataIni']);
        $data['dataIni']=date_format($datetime,'Y-m-d');
        $datetime = new DateTime($data['dataFim']);
        $data['dataFim']=date_format($datetime,'Y-m-d');
        unset($data['submit']);
        //dd($data);

        if ($model->salvar($data)){
            return view('messages',[
                'message' => 'Contrato cadastrado com sucesso!'
            ]);
        } else {
            echo 'Ocorreu um erro';
        }
        
        //$data['result'] = $model->alterarCliente($cliente);            
        
        
        echo view('layout/footer');            
    }       

    public function salvar_update()
    {
        //echo 'Você está em Controller -> Clientes -> alterar';
        $data['titulo'] = 'Contratos - alterar';
        echo view('layout/header',$data);

        $model = new \App\Models\ContratosModel();
        $data = $this->request->getPost();
        $datetime = new DateTime($data['dataIni']);
        $data['dataIni']=date_format($datetime,'Y-m-d');
        $datetime = new DateTime($data['dataFim']);
        $data['dataFim']=date_format($datetime,'Y-m-d');        
        unset($data['submit']);

        //dd($data);
        if ($model->salvar_update($data)){
            return view('messages',[
                'message' => 'Contrato alterado com sucesso!'
            ]);
        } else {
            echo 'Ocorreu um erro';
        }
        echo view('layout/footer');            
    }   
    
}
