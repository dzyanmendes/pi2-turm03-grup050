<?php

namespace App\Controllers;

class Relatorios extends BaseController
{
    public function index()
    {
        //echo 'Você está em Controller -> Relatorios -> Index';
        $data['titulo'] = ' Relatorios - Index';
        echo view('layout/header',$data);

        //$model = new \App\Models\RelatoriosModel();
        //$data['result'] = $model->listarContratos();            
        
        $data['titulo_relatorio'] =  'Você está em Controller -> Relatorios -> Index';
        //echo view('nome_da_view',$data);

        echo view('layout/footer');            
    }

    public function clientes_ativos()
    {
        //echo 'Você está em Controller -> Relatorios -> clientes ativos';
        $data['titulo'] = 'Relatorios - Clientes Ativos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->clientes_ativos();            
        $data['titulo_relatorio'] = 'Relatorios - Clientes Ativos';
        
        echo view('relatorios/clientes_ativos',$data);        

        echo view('layout/footer');            
    }    
    
    public function clientes_inativos()
    {
        //echo 'Você está em Controller -> Relatorios -> clientes inativos';
        $data['titulo'] = 'Relatorios - Clientes Inativos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->clientes_inativos();            
        $data['titulo_relatorio'] = 'Relatorios - Clientes Inativos';
        echo view('relatorios/clientes_inativos',$data);      

        echo view('layout/footer');            
    }    

    public function contratos_vencidos()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos vencidos';
        $data['titulo'] = 'Relatorios - Contratos vencidos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_vencidos();            
        $data['titulo_relatorio'] = 'Relatorios - Contratos vencidos';
        echo view('relatorios/contratos_vencidos',$data);       

        echo view('layout/footer');            
    }     
    
    public function contratos_vencendo()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos vencendo';
        $data['titulo'] = 'Relatorios - Contratos vencendo';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_vencendo();            
        $data['titulo_relatorio'] = 'Relatorios - Contratos vencendo';
        echo view('relatorios/contratos_vencendo',$data);  

        echo view('layout/footer');            
    }     

    public function contratos_avencer()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos a vencer';
        $data['titulo'] = 'Relatorios - Contratos No Prazo';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_avencer();            
        $data['titulo_relatorio'] = 'Relatorios - Contratos No Prazo';
        echo view('relatorios/contratos_avencer',$data);       

        echo view('layout/footer');            
    }     
    
    public function contratos_todos()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos todos';
        $data['titulo'] = 'Relatorios - Contratos - Todos';
        echo view('layout/header',$data);

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_todos();            
        $data['titulo_relatorio'] = 'Relatorios - Contratos - Todos';
        echo view('relatorios/contratos_todos',$data);     

        echo view('layout/footer');            
    }     

    public function email_pagina()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos todos';
        $data['titulo'] = 'Email - Envio de relatórios';
        echo view('layout/header',$data);

        //$model = new \App\Models\RelatoriosModel();
        //$data['result'] = $model->contratos_todos();            
        $data['titulo_interno'] = 'Email - Envio de relatórios';
        echo view('relatorios/email_pagina',$data);     

        echo view('layout/footer');            
    }   
    
    public function dashboard()
    {
        //echo 'Você está em Controller -> Relatorios -> Contratos todos';
        $data['titulo'] = 'Dashboard - geral';
        echo view('layout/header',$data);

        //$model = new \App\Models\RelatoriosModel();
        //$data['result'] = $model->contratos_todos();            
        $data['titulo_interno'] = 'Dashboard - geral';
        $model = new \App\Models\RelatoriosModel();

        $data['result'] = $model->contratos_vencendo(); 

        $data['total'] = $model->deshboard_todos(); 
        $data['qtde'] = $model->deshboard_qtde(); 

        $aux=$model->deshboard_graficobarra(); 
        $data['graficobarra_values'] = '['.implode(',', array_column($aux, 'qtd')).']';
        $data['graficobarra_names'] = '["'.implode('","', array_column($aux, 'mes_fim')).'"]';

        $aux=$model->deshboard_graficoarea(); 
        $data['graficoarea_values'] = '['.implode(',', array_column($aux, 'qtd')).']';
        $data['graficoarea_names'] = '["'.implode('","', array_column($aux, 'mes_fim')).'"]';
        
        
        echo view('relatorios/dashboard',$data);     

        echo view('layout/footer');            
    }   

//******************************************************************************************/
//******************************************************************************************/
//******************************************************************************************/
//***********************************   EMAIL SESSION         ******************************/
//******************************************************************************************/
//******************************************************************************************/


    public function email_clientes_ativos()
    {
        $email= \Config\Services::email();
        $email->setTo('pi2turm03grupo050@gmail.com');
        $email->setFrom('pi.univesp@consultortik.com.br');
        $subject='Relatorios - Clientes Ativos - Posição em: ' . date('d/m/Y H:i');
        $email->setSubject($subject);
        $email->setMailType('html');
        $data['titulo_relatorio'] = $subject;

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->clientes_ativos();            
        $email->setMessage( view( 'relatorios/clientes_ativos', $data,  [true] ) );

        $data['titulo'] = $subject;
        echo view('layout/header',$data);

        if ($email->send()){
            echo "Email enviado em ". date('d/m/Y ') . " às " . date('H:i');
        } else {
            echo "Problema no envio do email";
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }        

        echo view('layout/footer');            
    }    

    public function email_clientes_inativos()
    {
        $email= \Config\Services::email();
        $email->setTo('pi2turm03grupo050@gmail.com');
        $email->setFrom('pi.univesp@consultortik.com.br');
        $subject='Relatorios - Clientes Inativos - Posição em: ' . date('d/m/Y H:i');
        $email->setSubject($subject);
        $email->setMailType('html');
        $data['titulo_relatorio'] = $subject;

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->clientes_inativos();            
        $email->setMessage( view( 'relatorios/clientes_inativos', $data,  [true] ) );

        $data['titulo'] = $subject;
        echo view('layout/header',$data);

        if ($email->send()){
            echo "Email enviado em ". date('d/m/Y ') . " às " . date('H:i');
        } else {
            echo "Problema no envio do email";
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }        

        echo view('layout/footer');            
    }    

    public function email_contratos_vencidos()
    {
        $email= \Config\Services::email();
        $email->setTo('pi2turm03grupo050@gmail.com');
        $email->setFrom('pi.univesp@consultortik.com.br');
        $subject='Relatorios - Contratos vencidos - Posição em: ' . date('d/m/Y H:i');
        $email->setSubject($subject);
        $email->setMailType('html');
        $data['titulo_relatorio'] = $subject;

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_vencidos();            
        $email->setMessage( view( 'relatorios/contratos_vencidos', $data,  [true] ) );

        $data['titulo'] = $subject;
        echo view('layout/header',$data);

        if ($email->send()){
            echo "Email enviado em ". date('d/m/Y ') . " às " . date('H:i');
        } else {
            echo "Problema no envio do email";
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }        

        echo view('layout/footer');            
    }     

    public function email_contratos_vencendo()
    {
        $email= \Config\Services::email();
        $email->setTo('pi2turm03grupo050@gmail.com');
        $email->setFrom('pi.univesp@consultortik.com.br');
        $subject='Relatorios - Contratos vencendo - Posição em: ' . date('d/m/Y H:i');
        $email->setSubject($subject);
        $email->setMailType('html');
        $data['titulo_relatorio'] = $subject;

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_vencendo();            
        $email->setMessage( view( 'relatorios/contratos_vencendo', $data,  [true] ) );

        $data['titulo'] = $subject;
        echo view('layout/header',$data);

        if ($email->send()){
            echo "Email enviado em ". date('d/m/Y ') . " às " . date('H:i');
        } else {
            echo "Problema no envio do email";
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }


        echo view('layout/footer');            
    }     

    public function email_contratos_avencer()
    {
        $email= \Config\Services::email();
        $email->setTo('pi2turm03grupo050@gmail.com');
        $email->setFrom('pi.univesp@consultortik.com.br');
        $subject='Relatorios - Contratos No Prazo - Posição em: ' . date('d/m/Y H:i');
        $email->setSubject($subject);
        $email->setMailType('html');
        $data['titulo_relatorio'] = $subject;

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_avencer();            
        $email->setMessage( view( 'relatorios/contratos_avencer', $data,  [true] ) );

        $data['titulo'] = $subject;
        echo view('layout/header',$data);

        if ($email->send()){
            echo "Email enviado em ". date('d/m/Y ') . " às " . date('H:i');
        } else {
            echo "Problema no envio do email";
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }        

        echo view('layout/footer');            
    }     

    public function email_contratos_todos()
    {
        $email= \Config\Services::email();
        $email->setTo('pi2turm03grupo050@gmail.com');
        $email->setFrom('pi.univesp@consultortik.com.br');
        $subject='Todos os contratos - Posição em: ' . date('d/m/Y H:i');
        $email->setSubject($subject);
        $email->setMailType('html');
        $data['titulo_relatorio'] = $subject;

        $model = new \App\Models\RelatoriosModel();
        $data['result'] = $model->contratos_todos();            
        $email->setMessage( view( 'relatorios/contratos_todos', $data,  [true] ) );

        $data['titulo'] = $subject;
        echo view('layout/header',$data);

        if ($email->send()){
            echo "Email enviado em ". date('d/m/Y ') . " às " . date('H:i');
        } else {
            echo "Problema no envio do email";
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }

        echo view('layout/footer');            
    }

}
