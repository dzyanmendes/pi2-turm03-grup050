<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<div class="m-2">
  <div class="titulo">
    <?php 
          if ($titulo_interno) { ?><h3><?php echo $titulo_interno; ?> </h3> <?php } 
          else {
            echo '';
          } 
    ?>
  </div>

  <div class="formulario">
    <form form action="<?php echo base_url() . '/clientes/salvar' ?>" method="post">
      <div class="form-group row">
        <label for="nome" class="col-4 col-form-label">Nome / Razão Social</label>
        <div class="col-8">
          <input id="nome" name="nome" placeholder="Nome" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nomeFantasia" class="col-4 col-form-label">Nome Fantasia</label>
        <div class="col-8">
          <input id="nomeFantasia" name="nomeFantasia" placeholder="NomeFantasia" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="cpf" class="col-4 col-form-label">CPF</label>
        <div class="col-8">
          <input id="cpf" name="cpf" placeholder="CPF" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label" for="rg">RG</label>
        <div class="col-8">
          <input id="rg" name="rg" placeholder="RG" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="cnpj" class="col-4 col-form-label">CNPJ</label>
        <div class="col-8">
          <input id="cnpj" name="cnpj" placeholder="CNPJ" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="cep" class="col-4 col-form-label">CEP</label>
        <div class="col-8">
          <input id="cep" name="cep" placeholder="CEP" type="text" class="form-control" onblur="pesquisacep(this.value);" />
        </div>
      </div>
      <div class="form-group row">
        <label for="endereco" class="col-4 col-form-label">Endereco</label>
        <div class="col-8">
          <input id="endereco" name="endereco" placeholder="Endereço" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="bairro" class="col-4 col-form-label">Bairro</label>
        <div class="col-8">
          <input id="bairro" name="bairro" placeholder="Bairro" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="cidade" class="col-4 col-form-label">Cidade</label>
        <div class="col-8">
          <input id="cidade" name="cidade" placeholder="Cidade" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="estado" class="col-4 col-form-label">Estado</label>
        <div class="col-8">
          <input id="estado" name="estado" placeholder="Estado" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="celular" class="col-4 col-form-label">Celular</label>
        <div class="col-8">
          <input id="celular" name="celular" placeholder="(xx) Xxxxx-xxxx" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="telefone" class="col-4 col-form-label">Telefone</label>
        <div class="col-8">
          <input id="telefone" name="telefone" placeholder="Telefone" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nascimento" class="col-4 col-form-label">Nascimento</label>
        <div class="col-8">
          <input id="nascimento" name="nascimento" placeholder="Nascimento" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="ie" class="col-4 col-form-label">Inscrição Estadual</label>
        <div class="col-8">
          <input id="ie" name="ie" placeholder="# inscrição estadual" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button type="submit" class="btn btn-primary" aria-label="Enviar inclusão do Cliente">Incluir Cliente</button>
        </div>
      </div>
    </form>
  </div>
