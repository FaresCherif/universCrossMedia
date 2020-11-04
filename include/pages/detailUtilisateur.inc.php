<?php
  $utilisateur=$utilisateurManager->getUtilisateur($_GET['utilisateur']);
?>

<table>
  <tr>
    <td>Email</td>
    <td><?php echo $utilisateur->getEmail()?></td>
  </tr>

  <tr>
    <td>Pseudo</td>
    <td><?php echo $utilisateur->getPseudo()?></td>
  </tr>

  <tr>
    <td>Niveau de permission</td>
    <td>
      <?php
       $permission=$utilisateur->getPermission();

       if($permission==0){
         echo('Basique');
       }
       if($permission==1){
         echo('Intermediaire');
       }
       if($permission==2){
         echo('Administrateur');
       }


       ?>

    </td>
  </tr>
</table>

<?php if($utilisateur->getPermission()!=2){ ?>

<ul>
  <?php  if($utilisateur->getPermission()!=0){?>
    <li><a href="index.php?page=16&utilisateur=<?php echo $_GET['utilisateur']?>">Passer ses permissions au niveau Basique</a></li>
<?php
  }
  if($utilisateur->getPermission()!=1){ ?>
  <li><a href="index.php?page=17&utilisateur=<?php echo $_GET['utilisateur']?>">Passer ses permissions au niveau Intermediaire</a></li>
  <?php
  }
  if($utilisateur->getPermission()!=2){ ?>
  <li><a href="index.php?page=18&utilisateur=<?php echo $_GET['utilisateur']?>">Passer ses permissions au niveau Administrateur</a></li>
  <?php } ?>
</ul>

<?php
}
 ?>
