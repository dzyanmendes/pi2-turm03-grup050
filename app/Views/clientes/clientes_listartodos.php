<div class="titulo mb-2">
    <?php if($titulo_interno) { ?><h3><?php echo $titulo_interno; ?> </h3> <?php } else {echo '' ;} ?>
</div>
<div class="table">
<div class="mb-2"><a href="<?php echo base_url().'/public/clientes/incluir'?>" class="btn btn-primary active" role="button" aria-pressed="true">Cadastrar Cliente</a>
</div>
<table>

<tr>
    <th>codigo          </th>
    <th>nome            </th>
    <th>nomeFantasia    </th>
    <!--<th>cpf             </th>-->
    <!--<th>rg              </th>-->
    <th>cnpj            </th>
    <!--<th>endereco        </th>-->
    <th>bairro          </th>
    <th>cidade          </th>
    <th>estado          </th>
    <!--<th>cep             </th>-->
    <!--<th>celular         </th>-->
    <th>telefone        </th>
    <!--<th>nascimento      </th>-->
    <!--<th>ie              </th>-->
</tr>
<?php foreach ($result as $row) : ?>
    <tr>
        <td><?php echo $row->codigo          ?></td>
        <td><?php echo $row->nome            ?></td>
        <td><?php echo $row->nomeFantasia    ?></td>
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
        <td>
            <?php echo anchor(base_url().'/public/clientes/alterar/'.$row->codigo,'Editar'); ?>
            <?php echo anchor(base_url().'/public/clientes/excluir/'.$row->codigo,'Excluir',['onclick' => 'return confirma_exclusao();']); ?>
        </td>
        <!--<td><php echo $row->nascimento      ?></td>-->
        <!--<td><php echo $row->ie              ?></td>-->
    </tr>
<?php endforeach; ?>

</table>
</div>
