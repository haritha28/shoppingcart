<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "go4shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 //create a variable
$name=$_POST['name'];
$lusername=$_POST['username'];
$lpassword=$_POST['password'];
/*$re_password=$_POST['repassword'];*/
$email=$_POST['email'];
$phone=$_POST['phone'];


$sql="INSERT INTO admin(name,username,password,email,phone) VALUES ('$name ', '$lusername ', ' $lpassword ',' $email ',' $phone ')";
if (mysqli_query($conn, $sql)) {
                   echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Registration Sucessfull!!!')
        window.location.href='login.html'
        </SCRIPT>");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 