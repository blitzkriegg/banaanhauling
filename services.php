<?php
session_start();
require('banan_dbcon.php');
    if(isset($_SESSION['UserID']) && isset($_SESSION['Username'])){
        if(isset($_POST['req_item']) && isset($_POST['req_pick_up']) && isset($_POST['req_drop_off']) && isset($_POST['req_weight']))
        {
            $q = "insert into request (req_item,req_pick_up,req_drop_off,req_total_weight,cust_id) values"
            ."('{$_POST['req_item']}','{$_POST['req_pick_up']}',"
            ."'{$_POST['req_drop_off']}','{$_POST['req_weight']}',"
            ."'{$_SESSION['UserID']}')"; 
            $res = mysql_query($q) or die(mysql_error());
          //  if()
        }
    }else
    {
        echo "You must be logged in to use this function.";
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
            <div class="container center" id="servicessView">
                <h3>Order</h3>
    		    <form class="form-horizontal" name="services" id="services" action="services.php" method="post">
                    Item<br>
                    <input type="text" class="col-sm-12" name="req_item" required>
                    <br><br>
					
                    Weight<br>
                    <input type="text" class="col-sm-12" name="req_weight" required>
                    <br><br>
					
                    Pick-up point<br>
                    <input type="text" class="col-sm-12" name="req_pick_up" required>
                    <br><br>
					
                    Destination<br>
                    <input type="text" class="col-sm-12" name="req_drop_off" required>
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
	</body>
</html>