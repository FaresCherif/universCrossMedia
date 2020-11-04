<?php
if (utilisateurEstConnecte()){
  ?>
<ul>
  <?php
  if (utilisateurEstConnecte() && utilisateur()->getPermission()==2){
    ?>
	<li><a href="index.php?page=14">Lister les utilisateurs</a></li>
  <?php
} ?>

  <li><a href="index.php?page=19">Mon compte</a></li>
</ul>

<?php
} ?>
