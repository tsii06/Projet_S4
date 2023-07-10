<?php 
var_dump($liste);
foreach ($liste as $item) { ?>

                                        <p><?php echo $item['idUtilisateur']; ?></p>
                                        <p><?php echo $item['taille']; ?></p>
                                        <p><?php echo $item['poids']; ?></p>
                                        <p><?php echo $item['genre']; ?></p>
                                    <?php } ?>
                            
?>