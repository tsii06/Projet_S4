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
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputCode" placeholder="Code">
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                        </div>
                    </div>
                    </div>

                        <div class="col-xl-4 col-md-6 mb-15 mx-auto">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Valeur</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Donnée 1</td>
                                    <td>Donnée 2</td>
                                </tr>
                                <tr>
                                    <td>Donnée 3</td>
                                    <td>Donnée 4</td>
                                </tr>
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



    <?php $this->load->view('Utilisateur/footer.php'); ?>

</body>

</html>