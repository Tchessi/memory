<?php
$servername = "localhost";
$database = "oclock";
$username = "root";
$password = "Tchessivi17My198SQL*";
// Create  connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
// echo "Connected successfully";
 
// $sql = "INSERT INTO score (id, fullname, email, score, appid) VALUES (DEFAULT, 'John', 'john@example.com', 95, 'memory-game')";
// if (mysqli_query($conn, $sql)) {
//       echo "New record created successfully";
// } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);
?>
