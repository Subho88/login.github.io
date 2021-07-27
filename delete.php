<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "destform";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
$sql = "DELETE FROM `des table` WHERE `des table`.`sl` = 10";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";
?>