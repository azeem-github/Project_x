<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Project_X | E-commerce</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      
<!-- azeeeem's start of code -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->

<!-- azeeeem's end of code -->

      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section haeder_main">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.php">Home</a>                 
                  <a href="mans_clothes.php">Mans Clothes</a>
                  <a href="womans_clothes.php">Womans Clothes</a>
                  <a href="contact.php">Contact</a>
               </div>
               <span style="font-size:30px;cursor:pointer; color: #fff;" onclick="openNav()"><img src="images/toggle-icon.png"></span>
               <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" style="heigth:100px; width:120px;"></a></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <ul>  
                     <!-- CODE OF OWN START-->
                     <!-- <?php //if(empty($_SESSION['email'])){ ?>
	<li><a href="login.php"> <img src="images/user-icon.png"></i> login</a></li>
<?php //}else{ ?>
<li><a href="logout.php?log=1"> <img src="images/user-logout.png"></i> Logout</a></li>
<?php  //} ?> -->
<!-- CODE OF OWN END -->
                     <?php if(empty($_SESSION['email'])){ ?>
                        <li><a href="login.php"><img src="images/Capture.png"></a></li>
                        <?php }else{
                           ?>
                            <li><a href="logout.php?log=1"><img src="images/Capture1.png"></a></li>
                        <?php } ?>
                        <li><a href="cart.php"><img src="images/Capture2.png"></a></li>
                        <!-- <li><a href="#"><img src="images/search-icon.png"></a></li> -->
                     </ul>
                  </div>
               </form>             
            </nav>
            <?php
$emailsession = $_SESSION['email'];
$email = $_GET['email'];
?>
<h6 style="margin-left:10px; text-align:center;"><!--<i class="ion-email" style="font-size: 1.73em;"></i>--><b> Welcome <?php echo $emailsession; ?> ! :) <b></h6>
         </ul>
         </div>
      </div>
      <!-- header section end -->