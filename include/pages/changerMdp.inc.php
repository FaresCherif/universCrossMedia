<?php
if(isset($_POST['ancienmdp'])){
  if(utilisateur()->getMdp()!=crypter($_POST['ancienmdp'])){
    ajouterErreur("L'ancien mot de passe est incorrect");
  }
  else{
    if($_POST['nouvmdp']!=$_POST['confnouvmdp']){
      ajouterErreur("Confirmation incorrect");
    }
    else{
      $utilisateurManager->updateMdp(utilisateur()->getId(),crypter($_POST['nouvmdp']));
      $personne=$utilisateurManager->getUtilisateur(utilisateur()->getId());
      deconnecterUtilisateur();
      connecter($personne);
      echo '<meta http-equiv="refresh" content="0;url=index.php?page=19"/>';

    }
  }

}
afficherErreurs();
?>

<form method="post" action="#" class="connexion">
  <label for="email-input">Ancien mot de passe : </label>
  <input type="password" id="mail-input" name="ancienmdp" required>
  <br>

  <label for="email-input">Nouveau mot de passe : </label>
  <input type="password" id="mail-input" name="nouvmdp" required>
  <br>

  <label for="password-input">Confirmer nouveau mot de passe : </label>
  <input type="password" id="password-input" name="confnouvmdp" required>
  <br>
  <br>

  <button type="submit">Valider </button>
</form>
