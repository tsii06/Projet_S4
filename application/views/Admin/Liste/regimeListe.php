<?php $this->load->view('Admin/header.php');?>
       
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Regimes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Objectif</th>
                                        <th>Poids</th>
                                        <th>Prix</th>
                                        <th>Durée</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php foreach($list as $indice){ ?>
										<tr>
											<td><?php echo $indice['objectif']; ?></td>
											<td><?php echo $indice['poids']; ?></td>
											<td><?php echo $indice['prix']; ?></td>
											<td><?php echo $indice['duree']; ?></td>
											<td>
												<a href="<?php echo site_url('RegimeController/voirListeDetail?idRegime='.$indice['idRegime']); ?>" class="btn btn-success">Detail</a>
											</td>
										</tr>
									<?php } ?>
                                </tbody>
                            </table>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php $this->load->view('Admin/footer.php');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->   
</body>

</html>
