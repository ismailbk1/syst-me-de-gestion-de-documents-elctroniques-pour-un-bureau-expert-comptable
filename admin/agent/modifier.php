<?php
 include "../../sharedpage/function.php";



 if(!empty($_POST)){

$con=connecte();

$id=$_GET['id'];
$email=$_POST['email'];
$nom=$_POST['nom'];
$travaille=$_POST['travaille'];

if(isset($_GET['id'])){


    $requette="UPDATE agent set  nom='$nom', travaille='$travaille', email='$email' where id='$id' ";
    $resultat=$con->query($requette);


    if($resultat){
 header('location:agent.php?modifier=ok');

    }
}


 }






?>
