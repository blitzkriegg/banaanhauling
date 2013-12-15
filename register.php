<?php
session_start();
require('db_con.php');
if(isset($_POST['']))
?>
<html>
	<head>
		<script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js"></script>
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
		<div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
             	<a class="navbar-brand" href="index.php">Banaan Hauling Services</a>
             	<ul class="nav navbar-nav">
       	 			<li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Contact us</a></li>
   				</ul>
        		<?php
                        if(isset($_SESSION['UserID']) && isset($_SESSION['Username'])){
                             header('Location:index.php');                                           
                         }else{
                            echo "<ul class='nav pull-right'>
                                        <li class='dropdown'>
                                            <a href='' class='dropdown-toggle' data-toggle='dropdown'>
                                                Account
                                                <span class='caret'></span>
                                             </a>
                                    <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
                                        <li><a href='signin.php'>Sign in</a></li>
                                        <li><a href='register.php'>Register</a></li>
                                     </ul>
                                        </li>
                                  </ul>";
                         }
                     ?>
            </div>
        </div>
		<div class="center well span11 alert alert-info" style="width:745px;height:420px" id="wrap">
            <form name="register" id="register" action="register.php" method="post">
				<h3>Personal Information</h3>
				FirstName<span style="margin-left:48px">
				<input type="text" name="fname" class="span6">
				<br>
				MiddleName<span style="margin-left:35px">
				<input type="text" name="mname" class="span6">
				<br>
				LastName<span style="margin-left:49px">
				<input type="text" name="lname" class="span6">
				<br>
				Birthday<span style="margin-left:60px">
				<input type="text" name="bday" class="span6">
				<br>
				Address<span style="margin-left:60px">
				<input type="text" name="addr"class="span6">
				<h3 class="subindex">Account Information</h3>
				
				Email<span style="margin-left:79px">
				<input type="text" name="email" class="span6">
				<br>
				
				Password<span style="margin-left:53px">
				<input type="password" name="password" id="pass1" class="span6">
				<br>
				Confirm Password				
				<input type="password" id="pass2" onkeyup="checkPass(); return false;" class="span6"><span id="confirmMessage" class="confirmMessage"></span>
				<br>
				<span class="position"><button class="btn btn-primary">Submit</button></span>
				</form>
        </div>
        <hr>
        <footer style="height:40px">
            <p style="text-align: center">Copyright something blabla</p>
        </footer>
	</body>
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
</html>