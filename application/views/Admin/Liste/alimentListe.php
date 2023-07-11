<?php $this->load->view('Admin/header.php');?>
       
                <!-- Begin Page Content -->
                <div class="container-fluid">

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
                                        <th>#</th>
                                        <th>Objectif</th>
                                        <th>Categorie</th>
                                        <th>nom</th>
                                        <th>action</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($liste as $value) {
                                      ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $value['idObjectif']; ?></td>
                                        <td><?php echo $value['idCategorie']; ?></td>
                                        <td><?php echo $value['nom']; ?></td>

                                        <td><a href="<?php echo site_url('alimentController/modifier/'.$value['idSakafo'].''); ?>" class="btn btn-primary">Modifier</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('alimentController/supprimer/'.$value['idSakafo'].'');  ?>" class="btn btn-danger">Supprimer</a>
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
            <?php $this->load->view('Admin/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    </div>
    
</body>

</html>