<form action="../action/postComment.php" method="post">
  <input type="hidden" name="id_article" value="<?php echo $_RECUP['articleIndex']['0']['id'] ?>"/>
  <input type="text" placeholder="Votre pseudo" name="pseudo" value=""/>
  <textarea placeholder="commentaire" name="description" rows="8" cols="80"></textarea>
  <input type="submit" name="btn" value="Poster"/>
</form>
