            <div id="none">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Contratos - Indicadores</li>
                        </ol>
                        <div class="row">
                            <?php foreach($total as $row) {?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?php echo $row->total; ?> contratos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url("relatorios/contratos_todos") ?>">Total de Contratos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php } 
                                foreach($qtde as $row) {
                            ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?php echo $row->vencendo; ?> contratos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url("relatorios/contratos_vencendo") ?>">Vencendo em breve</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?php echo $row->noprazo; ?> contratos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url("relatorios/contratos_avencer") ?>">No prazo</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?php echo $row->vencidos; ?> contratos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url("relatorios/contratos_vencidos") ?>">Vencidos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Contratos Vencidos
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Contratos vencendo por mês
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Contratos - Vencendo
                            </div>
                            <div class="card-body">
                            <table class="table" id="dataTable">

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
                                    <tr>
                                        <td scope="row"><?php echo $row->codigo          ?></td>
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
                                        <td style="text-align:right"><?php echo $row->dias        ?></td>
                                        <td><?php echo $row->status        ?></td>
                                        <!--<td><php echo $row->nascimento      ?></td>-->
                                        <!--<td><php echo $row->ie              ?></td>-->
                                    </tr>
                                <?php endforeach; ?>

                                </table>                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script>
                // Set new default font family and font color to mimic Bootstrap's default styling
                Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                Chart.defaults.global.defaultFontColor = '#292b2c';

                // Bar Chart Example
                var ctx = document.getElementById("myBarChart");
                var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo $graficobarra_names;?>,
                    datasets: [{
                    label: "Revenue",
                    backgroundColor: "rgba(2,117,216,1)",
                    borderColor: "rgba(2,117,216,1)",
                    data: <?php echo $graficobarra_values;?>,
                    }],
                },
                options: {
                    scales: {
                    xAxes: [{
                        time: {
                        unit: 'month'
                        },
                        gridLines: {
                        display: false
                        },
                        ticks: {
                        maxTicksLimit: 6
                        }
                    }],
                    yAxes: [{
                        ticks: {
                        min: 0,
                        max: 10,
                        maxTicksLimit: 5
                        },
                        gridLines: {
                        display: true
                        }
                    }],
                    },
                    legend: {
                    display: false
                    }
                }
                });

            </script>




            <script>
                // Set new default font family and font color to mimic Bootstrap's default styling
                Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                Chart.defaults.global.defaultFontColor = '#292b2c';

                // Area Chart Example
                var ctx = document.getElementById("myAreaChart");
                var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo $graficoarea_names;?>,
                    datasets: [{
                    label: "Sessions",
                    lineTension: 0.3,
                    backgroundColor: "rgba(2,117,216,0.2)",
                    borderColor: "rgba(2,117,216,1)",
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(2,117,216,1)",
                    pointBorderColor: "rgba(255,255,255,0.8)",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(2,117,216,1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: <?php echo $graficoarea_values; ?>,
                    }],
                },
                options: {
                    scales: {
                    xAxes: [{
                        time: {
                        unit: 'date'
                        },
                        gridLines: {
                        display: false
                        },
                        ticks: {
                        maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                        min: 0,
                        max: 10,
                        maxTicksLimit: 5
                        },
                        gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                        }
                    }],
                    },
                    legend: {
                    display: false
                    }
                }
                });


            </script>
