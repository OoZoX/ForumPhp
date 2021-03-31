<form action="../action/gestionArticles.php" method="post">

  <input type="text" name="title"
  placeholder="Titre Article"/>

  <input type="date" name="date"
  placeholder="Date de l'evenement"/>

  <select name="countrySelect">
    <option value="test">choisir pays</option>
    <?php include '../content/selectCountries.php'; ?>
  </select>

  <input type="text" name="location"
  placeholder="Ville"/>

  <textarea name="text1" rows="8" cols="200"
  placeholder="Premier Paragraphe"></textarea>

  <input type="text" name="imgArticle"
  accept=".jpg, .jpeg, .png, .gif" placeholder="Lien de l'image"/>

  <textarea name="text2" rows="8" cols="200"
  placeholder="Deuxième Paragraphe"></textarea>

  <input type="submit" name="create" value="Valider">

</form>
