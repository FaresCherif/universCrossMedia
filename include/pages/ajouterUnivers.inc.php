<?php
  if(isset($_POST['nom'])){
    if($filmManager->getFilmNom($_POST['nom'])->getId()){
      ajouterErreur("Un univers avec ce nom existe déjà");
    }
    else{
      $universManager->ajouterUnivers($_POST['nom'],$_POST['description']);

      echo '<meta http-equiv="refresh" content="0;url=index.php?page=0"/>';
    }
  }


  afficherErreurs();

?>

<form method="post" action="#" class="inscription">
  <label for="email-input">Nom : </label>
  <input id="mail-input" name="nom" <?php if(isset($_POST['nom'])){ ?> value="<?php echo($_POST['nom'])?> "<?php } ?> required>
  <br>

  <label for="email-input">Description (20 caractères minimum): </label>
  <textarea id="mail-input" name="description" rows="10" maxlength="5000" minlength="20" required><?php if(isset($_POST['description'])){ echo($_POST['description']); } ?></textarea>


  <br>
  <br>
  <button type="submit">Valider </button>
</form>
