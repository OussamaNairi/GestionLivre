<?php
require_once("function.php");
$titre=$_GET["titre"];
$qte=$_GET["qte"];
addLivre($titre,$qte);
header("location:gestion.php");

?>
