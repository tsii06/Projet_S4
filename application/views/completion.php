<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Créer un compte !</h1>
                        </div>
                        <form action="<?php echo site_url('inscriptionController/finition');?>" method="post">
                            <div class="form-group row">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="poids" 
                                        placeholder="Poids">
                            </div>
                            <span class="text-danger" ><?php echo form_error('poids') ?></span>

                            <div class="form-group row">
                                <select class="form-control" name="taille">
                                    <option value="1">-1M50</option>
                                    <option value="2">1M51-1M60</option>
                                    <option value="3">1M61-1M70</option>
                                    <option value="4">1M71-1M80</option>
                                    <option value="5">1M81-1M90</option>
                                    <option value="5">1M90+</option>
                                </select>
                            </div>
                            <span class="text-danger" ><?php echo form_error('taille') ?></span>
                            <input type="text" name="nom"  hidden value="<?php echo $nom; ?>">
                            <input type="number" name="genre"  hidden value="<?php echo $genre; ?>">
                            <input type="text" name="email"  hidden value="<?php echo $email; ?>">
                            <input type="text" name="mdp"  hidden value="<?php echo $mdp; ?>">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Valider
                            </button>
                            <br>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?php echo site_url("welcome/index") ?>">Retours</a>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
