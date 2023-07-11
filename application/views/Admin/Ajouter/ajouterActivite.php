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
                                <h1 class="h4 text-gray-900 mb-4">Ajouter un Activite</h1>
                            </div>

                            <form action="<?php echo site_url('activiteController/ajouter');?>" method="post" class="user">
                            <div class="form-group">
                                    <label for="activite">Activite</label>
                                    <input type="text" class="form-control" id="activite" name="nom" placeholder="Entrez l'activite">
                            </div>

                            <div class="form-group">
                                    <label for="objectif">Objectif</label>
                                    <select class="form-control" id="objectif" name="idObjectif">
                                        <option value="1">Augmentation</option>
                                        <option value="2">Diminuation</option>
                                        <option value="3">Standards</option>
                                    </select>
                                </div>
        
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Ajouter l'activite
                                </button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>
