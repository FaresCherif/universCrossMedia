<?php

if(isset($_POST['password']) && $_POST['password']==$_POST['passwordVerif'] && $utilisateurManager->getIdLogin($_POST['pseudo'])->getId()==null && $utilisateurManager->getIdMail($_POST['email'])->getId()==null){
  $pseudo = $_POST['pseudo'];
  $mdp = crypter($_POST['password']);
  $utilisateurManager->addtUtilisateur($pseudo,$mdp,$_POST['email']);
  $utilisateur=$utilisateurManager->getIdLogin($pseudo);
  connecter($utilisateur);
  echo '<meta http-equiv="refresh" content="0;url=index.php?page=0"/>';
}

if(isset($_POST['password']) && $_POST['password']==$_POST['passwordVerif'] && $utilisateurManager->getIdLogin($_POST['pseudo'])->getId()!=null){
  ajouterErreur("Cet identifiant est déjà pris");
}

if(isset($_POST['password']) && $_POST['password']==$_POST['passwordVerif'] && $utilisateurManager->getIdMail($_POST['email'])->getId()!=null){
  ajouterErreur("Cet email est déjà associé à un compte");
}

if(isset($_POST['password']) && $_POST['password']!=$_POST['passwordVerif']){
  ajouterErreur("Les mots de passe sont différents");
}
?>

<h1> S'incrire </h1>

<?php
afficherErreurs();

 ?>

<form method="post" action="#" class="inscription">
  <label for="email-input">Email : </label>
  <input type="email" id="mail-input" name="email" required>
  <br>

  <label for="email-input">Pseudo : </label>
  <input id="mail-input" name="pseudo" required>
  <br>

  <label for="password-input">Mot de passe : </label>
  <input type="password" id="password-input" name="password" required>

  <label for="password-input">Confirmer mot de passe : </label>
  <input type="password" id="passwordVerif-input" name="passwordVerif" required>
  <br>
  <br>


  <button type="submit">Valider </button>
</form>
