<?php

if(isset($_POST['pseudo'])){
  if($_POST['pseudo']!=$_POST['newpseudo']){
    ajouterErreur("Les pseudos ne correspondent pas");
  }
  else{
    if($utilisateurManager->getIdLogin($_POST['pseudo'])->getId()!=null && utilisateur()->getPseudo()!=$_POST['pseudo']){
      ajouterErreur("Le pseudo est déjà pris");
    }
    else{
      $utilisateurManager->updatePseudo(utilisateur()->getId(),$_POST['pseudo']);
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
  <label for="email-input">Nouveau pseudo : </label>
  <input id="mail-input" name="pseudo" required>
  <br>

  <label for="password-input">Confirmer nouveau pseudo : </label>
  <input id="password-input" name="newpseudo" required>
  <br>
  <br>

  <button type="submit">Valider </button>
</form>
