    <?php $this->load->view('Utilisateur/header.php'); ?>


       
         <div class="container-fluid">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Enter Completion</h1>
                            </div>
                            <form action="<?php echo site_url('completionController/insert');?>" method="post" class="user">
                     
                                <div class="form-group">
									<label for="genre">Taille</label>
									<select class="form-control " name="taille"  id="exampleRepeatPassword">
										<option value="1">->1M50</option>
										<option value="2">1M51-1M60</option>
										<option value="3">1M61-1M70</option>
										<option value="4">1M71-1M80</option>
										<option value="5">1M81-1M90</option>
										<option value="6">1M91-></option>
									</select>
                                </div>
                                <div class="form-group">
                                    <input type="number" min="0" class="form-control form-control-user" id="poids"
                                        placeholder="poids" name="poids">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <br>
                            </form>
                            <hr>
                        </div>
            
     


   
