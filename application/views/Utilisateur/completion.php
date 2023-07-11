    <?php $this->load->view('Utilisateur/header.php'); ?>


       
         <div class="container-fluid">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Enter Completion</h1>
                            </div>
                            <form action="<?php echo site_url('completionController/insert');?>" method="post" class="user">
                     
                                     <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="genre"
                                            placeholder="Genre" name="genre">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="taille"
                                            placeholder="Taille" name="taille">
                                    </div>
                           
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="poids"
                                        placeholder="poids" name="poids">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <br>
                            </form>
                            <hr>
                        </div>
            
     


   
