    <?php $this->load->view('Utilisateur/header.php'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Suggestions</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                     aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Tous les regimes possibles</h6>
                                </a>
                            <div class="collapse show" id="collapseCardExample">
                        <div class="card-body">
							<table class="table">
								<thead>
									<th>Objectif</th>
									<th>Poids</th>
									<th>Prix</th>
									<th>Durée</th>
									<th></th>
									<th></th>
								</thead>
								<tbody>
									<tbody>
										<?php if(isset($listRegimePosible)){ 
											foreach($listsuggerer as $row) { ?>
												<tr>
													<td><?php echo $row['objectif']; ?></td>
													<td><?php echo $row['poids']; ?></td>
													<td><?php echo $row['prix']; ?> Ar</td>
													<td><?php echo $row['duree']; ?> jrs</td>
													<th><a href="<?php echo site_url('RegimeController/voirDetailSuggestion/'.$row['idRegime']); ?>" class="btn btn-warning">Voir details</a></th>
													<td><a href="<?php echo site_url('RegimeController/reserverRegimeListe/'.$row['idRegime']); ?>" class="btn btn-success">Acheter</a></td>
												</tr>
											<?php }
										} ?>
										<?php foreach($listsuggerer as $row) { ?>
											<form action="<?php echo site_url('RegimeController/reserverRegimeListeTsy'); ?>" method="post">
												<tr>
													<input type="hidden" name="idRegime" value="<?php echo $row['idRegime']; ?>">
													<input type="hidden" name="multiple" value="<?php echo $row['multiple']; ?>">
													<td><?php echo $row['objectif']; ?></td>
													<td><?php echo $row['poids']; ?></td>
													<td><?php echo $row['prix']; ?> Ar</td>
													<td><?php echo $row['duree']; ?> jrs</td>
													<th><a href="<?php echo site_url('RegimeController/voirDetailSuggestionTsy/'.$row['idRegime'].'/'.$row['multiple']); ?>" class="btn btn-warning">Voir details</a></th>
													<td><button class="btn btn-success">Acheter</button></td>
												</tr>
											</form>
										<?php } ?>
									</tbody>
								</tbody>
							</table>
                        </div>
                	</div>
				</div>
            </div>
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

    <?php $this->load->view('Utilisateur/footer.php'); ?>
 
</body>

</html>
