
<?php
// setting connection variables
$server = "localhost";
$username ="root";
$password = "";
$database = "trip";

// creating a database connection
$con = mysqli_connect($server ,$username ,$password, $database);

// check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//  echo "success connecting to the db";

// deleting 
$sno = $_GET['sno'];
$q = " DELETE FROM `trip` WHERE sno = $sno ";
mysqli_query($con, $q);
header('location:fetch.php');
?>