<?php
require_once("functions.php");
$id=$_GET["id"];
deletLivre($id);
header("location:gestion.php");
?>