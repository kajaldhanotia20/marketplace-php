<?php

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

    echo "First Name: " . $row["firstname"]
          . "Last Name: " . $row["lastname"] 
          . "Address: " . $row["homeaddress"]
          . "Email: " . $row["email"]
          . "Home Phone : " . $row["homephone"]
          . "Mobile Number: " . $row["cellphone"]. "<br>";
  }
}

mysqli_close($conn);
?>
