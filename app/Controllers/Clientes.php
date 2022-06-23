<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    //private $model;

    public function __construct()
    {
        //$model = new \App\Models\ClientesModel();
    }


    public function index()
    {
        //echo 'Você está em Controller -> Clientes -> Index';
        $data['titulo'] = 'Clientes - index';
        echo view('layout/header', $data);

        $model = new \App\Models\ClientesModel();
        //$data['result'] = $model->listarClientes();            
        //echo 'Você está em Controller -> Clientes -> Index';
        echo view('clientes/clientes_listartodos', [
            'result' => $model->listarClientes(),
            'titulo_interno' => 'Listagem de todos os Clientes'
        ]);
        echo view('layout/footer');
    }

    public function incluir()
    {
        //echo 'Você está em Controller -> Clientes -> incluir';
        $data['titulo'] = 'Clientes - incluir';
        echo view('layout/header', $data);

        //$model = new \App\Models\ClientesModel();
        // $data['result'] = $model->incluirCliente();            
        $data['titulo_interno'] = 'Inclusão de Clientes';
        echo view('clientes/clientes_incluir', $data);
        //echo 'Você está em Controller -> Clientes -> incluir';
        echo view('layout/footer');
    }

    public function alterar($cliente)
    {
        //echo 'Você está em Controller -> Clientes -> alterar';
        $data['titulo'] = 'Clientes - alterar';
        echo view('layout/header', $data);

        $model = new \App\Models\ClientesModel();
        $data['result'] = $model->alterarCliente($cliente);
        $data['titulo_interno'] =  'Alteração de cadatro do cliente';
        //dd($data);
        echo view('clientes\clientes_alterar', $data);

        echo view('layout/footer');
    }

    public function salvar()
    {
        //echo 'Você está em Controller -> Clientes -> alterar';
        $data['titulo'] = 'Clientes - alterar';
        echo view('layout/header', $data);
        $model = new \App\Models\ClientesModel();
        $data = $this->request->getPost();
        unset($data['submit']);
        //dd($data);
        if ($model->salvar($data)) {
            return view('messages', [
                'message' => 'Cliente cadastrado com sucesso!'
            ]);
        } else {
            echo 'Ocorreu um erro';
        }

        //$data['result'] = $model->alterarCliente($cliente);            


        echo view('layout/footer');
    }

    public function salvar_update($codigo)
    {
        //echo 'Você está em Controller -> Clientes -> alterar';
        $data['titulo'] = 'Clientes - alterar';
        echo view('layout/header', $data);

        $model = new \App\Models\ClientesModel();
        $data = $this->request->getPost();
        unset($data['submit']);
        //dd($data);
        if ($model->salvar_update($data)) {
            return view('messages', [
                'message' => 'Cliente cadastrado com sucesso!'
            ]);
        } else {
            echo 'Ocorreu um erro';
        }
        echo view('layout/footer');
    }

    public function excluir($cliente)
    {
        //echo 'Você está em Controller -> Clientes -> excluir';

        $data['titulo'] = 'Clientes - excluir';
        echo view('layout/header', $data);


        $model = new \App\Models\ClientesModel();
        //if ($model->excluirCliente($cliente)) {
        if ($model->excluirCliente($cliente)) {
            echo view('messages', [
                'message' => 'Usuário excluído com sucesso'
            ]);
        } else {
            echo 'Erro';
        }

        $data['titulo_interno'] = 'Clientes - excluir';
        //echo view('nome_da_view',$data);
        echo view('clientes/clientes_listartodos', [
            'result' => $model->listarClientes(),
            'titulo_interno' => 'Listagem de todos os Clientes'
        ]);
        echo view('layout/footer');
    }

    public function getCepbyAPI($cep)
    {
        $client = \Config\Services::curlRequest();

        $requestGET = $client->request('GET', 'viacep.com.br/ws/' . $cep . '/json/');

        $dados = json_decode($requestGET->getBody());

        dd($dados->cep);
    }
}
