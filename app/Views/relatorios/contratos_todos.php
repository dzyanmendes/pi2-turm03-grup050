<div class="m-2">
    <div class="titulo">
        <?php
            if ($titulo_relatorio) { ?><h3><?php echo $titulo_relatorio; ?> </h3> <?php }
            else {
                echo '';
            }
        ?>
    </div>
    <div>
        <table class="table" id="datasaTable">

            <tr>
                <th scope="col">codigo </th>
                <th scope="col">nome </th>
                <!--<th scope="col">nomefantasia    </th>-->
                <!--<th scope="col">cpf             </th>-->
                <!--<th scope="col">rg              </th>-->
                <th scope="col">cnpj </th>
                <!--<th scope="col">endereco        </th>-->
                <th scope="col">data inicio </th>
                <th scope="col">data fim </th>
                <th scope="col">tipo </th>
                <!--<th scope="col">cep             </th>-->
                <!--<th scope="col">celular         </th>-->
                <th scope="col">servico </th>
                <th scope="col" style="text-align:right">dias </th>
                <th scope="col">status </th>
                <!--<th scope="col">nascimento      </th>-->
                <!--<th scope="col">ie              </th>-->
            </tr>
            <?php foreach ($result as $row) : ?>
                <tr class=" <?php 
                                if ($row->status == 'A vencer'){
                                     echo "vencendo";
                                } else {
                                    if ($row->status == 'Vencido') {
                                         echo 'vencido';
                                    } 
                                    else {
                                        echo 'noprazo';
                                    }
                                } 
                            ?>">
                    <td scope="row"><?php echo $row->codigo          ?></td>
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
                    <td style="text-align:right"><?php echo $row->dias        ?></td>
                    <td><?php echo $row->status;    ?></td>
                    <!--<td><php echo $row->nascimento      ?></td>-->
                    <!--<td><php echo $row->ie              ?></td>-->
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>