<?php  
    include ('header.php');
    include('config.php'); 
   //  include('includ/functions.php'); 
?>
<style>
   .inpt{
				text-align: center;
				width: 290px;
			}
       .reg{    
            margin-top: 35px;
				margin-right:300px;
				margin-bottom: 39px;
				margin-left: 450px;	
    }
   .btn:hover, .btn:focus {
        background-color:white;
        color: black;
        border-color: black;
    }
   .ver{
      background-color: black;
        color:white;
   }
   .jumbotron{
				margin-top: 10px;
            margin-bottom: 10px;
				width: 430px;
			}
   </style>
<?php
    $errfname = $errlname = $erremail = $errpassword = '';
    if(isset($_POST['register'])) 
    {

        $fname = $_POST['full_name'];        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = mysqli_connect('localhost', 'root', '', 'project_x');

        if ($email != '') 
        {
            $sql= "SELECT * FROM user WHERE email='$email'";
            $search = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($search);

            if($rows > 0) 
            {
                echo "<script>alert('Email Already Exists!');</script>";
            } 
            else 
            {
                $sql = "INSERT INTO user (full_name,email, password) VALUES ('$fname','$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if($result === TRUE)
                {
                    header("Location: login.php");
                    echo "Registered Sucessfully";
                } 
            }
        }
    }
?>
<body>
<div class="container reg">
   <div class="row">
      <div class="col-md-8 col-sm-12"> 
         <form action="" method="POST" class="jumbotron">
         <h2 style="text-decoration: underline; text-align:center;"><b>Registration</b></h2>
            <div class="form-group">
               <label class="inpt"><b>Full Name :</b></label>
               <input type="text" class="form-control inpt" name="full_name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
               <label class="inpt"><b>E-mail :</b></label>
               <input type="text" class="form-control inpt" name="email" placeholder="email@example.com" required>
            </div>
            <div class="form-group">
               <label class="inpt"><b> Password :</b></label>
               <input type="password" class="form-control inpt" name="password" placeholder="********" required>
            </div>          
            <div class="form-group inpt">          
               <button type="submit" name="register" class="btn btn-default ver">Register</button>
            </div>
            <div class="form-group  inpt">
               Haven't Registered ?<a href="login.php"> Login</a>
            </div>       
         </form>
      </div>
   </div>
</div>        
</body>
</html>