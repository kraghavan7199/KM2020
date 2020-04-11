
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Portal</title>  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="c.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
</head>
<body >
<?php
session_start();
if ($_SESSION['is_logged_in'] == 0 )
{
    header("Location:index.html");
    die();
}
echo '
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
     <div class="collapse navbar-collapse" id="navbarCollapse2">
         <div class="navbar-nav">
             <a href="student_projects.php" class="nav-item nav-link active">Projects</a>
             <a href="upload.php" class="nav-item nav-link">Upload</a>
             <a href="forum.php" class="nav-item nav-link">Forum</a>
             <a href="../logout.php" class="nav-item nav-link">Sign Out</a>

         </div>
     </div>
 </nav>
 <div class="jumbotron text-center">
   <h1>All Projects</h1>
 </div>
    <div>';
    $con=mysqli_connect("localhost","root","","projects");
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM project WHERE review='1'");
if (mysqli_error($con))
{
   die(mysqli_error($con));
}
$i = 1;
while(($row = mysqli_fetch_array($result)) && ($i<4) )
{
  $name = $row['Name'];
  $desc = $row['description'];
  $path = "desc.php?id=".$row['id']."";
  $id = $row['id'];
  echo "<div class=\"card\">";
  echo "<a href=$path>$name</a';>";
  echo "<br />";
  $file=fopen("../info".$id.".txt","r") or exit("Unable to open file!");
  echo "<div class=\"card-body\" >";
  echo $desc. "<br>";
  $lol = "info".$id.".txt";
  echo '<p><a href="download.php?file=' . urlencode($lol) . '">Download</a></p>';
  echo "</div>";
  echo "</div>";

  $i = $i + 1;
  echo "<br />";
}
mysqli_close($con);

    echo '</div>
  </div>';
?>
</div>
</body>
</html>
