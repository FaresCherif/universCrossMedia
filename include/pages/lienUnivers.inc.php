<?php
  if(isset($_POST['universId1'])){
    if($_POST['universId1']==$_POST['universId2']){
      ajouterErreur("Les deux univers choisis sont les même");
    }
    else{
      $lienuniversManager->addLienUnivers($_POST['universId1'],$_POST['universId2'],$_POST['description']);
      ?> <meta http-equiv="refresh" content="0;url=index.php?page=0"/> <?php

    }
  }


  afficherErreurs();

?>

<form method="post" action="#" class="inscription" enctype="multipart/form-data">

  <label for="email-input">Description (20 caractères minimum): </label>
  <textarea id="mail-input" name="description" rows="10" maxlength="5000" minlength="20" required><?php if(isset($_POST['description'])){ echo($_POST['description']); } ?></textarea>


  <?php
    $listeUnivers = $universManager->getListeUnivers();
    echo("1er Univers :");
  ?>
  <select id="universId1" name="universId1">
    <?php foreach ($listeUnivers as $univers) {

      if($universManager->getUnivers($_GET['univers'])==$univers ){
        ?>
        <option selected='selected' value=<?php echo $univers->getId() ?> > <?php echo($univers->getName())?> </option>
<?php
      }
      else{
      ?>
      <option value=<?php echo $univers->getId() ?> > <?php echo($univers->getName())?> </option>
      <?php
      }
    }

     ?>
  </select>
  <br><br>
  <?php
  echo("2e Univers :");
   ?>
  <select id="universId2" name="universId2">
    <?php foreach ($listeUnivers as $univers) {
      ?>
      <option value=<?php echo $univers->getId() ?> > <?php echo($univers->getName())?> </option>
      <?php
    }

     ?>
  </select>

  <br>
  <br>
  <button type="submit" onclick="myFunction()">Valider </button>
</form>
