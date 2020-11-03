

<a href="index.php?page=0">
<img src="image/logo.png" alt=""></a>
<textarea></textarea>
<div>
  <?php
  if(utilisateurEstConnecte()){ ?>
    <h2>
      <?php echo utilisateur()->getPseudo()?>
      <br>
    </h2>
    
    <a href="index.php?page=11" class="boutonInscription">Déconnexion</a>
  <?php
  }
  else{ ?>

    <a href="index.php?page=12">  <img src="image/login.svg" alt=""></a>
  <?php
  } ?>
</div>
