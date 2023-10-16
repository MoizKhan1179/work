<?php 

include('config.php');
include('navebar.php');

if(isset($_POST['PHP_SELF'])){
    $Email = $_POST['L_email'];
    $Password = $_POST['L_Pass'];
  
    $login_query = "SELECT * from `admin` where L_email = '$Email'";
    $get_from_db = mysqli_query($connection, $login_query);

    if(mysqli_num_rows($get_from_db)){
      $row = mysqli_fetch_assoc($get_from_db);
      $db_pass = $row['password'];
      $pass_decode = password_verify($Password);
    }
    
  }
//   if(isset($_POST['PHP_SELF'])){
//     $Email = $_POST['L_email'];
//     // $Password = $_POST['L_Pass'];
  
//     $login_query = "SELECT * from `adminregister` where email = '$Email'";
//     $get_from_db = mysqli_querry($connection, $login_query);
//     if(mysqli_num_rows($get_from_db)){
//       $row = mysqli_fetch_assoc($get_from_db);
//       $db_pass = $row['password'];
//       $pass_decode = password_verify($Password,);
//     }
    
//   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
 
 <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

 <!-- Icon Font Stylesheet -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

 <!-- Libraries Stylesheet -->
 <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 <link href="lib/animate/animate.min.css" rel="stylesheet">
 <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

 <!-- Customized Bootstrap Stylesheet -->
 <link href="css/bootstrap.min.css" rel="stylesheet">

 <!-- Template Stylesheet -->
 <link href="css/style.css" rel="stylesheet">


 <style>
  #form{
    margin-bottom: 10%;
  }
 </style>
</head>
<body>
    
<section class="home-slider owl-carousel">

<div class="slider-item" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
  <div class="container">
    <div class="row slider-text justify-content-center align-items-center">

      <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Login</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Login</span></p>
      </div>

    </div>
  </div>
</div>
</section>

<section class="ftco-section">
<div class="container">
  <div class="row">
    <div class="col-md-12 ftco-animate">
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method= "POST" class="billing-form ftco-bg-dark p-3 p-md-5" id="form">
          <h3 class="mb-4 billing-heading">Login</h3>
            <div class="row align-items-end">
                <div class="col-md-12">
              <div class="form-group">
                  <label for="Email">Email</label>
                <input type="text" class="form-control" name = "L_email" placeholder="Email">
              </div>
            </div>
           
            <div class="col-md-12">
              <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" name= "L_Pass" placeholder="Password">
              </div>

          </div>
          <div class="col-md-12">
              <div class="form-group mt-4">
                      <div class="radio">
                          <button name = "Login" class="btn btn-primary py-3 px-4">Login</button>
                      </div>
              </div>
          </div>

         
        </form><!-- END -->
    </div> <!-- .col-md-8 -->
    </div>
  </div>
</div>
</section>  
<?php

include('footer.php');

?>
</body>
</html>