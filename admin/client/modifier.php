<?php
 include "../../sharedpage/function.php";



 if(!empty($_POST)){

$con=connecte();

$id=$_GET['id'];
$email=$_POST['email'];
$location=$_POST['location'];
$rs=$_POST['rs'];
$numero=$_POST['numero'];
$nom_entreprise=$_POST['nom_entreprise'];
if(isset($_GET['id'])){


    $requette="UPDATE client set rs='$rs', location='$location', numero='$numero', nom_entreprise='$nom_entreprise', email='$email' where id='$id' ";
    $resultat=$con->query($requette);


    if($resultat){
 header('location:listeclient.php?modifier=ok');

    }
}


 }






?>
