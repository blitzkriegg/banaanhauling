<?php
session_start();
if(isset($_SESSION['UserID']) && isset($_SESSION['Username'])){
    header("Location:profile.php");
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

        <div class="wrap">  <!--Body-->
            <div class="center well span4 alert alert-info" style="height:90px; top:20%;" id="signinViewCust">
                <form name="signincust" id="signincust" action="customerLogin.php" method="post">
                    email<input style="margin-left:28px" name="Email" type="text" style="padding-right:60px"/> <br/>
                    Password<input type="password" name="Password" /> 
                    <br>
                    <input class="btn btn-primary" type="submit" name="login" id="login" value="Login">
                </form>
            </div>

            <div class="center well span4 alert alert-info" style="height:90px; top:20%;" id="signinViewEmp">
                <form name="signinemp" id="signinemp" action="employeeLogin.php" method="post">
                    ID<span style="margin-left:48px"></span><input  name="Username" type="text" style="padding-right:60px"/> <br/>
                    Password<input type="password" name="Password"/> 
                    <br>
                    <input class="btn btn-primary" type="submit" name="login" id="login" value="Login">
                </form>
            </div>

            <div class="center well span3 text-center alert alert-info" id="choose">
                <h3>Sign in as</h3>
                <button class="btn btn-link" id="cost">Customer</button></span>|
                <button class="btn btn-link" id="emp">Employee</button></span>
            </div>
        </div>
		


        <hr>
        <div id="footer">
            <div class="container">
                <p class="text-center text-muted credit">Banan hauling prototype website</p>
            </div>
        </div>
		
		<script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js"></script>
		<script type="text/javascript">
            $(window).load(function(){

   
                $("#signinViewCust").hide();
                $("#signinViewEmp").hide();

              

                $("#cost").click(function(){
                    $("#signinViewCust").fadeIn();
                    $("#servicessView").hide();
                    $("#registersView").hide();
                    $("#choose").hide();
                    $("#signinViewEmp").hide();
                });

                $("#emp").click(function(){
                    $("#signinViewEmp").fadeIn();
                    $("#servicessView").hide();
                    $("#registersView").hide();
                    $("#choose").hide();
                    $("#signinViewCust").hide();
                });
            });
        </script>
	</body>
</html>