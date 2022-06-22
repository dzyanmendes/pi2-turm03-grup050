<?php

namespace App\Models;

use CodeIgniter\Model;

class ContratosModel {

    
    public function testeBd() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\contrato_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function listarContratos() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\contrato_listar_todos.sql');
        $sql='select * from Clientes left join Contratos on Clientes.codigo=Contratos.clientecodigo';
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function listarContrato($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\contrato_listar_especifico.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function alterarContrato($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\contrato_alterar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }    

    public function excluirContrato($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\contrato_excluir.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }    

}