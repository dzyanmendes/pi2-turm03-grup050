<?php

namespace App\Models;

use CodeIgniter\Model;

class RelatoriosModel {

    
    public function testeBd() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function clientes_ativos() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function clientes_inativos() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function contratos_vencidos() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function contratos_vencendo() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function contratos_avencer() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function contratos_todos() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

}