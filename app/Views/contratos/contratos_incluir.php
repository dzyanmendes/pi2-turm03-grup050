<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<div class="m-2">
  <div class="titulo">
    <?php if ($titulo_interno) { ?><h3><?php echo $titulo_interno; ?> </h3> <?php } 
          else {
            echo '';
          } 
    ?>
  </div>

  <div class="formulario">
    <form form action="<?php echo base_url() . '/contratos/salvar' ?>" method="post">
      <!--<input type="hidden" id="codigo" name="codigo" value="<php echo $codigo; ?>">-->
      <!--<div class="form-group row">
      <label for="codigo" class="col-4 col-form-label">codigo</label> 
      <div class="col-8">
        <input id="codigo" name="codigo" type="text" class="form-control">
      </div>
     </div>-->
      <div class="form-group row">
        <label for="clienteCodigo" class="col-4 col-form-label">clienteCodigo</label>
        <div class="col-8">
          <input id="clienteCodigo" name="clienteCodigo" type="text" class="form-control" value="<?php echo $clienteCodigo ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="dataIni" class="col-4 col-form-label">dataIni</label>
        <div class="col-8">
          <input id="dataIni" name="dataIni" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="dataFim" class="col-4 col-form-label">dataFim</label>
        <div class="col-8">
          <input id="dataFim" name="dataFim" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="observacao" class="col-4 col-form-label">observacao</label>
        <div class="col-8">
          <input id="observacao" name="observacao" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="servico" class="col-4 col-form-label">servico</label>
        <div class="col-8">
          <input id="servico" name="servico" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="tipo" class="col-4 col-form-label">tipo</label> 
        <div class="col-8">
          <select id="tipo" name="tipo" class="custom-select">
            <option value="mensal">mensal</option>
            <option value="anual">anual</option>
          </select>
        </div>
      </div> 
      <!--<div class="form-group row">
        <label for="contratoRef" class="col-4 col-form-label">contratoRef</label>
        <div class="col-8">
          <input id="contratoRef" name="contratoRef" placeholder="# contrato referencia" type="text" class="form-control">
        </div>
      </div>-->
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button type="submit" class="btn btn-primary" aria-label="Enviar inclusão do Contrato">Incluir Contrato</button>
        </div>
      </div>
    </form>
  </div>
</div>