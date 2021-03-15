<?php  
//On pushing "log out" the session is ended and client in redirected to login page
 session_start();  
 session_destroy();  
//  header("location:index.php?action=login");  
 ?>  

<?php  
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
                <h3 align="center"><b>You have been logged out!</b></h3>
                <br>
                <br>
                <h2 align="center"><b>Log back in</b></h2>
                <p align="center"><a href="login.php">Login</a></p>  
           </div>  
      </body>  
 </html>  