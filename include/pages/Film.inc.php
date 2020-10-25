<?php
$film=$filmManager->getFilm($_GET['film']);

?> <h2><?php echo $film->getName(); ?> </h2>
<?php

 ?>
 <div class="filmDescription">
 <img src="image/film/<?php echo  $film->getImage()?>" alt=""><br><br><br><?php
?><p><?php echo $film->getDescription() ?>
</div>
