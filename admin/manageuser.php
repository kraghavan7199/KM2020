<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Portal</title>  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="s.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
       <div class="collapse navbar-collapse" id="navbarCollapse2">
           <div class="navbar-nav">
               <a href="project.php" class="nav-item nav-link active">Projects</a>
               <a href="manageuser.php" class="nav-item nav-link">Manage Users</a>
               <a href="upload.php" class="nav-item nav-link">Upload</a>
               <a href="forum.php" class="nav-item nav-link">Forum</a>
               <a href="../logout.php" class="nav-item nav-link">Sign Out</a>
           </div>
       </div>
   </nav>
   <div class="jumbotron text-center">
     <h1>Delete Users</h1>
   </div>
   <?php
session_start();
$con=mysqli_connect("localhost","root","","projects");
if (mysqli_connect_errno($con))
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM users WHERE usertype='user'");
if (mysqli_error($con))
{
 die(mysqli_error($con));
}
echo "<div id=\"manage_users_table_container\">";
echo "<table class=\"table table-bordered\" cellspacing=\"0\">";
echo "<tr id=\"manage_users_table_heading\">";
echo "<th>Name</th>";
echo "<th>USN</th>";
echo "<th>Email-ID</th>";
echo "<th></th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
$usn = $row['usn'];
$email = $row['email'];
$phone = $row['phone'];
$name = $row['name'];
echo "<tr>";
  echo "<td id=\"manage_users_name\">";
    echo $name;
  echo "</td>";
  echo "<td id=\"manage_users_usn\">";
    echo $usn;
  echo "</td>";
  echo "<td id=\"manage_users_email\">";
    echo $email;
  echo "</td>";
  echo "<td>";
    $del = 'delete_user.php?usn='.$usn;
    echo "<a href=$del><input type=\"button\" value=\"Delete\" id=\"manage_users_delete\"></a>";
  echo "</td>";
echo "</tr>";
}
echo "</table>";
echo "</div>";
mysqli_close($con);
?>
  </div>
</div>
 </body>
 </html>