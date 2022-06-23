<?php

namespace App\Models;

use CodeIgniter\Model;

class RelatoriosModel {

    
    public function testeBd() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_testar.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function clientes_ativos() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_clientesativos.sql');
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function clientes_inativos() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_clientesinativos.sql');
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function contratos_vencidos() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_contratosvencidos.sql');
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function contratos_vencendo() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_contratosvencendo.sql');
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function contratos_avencer() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_contratosavencer.sql');
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function contratos_todos() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_contratostodos.sql');
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function deshboard_todos() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_deshoardtotalcontratos.sql');
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function deshboard_qtde() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_deshoardqtdecontratos.sql');
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }

    public function deshboard_graficobarra() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_dashboardgraficobarra.sql');
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }

    public function deshboard_graficoarea() {
        $db = \Config\Database::connect();
        $sql = file_get_contents(__DIR__ . '\SQL\relatorios_dashboardgraficoarea.sql');
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }
}