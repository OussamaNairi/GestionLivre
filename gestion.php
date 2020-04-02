<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.min.css"  rel="stylesheet" >
</head>
<body>
<div class="container">
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
         <td><a  class="btn btn-danger" href="delete.php?id=<?=$liv->id ?>">Delete</a></td>
    </tr>
<?php
   }
  ?>
    </tbody>
    </table>
</div>
</body>
</html>