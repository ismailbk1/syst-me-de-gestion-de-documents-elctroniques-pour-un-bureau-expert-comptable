<?php 
session_start();


if(!isset($_SESSION['nom'])){
    header('location:../../page/home.php');
}
include "../../sharedpage/function.php";
$travail=travail();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Espace Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
     <link
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.css"
      rel="stylesheet"
     
    />

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<meta name="theme-color" content="#7952b3">


    <style>
          .row{
            height:600px;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/dashbord.min.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../index.php">Espace Admin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../../page/deconnexion.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../../page/home.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../profiladmin.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Messions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="../travaille/travaille.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Travaille
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../client/listeclient.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Client
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../agent/agent.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Agent
            </a>
          </li>
    
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="color=white">Liste Missions 
          
        </h1>
        


<!-- Modal Alert d'ajout de missions -->



      </div>


       

<!-- debut tabele -->
      <div>

      <table class="table mt-5">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">rs</th>
      <th scope="col">nom_entreprise</th>
      <th scope="col">nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=0;
    foreach($travail as $tr){
$i++;
      print'<tr>
      <th scope="row">'.$i.'</th>
      <td>'.$tr['rs'].'</td>
      <td>'.$tr['nom_entreprise'].'</td>
      <td>'.$tr['nom'].'</td>
      <td>'.$tr['prix'].' dt</td>
      <td>
<a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editmodal'.$tr['id'].'" >Modifier</a>
<a onclick="return popUPDeletemission()" href="supprimer.php?id='.$tr['id'].'" class="btn btn-danger" >Supprimer</a>

      </td>
    </tr>';
  
    }
    
    ?>
    

  </tbody>
</table>
</div>
<!-- fin table  -->
    </main>
    
  </div>

 
</div>



    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  
      <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.min.js"></script>
 
<!-- boucle pour chaque mission on a un modal ki sortie car cahque mission a un unique id  -->
 




</body>
<!-- alert montre lorsque  l'ajout de mission fait avec success -->
<?php
      
      if(isset($_GET['ajout']) && $_GET['ajout']=='ok'){
       print "<script>  /// sweet ALERt2

       Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Mission ajouter avec success',
         showConfirmButton: false,
         timer: 1500
       })
       
       </script> 
       ";
     }
   
     ?>
<!-- fin alert ajout -->



<!-- alert montre lorsque  le Modifeication  de mission fait avec success -->
<?php
      
      if(isset($_GET['modifier']) && $_GET['modifier']=='ok'){
       print "<script>  /// sweet ALERt2

       Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Mission Modifier avec success',
         showConfirmButton: false,
         timer: 1500
       })
       
       </script> 
       ";
     }
   
     ?>
<!-- fin alert ajout -->


<!-- alert montre lorsque  le Supprisition  de mission fait avec success -->
<?php
      
      if(isset($_GET['supprimer']) && $_GET['supprimer']=='ok'){
       print "<script>  /// sweet ALERt2

       Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Mission supprimer avec success',
         showConfirmButton: false,
         timer: 1500
       })
       
       </script> 
       ";
     }
   
     ?>
<!-- fin alert ajout -->
<!-- function pour la confirmation de supprission de mission -->
<script>
 function popUPDeletemission(){
    return confirm("voullez vous supprime si mission");
  }
</script>
<!-- fin function  -->
</html>
