<?php

namespace App\Models;

use CodeIgniter\Model;

class ContratosModel {

    protected $DBGroup = 'default';
    protected $table = 'Contratos';
    protected $primarKey = 'codigo';
    protected $autoincrement = true;
    protected $insertID = 0;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields=true;
    protected $allowedFields=[
                                'codigo',
                                'clienteCodigo',
                                'dataIni',
                                'dataFim',
                                'observacao',
                                'servico',
                                'tipo'
                                //,'contratoRef'
    ];

    // Dates
    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deletec_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = false;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    
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
        $resultado = $query->getResult();
        return $resultado;
    }

    public function alterarContrato($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\contrato_alterar.sql');
        $sql='select * from Contratos where codigo='.$codigo;
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }    

    public function excluirContrato($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\clientes_excluir.sql');
        $table=$db->table($this->table);
        $table->where('codigo',$codigo);
        if($table->delete()){
            return true;
        }
        return $false;
    }    

    public function incluirContrato($codigo) {
        $db = \Config\Database::connect();
        //$sql = file_get_contents(__DIR__ . '\SQL\contrato_excluir.sql');
        $sql='select * from Clientes';
        $query = $db->query($sql);
        $resultado = $query->getResult();
        return $resultado;
    }    

    public function salvar($dados) {
        $db = \Config\Database::connect();
        if($db->table($this->table)->insert($dados)){
            return true;
        }
        return $false;
    }    

    public function salvar_update($dados) {
        $db = \Config\Database::connect();
        $table=$db->table($this->table);
        $table->where('codigo',$dados['codigo']);
        if($table->update($dados)){
            return true;
        }
        return $false;
    }    


}