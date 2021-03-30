<!-- fichier include dans adminCreatePays -->
<?php

include '../action/recupCountries.php';

foreach ($dataCountry as $dataCountries): ?>
  <form action="../action/gestionCountries.php" method="post">

    <textarea placeholder="nom pays" name="name" rows="1" cols="22"><?php echo $dataCountries['name']; ?></textarea>
    <textarea placeholder="image" name="image" rows="1" cols="22"><?php echo $dataCountries['image']; ?></textarea>

    <input type="submit" name="Modifier" value="Modifier">
    <input type="submit" name="Supprimer" value="Supprimer">

    <input type="hidden" name="id" value="<?php echo $dataCountries['id']; ?>">

  </form>
<?php endforeach; ?>
