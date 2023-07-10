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
                                <h1 class="h4 text-gray-900 mb-4">Modifier un Régime</h1>
                            </div>
                            <form action="<?php echo site_url('regimeController/modifier');?>" method="post" class="user">
                                <div class="form-group">
                                    <label for="objectif">Objectif</label>
                                    <select class="form-control" id="objectif" name="objectif">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="poids">Poids</label>
                                    <input type="text" class="form-control" id="poids" name="poids" placeholder="Entrez le poids">
                                </div>
                                <div class="form-group">
                                    <label for="prix">Prix</label>
                                    <input type="text" class="form-control" id="prix" name="prix" placeholder="Entrez le prix">
                                </div>
                                <div class="form-group">
                                    <label for="duree">Durée</label>
                                    <input type="text" class="form-control" id="duree" name="duree" placeholder="Entrez la durée">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Modifier Régime
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo site_url("regimeController/regimeListe") ?>">Retour à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
