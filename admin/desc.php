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
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
       <div class="collapse navbar-collapse" id="navbarCollapse2">
           <div class="navbar-nav">
               <a href="student_projects.php" class="nav-item nav-link active">Projects</a>
               <a href="manageuser.php" class="nav-item nav-link">Manage Users</a>
               <a href="#" class="nav-item nav-link">Upload</a>
               <a href="forum.php" class="nav-item nav-link">Forum</a>
               <a href="../logout.php" class="nav-item nav-link">Sign Out</a>
           </div>
       </div>
   </nav>
     <?php
     session_start();
     $id = $_GET['id'];
     $con=mysqli_connect("localhost","root","","projects");
     if (mysqli_connect_errno($con))
     {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
     $result = mysqli_query($con,"SELECT * FROM project WHERE id=$id");
     $row = mysqli_fetch_array($result);
     echo "<table class=\"table table-bordered\" cellspacing=\"0\">";
     echo "<tr><td id=\"test_col1\">";
     echo "<span id=\"proj_name\">Project Name</span>";
     echo "</td><td id=\"test_col2\">";
     echo "<span id=\"proj_name_value\">".$row['Name']."</span>";
     echo "</td></tr>";
     echo "<tr><td id=\"test_col1\">";
     echo "<span id=\"proj_author\">Author</span>";
     echo "</td><td id=\"test_col2\">";
     echo "<span id=\"proj_author_value\">".$row['author']."</span>";
     echo "</td></tr>";
     echo "<tr><td id=\"test_col1\">";
     echo "<span id=\"proj_guide\">Guided By</span>";
     echo "</td><td id=\"test_col2\">";
     echo "<span id=\"proj_guide_value\">"."Prof. ".$row['guide']."</span>";
     echo "</td></tr>";
     echo "<tr><td id=\"test_col_abstract1\">";
     echo "<span id=\"proj_abstract\">Description</span>";
     echo "</td><td id=\"test_col_abstract2\">";
     echo "<span id=\"proj_abstract_value\">".$row['description']."</span>";
     echo "</td></tr>";
     echo "<tr><td id=\"test_col1\">";
     echo "<span id=\"proj_year\">Year</span>";
     echo "</td><td id=\"test_col2\">";
     echo "<span id=\"proj_year_value\">".$row['year']."</span>";
     echo "</td></tr>";
     echo "<tr><td id=\"test_col1\">";
     echo "<span id=\"proj_lang\">Programming Language</span>";
     echo "</td><td id=\"test_col2\">";
     echo "<span id=\"proj_lang_value\">".$row['PL']."</span>";
     echo "</td></tr>";
     echo "<tr><td id=\"test_col1\">";
     echo "<span id=\"proj_domain\">Domain</span>";
     echo "</td><td id=\"test_col2\">";
     echo "<span id=\"proj_domain_value\">".$row['domain']."</span>";
     echo "</td></tr>";
     $lol = "info".$id.".txt";
     echo "<tr><td id=\"test_col1\">";
     echo "<p><a href=\"download.php?file=" . urlencode($lol) . "\">Download</a></p>";
     echo "</td>";
     echo "</tr>";
     echo "</table>";
     echo "<br>";echo "<br>";
     ?>
 </body>
 </html>