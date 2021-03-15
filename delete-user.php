<?php  
session_start();
include 'includes/db-config.inc.php';
if (!isset($_SESSION['username']) || (trim ($_SESSION['username']) == '')){
	header('location:login.php');
}
 ?>  

 <?php

if (isset($_SESSION["username"])) {
    $userDAO = new UserDAO($connection);
    $user = $userDAO->deleteByUsername($_SESSION["username"]);
//     $_SESSION['username'] = $_POST['username'];

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
           <br /><br />  
           <div class="container" style="width:500px;">  

           <img src="https://images.adamherbst.com/logo_1_AP.png" alt="Logo" class="center">
                <!-- <h1 align="center"><b>Welcome to Attack Plan Day Planner</b></h1> -->
          
                <?php  
                 if (isset($_SESSION["username"])) {
               //  echo '<h1 align="center"><b>Welcome to Attack Plan Day Planner</b></h1>';
                echo '<h1 align="center"> <b>Bye!- </b>'.$_SESSION["username"].'</h1>';  
        
                echo '<br>';
                }  
                    
                ?>  
        

           </div>  
      </body>  
 </html>              
 