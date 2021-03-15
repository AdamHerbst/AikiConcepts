<?php  
 session_start();  
 if (!isset($_SESSION['username']) || (trim ($_SESSION['username']) == '')){
	header('location:login.php');
}
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           
      <link rel="stylesheet" type="text/css" href="main.css">
           <title>Welcome to Attack Plan Day Planner!</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <div class="container" style="width:500px;">  
           <img src="https://images.adamherbst.com/logo_1_AP.png" alt="Logo" class="center">
                <h3 align="center"><b>"Welcome to Attack Plan Day Planner"</b></h3>
                <br>
                <h3 align="center"><b>"Thank you for registering!"</b></h3>
                <br>
            <?php 
                if (isset($_SESSION["username"])) {
                echo '<h1>Welcome - ' . $_SESSION["username"] .'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';  
                }
                ?>  
                <br />  
           </div>  
      </body>  
 </html>  