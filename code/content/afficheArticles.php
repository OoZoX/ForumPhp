<div>
  <h3><?php echo $_RECUP['articleIndex']['0']['title']; ?></h3>
  <div>
    <h4>Pays : </h4>
    <h4><?php echo $_RECUP['articleIndexId']['0']['name']; ?></h4>
  </div>
  <div>
    <h4>Ville : </h4>
    <h4><?php echo $_RECUP['articleIndex']['0']['city']; ?></h4>
  </div>
  <div>
    <h4>Date de l'événement : </h4>
    <h4><?php echo $_RECUP['articleIndex']['0']['date_content']; ?></h4>
  </div>
  <div>
    <h4>Date de la publication : </h4>
    <h4><?php echo $_RECUP['articleIndex']['0']['date_publication']; ?></h4>
  </div>
  <div>
    <p><?php echo $_RECUP['articleIndex']['0']['description']; ?></p>
    <img src="<?php echo $_RECUP['articleIndex']['0']['image']; ?>" alt="image dernier article"/>
    <p><?php echo $_RECUP['articleIndex']['0']['description_2']; ?></p>
  </div>
</div>
