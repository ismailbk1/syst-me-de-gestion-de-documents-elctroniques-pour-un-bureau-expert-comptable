<?php  
include "../../sharedpage/function.php";

session_start();
$con=connecte();

$requette0="SELECT id FROM demande where mission='$_POST[id]' AND client='$_SESSION[id]'";
$resultat0=$con->query($requette0);
$id=$resultat0->fetch();

if(isset($id['id'])){
   $requette="INSERT INTO facture (code,demande,type,montant,date,description) VALUES ('$_POST[code]' ,'$id[id]', '$_POST[type]' , '$_POST[montant]' , '$_POST[date]' , '$_POST[description]' ) ";

   $resultat=$con->query($requette);
   header('location:../mission1.php?id='.$_POST[id].'&ajout=ok');
    //exit();
}
else{

$client=$_SESSION['id'];

$requette1="INSERT INTO demande (etat,mission,client) VALUES ('0' , '$_POST[id]','$client')";
$resultat1=$con->query($requette1);
$id=$con->lastInsertId();
//requette

$requette="INSERT INTO facture (code,demande,type,montant,date,description) VALUES ('$_POST[code]' ,'$id', '$_POST[type]' , '$_POST[montant]' , '$_POST[date]' , '$_POST[description]' ) ";

//execution de req

$resultat=$con->query($requette);

    header('location:../mission1.php?id='.$_POST[id].' ajout=ok');
}


?>