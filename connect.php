 <!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "go4shop";
$log = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
     // output data of each row
     while($row = $result->fetch_assoc()) 
     {
         if($row["username"]==$_POST["username"] && $row["password"]==$_POST["password"] ) 
         {
         	header('Location:product.html');
         	$log = 1;
         }
	  }  
	  if(log == 0) 
	  {
               echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong Password/Username!!!')
        window.location.href='login.html'
        </SCRIPT>");
     }
}
else {
     header('Location:register.html');
}

$conn->close();
?> 

</body>
</html>
