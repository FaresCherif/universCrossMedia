<?php
  if(isset($_POST['titre'])){
    if($filmManager->getFilmNom($_POST['titre'])->getId()){
      ajouterErreur("Un film avec ce titre existe déjà");
    }
    else{
      $filmManager->ajouterFilm($_POST['titre'],$_POST['description']);
      $film=$filmManager->getFilmNom($_POST['titre']);

      $filmGenreManager->addFilmGenre($film->getId(),$_POST['genreId']);
      $partofuniversManager->addFilmUnivers($film->getId(),$_POST['universId']);
      echo '<meta http-equiv="refresh" content="0;url=index.php?page=0"/>';
    }
  }


  afficherErreurs();

?>

<form method="post" action="#" class="inscription">
  <label for="email-input">Titre : </label>
  <input id="mail-input" name="titre" <?php if(isset($_POST['titre'])){ ?> value="<?php echo($_POST['titre'])?> "<?php } ?> required>
  <br>

  <label for="email-input">Description (20 caractères minimum): </label>
  <textarea id="mail-input" name="description" rows="10" maxlength="5000" minlength="20" required><?php if(isset($_POST['description'])){ echo($_POST['description']); } ?></textarea>


  <?php
    $listeGenre=$genreManager->getListeGenre();
    $listeUnivers = $universManager->getListeUnivers();
    echo("Genre :");
  ?>
  <select id="genreId" name="genreId">
    <?php foreach ($listeGenre as $genre) {
      ?>
      <option  value=<?php echo $genre->getId() ?> > <?php echo($genre->getName())?> </option>
      <?php
    }

     ?>
  </select>
  <br><br>
  <?php
  echo("Univers :");
   ?>
  <select id="universId" name="universId">
    <option value="-1"><?php echo("non renseigné") ?></option>
    <?php foreach ($listeUnivers as $univers) {
      ?>
      <option value=<?php echo $univers->getId() ?> > <?php echo($univers->getName())?> </option>
      <?php
    }

     ?>
  </select>


  <br>
  <br>
  <button type="submit">Valider </button>
</form>
