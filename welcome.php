<?php  
session_start();
include 'includes/db-config.inc.php';
// if (!isset($_SESSION['username']) || (trim ($_SESSION['username']) == '')){
// 	header('location:login.php');

 ?>  

<?php
if (isset($_POST["username"])) {
$user = new User($_SESSION["username"]);
$user->setTitle($_POST["memName"]);
$user->setDesc($_POST["eventDesc"]);
$user->setHappens($_POST["dateHappens"]);
$userDAO->createUser($user);
// $_SESSION['username'] = $_POST['username'];
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
          
                    <br>
                    <br>
                    <br>
                    <form method="post">  
                     <label><h3>Name your upcoming event</h3></label>  
                     <input type="text" name="memName" class="form-control" placeholder="Event name">  
                     <br />  
                     <label><h3>Describe event</h3></label>  
                     <p>
                    <label>Give details about this event:</label>
                    <textarea placeholder="Describe your event." id="eventDesc" name="eventDesc" rows="20" cols="80"  style="background:white; color:black;"> </textarea>
                    </p>
                     <br />  
                     <label>When will this occur?</label>
                     <input type="date" id="dateHappens" name="dateHappens" style="background:white; color:black;" >
                     <input type="submit" name="Submit" value="Submit" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="register.php">Register</a></p>  
                </form>  

                <?php  
                 if (isset($_SESSION["username"])) {
               //  echo '<h1 align="center"><b>Welcome to Attack Plan Day Planner</b></h1>';
                echo '<h1 align="center"> <b>Welcome to Attack Plan Day Planner - </b>'.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php" style="font-size:20px;">Logout</a></label>';
                echo '<br>';
  }  
                    
                ?>  
                <a href="delete-user.php" style="font-size:20px;" onclick="return confirm('Are you sure you want to delete your account?')">Delete Account</a>

           </div>  
      </body>  
 </html>              
 