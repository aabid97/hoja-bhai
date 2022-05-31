<?php
  
   session_start();
     if(!isset($_SESSION['username']))
     {
         header("location:login.php");
     }
     elseif($_SESSION['usertype']=='student')
     {
         header("location:login.php");
     }


     $host="localhost";
     $user="root";
     $password="";
     $db="stu_data";
     
     $data= mysqli_connect($host,$user,$password,$db);
     
     if(isset($_POST['add_student']))
     {
         $username=$_POST['name'];
         $useremail=$_POST['email'];
         $userphone=$_POST['phone'];
         $userpassword=$_POST['password'];
         $usertype="student";

         $check="SELECT * from user WHERE username ='$username '";
         $check_user= mysqli_query($data,$check);
         $row_count = mysqli_num_rows($check_user);

         if($row_count==1)
         {
            echo"<script type='text/javascript'>
            alert('username already exists, Try Another one');
           </script> ";
            
         }
         else
         {

         

         $sql= "INSERT INTO user (username,email,phone,usertype,password) VALUES ('$username','$useremail','$userphone','$usertype','$userpassword')";
         
         $result=mysqli_query($data,$sql);
         if($result)
         {
             echo"<script type='text/javascript'>
             alert('Data uploaded successfully');
            </script> ";
         }
         else
        {
            echo "upload failed";
        }

        }
    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <style type="text/css">
        label
        {
           display:inline-block;
           text-align: right;
           width: 100px;
           padding-top:10px;
           padding-bottom:10px; 
        }

        .div_deg
        {
          background-color:skyblue;
          width: 400px;
          padding-top: 70px;
          padding-bottom: 70px;  
        }
    </style>
    <?php
       include'admin_css.php';
    ?>
    </head>
</head>
<body>

<?php
    include 'admin_sidebar.php'
   ?>


   <div class="content">
		<center>
		<h1>Add student</h1>

		<div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>phone</label>
                    <input type="text" name="phone">
                </div>
                <div>
                    <label>email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label>password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    
                    <input type="submit" class="btn btn-primary" name="add_student" value ="add student">
                </div>
            </form>
        </div>

    </center>
	</div>


</body>
</html>