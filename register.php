<?php
session_start();
require('banan_dbcon.php');
    if(isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['addr']) && isset($_POST['email']) && isset($_POST['password']))
    {
    	$check = "select cust_id,cust_email from customer where
		cust_email = '{$_POST['email']}'";
		$r = mysql_query($check);
		if($r){
	        $q = "insert into customer (cust_email,cust_password,cust_fname,cust_mname, cust_lname, cust_address) values"
	    	."('{$_POST['email']}','{".md5($_POST['password'])."}',"
	    	."'{$_POST['fname']}','{$_POST['mname']}',"
			."'{$_POST['lname']}','{$_POST['addr']}')";	
			$res = mysql_query($q) or die(mysql_error());

			if($res){
				//echo "<form action='customerLogin.php' method='post'>
				//			<input type='hidden' name='Email' value='{$_POST['email']}' />
				//		<input type='hidden' name='Password' value='{$_POST['password']}' />
				//	  <\form>";
			}
		}
	}
?>
<html>
	<head>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link href="css/sticky-footer.css" rel="stylesheet">
		<style>
			.center {
     			float: none;
     			margin-left: auto;
     			margin-right: auto;
     			margin-top: 100;
     		}
		</style>
	</head>

	<body background="">
		<div class="navbar navbar-inverse navbar-fixed-top" >    <!--Header-->
            <div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Banaan Hauling Services</a>
				</div>
				<nav class="navbar-collapse collapse" role="navigation">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php
							if(isset($_SESSION['UserID']) && isset($_SESSION['Username'])){
								echo "
										<li class='dropdown'>
											<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Welcome {$_SESSION['Username']}!
												<span class='caret'></span>
											</a>
											<ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
												<li><a href='profile.php'>Profile</a></li>
												<li><a href='#'>Settings</a></li>
												<li><a href='logout.php'>Logout</a></li>
											</ul>
										</li>
									  ";                                           
							}
							else{
								echo "
										<li><a href='register.php'>Register</a></li>
										<li><a href='signin.php'>Sign In</a></li>						
									 ";
							}
						?>
					</ul>
				</nav>
            </div>
        </div>

        <div class="wrap">	<!--Body-->
			<div class="container center">
            	<form class="form-horizontal" name="register" id="register" action="register.php" method="post">
					<h3>Personal Information</h3>
					FirstName<br>
					<input type="text" name="fname" class="col-sm-6" required>
					<br><br>

					MiddleName<br>
					<input type="text" name="mname" class="col-sm-6" required>
					<br><br>

					LastName<br>
					<input type="text" name="lname" class="col-sm-6" required>
					<br><br>

					Birthday<br>
					<input type="text" name="bday" class="col-sm-6" required>
					<br><br>
					
					Address<br>
					<input type="text" name="addr"class="col-sm-12" required>
					<br><br>
					
					<h3 class="subindex">Account Information</h3>
					
					Email<br>
					<input type="text" name="email" class="col-sm-6" required>
					<br><br>
				
					Password<br>
					<input type="password" name="password" id="pass1" class="col-sm-6" required>
					<br><br>

					Confirm Password<br>				
					<input type="password" id="pass2" onkeyup="checkPass(); return false;" class="col-sm-6"><span id="confirmMessage" class="confirmMessage">
					<br><br>

					<button class="btn btn-primary">Submit</button>
				</form>
        	</div>
        </div>

        
        <div id="footer">
            <div class="container">
                <p class="text-center text-muted credit">Banan hauling prototype website</p>
            </div>
        </div>
		
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript">
			function checkPass()
			{
				var pass1 = document.getElementById('pass1');
				var pass2 = document.getElementById('pass2');
				var message = document.getElementById('confirmMessage');
				var goodColor = "#66cc66";
				var badColor = "#ff6666";
				if(pass1.value == pass2.value){
					//pass2.style.backgroundColor = goodColor;
					message.style.color = goodColor;
					message.innerHTML = "Passwords Match!"
				}else{
					//pass2.style.backgroundColor = badColor;
					message.style.color = badColor;
					message.innerHTML = "Passwords Do Not Match!"
				}
			}
		</script>  
	</body>
</html>