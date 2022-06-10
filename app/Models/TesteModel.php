<?php

namespace App\Models;

use CodeIgniter\Model;

class TesteModel {

    
    public function testeBd() {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\financeiro\calendar_fluxo.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResultArray();
        return $resultado;
    }
}