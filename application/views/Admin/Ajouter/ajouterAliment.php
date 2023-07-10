<?php $this->load->view('Admin/header'); ?>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajouter Aliment</h1>
                            </div>

                            <form action="<?php echo site_url('activiteController/ajouter');?>" method="post" class="user">

                            <div class="form-group">
                                    <label for="aliment">Aliment</label>
                                    <input type="text" class="form-control" id="aliment" name="activite" placeholder="Entrez l'activite">
                            </div>

                            <div class="form-group">
                                    <label for="objectif">Objectif</label>
                                    <select class="form-control" id="objectif" name="objectif">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                    <label for="categorie">Categorie</label>
                                    <select class="form-control" id="categorie" name="categorie">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                            </div>
        
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Ajouter Aliment
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo site_url("alimentController/alimentListe") ?>">Retour à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
