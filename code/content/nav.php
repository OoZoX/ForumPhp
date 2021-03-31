<nav>
    <div>
        <ul >
            <li><a href="../page/index.php">Accueil</a></li>

          <?php if (isset($_SESSION['admin'])) : ?>
            <li><a href="../page/adminGestionArticles.php">Gestion des articles</a></li>
            <li><a href="../page/adminGestionCountries.php">Gestion des pays</a></li>
            <li><a href="../action/logOut.php">Vous Déconnecter</a></li>

          <?php else :
            include '../content/recupCountries.php';?>
            <li>
              <form action="../page/countries.php" method="post">
                <select name="selectCountry">
                  <option value="test">choisir pays</option>
                  <?php include 'selectCountries.php'; ?>
                  <input type="submit" name="go" value="go">
                </select>
              </form>
            </li>

            <li><a href="../page/login.php">Connexion</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>
