<?php

$servername = "ls-1c31f2d025ebc54e33379b49252559964309ae0e.cwaaley7zj90.us-east-2.rds.amazonaws.com";
$username = "dbmasteruser";
$password = "v*&Z[lBm-fA_]W.#f5[S=^uaDAJJ8c)t";
$dbname = "dbmaster";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
        die("Connection failed: \r\n" . $conn->connect_error);
    } 
 echo "Connected successfully \r\n";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo 
"<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Email</th>
<th>Home Phone Number</th>
<th>Mobile Number</th>
</tr>";

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc())
  {

    echo "First Name: " . $row["firstname \r\n"]
          . "Last Name: " . $row["lastname \r\n"] 
          . "Address: " . $row["homeaddress \r\n"]
          . "Email: " . $row["email \r\n"]
          . "Home Phone : " . $row["homephone \r\n"]
          . "Mobile Number: " . $row["cellphone \r\n"]. "<br>";
  }
}

mysqli_close($conn);
?>
