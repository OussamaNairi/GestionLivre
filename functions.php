<?php
function getConnexion(){
  $dbh = new PDO('mysql:host=localhost;dbname=essat19','root','');
  return $dbh;
}
function getAllLivres(){
  $db=getConnexion();
  $rep=$db->prepare("select * from livre");
  $rep->execute();
  $rep->setFetchMode(PDO::FETCH_OBJ);
  $tab=array();
  while($ligne=$rep->fetch()){
    $tab[]=$ligne;
}
return $tab;
}
function addLivre($titre,$qte){
   $db=getConnexion();
   $stm=$db->prepare("insert into livre values(null,?,?)");
   $stm->bindParam(1,$titre);
   $stm->bindParam(2,$qte);
   $stm->execute();
}

function deleteLivre($id){
   $db=getConnexion();
   $stm=$db->prepare("delete from livre where id=?");
   $stm->bindParam(1,$id);
   $stm->execute();
}
