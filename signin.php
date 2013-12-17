<html>
	<head>
		<script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js"></script>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link href="css/sticky-footer.css" rel="stylesheet">
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
        		<ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            Account
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="signin.php">Sign in</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div id="wrap">
		<div class="container text-center"  id="signinViewCust">
            <form class="form-inline" role="form" name="signincust" id="signincust">
                email<input style="margin-left:50px" type="text" /> 
                <br/><br>
                Password<input style="margin-left:20px" type="password" /> 
                <br><br>
            	<input class="btn btn-primary" type="submit" name="login" id="login" value="Login">
            </form>
        </div>

        <div class="container text-center" style="height:90px; top:20%;" id="signinViewEmp">
            <form class="form-horizontal" role="form" name="signinemp" id="signinemp">
                ID<input style="margin-left:70px" type="text" /> 
                <br/><br>
                Password<input style="margin-left:20px" type="password" /> 
                <br><br>
            	<input class="btn btn-primary" type="submit" name="login" id="login" value="Login">
            </form>
        </div>

        <div class="container text-center" id="choose">
            <h3>Sign in as</h3>
            <button class="btn btn-link" id="cost">Customer</button></span>|
            <button class="btn btn-link" id="emp">Employee</button></span>
        </div>
        </div>

        <hr>
        <div id="footer">
            <div class="container">
                <p class="text-muted credit">Banan hauling prototype website</p>
            </div>
        </div>

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