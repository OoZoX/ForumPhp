<?php 
require_once '../action/config.php';

?>
<div>
  <h1>Page Admin</h1>
  
</div>

<div></div>
<nav>
    <div>
        <ul >
            <li><a href="adminCreatePays.php">Creation modification suppression pays</a></li>
            <li><a href="adminCreatePays.php">creation article</a></li>
            <li><a href="adminCreatePays.php">Modification articles</a></li>
            
        </ul>
    </div>
</nav>

<h2>Creation Modification Suppression Pays</h2>

<div>
<?php 
include '../content/pays/formCreatePays.php'; 
include '../content/pays/formModifPays.php';
?>
</div>
