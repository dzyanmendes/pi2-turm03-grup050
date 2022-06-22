<?php if($titulo_relatorio) { ?><h3><?php echo $titulo_relatorio; ?> </h3> <?php } else {echo '' ;}         ?>


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
        <!--<td><php echo $row->nascimento      ?></td>-->
        <!--<td><php echo $row->ie              ?></td>-->
    </tr>
<?php endforeach; ?>

</table>
