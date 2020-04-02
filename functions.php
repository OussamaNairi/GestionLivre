<?php
function getConnexion(){
  $dbh = new PDO('mysql:host=localhost;dbname=essat19','root','');
  return $dbh;
}