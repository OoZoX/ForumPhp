<?php
foreach ($_RECUP['comments'] as $comments) :    //affichage des commentaires
 ?>
 <div>
   <div>
     <h4>Pseudo : </h4>
     <h4><?php echo $comments['pseudo']; ?></h4>
   </div>
   <div>
     <h4>Date : </h4>
     <h4><?php echo $comments['date_publication']; ?></h4>
   </div>
   <div>
     <p><?php echo $comments['description']; ?></p>
   </div>
 </div>
<?php endforeach; ?>
