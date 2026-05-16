<?php

include("../includes/db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(fullname,email,password)
VALUES('$fullname','$email','$password')";

mysqli_query($conn,$sql);

header("Location: ../login.php");

?>