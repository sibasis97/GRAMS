<?php
$p_id = $_GET['p_id'];
echo $p_id;

$conn = new mysqli("localhost", "root", "", "grams");

if ($conn->connect_error) {	
	die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['remove'])) {
$sql2 = "DELETE FROM product WHERE p_id=$p_id";

if ($conn->query($sql2) === TRUE) {
    header ("location: myads.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
}

?>