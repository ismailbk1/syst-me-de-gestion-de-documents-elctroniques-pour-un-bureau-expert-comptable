<?php
session_start();
include "../../sharedpage/function.php";
if(!empty($_POST)){
$con=connecte();
$nom=$_POST['nom'];
$travaille=$_POST['travaille'];
$email=$_POST['email'];
$mdp=md5($_POST['mdp']);

$requette="INSERT INTO agent(nom,travaille,email,mdp) VALUES('$nom','$travaille','$email','$mdp')";
  $resultat=$con->query($requette);
  
  
  if($resultat){
      header('location:agent.php?ajout=ok');
  }

}



?>