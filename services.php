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
		<div class="wrap">
		<div class="center wellspan10 alert alert-info" style="height:220px;width:710px" id="servicessView">
            <h3>Order</h3>
			<form name="services" id="services">
                	<span class="position">Item<span style="margin-left:60px"></span>
                    <input type="text" class="span8" id="request">
                    <br>
                    <span class="position">Weight<span style="margin-left:43px"></span>
                    <input type="text" class="span8">
                    <br>
                	<span class="position">Pick-up point<span style="margin-left:5px"></span>
                    <input type="text" class="span8">
                    <br>
                    <span class="position">Destination<span style="margin-left:16px"></span>
                    <input type="text" class="span8">
                    <br>
                    <span class="position"><button class="btn btn-primary">Submit</button></span>
               
            </form>
        </div>
        </div>
        <hr>
        <footer style="height:40px">
            <p style="text-align: center">Copyright something blabla</p>
        </footer>
	</body>
</html>