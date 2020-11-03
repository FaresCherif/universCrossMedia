<?php
  $listeUtilisateur=$utilisateurManager->getListeUtilisateur();

  ?>
  <table>
    <thead>
      <td>Pseudo</td>
      <td>Détail</td>
    </thead>
    <?php
    foreach ($listeUtilisateur as $utilisateur){
      ?>
      <tr>

        <td>
          <?php echo $utilisateur->getPseudo()?>
        </td>
        <td>
          <a href="index.php?page=15&utilisateur=<?php echo $utilisateur->getId() ?>">Plus de détail</a>
        </td>

      </tr>
      <?php
  }
?>
</table>
