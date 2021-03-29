<nav>
    <div>
        <ul >
            <li><a href="../page/index.php">Accueil</a></li>
            <li><a href="../page/country.php">Pays</a></li>
          <?php if (isset($_SESSION['admin'])): ?>
            <li><a href="../page/admin.php">Page Admin</a></li>
            <li><a href="../action/logOut.php">Vous Déconnecter</a></li>
          <?php else: ?>
            <li><a href="../page/login.php">Connexion</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>
