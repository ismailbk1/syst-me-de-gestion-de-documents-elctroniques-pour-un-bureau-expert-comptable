<?php 
function connecte(){
    // conexion avec le BD:

    $bduser="root";
    $bdpass="";
    $Bdname="pfa";
    $servname="localhost";
    try{
    $con=new PDO("mysql:host=$servname;dbname=$Bdname",$bduser,$bdpass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "connect successfully";

    } catch(PDOException $e){
        echo "Connection failed".$e->getMessage();
    }
    
    return $con;
    
  }
  ///***** function REgister client  */

  function ajoutclient($data){
$con=connecte();
$mdp=md5($data['mdp']);

$requette="INSERT INTO client(rs,location,numero,email,mdp,nom_entreprise) VALUES ('".$data['rs']."','".$data['location']."','".$data['numero']."','".$data['email']."','$mdp','".$data['nom_entreprise']."')";
$resultat=$con->query($requette);
if($resultat){
    return true;
}
else{
    return false;
}


  }
// login pour le client
function login($data){
$con=connecte();
$email=$data['email'];
$mdp=md5($data['mdp']);
$requette="SELECT * FROM client where email ='$email' AND mdp='$mdp'";
$resultat=$con->query($requette);
$user=$resultat->fetch();
return $user;


  }
// login pour admin
  function loginadmin($data){
$con=connecte();
$email=$data['email'];
$mdp=md5($data['mdp']);

$requette="SELECT * FROM expert where mdp='$mdp' AND email='$email'";
$resultat=$con->query($requette);
$admin=$resultat->fetch();
return $admin;


  }

function allmission(){
  $con=connecte();
  $requette="SELECT * FROM mission";
  $resultat=$con->query($requette);
  $mission=$resultat->fetchALL();
  return $mission;
}

function allclient(){
$con=connecte();
$requette="SELECT * from client";
$resultat=$con->query($requette);

$client=$resultat->fetchALL();

return $client;



}


function missionclient(){
  $con=connecte();

 $requette="SELECT demande.id ,rs , mission.nom ,mission.prix  from client,demande  ,mission WHERE demande.client=client.id AND mission.id=demande.mission AND client.id ='$_SESSION[id]' ";
 $resultat=$con->query($requette);

 $mission=$resultat->fetchALL();
 
 return $mission;

}
function total(){

  $con=connecte();

  $requette="SELECT SUM(mission.prix)  from client,demande  ,mission WHERE demande.client=client.id AND mission.id=demande.mission AND client.id ='$_SESSION[id]'";
  $resultat=$con->query($requette);
  $total=$resultat->fetch();
 
  return $total;
 
}

// demande pour le profil expert
function travail(){
  $con=connecte();

  $requette="SELECT rs,nom_entreprise,mission.nom , demande.id ,mission.prix from client,demande  ,mission WHERE demande.client=client.id AND mission.id=demande.mission";
  $resultat=$con->query($requette);
 
  $travail=$resultat->fetchALL();
  
  return $travail;
 

}
//login agent 
function loginagent($data){
  $con=connecte();
  $email=$data['email'];
  $mdp=md5($data['mdp']);
  
  $requette="SELECT * FROM agent where mdp='$mdp' AND email='$email'";
  $resultat=$con->query($requette);
  $admin=$resultat->fetch();
  return $admin;
  

}

// demande pour chaque agent
function travailagent(){
  $con=connecte();

  $requette="SELECT rs,nom_entreprise,mission.nom , demande.id ,mission.prix from client,demande  ,mission WHERE demande.client=client.id AND mission.id=demande.mission AND mission.nom='$_SESSION[tr]'";
  $resultat=$con->query($requette);
 
  $travail=$resultat->fetchALL();
  
  return $travail;
 

}

//liste de facture
function facture($demande){
  $con=connecte();
  $requette="SELECT * FROM facture WHERE demande='$demande'";
  $resultat=$con->query($requette);
  $facture=$resultat->fetchALL();
  
  return $facture;
 

}

//avoir de reponse de chaque mission 

function reponse($id){
  $con=connecte();
  $requette="SELECT reponse ,agent.nom FROM reponse ,demande ,agent WHERE reponse.demande=demande.id AND reponse.agent=agent.id AND   reponse.demande='$id';
  ";
  $resultat=$con->query($requette);
  $reponse=$resultat->fetchALL();
  
  return $reponse;



}
//notification de reponse 

function notif(){
  $con=connecte();
  $requette="SELECT count(*) as notif FROM reponse ,demande  WHERE reponse.demande=demande.id  AND  demande.client='$_SESSION[id]';";
  $resultat=$con->query($requette);
  $reponse=$resultat->fetch();
  
  return $reponse;

}

// liste de agent pour le admin 'grand l'expert'

function allagent(){

  $con=connecte();
$requette="SELECT * from agent";
$resultat=$con->query($requette);

$agent=$resultat->fetchALL();

return $agent;



}


?>