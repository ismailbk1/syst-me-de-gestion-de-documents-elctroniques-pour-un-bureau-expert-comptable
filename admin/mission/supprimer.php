<?php

$id=$_GET['id'];

if(isset($_GET['id'])){
 include "../../sharedpage/function.php";
 $con= connecte();

 $requette="DELETE FROM mission WHERE id='$id'";
 $resultat=$con->query($requette);
 if($resultat){
     header('location:mission.php?supprimer=ok');

 }
}
?>