<?php $this->load->view('Utilisateur/header.php'); ?>
        
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>

                    <div class="row">

                    <div class="col-xl-4 col-md-6 mb-15 mr-4 mx-auto">
						<form action="<?php echo site_url('argentController/verifieCode'); ?>" method="POST">
							<div class="input-group">
								<input type="text" class="form-control" id="inputCode" placeholder="Code" name="idCodeMonnaie">
								<div class="input-group-append">
								<button class="btn btn-primary" type="submit">Envoyer</button>
								</div>
							</div>
						</form>
                    </div>
					<?php if(isset($message)){ ?>
						<div class="col-xl-4 col-md-6 mb-15 mr-4 mx-auto">
							<p class="text-danger"><?php echo $message; ?></p>
						</div>
					<?php } ?>
                        <div class="col-xl-4 col-md-6 mb-15 mx-auto">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Valeur</th>
                                </tr>
                                </thead>
                                <tbody>
									<?php for($i=0 ; $i<count($list);$i++) { ?>
										<tr>
											<td><?php echo $list[$i]['idCodeMonnaie'] ?></td>
											<td><?php echo $list[$i]['valeur'] ?></td>
										</tr>
									<?php } ?>
                                <!-- Ajoutez d'autres lignes selon vos besoins -->
                                </tbody>
                            </table>
                        </div>


                    
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> -->
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
