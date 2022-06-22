<div class="table">
<table>

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
        <td><?php echo $row->dataIni          ?></td>
        <td><?php echo $row->dataFim          ?></td>
        <td><?php echo $row->tipo          ?></td>
        <!--<td><php echo $row->cep             ?></td>-->
        <!--<td><php echo $row->celular         ?></td>-->
        <td><?php echo $row->servico        ?></td>
        <!--<td><php echo $row->nascimento      ?></td>-->
        <!--<td><php echo $row->ie              ?></td>-->
        <td>
            <a href="<?php echo base_url().'/public/contratos/alterar/'.$row->codigo; ?>" aria-label="Alterar este contrato">Editar</a>
            <a href="<?php echo base_url().'/public/contratos/excluir/'.$row->codigo; ?>" aria-label="Excluir este contrato" onclick="return confirma_exclusao();">Excluir</a>

        </td>
    </tr>
<?php endforeach; ?>

</table>
</div>
