<?php $this->load->view('Utilisateur/header.php');?>
       
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Facturation</h6>
                        </div>
				    <form action="<?php echo site_url('PdfController/Exporter'); ?>" method="post">
				    <input type="hidden" name="multiple" value="<?php echo $multiple; ?>">
				    <input type="hidden" name="idRegime" value="<?php echo $idRegime; ?>">
                        <div class="card-body">
                            <div class="table-responsive">
						<ul>
							<li>Nom : <?php echo $utilisateur['nom']; ?></li>
							<li>Prenoms : <?php echo $utilisateur['email']; ?></li>
							<li>Objectif : <?php echo $regime['objectif']; ?></li>
							<li>Poids : <?php echo $regime['poids']; ?></li>
							<li>Prix : <?php echo $regime['prix']; ?> Ar</li>
							<li>Durée : <?php echo $regime['duree']; ?> jrs</li>
						</ul>
						<h3 class="text-center">Regime à commander</h3>
						<h4>Aliment</h4>
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Aliment</th>
									<th>Quantie(par jrs)</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listaliment as $row){ ?>
									<tr>
										<td><?php echo $row['sakafo']; ?></td>
										<td><?php echo $row['quantite']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<h4>Activite</h4>
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Aliment</th>
									<th>Nombre(par jrs)</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listactivite as $row){ ?>
									<tr>
										<td><?php echo $row['nom']; ?></td>
										<td><?php echo $row['nombre']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
                            </div>
                        </div>
                    </div>
				<div class="card shadow mb-4">
					<button type="submit" class="btn btn-primary">Exporter pdf</button>
				</div>
                </div>
                <!-- /.container-fluid -->
			</form>			
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!--?php $this->load->view('Admin/footer.php'); ?-->
    
</body>

</html>