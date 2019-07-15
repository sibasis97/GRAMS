<?php include('server.php');?>
<?php
$conn = new mysqli("localhost", "root", "", "grams");

if ($conn->connect_error) {	
	die("Connection failed: " . $conn->connect_error);
}
$name;
$cat;
$title = $_POST['title'];
$desp = $_POST['desp'];
$price = $_POST['price'];
$cat_name = $_POST['cat'];
$dt = date("d-m-Y")." ".date("l");
if(isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if(isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
}


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img1"]["name"]);

    echo $target_file;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$sql = "SELECT cat_id FROM category WHERE cat_name='$cat_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $cat = $row['cat_id'];
    }
}

$email = $_SESSION["email"];
$sql = "SELECT * from user where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
    }
}

if(isset($_POST['submit'])) {
    if (move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["img1"]["name"]);

    $sql = "INSERT INTO product (title, desp, price, cat, dt, name, img1) values('$title' ,'$desp' ,$price ,$cat, curdate(), '$name','$image')";
    if($conn->query($sql))   {
        echo "done";
        header('location: myads.php');
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>