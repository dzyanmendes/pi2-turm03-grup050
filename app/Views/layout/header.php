<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" >
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <title><?php if($titulo) { echo $titulo; } else {echo 'PI2T03G050' ;}         ?></title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo base_url("css/styles.css") ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script>
            tamanho = 16;
            function diminuir(){
            tamanho--;
            document.body.style.fontSize=tamanho+"px";
            }
            function aumentar(){
            tamanho++;
            document.body.style.fontSize=tamanho+"px";
            }
        </script>
        <script type="text/javascript">
            function confirmaExclusao(){
                return confirm('Deseja excluir o registro?');                
            }
        </script>
        <script type="text/javascript">
    
            function limpa_formulário_cep() {
                    //Limpa valores do formulário de cep.
                    document.getElementById('rua').value=("");
                    document.getElementById('bairro').value=("");
                    document.getElementById('cidade').value=("");
                    document.getElementById('uf').value=("");
                    document.getElementById('ibge').value=("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('endereco').value=(conteudo.logradouro);
                    document.getElementById('bairro').value=(conteudo.bairro);
                    document.getElementById('cidade').value=(conteudo.localidade);
                    document.getElementById('estado').value=(conteudo.uf);
                    //document.getElementById('ibge').value=(conteudo.ibge);
                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }
                
            function pesquisacep(valor) {

                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('endereco').value="...";
                        document.getElementById('bairro').value="...";
                        document.getElementById('cidade').value="...";
                        document.getElementById('estado').value="...";
                        //document.getElementById('ibge').value="...";

                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            };

        </script>
        <style>
            .vencido{
                background-color: #ff674d;
            }

            .vencendo{
                background-color: #e6f587;
            }
            .noprazo{
                background-color: #82cafa;
            }
        </style>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">PI2T03G050</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!--<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>-->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <button onClick="aumentar();" aria-label="Aumentar tamanho da fonte">A+</button> <!-- Botão + -->
            <button onClick="diminuir();" aria-label="Diminuir tamanho da fonte">A-</button> <!-- Botão - -->
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="#" onclick="diminuir()">Diminuir Fonte</a></li>
                        <li><a class="dropdown-item" href="#" onclick="aumentar()">Aumentar Fonte</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>-->
            </ul>
        </nav>

        <!-- MENU LATERAL - INICIO --> 
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" aria-label="Menu de Cadastros">Dashboard</div>
                            <a class="nav-link" href="<?php echo base_url("relatorios/dashboard") ?>" aria-label="Dashboard">
                                <div class="sb-nav-link-icon" ><i class="far fa-id-badge"></i></div> Geral
                            </a>                                
                        
                            <div class="sb-sidenav-menu-heading" aria-label="Menu de Cadastros">Cadastros</div>
                            <a class="nav-link" href="<?php echo base_url("clientes/") ?>" aria-label="Cadastro de Clientes">
                                <div class="sb-nav-link-icon" ><i class="far fa-id-badge"></i></div> Clientes
                            </a>
                            <a class="nav-link" href="<?php echo base_url("contratos/") ?>" aria-label="Cadastro de Contratos">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div> Contratos
                            </a>

                            <div class="sb-sidenav-menu-heading">Relatórios</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" aria-label="Relatórios de Clientes">
                                <div class="sb-nav-link-icon"><i class="far fa-file-alt"></i></div>Clientes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url("relatorios/clientes_ativos") ?>" aria-label="Relatório de Clientes ativos">Clientes Ativos</a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url("relatorios/clientes_inativos") ?>" aria-label="Relatório de Clientes Inativos">Clientes Inativos</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts" aria-label="Relatórios de Contratos">
                                <div class="sb-nav-link-icon"><i class="far fa-file-alt"></i></div>Contratos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url("relatorios/contratos_vencidos") ?>" aria-label="Relatório de contratos vencidos">Vencidos</a>
                                    <a class="nav-link" href="<?php echo base_url("relatorios/contratos_vencendo") ?>" aria-label="Relatório de contrados vencendo">Vencendo</a>
                                    <a class="nav-link" href="<?php echo base_url("relatorios/contratos_avencer") ?>" aria-label="Relatórios de contratos a vencer">No prazo</a>
                                    <a class="nav-link" href="<?php echo base_url("relatorios/contratos_todos") ?>" aria-label="Relatório de contratos - todos os contratros">Todos</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="<?php echo base_url("relatorios/email_pagina") ?>" aria-label="Envio de relatórios por Email">
                                <div class="sb-nav-link-icon"><i class="fas fa-mail-bulk"></i></div> Email-Enviar
                            </a>


                            <!--<div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>-->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logado como:</div>
                        UNIVESP
                    </div>
                </nav>
            </div>
            <!-- MENU LATERAL - FIM --> 


            <!-- CONTEUDO - INICIO --> 


            <div id="layoutSidenav_content">
                <main>
