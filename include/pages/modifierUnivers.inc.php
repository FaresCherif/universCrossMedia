<?php
  if(isset($_POST['nom'])){
    if($universManager->getUniversNom($_POST['nom'])->getId()&&$_GET['univers']!=$universManager->getUniversNom($_POST['nom'])->getId()){
      ajouterErreur("Un univers autre avec ce nom existe déjà");
    }
    else{
      $image=$universManager->getUnivers($_GET['univers'])->getImage();

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
                      move_uploaded_file($_FILES["photo"]["tmp_name"], "image/univers/" . $_FILES["photo"]["name"]);
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
      $universManager->updateUnivers($_GET['univers'],$_POST['nom'],$_POST['description'],$image);

      ?> <meta http-equiv="refresh" content="0;url=index.php?page=4&univers=<?php echo($_GET['univers']) ?>"/> <?php
    }
  }


  afficherErreurs();
  $univers=$universManager->getUnivers($_GET['univers']);
?>

<form method="post" action="#" class="inscription" enctype="multipart/form-data">
  <label for="email-input">Nom : </label>
  <input id="mail-input" name="nom" value="<?php if(isset($_POST['nom'])){ echo($_POST['nom']); }else{ echo($univers->getName());}
   ?>" required>
  <br>

  <label for="email-input">Description (20 caractères minimum): </label>
  <textarea id="mail-input" name="description" rows="10" maxlength="5000" minlength="20" required><?php if(isset($_POST['description'])){ echo($_POST['description']); }else{ echo($univers->getDescription());} ?></textarea>
  <label for="fileUpload">Fichier:</label>
  <input type="file" name="photo" id="fileUpload">
  <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>



  <br>
  <br>
  <button type="submit">Valider </button>
</form>
