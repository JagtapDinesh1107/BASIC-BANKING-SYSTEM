<?php 
// Connecting to the Database
$server= "localhost";
$username="root";
$password= "";
$db="piggy_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
