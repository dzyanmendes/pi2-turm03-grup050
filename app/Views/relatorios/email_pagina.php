<div class="titulo mb-2">
    <?php if($titulo_interno) { ?><h3><?php echo $titulo_interno; ?> </h3> <?php } else {echo '' ;} ?>
</div>
<div class="table">
<div class="mb-2"><a href="<?php echo base_url().'/public/relatorios/email_clientes_ativos'?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Clientes ativos</a>
<br /><div class="mb-2"><a href="<?php echo base_url().'/public/relatorios/email_clientes_inativos'?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Clientes inativos</a>
<br /><div class="mb-2"><a href="<?php echo base_url().'/public/relatorios/email_contratos_avencer'?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Contratos a vencer</a>
<br /><div class="mb-2"><a href="<?php echo base_url().'/public/relatorios/email_contratos_vencendo'?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Contratos vencendo</a>
<br /><div class="mb-2"><a href="<?php echo base_url().'/public/relatorios/email_contratos_vencidos'?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Contratos vencidos</a>
<br /><div class="mb-2"><a href="<?php echo base_url().'/public/relatorios/email_contratos_todos'?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Contratos todos</a>
</div>


