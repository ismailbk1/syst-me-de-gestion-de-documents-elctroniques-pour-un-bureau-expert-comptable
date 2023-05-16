<?php
 include "../sharedpage/function.php";
 $mission=allmission();
  session_start();
if(!isset($_SESSION['rs'])){
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!-- include styel of mbd designe -->
 <!-- MDB icon -->
 <link rel="icon" href="../md5/img/mdb-favicon.ico" type="image/x-icon" />
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
include "../sharedpage/nvbar.php"

?>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-4">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-dark">Envoi de factures</p>

                <form class="mx-1 mx-md-4" action="action/demande.php" method="POST" >
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="code" id="form3Example4cd" class="form-control" />
                      <label class="form-label"  for="form3Example4cd">code facture</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-dollar-sign me-4 "></i>
                    <!-- <i class="fas fa-user fa-lg me-3 fa-fw"></i> -->
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="montant" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Montant</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-calendar me-4"></i>
                    <div class="form-outline flex-fill mb-0">
                    <input Type="hidden" name="id" value=<?php echo $_GET['id'] ?>>
                    <input type="date" name="date" id="form3Example1c" class="form-control" />
                      <label required class="form-label" for="form3Example1c">Date</label>
                    </div>
                  </div>


  <div class="form-group ">
    <label for="exampleFormControlSelect1">Type de facture :</label>
    <select  name ="type" class="form-control form-control-lg">
 

      <option >type de facture</option>
      <option >vente</option>
      <option>Achat</option>
      <option>bon de caisse </option>
  
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="mt-0">description :</label>
    <textarea class="form-control mb-2" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>






               

                  

               

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/fact.jpg" class="img-fluid" alt="Sample image">

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



  <script type="text/javascript" src="../md5/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.min.js"></script>

</body>
<?php
    
    if(isset($_GET['ajout'])){
      
      print "<script>  /// sweet ALERt2

     Swal.fire({
       position: 'center',
       icon: 'success',
       title: 'facture envoyeé avec success',
       showConfirmButton: false,
       timer: 1500
     })
     
     </script> 
     ";
   }
 
   
   
     ?>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
</html>