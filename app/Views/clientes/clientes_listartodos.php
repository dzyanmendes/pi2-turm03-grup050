<div class="m-2">
<div class="titulo ">
    <?php if($titulo_interno) { ?><h3><?php echo $titulo_interno; ?> </h3> <?php } else {echo '' ;} ?>
</div>

<div class="mb-2"><a href="<?php echo base_url().'/clientes/incluir'?>" class="btn btn-primary active" role="button" aria-pressed="true">Cadastrar Cliente</a>
</div>
<table id="dataaTable" class="table">

<tr>
    <th scope="col">codigo          </th>
    <th scope="col">nome            </th>
    <!--<th scope="col">nomeFantasia    </th>-->
    <!--<th scope="col">cpf             </th>-->
    <!--<th scope="col">rg              </th>-->
    <th scope="col">cnpj            </th>
    <!--<th scope="col">endereco        </th>-->
    <th scope="col">bairro          </th>
    <th scope="col">cidade          </th>
    <th scope="col">estado          </th>
    <!--<th scope="col">cep             </th>-->
    <!--<th scope="col">celular         </th>-->
    <th scope="col">telefone        </th>
    <!--<th scope="col">nascimento      </th>-->
    <!--<th scope="col">ie              </th>-->
    <th style="text-align:center">Operacoes        </th>
    <th style="text-align:center">+Contrato       </th>
</tr>
<?php foreach ($result as $row) : ?>
    <tr>
        <td scope="row"><?php echo $row->codigo          ?></td>
        <td><?php echo $row->nome            ?></td>
        <!--<td><?php echo $row->nomeFantasia    ?></td>-->
        <!--<td><php echo $row->cpf             ?></td>-->
        <!--<td><php echo $row->rg              ?></td>-->
        <td><?php echo $row->cnpj            ?></td>
        <!--<td><php echo $row->endereco        ?></td>-->
        <td><?php echo $row->bairro          ?></td>
        <td><?php echo $row->cidade          ?></td>
        <td><?php echo $row->estado          ?></td>
        <!--<td><?php echo $row->cep             ?></td>-->
        <!--<td><php echo $row->celular         ?></td>-->
        <td><?php echo $row->telefone        ?></td>
        <td style="text-align:center">
            <a class="btn btn-success btn-sm" style="width: 70px" href="<?php echo base_url().'/clientes/alterar/'.$row->codigo; ?>" aria-label="Alterar este cliente">Editar</a>
            <a class="btn btn-warning btn-sm" style="width: 70px" href="<?php echo base_url().'/clientes/excluir/'.$row->codigo; ?>" aria-label="Excluir este cliente" onclick="return confirma_exclusao();">Excluir</a>
        </td>
        <td style="text-align:center">
            <a class="btn btn-primary btn-sm" href="<?php echo base_url().'/contratos/incluir_cliente/'.$row->codigo; ?>" aria-label="Adicionar contrato para este cliente">+Contrato</a>
        </td>
        <!--<td><php echo $row->nascimento      ?></td>-->
        <!--<td><php echo $row->ie              ?></td>-->
    </tr>
<?php endforeach; ?>

</table>
</div>
