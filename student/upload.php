<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Portal</title>  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="c.css">
<link rel="stylesheet" href="b.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
function selected(cb){

	if(cb.checked == true)
		document.getElementById("tobe_hidden").style.visibility = "visible";
	else
		document.getElementById("tobe_hidden").style.visibility = "hidden";
}
</script>
</head>
<body>
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
   <h1>Upload Task Or Project</h1>
 </div>
 <div id="please">
 <form action="upload_file.php" id="upform" method="post" enctype="multipart/form-data">
	 
	 <div class="form-group">
		 <div style="text-align:center">
		 <input type="submit" onClick="upload()" value="Upload" style="font-size:1em; width: 50%;" id="upload_button"/>
		 </div>
		 </div>
		   <table class="table table-bordered" cellspacing="0">
		<tr>
			<td> Title</td>

<td>    <div class="form-group">
      <input type="text" id="project_title" name="title" placeholder="Project Title">
    </div></td>
	</tr>
	<tr>
		<td>Author</td>
    <td><div class="form-group">
      <input type="text" id="authors" name="authors" placeholder="Authors">
    </div></td>
	</tr>
	<tr>
		<td>Guide</td>
    <td><div class="form-group">
      <input type="text" id="guide" name="guide" placeholder="Guide">
    </div></td>
	</tr>
	<tr>
		<td>Year</td>
    <td><div class="form-group">
      <input type="text" id="year" name="year" placeholder="Year">
    </div></td>
	</tr>
	<tr>
		<td>Languages Used</td>
    <td><div class="form-group">
      <input type="text" id="languages" name="languages" placeholder="Languages Used">
    </div></td>
	</tr>
	<tr>
		<td>Domain</td>
    <td><div class="form-group">
      <input type="text" id="domain" name="domain" placeholder="Domain">
    </div></td>
	</tr>
	<tr>
		<td>Upload File</td>
    <td><div class="form-group">
      <input type="file" id="info" required name="info">
    </div></td>
	</tr>
  </table>
  </form>
	<div style="text-align:center">
<textarea id="desc" name="description" form="upform">Description</textarea></div>
</div>
<br>

</body>
</html>