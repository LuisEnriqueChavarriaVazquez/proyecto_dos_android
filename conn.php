<?php
$servername = "tvcpw8tpu4jvgnnq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$database = "m464d8pt1pfenzyb";
$username = "atwvohgynfc5n90d";
$password = "difz4d94clrax72n";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT id, volumen FROM volumenTable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " Volumen: " . $row["volumen"] . "<br>";
    echo "Gato";
}
} else {
echo "0 results";
}

mysqli_close($conn);
