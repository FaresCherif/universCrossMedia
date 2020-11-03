<?php
if (utilisateurEstConnecte() && utilisateur()->getPermission()==2){
  ?>
  <ul>
  	<li><a href="index.php?page=14">Lister les utilisateurs</a></li>
  </ul>
  <?php
} ?>
