


<img src="image/logo.png" alt="">
<textarea></textarea>
<div>
  <?php
  if(utilisateurEstConnecte()){ ?>
    <h2>
      <?php echo utilisateur()->getPrenom()?> <?php echo utilisateur()->getNom()?>
      <br>
      <?php echo utilisateur()->getFonction()?>
    </h2>
    <a href="index.php?page=11" class="boutonInscription">Déconnexion</a>
  <?php
  }
  else{ ?>
    <h2>Mon compte</h2>
    <a href="index.php?page=12" class="boutonInscription">Connexion/Inscription</a>
  <?php
  } ?>
</div>
