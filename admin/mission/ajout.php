<?php
session_start();
include "../../sharedpage/function.php";
if(!empty($_POST)){
$con=connecte();
$nom=$_POST['nom'];
$expert=$_SESSION['id'];
$description=$_POST['description'];
$prix=$_POST['prix'];

$requette="INSERT INTO mission(nom,description,prix,expert) VALUES('$nom','$description','$prix','$expert')";
  $resultat=$con->query($requette);
  
  
  if($resultat){
      header('location:mission.php?ajout=ok');
  }

}



?>