<?php
session_start();
?>
<html>
	<head>
		<script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js"></script>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link href="css/carousel.css" rel="stylesheet">
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
		<div class="navbar navbar-inverse navbar-static-top" >
            <div class="container">
             	<a class="navbar-brand" href="index.php">Banaan Hauling Services</a>
             	<ul class="nav navbar-nav">
       	 			<li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Contact us</a></li>
   				</ul>
                <?php
                        if(isset($_SESSION['UserID']) && isset($_SESSION['Username'])){
                             echo "<ul class='nav pull-right'>
                                        <li class='dropdown'>
                                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Welcome {$_SESSION['Username']}!
                                                <span class='caret'></span>
                                             </a>
                                             <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
                                                <li><a href='#'>Settings</a></li>
                                                <li><a href='logout.php'>Logout</a></li>
                                             </ul>
                                        </li>
                                  </ul>";                                           
                         }
                         else{
                            echo "<ul class='nav pull-right'>
                                        <li class='dropdown'>
                                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
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

       <!-- Carousel
    ================================================== -->
        <div id="myCarousel" class="carousel slide" style="top: -21px;" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Banan Hauling</h1>
                            <p>Do you have an account?</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Banan Hauling</h1>
                            <p>Need to learn more about our company?</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Use our system to its maximum potential</h1>
                            <p>Already have an account?</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
        </div><!-- /.carousel -->
        
        <div class="container"><!-- headings/news coloums -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>
        </div> <!-- /container -->   

        <hr>
        <footer style="height:40px">
            <p style="text-align: center">Copyright something blabla</p>
        </footer>


        <script type="text/javascript">
            $(window).load(function(){

               
            });
        </script>
	</body>
</html>