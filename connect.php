<?php
header('location:index.php?Thank You for joining');
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// post datas into database 

mysqli_select_db($conn,'cachom');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$reg =" insert into contact(name , email , phone , address) values('$name' , '$email' , '$phone' , '$address')";
$query = mysqli_query($conn, $reg);
?>