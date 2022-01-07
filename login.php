<?php session_start();
?>
<?php include('header.php');?>
<?php include ('config.php');?>
<?php
$erroremail = '';
$erropass = '';

if(isset($_POST['submit']))
{
   $email = $_POST['email'];
   $password = $_POST['password'];

   $query = mysqli_query($conn, "SELECT * FROM user WHERE email ='$email' AND password ='$password'");

   if(mysqli_num_rows($query)>0)
   {
      $_SESSION['email'] = $email;
      header("Location: index.php");
      echo "login sucessful";
   } 
   else 
   {
      echo "<script>alert('Email Or Password Invalid !');</script>";
   }
}

// if(isset($_POST['submit']))
// {
//    $email = trim($_POST['email']);
//    $pass  =  trim($_POST['password']);

?>
<!-- <style>
      .btn:hover, .btn:focus 
   {
      color: #eae4e4;
      text-decoration: none;
   }
   
   .reg
   {
      margin-top:130px;
      margin-right:100px;
   }

</style> -->
<style>
.inpt{
				text-align: center;
				/* width: 290px; */
			} */
.btn:hover, .btn:focus {
        background-color:white;
        color: black;
        border-color: black;
    }
    /* .reg{
				margin-top: 90px;
				margin-right:300px;
				margin-bottom: 50px;
				margin-left: 450px;				
			} */
        
.ver
   {
      background-color: black;
      color:white;
   } 
   .jumbotron{
				margin-top: 20px;
				width: 430px;
			}
   </style>
   
   <div class="container reg">      
      <div class="row">      
      <div class="col-sm-2 col-sm-12"></div>
         <div class="col-md-3 col-sm-12"></div>
      <div class="col-md-8 col-sm-12">	
      <form action="" method="POST" class="jumbotron">
      <h2 style="text-decoration: underline; text-align:center;"><b>Login</b></h2>
         <div class="form-group inpt">
            <label class="inpt"><b>E-Mail: </b></label>
            <input type="text" class="form-control inpt" name="email" placeholder="email@example.com" required>
         </div>
         <div class="form-group inpt">
            <label class="inpt"><b>Password: </b></label><br>
            <input type="password" class="form-control inpt" name="password" Placeholder="********" required>
         </div>     
         <div class="form-group  inpt">
           <button class="btn btn-default ver" type="submit" name="submit">Login</button>
         </div>
         <div class="form-group  inpt">
         Haven't Registered ?<a href="registration.php"> Register</a>
      </div>
      </div>        
      </form>
      </div>
      </div>
   </div>
