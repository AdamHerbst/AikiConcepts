
<?php
// Set error reporting ON to help with debugging
error_reporting(E_ALL);
ini_set('display_errors','1');


// You may need to change these for your own environment
define('DBCONNECTION', 'mysql:host=localhost;dbname=dayplanner');
define('DBUSER', 'root'); // This is your MySQL username
define('DBPASS', ''); // This is your MySQL password
// 'localhost', 'herbpvzf_Adam', 'superman2021', 'herbpvzf_dayplanner', 3306

// Auto load all classes (files with the extension *.class.php) 
// so we don't have to explicitly include them
spl_autoload_register(function ($class) {
    $file = 'lib/' . $class . '.class.php';
    if (file_exists($file)) 
      include $file;
});

// Connect to the database

$connection = DatabaseHelper::createConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));

// We can then pass this connection variable to other classes that need it
?>
