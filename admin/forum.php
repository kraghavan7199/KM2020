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
echo '
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
     <table class="table table-bordered" cellspacing="0">
    ';
$file = fopen("../student/lol.txt","r");
while(!feof($file))
{
  echo "<div id=\"card\">";
echo "<tr>";
echo "<td>";
echo "<div id=\"card-body\">";
  echo fgets($file);
    echo "</div>";
  echo "</td>";
  echo "</tr>";
    echo "</div>";
}
echo "</table>";
$us = $_SESSION['name'];
echo ' 
<form action="add.php" method="POST">
  <table class="table table-bordered" cellspacing="0">
    <tr>
      <td>
      <div style="text-align:center">
      <textarea name="content">
      </textarea>
      </div>
      <td>
    </tr>
    <tr>
      <td>
      <div style="text-align:center">
      <input type="submit" name="submit" value="Submit">
      </div>
    </td>
    </tr>
    <input type="hidden" name="pls" value='.$us.'>
  </table>
</form>';
?>
  </body>
  </html>