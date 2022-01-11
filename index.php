<?php session_start();?>
<?php 
include('includes/header.php');
include('config.php');
   //Testing(NEW START)
   // if(!empty($_GET['log'])){
   //    session_destroy();
   // }
   //Testing(NEW END)

   if(isset($_POST['addCart']))
{
	 $_SESSION['prodId'] = $_POST['id'];
	echo "<script>window.location.href='cart.php';</script>";
}
if (isset($_POST['prodId']) && $_POST['prodId']!=""){
	$prodId = $_POST['prodId'];
	$result = mysqli_query($conn,"SELECT * FROM products WHERE id='$prodId'");
	$row = mysqli_fetch_assoc($result);
	$image_name = $_FILES['image'];
	$short_description = $row['short_description'];
	$mrp = $row['mrp'];
	
	
	$cartArray = array(
		$prodId=>array(
		'image'=>$image_name,
		'short_description'=>$short_description,
		'mrp'=>$mrp,
		'quantity'=>1)
	);
	
	 }
?>   
<style>
   h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
      color: #fbfafa;
      text-decoration: none !important;
      opacity: 1;
   }
   /* .categary_text{
      padding-right: 400px;
   }
   .catagary_section {
      width: 100%;
      float: left;
      background-color: #143a51;
      height: auto;
      padding-right: 10px;
   } */
   .vert{
      text-align:center;
   }
   .buttonadd{
	color: #ffffff;
   background-color: #ff5d68;
}
</style>
<!-- banner section start -->
<?php $sql = mysqli_query($conn, "SELECT * from slider");?>
      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <?php
                     $a = 0;
                     foreach($sql as $row){
                        $active = '';
                        if($a == 0){
                           $active = "active";
                        }
                  ?>
                   <li data-target="#slider-carousel" data-slide-to="<?php echo $a; ?>" class="<?php echo $active; ?>">
                  </li>
                  <?php $a++; } ?>
                  <div class="container">
                     <div class="row border_1">
                        <div class="col-md-4">
                           <!-- <div class="image_1"><img src="images/img-1.png" style="width:100%"></div> -->
                            <img src="admin/images/slider/<?= $row['image']?>" class="girl img-responsive" alt="" />
										 <!-- <img src="images/carousel/pricing.png"  class="pricing" alt="" /> -->
                        </div>
                        <div class="col-md-4">
                           <h2 class="banner_taital">Big Sale Offer</h2>
                           <!-- <div class="buynow_bt active"><a href="#">Buy Now</a></div> -->
                           <!-- <div class="contact_bt"><a href="contact.html">Contact Us</a></div> -->
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
                  <h3 class="categary_text">Category</h3>
               </div>
               <div class="catagary_right">
                  <div class="catagary_menu">
                     <?php $query = mysqli_query($conn, "SELECT * FROM categories");
                     while($rows = mysqli_fetch_array($query)){
                        //Id from database with $id(variable) with products table where table Products.(with)category coloumn name combination which is known as normalization of mysql database
                           $count = mysqli_query($conn, "SELECT id FROM products WHERE products.category = $rows[id]");
                           $prodCount = mysqli_num_rows($count);
                           ?>                          
                     <ul>
                        <li>
                           <h4 class="panel-title"><a href="categories.php?id=<?php echo $rows['id']; ?>">
                                    <!-- <img src="admin/images/categories/<?php //echo $rows['image']; ?>" height="35" width="35" alt="" /> -->
                                    <?php echo $rows['category']; ?>
                                    <!-- <span class="pull-right">(<?php echo $prodCount; ?>)</span> -->
                                    </a>                              
                                    </h4>
                        </li> 
                     </ul>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
         <br>
      </div>     
   <!-- Featuring items start -->
   <?php
						// if(isset($_GET['id'])){
						// 	$id = $_GET['id'];
						//    $query2 = mysqli_query($conn, "SELECT * FROM products WHERE category=$id");
						//    //var_dump($query2);
						   											 
                  //       //  while($row = mysqli_fetch_array($query2)){
                  //       //     print_r($row);
						// 	?>
   <div class="mans_section layout_padding">         
         <div class="container">
      <!-- <div class="catagary_section_2">
         <div class="container-fluid"> -->         
            <div class="row">
               <?php
             $query3= mysqli_query($conn, "SELECT * FROM products");
							while($row1 = mysqli_fetch_array($query3)){
                        ?>
               <div class="col-md-4">
                  <div class="box_man vert">
                     <form action="" method="post" enctype="multipart/form-data">
                        <img data-enlargeable style="cursor: zoom-in" src="admin/images/upload/<?php echo $row1['image']; ?>" alt="" />
                        <h3 style="color:black; text-align:center;">$ <?php echo $row1['mrp']; ?></h3>
                           <p style="text-align:center;"><?php echo $row1['short_description']; ?></p>
                           <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                        <button type="submit" name="addCart" class="btn btn buttonadd" style="width:100%;">Add to Cart</button><br>
                        
                        <button type="submit" name="addCart" class="btn btn-default" style="width:100%;">Add To Wishlist</button>
                     </form>
                  </div>
               </div>
               <?php } ?>  
            </div>             
         </div>
      </div>     
 <!-- </div>
      </div> -->
   <!-- Featuring items end -->
      <!-- computers section start -->
      <div class="computers_section layout_padding">
         <div class="container">
            <h1 class="computers_taital" style="text-decoration:underline;">Electronics</h1>
         </div>
      </div>
      <div class="computers_section layout_padding">
         <div class="container">        
            <div class="womans_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="Get_offer_text" style="text-decoration:underline;">Offers On Gadgets</h1>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available,but the majority have</p>
                     <div class="read_bt"><a href="electronics.php">View Products</a></div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_4"><img src="images/electronics2-.jpg"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!-- mans clothes section start -->

      <div class="mans_section layout_padding">         
         <div class="container">
            <h1 class="computers_taital" style="text-decoration:underline;">Man’s clothes</h1>
         </div>
      </div>
      <div class="mans_section_2">
         <div class="container-fluid">
            <div class="mans_main">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="offer_text">Best  Offer Every Man’s Iteams</h1>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available,but the majority have</p>
                     <div class="read_bt"><a href="mans_clothes.php">View Products</a>
                     </div>
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
            <h1 class="womans_taital" style="text-decoration:underline;">woman’s clothes</h1>
            <div class="womans_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="Get_offer_text" style="text-decoration:underline;">Get offer On Items</h1>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available,but the majority have</p>
                     <div class="read_bt"><a href="womans_clothes.php">View Products</a></div>
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
      <script>
		$('img[data-enlargeable]').addClass('img-enlargeable').click(function() 
		{
			var src = $(this).attr('src');
			var modal;
		
			function removeModal() 
			{
			modal.remove();
			$('body').off('keyup.modal-close');
			}
			modal = $('<div>').css
			({
				background: 'RGBA(0,0,0,0.7) url(' + src + ') no-repeat center',
				backgroundSize: 'contain',
				width: '100%',
				height: '100%',
				position: 'fixed',
				zIndex: '10000',
				top: '0',
				left: '0',
				cursor: 'zoom-out'
			}).click(function() 
			{
			removeModal();
			}).appendTo('body');
			//handling ESC
			$('body').on('keyup.modal-close', function(e) 
			{
				if (e.key === 'Escape') 
				{
				removeModal();
				}
			});
		});
</script>
      
   </body>
</html>