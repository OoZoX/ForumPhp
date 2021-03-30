<nav>
    <div>
        <ul >
            <li><a href="../page/index.php">Accueil</a></li>

          <?php if (isset($_SESSION['admin'])): ?>
            <li><a href="../page/adminCreateArticles.php">Gestion des articles</a></li>
            <li><a href="../page/adminCreatePays.php">Gestion des pays</a></li>
            <li><a href="../action/logOut.php">Vous Déconnecter</a></li>
          <?php else:
            include '../action/recupCountries.php';
            ?>
            <li>
              <form action="../page/index.php" method="post">
                <select name="selectCounty">
                  <option value="test">choisir pays</option>
                  <?php foreach ($dataCountry as $dataCountries) {
                    ?> <option value="<?php echo $dataCountries['name'] ?>"><?php echo $dataCountries['name'] ?></option> <?php
                  } ?>
                  <input type="submit" name="go" value="go">
                </select>
              </form>
            </li>
            <li><a href="../page/login.php">Connexion</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>
