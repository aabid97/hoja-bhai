<?php
  
   session_start();
     if(!isset($_SESSION['username']))
     {
         header("location:login.php");
     }
     elseif($_SESSION['usertype']=='studeent')
     {
         header("location:login.php");
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
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
		
		<h1>Sidebar Accordion</h1>

		<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.

		<br>Click on both to understand how they differ from each other. <br>
        The accordion will push down the content, <br>
        while the dropdown lays over the content.</p>

		<input type="text" name="">


	</div>


</body>
</html>