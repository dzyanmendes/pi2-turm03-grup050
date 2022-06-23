<div class="m-4">
    <div class="titulo">
        <?php if ($titulo_interno) { ?><h3><?php echo $titulo_interno; ?> </h3> <?php } 
              else {
                echo '';
              } ?>
    </div>
    <div class="col-2">
        <div class="row mb-2" style="text-align=left"><a href="<?php echo base_url() . '/relatorios/email_clientes_ativos' ?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Clientes ativos</a></div>
        <div class="row mb-2" style="text-align=left"><a href="<?php echo base_url() . '/relatorios/email_clientes_inativos' ?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Clientes inativos</a></div>
        <div class="row mb-2" style="text-align=left"><a href="<?php echo base_url() . '/relatorios/email_contratos_avencer' ?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Contratos a vencer</a></div>
        <div class="row mb-2" style="text-align=left"><a href="<?php echo base_url() . '/relatorios/email_contratos_vencendo' ?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Contratos vencendo</a></div>
        <div class="row mb-2" style="text-align=left"><a href="<?php echo base_url() . '/relatorios/email_contratos_vencidos' ?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Contratos vencidos</a></div>
        <div class="row mb-2" style="text-align=left"><a href="<?php echo base_url() . '/relatorios/email_contratos_todos' ?>" class="btn btn-primary active" role="button" aria-pressed="true">Email: Contratos todos</a></div>
    </div>
</div>
