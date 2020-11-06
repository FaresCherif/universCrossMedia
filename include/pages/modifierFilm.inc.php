<?php
$film=$filmManager->getFilm($_GET['film']);

if(isset($_POST['titre'])){
  if($_POST['titre']!=$filmManager->getFilm($_GET['film'])->getName() && $filmManager->getFilmNom($_GET['film'])!=null){
    ajouterErreur("Un film avec ce titre existe déjà. Veuillez modifiez celui-ci");
  }
  else{
    $image=$filmManager->getFilm($_GET['film'])->getImage();

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
                    move_uploaded_file($_FILES["photo"]["tmp_name"], "image/film/" . $_FILES["photo"]["name"]);
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

    $filmManager->updateFilm($_GET['film'],$_POST['titre'],$_POST['description'],$image);
    ?> <meta http-equiv="refresh" content="0;url=index.php?page=5&film=<?php echo($_GET['film']) ?>"/> <?php
  }
}

afficherErreurs();
$film=$filmManager->getFilm($_GET['film']);

?>

<form method="post" action="#" class="modifierFilm" enctype="multipart/form-data">

 <h2><textarea name="titre"><?php echo $film->getName();?></textarea></h2>

  <div class="filmDescription">
    <?php if($film->getImage()!=null){?>
      <img src="image/film/<?php echo  $film->getImage()?>" alt=""><br><br><br><?php
    } ?><p><textarea rows="30" cols="100" name="description"><?php echo $film->getDescription() ?></textarea></p>
  </div>

  <label for="fileUpload">Fichier:</label>
  <input type="file" name="photo" id="fileUpload">
  <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>


<button type="submit">Valider </button>
</form>






<?php

?>
