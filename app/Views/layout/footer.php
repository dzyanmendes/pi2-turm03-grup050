        <!-- CONDTEUDO - FIM --> 

            </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; UNIVESP PI-II - T03 - G050  - 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url("js/scripts.js")?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <!--<script src="<php echo base_url("assets/demo/chart-area-demo.js") ?>"></script>-->
        <!--<script src="<php echo base_url("assets/demo/chart-bar-demo.js") ?>"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?php echo base_url("js/datatables-simple-demo.js")?>"></script>

        <script type="text/javascript">
            $( "#datepicker" ).datepicker();      
            $( "#dataIni" ).datepicker();      
            $( "#dataFim" ).datepicker();      
        </script>
        <script type="text/javascript">
            window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables
            // https://github.com/fiduswriter/Simple-DataTables/wiki

            const datatablesSimple = document.getElementById('dataTable');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
        </script>

    </body>
</html>
