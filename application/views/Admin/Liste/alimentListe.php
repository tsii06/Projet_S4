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
                                        <th>Poids Min</th>
                                        <th>Categorie</th>
                                        <th>Nom</th>
                                        <th>action</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <a href="<?php echo site_url("alimentController/modifier") ?>" class="btn btn-primary">Modifier</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger">Supprimer</a>
                                        </td>
                                    </tr>
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