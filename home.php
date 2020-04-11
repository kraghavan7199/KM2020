<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Student Project Management System</title>
<link href="a.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="a.js"></script>
<script type="text/javascript">

function validate(){

	username = document.getElementById("username");
	pass = document.getElementById("pass");

	if(username.value == null || pass.value == null || username.value == "" || pass.value == ""){

		document.getElementById("required_text").style.visibility="visible";
		return false;
	}else
		return true;

}
</script>
<script type="text/javascript">

function validate_pass(){

	pass = document.getElementById("pass");
	cpass = document.getElementById("confirm_pass");

	if(pass.value != cpass.value){

		document.getElementById("not_matching").style.visibility = "visible";
		document.getElementById("pass").focus();
	}else{

		document.getElementById("not_matching").style.visibility = "hidden";
	}
}


function clicked(){

	username = document.getElementById("username");
	pass = document.getElementById("pass");
	confirm_pass = document.getElementById("confirm_pass");
	phone = document.getElementById("phone");
	usn = document.getElementById("usn");

	if(username.value != null && username.value != "" && usn.value != null && usn.value != "" && pass.value != null && pass.value != "" &&
	confirm_pass != null && confirm_pass != "" && email.value != null && email.value != "" && phone.value != null && phone.value != "" ){

		if(pass.value == confirm_pass.value){

			document.signup_form.submit();

		}else{

			document.getElementById("matching").style.visibility = "visible";
		}
	}
	else{

		document.getElementById("required_text").style.visibility = "visible";
	}
}

</script>
</head>
<body>
  <?php
  session_start();
  ?>
  <nav class="navbar navbar-default navbar-fixed-top bg-primary">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a>
			</div>

		</div>
	</nav>
  <div class="jumbotron text-center">
		<h1>Student Project Management System</h1>
		<p>Login Or Register To Access</p>
	</div>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id ="login-form" name="login_form" action="login.php" method="post" onsubmit="return validate()" style="display: block;">
									<div class="form-group">
										<input type="text" id="username" name="name" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" id="pass" name="pass"" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" id="btn" value="Login" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="newuser.php" name="signup_form" method="POST"style="display: none;">
									<div class="form-group">
										<input type="text" placeholder="Name" id="username" name="name" tabindex="1" class="form-control" >
									</div>
									<div class="form-group">
										<input input type="text" placeholder="USN(Max 10 Characters)" maxlength="10" id="usn" name="usn" tabindex="1" class="form-control">
									</div>
									<div class="form-group">
										<input type="password" placeholder="Max 30 Characters" maxlength="30" id="pass" name="pass" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" placeholder="Confirm Password Max 30 Characters"
            					maxlength="30" onblur="validate_pass()" id="confirm_pass" name="cpass" tabindex="2" class="form-control">
									</div>
                  <div class="form-group">
										<input type="text" placeholder="name@example.com" id="email" name="email" tabindex="2" class="form-control">
									</div>
                  <div class="form-group">
										<input  type="date" id="dob" name="dob" tabindex="2" class="form-control">
									</div>
                  <div class="form-group">
                    <input type="text" id="phone" name="phone" placeholder="+91" tabindex="2" class="form-control">
                  </div>
									<div class="form-group">
                    <input type="text" id="typ" name="user" placeholder="user or admin" tabindex="2" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Select Gender </label>
                    <select name="gender" id="gender">
          						<option disabled="disabled" selected="selected">Select</option>
          						<option>Male</option>
          						<option>Female</option>
          					</select>
                  </div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
