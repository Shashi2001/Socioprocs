<?php
define('DBSERVER', 'localhost'); // database server 
define('DBUSERNAME', 'root'); // database username 
define('DBPASSWORD', ''); //database password
define('DBNAME', 'demo'); // database name 

/* connect to mysql database*/

$db = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

//check db connection 

if($db === false){
     die("Error: connection error. " . mysqli_connect_error());
}

?>