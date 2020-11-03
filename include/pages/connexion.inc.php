
<h1>Connexion</h1>

<?php
if (utilisateurNEstPasConnecte()){
  if(isset($_POST['pseudo'])){
    $idPersonne = $utilisateurManager->getIdLogin($_POST['pseudo'])->getId();

    if ($idPersonne != null){
      $personne = $utilisateurManager->getUtilisateur($idPersonne);



      if(crypter($_POST['password']) == $personne->getMdp()){



          connecter($personne);
          echo '<meta http-equiv="refresh" content="0;url=index.php?page=28"/>';

      }
      else{
        ajouterErreur("Votre mot de passe est incorrect");
        echo '<meta http-equiv="refresh" content="0;url=index.php?page='.$_GET["page"].'"/>';
      }

    }
    else{
      ajouterErreur("Votre email est incorrect");
      echo '<meta http-equiv="refresh" content="0;url=index.php?page='.$_GET["page"].'"/>';
    }

  }
  else{ ?>
    <?php

    afficherErreurs();
    ?>

    <form method="post" action="#" class="connexion">
      <label for="email-input">Pseudo : </label>
      <input id="mail-input" name="pseudo" required>
      <br>

      <label for="password-input">Mot de passe : </label>
      <input type="password" id="password-input" name="password" required>
      <br>
      <br>

      <a href="index.php?page=13">Pas encore inscrit ? Créez votre compte </a>
      <br>
      <br>

      <button type="submit">Valider </button>
    </form>
  <?php
  }
}
?>
