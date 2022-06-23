<div class="m-2">
<div class="titulo">
    <?php if($titulo_interno) { ?><h3><?php echo $titulo_interno; ?> </h3> <?php } else {echo '' ;} ?>
</div>
<div >
<table class="table table-sm" id="dataaTable">

<tr>
    <th>codigo          </th>
    <th>nome            </th>
    <!--<th>nomefantasia    </th>-->
    <!--<th>cpf             </th>-->
    <!--<th>rg              </th>-->
    <th>cnpj            </th>
    <!--<th>endereco        </th>-->
    <th>data inicio          </th>
    <th>data fim          </th>
    <th>tipo          </th>
    <!--<th>cep             </th>-->
    <!--<th>celular         </th>-->
    <th>servico        </th>
    <!--<th>nascimento      </th>-->
    <!--<th>ie              </th>-->
    <th>operacoes        </th>
</tr>
<?php foreach ($result as $row) : ?>
    <tr>
        <td><?php echo $row->codigo          ?></td>
        <td><?php echo $row->nome            ?></td>
        <!--<td><php echo $row->nomeFantasia    ?></td>-->
        <!--<td><php echo $row->cpf             ?></td>-->
        <!--<td><php echo $row->rg              ?></td>-->
        <td><?php echo $row->cnpj            ?></td>
        <!--<td><php echo $row->endereco        ?></td>-->
        <td><?php echo date("d/m/Y", strtotime($row->dataIni)) ?></td>
        <td><?php echo date("d/m/Y", strtotime($row->dataFim)) ?></td>
        <td><?php echo $row->tipo          ?></td>
        <!--<td><php echo $row->cep             ?></td>-->
        <!--<td><php echo $row->celular         ?></td>-->
        <td><?php echo $row->servico        ?></td>
        <!--<td><php echo $row->nascimento      ?></td>-->
        <!--<td><php echo $row->ie              ?></td>-->
        <td>
            <a class="btn btn-success btn-sm" href="<?php echo base_url().'/contratos/alterar/'.$row->codigo; ?>" aria-label="Alterar este contrato">Editar</a>
            <a class="btn btn-warning btn-sm"href="<?php echo base_url().'/contratos/excluir/'.$row->codigo; ?>" aria-label="Excluir este contrato" onclick="return confirmaExclusao();">Excluir</a>

        </td>
    </tr>
<?php endforeach; ?>

</table>
</div>
