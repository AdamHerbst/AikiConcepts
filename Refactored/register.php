<?php
// Include the file that configures the DB.
include 'includes/db-config.inc.php';
?>

<?php
session_start();
if (isset($_POST["username"])) {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email");
        }
        if (!empty($_POST["username"]) && (!empty($_POST["password"])) && (!empty($_POST["email"]))) {
                $userDAO = new UserDAO($connection);
                if (strlen($_POST['password']) < 5) {
                        die("Passwords must be 5 characters or longer");
                } else {
                        $user = new User($_POST["username"]);
                        $user->setPassword($_POST["password"]);
                        $user->setEmail($_POST["email"]);
                        $userDAO->createUser($user);
                        $_SESSION['username'] = $_POST['username'];
                        header("location:reg-success.php");
                }
        } else {
                die("All Fields are required");
        }
}
//This should be in UserDAO?
function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
}
?>
<!DOCTYPE html>  
 <html>  
      <head>  
      <link rel="stylesheet" type="text/css" href="main.css">

           <title>Attack Plan Day Planner</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
           <img src="https://images.adamherbst.com/logo_1_AP.png" alt="Logo" class="center">
                <h3 align="center"><b>Login to Attack Plan and start planning your days the smart way!</h3>  
                </b><br/>  
              
                <h3 align="center">Register</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control" />  
                        <label>Enter Email</label>
                        <input type="text" name="email" class="form-control">
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="login.php?action=login">Login</a></p>  

                     <br>
                     <!-- <div class="g-recaptcha" data-sitekey="6Le5QXMaAAAAAPEX95aPe8vbRLUOb2xVCJWjEaNv"></div> -->
                </form>  
                <?php
?>  
           </div>  
      </body>  
 </html>  
