<?php if (isset($_POST['countrySelect'])) :
  include '../content/articles/recupArticles.php';
  foreach ($dataArticle as $dataArticles) :?>
  <form action="../action/gestionArticles.php" method="post">
    <textarea name="title" placeholder="Titre Article" rows="8" cols="20"><?php echo $dataArticles['title'] ?></textarea>

    <textarea name="date_content" placeholder="Date de l'evenement" rows="8" cols="20"><?php echo $dataArticles['date_content'] ?></textarea>

    <select name="country">
      <option value="test"><?php echo $_POST['countrySelect'] ?></option>
      <?php include '../content/selectCountries.php'; ?>
    </select>

    <textarea name="location" placeholder="Ville" rows="8" cols="20"><?php echo $dataArticles['city'] ?></textarea>

    <textarea name="text1" rows="8" cols="20"
    placeholder="Premier Paragraphe"><?php echo $dataArticles['description'] ?></textarea>

    <textarea name="imgArticle" accept=".jpg, .jpeg, .png, .gif" placeholder="Lien de l'image" rows="8" cols="20"><?php echo $dataArticles['image'] ?></textarea>

    <textarea name="text2" rows="8" cols="20"
    placeholder="Deuxième Paragraphe"><?php echo $dataArticles['description_2'] ?></textarea>

    <input type="submit" name="Modifier" value="Modifier">
    <input type="submit" name="Supprimer" value="Supprimer">

  </form>
<?php
endforeach;
endif;
?>
