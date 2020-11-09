<?php
  if(isset($_POST['universId1'])){

    if($_POST['universId1']==$_POST['universId2']){
      ajouterErreur("Les deux univers choisis sont les même");
    }
    elseif ($lienuniversManager->getLienUnivers($_POST['universId1'],$_POST['universId2'])->getId()==null){
      $lienuniversManager->deleteLienUnivers($_GET['univers1'],$_GET['univers2']);
      $lienuniversManager->addLienUnivers($_POST['universId1'],$_POST['universId2'],$_POST['description']);
?> <meta http-equiv="refresh" content="0;url=index.php?page=4&univers=<?php echo($_GET['univers1']) ?>"/> <?php
    }
    else{
      $lienuniversManager->updateLienUnivers($_POST['universId1'],$_POST['universId2'],$_POST['description']);
?> <meta http-equiv="refresh" content="0;url=index.php?page=4&univers=<?php echo($_GET['univers1']) ?>"/> <?php
    }

  }


  afficherErreurs();
  $lien=$lienuniversManager->getLienUnivers($_GET['univers1'],$_GET['univers2']);
?>

<form method="post" action="#" class="inscription" enctype="multipart/form-data">

  <label for="email-input">Description (20 caractères minimum): </label>
  <textarea id="mail-input" name="description" rows="10" maxlength="5000" minlength="20" required>
    <?php if(isset($_POST['description'])){
       echo($_POST['description']);
    }
    else {
       echo($lien->getDescription());
    } ?></textarea>


  <?php
    $listeUnivers = $universManager->getListeUnivers();
    echo("1er Univers :");
  ?>
  <select id="universId1" name="universId1">
    <?php foreach ($listeUnivers as $univers) {

      if($universManager->getUnivers($_GET['univers1'])==$univers ){
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
      if($universManager->getUnivers($_GET['univers2'])==$univers ){
        ?>   <option selected='selected' value=<?php echo $univers->getId() ?> > <?php echo($univers->getName())?> </option> <?php
      }
      else{


      ?>
      <option value=<?php echo $univers->getId() ?> > <?php echo($univers->getName())?> </option>
      <?php
      }
    }

     ?>
  </select>

  <br>
  <br>
  <button type="submit" onclick="myFunction()">Valider </button>
</form>
