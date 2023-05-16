<?php
session_start();
include "../../sharedpage/function.php";
if(!empty($_POST)){
$con=connecte();
$nom=$_POST['nom'];
$id=$_GET['id'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$nom_entreprise=$_POST['nom_entreprise'];
if(isset($id)){
$requette="UPDATE mission SET nom='$nom', description='$description', prix='$prix' WHERE id='$id'";
  $resultat=$con->query($requette);
  
}
  if($resultat){
      header('location:mission.php?modifier=ok');
  }

}



?>