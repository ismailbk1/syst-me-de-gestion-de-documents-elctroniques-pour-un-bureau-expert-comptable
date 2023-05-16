<?php 
include "../sharedpage/function.php";
$mission=allmission();
$avoiralert=0;
 session_start();
if (!empty($_POST)){
 $enregitrement=ajoutclient($_POST);

 if($enregitrement){

   $avoiralert=1;
  // header('location:../page/login.php');
 }

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert</title>
    <link rel="stylesheet" href="register&login.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="
">
<link
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.css"
      rel="stylesheet"
     
    />
        <!-- include styel of mbd designe -->
 <!-- MDB icon -->
 <!-- <link rel="icon" href="../img/logo.jpg" type="image/x-icon" /> -->
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../md5/css/mdb.min.css" />
</head>
<body>
<?php 
    include "nvbarpourlepage.php";
    
    ?>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-dark">Sign up</p>

                <form class="mx-1 mx-md-4" action="register.php" method="post">
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="rs" id="form3Example4cd" class="form-control" />
                      <label class="form-label"  for="form3Example4cd">raision social</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-map-marker-alt me-4 "></i>
                    <!-- <i class="fas fa-user fa-lg me-3 fa-fw"></i> -->
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="location" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Location</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-phone me-4"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="numero" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Numero téle</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-dice-d20 me-4"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="nom_entreprise" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Nom d'entreprise </label>
                    </div>
                  </div> 

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="mdp" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  

               

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/1.jpg" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php 
include "../sharedpage/footer.php"
?>

<!-- script of mdb designe -->
 <script type="text/javascript" src="../md5/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.min.js"></script>

<?php  

if($avoiralert==1){
  print "<script>  /// sweet ALERt2

  Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Creation de compte avec succes',
    showConfirmButton: false,
    timer: 1500
  })
  
  </script> 
 
 
 
  ";
}


   
   

?>

</html>