<?php
$servername = "ls-1c31f2d025ebc54e33379b49252559964309ae0e.cwaaley7zj90.us-east-2.rds.amazonaws.com";
$username = "dbmasteruser";
$password = "v*&Z[lBm-fA_]W.#f5[S=^uaDAJJ8c)t";
$dbname = "marketplace-database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
/*if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
 echo "Connected successfully";*/
?>