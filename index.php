<?php session_start();?>
<?php include('includes/header.php');?>
<?php include('config.php');
//Testing(NEW START)
if(!empty($_GET['log'])){
	session_destroy();
}
//Testing(NEW END)
?>     
<!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row border_1">
                        <div class="col-md-4">
                           <div class="image_1"><img src="images/img-1.png" style="width:100%"></div>
                        </div>
                        <div class="col-md-4">
                           <h1 class="banner_taital">Big Sale Offer</h1>
                           <div class="buynow_bt active"><a href="#">Buy Now</a></div>
                           <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                        <div class="col-md-4">
                           <div class="image_2"><img src="images/img-2.png" style="width:100%"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row border_1">
                        <div class="col-md-4">
                           <div class="image_1"><img src="images/img-1.png" style="width:100%"></div>
                        </div>
                        <div class="col-md-4">
                           <h1 class="banner_taital">Big Sale Offer</h1>
                           <div class="buynow_bt active"><a href="#">Buy Now</a></div>
                           <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                        <div class="col-md-4">
                           <div class="image_2"><img src="images/img-2.png" style="width:100%"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row border_1">
                        <div class="col-md-4">
                           <div class="image_1"><img src="images/img-1.png" style="width:100%"></div>
                        </div>
                        <div class="col-md-4">
                           <h1 class="banner_taital">Big Sale Offer</h1>
                           <div class="buynow_bt active"><a href="#">Buy Now</a></div>
                           <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                        <div class="col-md-4">
                           <div class="image_2"><img src="images/img-2.png" style="width:100%"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- banner section end -->
      <!-- catagary section start -->
      <div class="catagary_section layout_padding">
         <div class="container">
            <div class="catagary_main">
               <div class="catagary_left">
                  <h2 class="categary_text">Category</h2>
               </div>
               <div class="catagary_right">
                  <div class="catagary_menu">
                     <ul>
                        <li><a href="mans_clothes.php">Mens Fashion</a></li>
                        <li><a href="womans_clothes.php">Womans Fashion</a></li>
                        <!-- <li><a href="#">Beauty</a></li>
                        <li><a href="#">Mobiles</a></li>
                        <li><a href="#">Computers</a></li> -->
                        <li><a href="#">Watches</a></li>
                        <li><a href="#">Kitchen</a></li>
                        <li><a href="#">Sports</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>     
      <!-- catagary section end -->
      <!-- computers section start -->
      <div class="computers_section layout_padding">
         <div class="container">
            <h1 class="computers_taital">Computers & Laptop</h1>
         </div>
      </div>
      <div class="computers_section_2">
         <div class="container-fluid">
            <div class="computer_main">
               <div class="row">
                  <div class="col-md-4">
                     <div class="computer_img"><img src="images/computer-img.png"></div>
                     <h4 class="computer_text">COMPUTER</h4>
                     <div class="computer_text_main">
                        <h4 class="dell_text">Samsung</h4>
                        <h6 class="price_text"><a href="#">$500</a></h6>
                        <h6 class="price_text_1"><a href="#">$1000</a></h6>
                     </div>
                     <div class="cart_bt_1"><a href="#">Add To Cart</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="computer_img"><img src="images/laptop-img.png"></div>
                     <h4 class="computer_text">LAPTOP</h4>
                     <div class="computer_text_main">
                        <h4 class="dell_text">Dell</h4>
                        <h6 class="price_text"><a href="#">$500</a></h6>
                        <h6 class="price_text_1"><a href="#">$1000</a></h6>
                     </div>
                     <div class="cart_bt_1"><a href="#">Add To Cart</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="computer_img"><img src="images/mac-img.png"></div>
                     <h4 class="computer_text">macOS</h4>
                     <div class="computer_text_main">
                        <h4 class="dell_text">Apple</h4>
                        <h6 class="price_text"><a href="#">$500</a></h6>
                        <h6 class="price_text_1"><a href="#">$1000</a></h6>
                     </div>
                     <div class="cart_bt_1"><a href="#">Add To Cart</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- computers section end -->
      <!-- mans clothes section start -->
      <div class="mans_section layout_padding">
         <div class="container">
            <h1 class="computers_taital">Man’s clothes</h1>
         </div>
      </div>
      <div class="mans_section_2">
         <div class="container-fluid">
            <div class="mans_main">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="offer_text">Best  Offer Every Man’s Iteams</h1>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available,but the majority have</p>
                     <div class="read_bt"><a href="#">Buy Now</a></div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_3"><img src="images/img-3.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mans clothes section end -->
      <!-- womans clothes section start -->
      <div class="computers_section layout_padding">
         <div class="container">
            <h1 class="womans_taital">woman’s clothes</h1>
            <div class="womans_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="Get_offer_text">Get <br>offer Every Iteams</h1>
                     <div class="read_bt"><a href="#">Buy Now</a></div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_4"><img src="images/img-4.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- womans clothes section end -->
 <?php include 'includes/footer.php'; ?>
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>