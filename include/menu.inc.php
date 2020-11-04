
<ul>
  <?php
  if (utilisateurEstConnecte() && utilisateur()->getPermission()==2){
    ?>
	<li><a href="index.php?page=14">Lister les utilisateurs</a></li>
  <?php
} ?>
</ul>
