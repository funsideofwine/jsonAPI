<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$first_name = $obj->first_name;
$table =  $obj->table;
//echo $obj->limit;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_maagap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM $table WHERE first_name like '%rolly%' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "member no: " . $row["member_no"]. " - firstname: " . $row["first_name"]. " lastname" . $row["last_name"]. "<br>";
		echo json_encode($row);
    }
} else {
    echo "0 results";
}

$conn->close();
?>
