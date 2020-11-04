<table>
  <tr>
    <td>Email</td>
    <td><?php echo utilisateur()->getEmail()?></td>
  </tr>

  <tr>
    <td>Pseudo</td>
    <td><?php echo utilisateur()->getPseudo()?></td>
  </tr>

  <tr>
    <td>Niveau de permission</td>
    <td>
      <?php
       $permission=utilisateur()->getPermission();

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

<ul>
    <li><a href="index.php?page=20">Changer pseudo</a></li>
    <li><a href="index.php?page=21?>">Changer mot de passe</a></li>
</ul>
