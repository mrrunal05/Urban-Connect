<?php
    $username = $_POST['username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
//Database connection
$conn = new mysqli ("localhost", "root", "", "test");
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}else{
$stmt  = $conn->prepare("insert into user (username, Email, Password)
    values (?, ?, ?)");
$stmt->bind_param("sss",$username, $Email, $Password);
$stmt->execute();
echo "sign-in Successfully...";
$conn->close();
}
?> 