<?php
include "../sharedpage/function.php";
session_start();
if(!isset($_SESSION['rs'])){
  header('location:../page/home.php');
}
$mission=missionclient();
$total=total();
$notif=notif();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <!-- alert2 -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.css"
      rel="stylesheet"
     
    />
    <!-- MDB -->
    <link rel="stylesheet" href="sidebar/mdb.min.css" />
    <!-- PRISM -->
    <link rel="stylesheet" href="sidebarcss/new-prism.css" />
    <!-- Custom styles -->
    <style>
      .page-intro {
        background-color: white;
        width: 100vw;
        min-height: 100vh;
      }

      img {
        max-width: 80%;
      }

      .mdb-page-content {
        padding-left: 240px;
        transition: padding 0.3s linear;
      }

      #toggler {
        display: none;
      }

      @media (max-width: 660px) {
        .mdb-page-content {
          padding-left: 0px;
        }

        #toggler {
          display: unset;
        }

        .mask img {
          width: 100%;
        }
      }
    </style>
  </head>

  <body>
    
    <div
      id="full-screen-example"
      class="sidenav bg-light"
      data-color="dark"
      data-mode="side"
      data-hidden="false"
      style="color:brown ;background-color: #2a2424;"
      data-scroll-container="#scrollContainer"
    >
      <div class="mt-4">
        <div id="header-content" class="pl-3">
          <img
            src="../img/logo.jpg"
            alt="avatar"
            class="rounded-circle img-fluid mb-3"
            style="max-width: 100px;"
          />

          <h4>
            <span style="white-space: nowrap;"><?php echo $_SESSION['nom_entreprise']  ?></span>
          </h4>
          <p><?php echo $_SESSION['email']  ?></p>
        </div>
        <hr class="mb-0" />
      </div>
      <div id="scrollContainer">
        <ul class="sidenav-menu">
      
          <li class="sidenav-item">
            <a class="sidenav-link" href="../page/home.php"> <i class="fas fa-file pr-3"></i>Home</a>
          </li>
         
        
        
          <li class="sidenav-item">
            <a class="sidenav-link" ><i class="fas fa-tag pr-3"></i>Messions</a>
            <ul class="sidenav-collapse">
              <li class="sidenav-item">
                <a class="sidenav-link active" href="mission.php">Demande</a>
              </li>
              <li class="sidenav-item">
                       
                <a class="sidenav-link">
                  <?php 
                print'  
               
                
            
                      <i class="fas fa-bell"></i>
                      <span class="badge rounded-pill badge-notification bg-danger" style=" position: absolute;
                      font-size: inherit;
                      margin-left: 1rem;
                      padding: 0.2em 0.45em;
                  " >
                        vous avez '.$notif['notif']  .' Repnose</span>
                    </a>
              
             
                  <!-- Notification dropdown -->
                 
          ';  
                ?>
              </li>
              
       
            </ul>
          </li>
       
         

        </ul>
        <hr class="m-0" />
        <ul class="sidenav-menu">
        <li class="sidenav-item">
            <a class="sidenav-link"
              ><i class="fas fa-lock pr-3"></i><span>Password</span></a
            >
            <ul class="sidenav-collapse">
    
              <li class="sidenav-item">
                <a class="sidenav-link">Reset password</a>
              </li>
            </ul>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link"> <i class="fas fa-user pr-3"></i>Profile</a>
          </li>
          <li class="sidenav-item">
            <a class="sidenav-link" href="../page/deconnexion.php">  <i class="fas fa-user-astronaut pr-3"></i>Log out</a>
          </li>
        </ul>
      </div>
      <div class="text-center" style="height: 100px;">
        <hr class="mb-4 mt-0" />
     
      </div>
    </div>

        <button
          id="toggler"
          class="btn btn-dark mt-5"
          data-toggle="sidenav"
          data-target="#full-screen-example"
        >
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <div>

<table class="table mt-5 " style=" position: relative; left: 20% ; top:80px;
   width: 80%;
    ">
<thead>

<tr>
<th scope="col">#</th>
<th scope="col">Nom demande</th>

<th scope="col">Prix </th>
<th scope="col">Action</th>
</tr>
</thead>

<tbody>
<?php 
$i=0;
foreach($mission as $ms){
$i++;
print'<tr>
<th scope="row">'.$i.'</th>
<td>'.$ms['nom'].'</td>
<td>'.$ms['prix'].' dt</td>
<td>
<a onclick="return popUPDeletedemande()" href="supprimer.php?id='.$ms['id'].'" class="btn btn-outline-danger" >Supprimer</a>
<a  href="reponse.php?id='.$ms['id'].'" class="btn btn-successs" >voir reponse</a>

</td>
</tr>';

}

?>

<tr>
<th colspan="2" style=" color: red;">totale </th>
<td><?php echo intval($total[0])  ?></td>
</tr>

</tbody>

</table>

</div>
    <!-- PRISM -->
    <script type="text/javascript" src="sidebar/new-prism.js"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="sidebar/mdbsnippet.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="sidebar/mdb.min.js"></script>

    <!-- Custom scripts -->
    <script type="text/javascript">
      const sidenav = document.getElementById('full-screen-example');
      const instance = mdb.Sidenav.getInstance(sidenav);

      let innerWidth = null;

      const setMode = (e) => {
        // Check necessary for Android devices
        if (window.innerWidth === innerWidth) {
          return;
        }

        innerWidth = window.innerWidth;

        if (window.innerWidth < 660) {
          instance.changeMode('over');
          instance.hide();
        } else {
          instance.changeMode('side');
          instance.show();
        }
      };

      setMode();

      // Event listeners

      window.addEventListener('resize', setMode);
    </script>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.min.js"></script>
  <script>
 function popUPDeletedemande(){
    return confirm("voullez vous supprime si Demande");
  }
</script>
 <?php
      
      if(isset($_GET['supprimer']) && $_GET['supprimer']=='ok'){
       print "<script>  /// sweet ALERt2

       Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Demande supprimer avec success',
         showConfirmButton: false,
         timer: 1500
       })
       
       </script> 
       ";
     }
   
     ?>

  </html>

