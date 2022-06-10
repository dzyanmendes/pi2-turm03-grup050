<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel {

    
    public function testeBd() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function listarClientes() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_listar_todos.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function listarCliente($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_listar_especifico.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function alterarCliente($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_alterar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }    

    public function excluirCliente($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_excluir.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }    

}