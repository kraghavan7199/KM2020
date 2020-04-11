<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Portal</title>
	<link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shojumaru' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
	session_start();
	$name=$_POST['title'];
	$author=$_POST['authors'];
	$guide=$_POST['guide'];
	$year=$_POST['year'];
	$pl=$_POST['languages'];
	$domain=$_POST['domain'];
	$description=$_POST['description'];
	$status = isset($_POST['check']) && $_POST['check']  ? "1" : "0";
$con=mysqli_connect("localhost","root","","projects");

if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO project (name, author, guide, year, pl, domain, status,review,description) VALUES
        ('$name', '$author', '$guide', '$year', '$pl', '$domain', '$status',1,'$description')";

if (!mysqli_query($con,$sql))
{
        die('Error: ' . mysqli_error($con));
}
else
{
}
$res = mysqli_query($con,"SELECT * FROM project WHERE name='$name'");
$row = mysqli_fetch_array($res);
if ($_FILES["info"]["error"] > 0)
    {
		echo "Return Code: " . $_FILES["info"]["error"] . "<br>";
    }
	else
    {
		if (file_exists("../". "info".$row["id"].".txt"))
		{
			echo "<div id=\"already\">";
		  	echo $_FILES["info"]["name"] . " already exists. ";
		  	echo "<div>";
		}
		else
		{
		  move_uploaded_file($_FILES["info"]["tmp_name"],
		  "../"."info".$row["id"].".txt");
			echo "<div id=\"already\">Project Successfully Uploaded !</div>";
		}
    }
    if($status == "1")
    {
	    if ($_FILES["file"]["error"] > 0)
	    {
	    }
		else
	    {
			if (file_exists("../". $_FILES["file"]["name"]))
			{
				echo "<div id=\"already\">";
				echo $_FILES["file"]["name"] . " already exists. ";
				echo "<div>";
			}
			else
			{
			  move_uploaded_file($_FILES["file"]["tmp_name"],
			  "../student/". $row["id"].".zip");
			}
	    }
	}
	echo "<a href=\"student_projects.php\" id=\"back_home\">Go Back</a>"
?>
</body>
</html>