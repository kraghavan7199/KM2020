<html>

<head>	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

<?php
$usn = $_POST['usn'];
$name = $_POST['name'];
$email = $_POST['email'];
$passwd = md5($_POST['pass']);
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$gender = (string)$gender;
$user =$_POST['user'];
$g = 1;
if (strcmp($gender,"Male"))
{
	$g = 0;
}

$con=mysqli_connect("localhost","root","","projects");

if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users WHERE usn='$usn'");

if (mysqli_error($con))
{
   die(mysqli_error($con));
}

if(mysqli_num_rows($result) == 1)
{
  	echo 	"<div class=\"jumbotron text-center\">";
  	echo "<h1>User ".$usn." already exists</h1>";
  	echo "<p><a href=\"home.php\" id=\"back\">Go back</a><p>";
    echo "</div>"
}
else
{

	$sql="INSERT INTO users (usn, passwd, email, usertype, DOB, gender, phone, name) VALUES
	('$usn', '$passwd', '$email', '$user', '$dob', '$g', '$phone', '$name')";

	if (!mysqli_query($con,$sql))
	{
	  die('Error: ' . mysqli_error($con));
	}

  echo 	"<div class=\"jumbotron text-center\">";
	echo "<h1>Your account has been created<br>Username : ".$usn."</h1><br>";
	echo "<p><a href=\"home.php\" id=\"login_link\">Login here</a></p>";
  echo "</div>"
}

mysqli_close($con);
?>

</body>

</html>
