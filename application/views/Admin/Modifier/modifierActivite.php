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
                                <h1 class="h4 text-gray-900 mb-4">Modifier un Activite</h1>
                            </div>

                            <form action="<?php echo site_url('activiteController/update');?>" method="post" class="user">
                            <div class="form-group">
                                    <label for="activite">Activite</label>
                                    <input type="text" class="form-control" id="activite" name="nom" placeholder="<?php echo $liste['nom']; ?>">
                            </div>

                            <div class="form-group">
                                    <label for="objectif">Objectif</label>
                                    <select class="form-control" id="objectif" name="idObjectif">
                                        <option value="1"  <?php if($liste['idObjectif']==1) { ?> selected <?php }?> >Dimunition</option>
                                        <option value="2" <?php if($liste['idObjectif']==2) { ?> selected <?php }?>> Augmentation</option>

                                    </select>
                                </div>
                                <input type="number" name="idActivite" hidden="" value="<?php echo $liste['idActiviteSportive']; ?>">
        
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Modifier Activite
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo site_url("activiteController/activiteListe") ?>">Retour à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>
