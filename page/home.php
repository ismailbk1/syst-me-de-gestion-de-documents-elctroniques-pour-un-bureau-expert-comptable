<?php
include "../sharedpage/function.php";
$mission=allmission();
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acueille</title>
    <link rel="stylesheet" href="home.css">
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
 <!-- include styel of mbd designe -->

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

<?php 
include "../sharedpage/undernvbar.php"
?>
<div class="wrapper">

<h1>Our services</h1>
<div class="content-box">
  <?php 
      foreach($mission as $ms){
        print'
        
        
  <div class="card">
  <i class="fas fa-chart-pie"></i>
  <h2>'.$ms['nom'].'</h2>
  <p>'.$ms['description'].'</p>
  <p>'.$ms['prix'].' dt</p>
  <a  class="btn btn-danger" data-mdb-ripple-color="dark" href="mission1.php?id='.$ms['id'].'"

   > En savoir plus</a>
</div>
        
        
        ';
        
            }
  
  
  ?>

   <div class="card" style="visibility: hidden;";>
    <i class="bx bx-bar-chart-alt bx-md"></i>
    <h2>Marketink service</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero fuga iusto nesciunt veniam consequatur necessitatibus itaque error, voluptatum minima. Magni, voluptatum dignissimos error dolor laboriosam commodi dicta numquam nemo sequi.</p>
  </div>
  <!--<div class="card">
    <i class="bx bx-bar-chart-alt bx-md"></i>
    <h2>Marketink service</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero fuga iusto nesciunt veniam consequatur necessitatibus itaque error, voluptatum minima. Magni, voluptatum dignissimos error dolor laboriosam commodi dicta numquam nemo sequi.</p>
  </div>
  <div class="card">
    <i class="bx bx-bar-chart-alt bx-md"></i>
    <h2>Marketink service</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero fuga iusto nesciunt veniam consequatur necessitatibus itaque error, voluptatum minima. Magni, voluptatum dignissimos error dolor laboriosam commodi dicta numquam nemo sequi.</p>
  </div>
  <div class="card">
    <i class="bx bx-bar-chart-alt bx-md"></i>
    <h2>Marketink service</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero fuga iusto nesciunt veniam consequatur necessitatibus itaque error, voluptatum minima. Magni, voluptatum dignissimos error dolor laboriosam commodi dicta numquam nemo sequi.</p>
  </div> -->
</div>
</div>

<style>
  
  .wrapper{
  font-family: 'releway';
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #fafafa;

}
.wrapper h1{
font-size: 3em;
margin: 25px 0;
text-align: center;
font-weight: 600;
color: rgb(255,0,82);



}

.content-box{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  width: 1000px;
  margin-top: 30px;
  
}
.card{
  min-height: 320px;
  width: 320px;
  padding: 30px;
  border-radius: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #D8BFD8;
  margin: 10px 4px;
  box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.2);


}
.card i{
 margin: 20px;
 color: #ff5724;

}
.card h2{
  margin-bottom:12px ;
  font-weight: 400;
  text-align: center;
}
.card p{
  color: #6c757d;
  text-align: center;
}
.card:hover i,
.card:hover p{
  color: #fff;
}
.card:hover h2{
  font-weight: 600;
}
.card:nth-child(1):hover{
  background:linear-gradient(45deg,
                              rgba(255,28,8,0.7) 0%,
                               rgba(255,0,82,0.7) 100% ),
                               url('../img/1.jpg');
  background-size: cover;
}
.card:nth-child(2):hover{
  background:linear-gradient(45deg,
                              rgba(255,28,8,0.7) 0%,
                               rgba(255,0,82,0.7) 100% ),
                               url('../img/2.jpg');
  background-size: cover;
}
.card:nth-child(3):hover{
  background:linear-gradient(45deg,
                              rgba(255,28,8,0.7) 0%,
                               rgba(255,0,82,0.7) 100% ),
                               url('../img/3.jpg');
  background-size: cover;
}
.card:nth-child(4):hover{
  background:linear-gradient(45deg,
                              rgba(255,28,8,0.7) 0%,
                               rgba(255,0,82,0.7) 100% ),
                               url('../img/4.jpg');
  background-size: cover;
}
.card:nth-child(5):hover{
  background:linear-gradient(45deg,
                              rgba(255,28,8,0.7) 0%,
                               rgba(255,0,82,0.7) 100% ),
                               url('../img/fact.jpg');
  background-size: cover;
}

@media(max-width:991px){
  .wrapper{
    padding: 25px;
  }
  .wrapper h1{
    font-size: 2.5em;
    font-weight: 600;
  }
  .content-box{
    flex-direction: column;
    width: 100%;

  }
  .card{
    min-width: 300px;
    margin: 10px auto;

  }
}


 @media(max-width:991px){
  .wrapper{
    padding: 25px;
  }
  .wrapper h1{
    font-size: 2.5em;
    font-weight: 600;
  }
  .content-box{
    flex-direction: column;
    width: 100%;

  }
  .card{
    min-width: 300px;
    margin: 10px auto;

  }
} 
</style>

<?php 
include "../sharedpage/footer.php"
?>
 <script type="text/javascript" src="../md5/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
<!-- JavaScript Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  </html>