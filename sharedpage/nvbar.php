<?php
//include "function.php";
$mission=allmission();
// session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acueill</title>
 <link rel="stylesheet" href="stylenvbar.css">
</head>
<body>
  <style>
    .navbar-light .navbar-nav .niv{

color: #fff;


}
.navbar-light .navbar-nav .nav-link.active-link{

color:#3FC060;
text-decoration: underline;



}
.navbar{
/* background-color: #3e4c61; */
background-color:  #233e8b;

}
.navbar-brand{
color: #fff;
}
a  :hover{
  cursor: pointer;
color: #3FC060;
}

.navbar-light h2{
  color:white;
}
  </style>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" id='title' routerLink=""><h2>expert-comptable</h2> </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a
            class="nav-link niv"
            aria-current="page"
            href="../page/home.php" style="color:#ffff"
            >Home</a
          >
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#ffff" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Messions
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            
            <!-- menu de mission  -->
            <?php
foreach($mission as $ms){
print'
<li><a class="dropdown-item"  href="mission1.php?id='.$ms['id'].'">'.$ms['nom'].'</a></li>
<li><hr class="dropdown-divider"></li>
';

}

?>
          </ul>
        </li>
     
      </ul>
      <!-- // fin menu mission -->


   <!-- les condition sur l'affichage de link de register de connexion lorsque un client fait la login    -->
      <?php 
      

   if(isset($_SESSION['rs']) && !(isset($_SESSION['nom']))){
    
  print' 
  <li class="nav-item">
  <a
    class="nav-link" 
    style="color:#ffff"
    href="../client/profil.php">Profil</a
  >
  </li>
  
  
  
  
  ';


   }   
   
   if(isset($_SESSION['nom']) && !(isset($_SESSION['tr']))){
    
    print' 
    <li class="nav-item">
    <a
      class="nav-link"
      style="color:#ffff"
      href="../admin/profiladmin.php">Profil Admin</a
    >
    </li>
    
    
    
    
    ';
  
  
     }   
      
   if(isset($_SESSION['tr'])){
    
    print' 
    <li class="nav-item">
    <a
      class="nav-link"
      style="color:#ffff"
      href="../agent/profil.php">Profil employe </a
    >
    </li>
    
    
    
    
    ';
  
  
     }   
   
     if(!(isset($_SESSION['rs'])) && !(isset($_SESSION['nom']))){
print' 

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" style="color:#ffff" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      conexion
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="../page/login.php">Connexion Client</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="../agent/loginagent.php"> Connexion Agent</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="../admin/loginadmin.php"> Connexion Admin</a></li>
    </ul>
  </li>


</ul>
  <li class="nav-item">
    <a
      class="nav-link"
      style="color:#ffff"
      href="../page/register.php">Register</a
    >
  </li>


';


   }
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      ?>
     <!-- fin conditions -->
      </ul>
    </div>
  </div>
</nav> 
</body>
</html>
