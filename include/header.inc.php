

<a href="index.php?page=0">
<img src="image/logo.png" alt=""></a>

<form method="post" action="#" class="recherche">
  <input type="search" id="site-search" name="recherche" value="<?php if(isset($_POST['recherche'])){ echo($_POST['recherche']); } ?>" >

  </input><button>Search</button>
</form>

<?php
if(isset($_POST['recherche'])){
  if($universManager->getUniversNom($_POST['recherche'])->getId()){
    ?> <meta http-equiv="refresh" content="0;url=index.php?page=4&univers=<?php echo($universManager->getUniversNom($_POST['recherche'])->getId()) ?>"/> <?php
  }
  if($filmManager->getFilmNom($_POST['recherche'])->getId()){
    ?> <meta http-equiv="refresh" content="0;url=index.php?page=5&film=<?php echo($filmManager->getFilmNom($_POST['recherche'])->getId()) ?>"/> <?php
  }
  if($jeuVideoManager->getJeuVideoNom($_POST['recherche'])->getId()){
    ?> <meta http-equiv="refresh" content="0;url=index.php?page=26&jeu=<?php echo($jeuVideoManager->getJeuVideoNom($_POST['recherche'])->getId()) ?>"/> <?php
  }
}

 ?>

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
