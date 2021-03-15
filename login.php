<?php
session_start();

// Include the file that configures the DB.
include 'includes/db-config.inc.php';
?>

<?php
if (isset($_POST["username"])) {
    $userDAO = new UserDAO($connection);
    $user = $userDAO->findByUsername($_POST['username']);
    $_SESSION['username'] = $_POST['username'];
    if (password_verify($_POST['password'], $user->getPassword())) {
     // Verification success! User has logged-in!
     // Create sessions, so we know the user is logged in, they basically act like 
     //cookies but remember the data on the server.
  
          // session_regenerate_id();
          
          header("location:welcome.php");
     
}
     // else {
     //      echo 'incorrect username/password';
     // echo 'Welcome ' . $_SESSION['username'] . '!';
}
//  else {
//      // Incorrect password
//      echo 'Incorrect username and/or password!';
// }
//     echo $user->getUsername() . ' ' . $user->getEmail();


 
?>

<!DOCTYPE html>  
 <html>  
      <head>  
      <link rel="stylesheet" type="text/css" href="main.css">
           <title>Attack Plan Day Planner</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;" id="content">  

           <img src="https://images.adamherbst.com/logo_1_AP.png" alt="Logo" class="center">

               <br>
           

                <h3 align="center"><b>Login to Attack Plan and start planning your days the smart way!</h3>  
                </b><br/>  
                <?php  
                if(isset($_GET["action"]) == "login")  
                 
                ?>  
                <h3 align="center">Login</h3>  
                <br />  
               
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="register.php">Register</a></p>  
                </form>  
               
            
           </div>  
      </body>  
 </html>  