<div class="well">
   <h1>Gestion des Livres</h1>
</div>
<p><a href="ajouter.php" class="btn btn-primary">Ajouter un Livre</a></p>

    <table class="table table-striped table-bordered">
    <thead>
     <tr><th>ID</th><th>Titre</th><th>Quantite</th><th></th></tr>
    </thead>
   <tbody>
    <?php
   require_once("functions.php");
   $livres=getAllLivres();
   foreach($livres as $liv){
    ?>
    <tr> <td><?=$liv->id ?></td>
         <td><?=$liv->titre ?></td>
         <td><?=$liv->qte ?></td>
         <td><a href="delete.php?id=<?=$liv->id ?>">Delete</a></td>
    </tr>
<?php
   }
  ?>
    </tbody>
    </table>