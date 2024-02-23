<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lepoint";
// $date_poste = date(" h:i:s"); 
$date_poste = date('Y/m/d'); 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
  
} else {
//   echo "ok";
}

?>