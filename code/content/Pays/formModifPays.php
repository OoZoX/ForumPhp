<!-- fichier include dans adminCreatePays -->
<?php

$sql =
" SELECT * FROM countries
  ORDER BY name ASC
";
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute();
$dataCountry = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);

foreach ($dataCountry as $dataCountries): ?>
  <form action="../action/modifSuprCreateCountries.php" method="post">

    <textarea placeholder="nom pays" name="name" rows="1" cols="22"><?php echo $dataCountries['name']; ?></textarea>
    <textarea placeholder="image" name="image" rows="1" cols="22"><?php echo $dataCountries['image']; ?></textarea>

    <input type="submit" name="Modifier" value="Modifier">
    <input type="submit" name="Supprimer" value="Supprimer">

    <input type="hidden" name="id" value="<?php echo $dataCountries['id']; ?>">

  </form>
<?php endforeach; ?>
