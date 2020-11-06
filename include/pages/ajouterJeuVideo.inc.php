<?php
  if(isset($_POST['titre'])){
    if($jeuVideoManager->getJeuVideoNom($_POST['titre'])->getId()){
      ajouterErreur("Un jeu avec ce titre existe déjà");
    }
    else{
      $image=null;

      // Vérifier si le formulaire a été soumis
      if(isset($_FILES['photo'])){


          // Vérifie si le fichier a été uploadé sans erreur.
          if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
              $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
              $filename = $_FILES["photo"]["name"];
              $filetype = $_FILES["photo"]["type"];
              $filesize = $_FILES["photo"]["size"];

              // Vérifie l'extension du fichier
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

              // Vérifie la taille du fichier - 5Mo maximum
              $maxsize = 5 * 1024 * 1024;
              if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");


              // Vérifie le type MIME du fichier
              if(in_array($filetype, $allowed)){
                  // Vérifie si le fichier existe avant de le télécharger.
                  if(file_exists("upload/" . $_FILES["photo"]["name"])){
                      ajouterErreur($_FILES["photo"]["name"] . " existe déjà.");
                  } else{

                      move_uploaded_file($_FILES["photo"]["tmp_name"], "image/jeu/" . $_FILES["photo"]["name"]);
                      echo "Votre fichier a été téléchargé avec succès.";
                      $image=$_FILES["photo"]["name"];
                  }
              } else{
                  ajouterErreur("Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
              }
          } else{
              ajouterErreur("Error: " . $_FILES["photo"]["error"]);
          }
      }

      echo($image);

      $jeuVideoManager->ajouterJeuVideo($_POST['titre'],$_POST['description'],$image);
      $jeu=$jeuVideoManager->getJeuVideoNom($_POST['titre']);
      $jeuvideo_genreManager->addJeuGenre($jeu->getId(),$_POST['genreId']);

      $partofuniversManager->addJeuUnivers($jeu->getId(),$_POST['universId']);
    }
  }


  afficherErreurs();

?>

<form method="post" action="#" class="inscription" enctype="multipart/form-data">
  <label for="email-input">Titre : </label>
  <input id="mail-input" name="titre" <?php if(isset($_POST['titre'])){ ?> value="<?php echo($_POST['titre'])?> "<?php } ?> required>
  <br>

  <label for="email-input">Description (20 caractères minimum): </label>
  <textarea id="mail-input" name="description" rows="10" maxlength="5000" minlength="20" required><?php if(isset($_POST['description'])){ echo($_POST['description']); } ?></textarea>


  <?php
    $listeGenre=$genreJeuVideoManager->getListeGenreJeuVideo();
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
  <label for="fileUpload">Fichier:</label>
  <input type="file" name="photo" id="fileUpload">
  <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>


  <br>
  <br>
  <button type="submit">Valider </button>
</form>
