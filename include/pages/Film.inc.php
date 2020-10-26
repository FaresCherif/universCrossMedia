<?php
$film=$filmManager->getFilm($_GET['film']);
$listeAvisFilm=$filmManager->getListeAvisFilm($_GET['film']);


?> <h2><?php echo $film->getName(); ?> </h2>

<?php


 ?>
 <div class="filmDescription">
 <img src="image/film/<?php echo  $film->getImage()?>" alt=""><br><br><br><?php
?><p><?php echo $film->getDescription() ?>
</div>

<?php
foreach ($listeAvisFilm as $avis){
  ?><div class="commentaire"><?php
  $utilisateur=$utilisateurManager->getUtilisateur($avis->getID_utilisateur());

  ?><div class="hautCommentaire">

  <h1><?php echo( $utilisateur->getPseudo());?></h1>
  <div class="rating">
    <a title="Give 1 stars" <?php if($avis->getNote()>=1||isset($_GET['etoile'])&&$_GET['etoile']>=1){?>style="color: orange"<?php echo "x";} ?>>★</a>
      <a title="Give 2 stars" <?php if($avis->getNote()>=2||isset($_GET['etoile'])&&$_GET['etoile']>=2){?>style="color: orange"<?php echo "x";} ?>>★</a>
        <a title="Give 3 stars" <?php if($avis->getNote()>=3||isset($_GET['etoile'])&&$_GET['etoile']>=3){?>style="color: orange"<?php echo "x";} ?>>★</a>
          <a title="Give 4 stars" <?php if($avis->getNote()>=4||isset($_GET['etoile'])&&$_GET['etoile']>=4){?>style="color: orange"<?php echo "x";} ?>>★</a>
      <a title="Give 5 stars" <?php if($avis->getNote()==5||isset($_GET['etoile'])&&$_GET['etoile']==5){?>style="color: orange"<?php echo "x";} ?>>★</a>
   </div>

 </div>

  <p><?php echo($avis->getCommentaire()) ?><br></p>

   <style type="text/css">



       .rating a {
           color: #aaa;
           text-decoration: none;
       }
       .rating a:focus,
       .rating a:focus ~ a     {
           color: orange;
           cursor: pointer;
       }


   </style>



</div>
  <?php

}
