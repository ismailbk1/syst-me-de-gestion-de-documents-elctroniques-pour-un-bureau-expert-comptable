<?php

$id=$_GET['id'];

if(isset($_GET['id'])){
 include "../sharedpage/function.php";
 $con= connecte();

 $requette="DELETE FROM facture WHERE demande='$id'";
 $resultat=$con->query($requette);
 if($resultat){
    $requette="DELETE FROM demande WHERE id='$id'";
    $resultat=$con->query($requette);
    $requette1="DELETE FROM reponse WHERE demande='$id'";
    $resultat1=$con->query($requette1);
   
     header('location:mission.php?supprimer=ok');

 }
}
?>