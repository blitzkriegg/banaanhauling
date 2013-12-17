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
		<div class="container text-center" style="height:220px;width:710px" id="servicessView">
            <h3>Order</h3>
			<form name="services" id="services">
                	<span class="position">Item<span style="margin-left:75px"></span>
                    <input type="text" class="span8" id="request">
                    <br><br>
                    <span class="position">Weight<span style="margin-left:58px"></span>
                    <input type="text" class="span8">
                    <br><br>
                	<span class="position">Pick-up point<span style="margin-left:20px"></span>
                    <input type="text" class="span8">
                    <br><br>
                    <span class="position">Destination<span style="margin-left:31px"></span>
                    <input type="text" class="span8">
                    <br><br>
                    <span class="position"><button class="btn btn-primary">Submit</button></span>
            </form>
        </div>
        </div>
        <hr>
        
        <div id="footer">
            <div class="container">
                <p class="text-muted credit">Banan hauling prototype website</p>
            </div>
        </div>
	</body>
</html>