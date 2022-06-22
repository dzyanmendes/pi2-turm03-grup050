<?php if($titulo_relatorio) { ?><h3><?php echo $titulo_relatorio; ?> </h3> <?php } else {echo '' ;}         ?>

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
    <th>data inicio      </th>
    <th>data fim         </th>
    <th>tipo            </th>
    <!--<th>cep             </th>-->
    <!--<th>celular         </th>-->
    <th>servico         </th>
    <th>dias            </th>
    <th>status          </th>
    <!--<th>nascimento      </th>-->
    <!--<th>ie              </th>-->
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
        <td><?php echo $row->dias        ?></td>
        <td><?php echo $row->status        ?></td>
        <!--<td><php echo $row->nascimento      ?></td>-->
        <!--<td><php echo $row->ie              ?></td>-->
    </tr>
<?php endforeach; ?>

</table>
</div>
