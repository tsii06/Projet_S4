    <?php $this->load->view('Utilisateur/header.php'); ?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-15 mr-4 mx-auto">
                              <form action="<?php echo site_url('objectifController/insert');?>" method="post">
                            <div class="card border-left-primary shadow h-100 py-2" style="padding: 30px;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Augmenter le poids</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Augmenter poids</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <input type="number" name="idObjectif" value="2" hidden="">
                                <input type="number" name="idUtilisateur" value="1" hidden="">
                                <input style="margin-top: 30px;" type="number" class="form-control form-control-user" id="poids" placeholder="Entrez le poids que vous souhaitez avoir" min="1" name="poids">
                                <button type="submit" style="margin-top: 30px;" href="<?php echo site_url('welcomeController/welcome') ?>" class="btn btn-primary btn-user btn-block">Valider</button>
                            </form>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-15 mx-auto">
                            <form action="<?php echo site_url('objectifController/insert');?>" method="post">
                            <div class="card border-left-success shadow h-100 py-2"  style="padding: 30px;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Diminuer le poids</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Reduire poids</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <input type="number" name="idObjectif" value="1" hidden="">
                                <input type="number" name="idUtilisateur" value="1" hidden="">
        
                                <input style="margin-top: 30px;" type="text" class="form-control form-control-user" id="poids" placeholder="Entrez le poids que vous souhaitez perdre" min="1" name="poids">
                                <button type="submit" style="margin-top: 30px;" href="<?php echo site_url('welcomeController/welcome') ?>" class="btn btn-primary btn-user btn-block">Valider</button>
                            </form>
                            </div>
                        </div>

                    
    <?php $this->load->view('Utilisateur/footer.php'); ?>

</body>

</html>
