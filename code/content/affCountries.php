<?php
foreach ($dataCountry as $dataCountries) : ?>
  <form action="articles.php" method="post">
    <input type="hidden" name="title" value="<?php echo $dataCountries['title'] ?>">
    <div>
      <h3><?php echo $dataCountries['title']; ?></h3>
    </div>
    <div>
      <h4>Date : </h4>
      <h4><?php echo $dataCountries['date_publication']; ?></h4>
    </div>
    <div>
      <h4>Ville : </h4>
      <h4><?php echo $dataCountries['city']; ?></h4>
    </div>
    <div>
      <input type="submit" name="btn" value="En savoir plus">
    </div>
  </form>
<?php endforeach; ?>
