<?php
	session_start();
	require('banan_dbcon.php');
  	$queryemp = "select * from delivery_assingment";
  	$resultemp = mysql_query($queryemp);
  	$querycust = "select * from customer";
  	$resultcust = mysql_query($querycust);
?>
<html>
	<head>
		<link rel="stylesheet" href="css/jquery.dataTables.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link href="css/carousel.css" rel="stylesheet">
        <link href="css/sticky-footer.css" rel="stylesheet">
    </head>
    <body>
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
        	<div class="container">
        		<?
        			if($_SESSION['UserType']==cust){
        				echo"
        				<table  id='tbl' class='table table-hover span8' style='background-color:#39C'>
        					<thead>
          						<tr>
           	 						<th>ID</th>
            						<th>Email</th>
          						</tr>
        					</thead>
       					 	<tbody>".
       					 		while($row = mysql_fetch_array($resultcust)){ 
       					 			echo "<tr>";
       					 			echo "<td>{$row['cust_id']}</td>";
            						echo "<td>{$row['cust_email']}</td>";
       					 			echo "</tr>"
       					 	."</tbody>
        				</table>"

        			}
        			elseif ($_SESSION['UserType']==emp) {
        				echo"
        				<table  id='tbl' class='table table-hover span8' style='background-color:#39C'>
        					<thead>
          						<tr>
           	 						<th>Delivery Number</th>
            						<th>Request ID</th>
            						<th>Employee ID</th> 
          						</tr>
        					</thead>
       					 	<tbody>".
       					 		while($row = mysql_fetch_array($resultemp)){ 
       					 			echo "<tr>";
       					 			echo "<td>{$row['del_track_no']}</td>";
            						echo "<td>{$row['req_id']}</td>";
            						echo "<td>{$row['emp_id']}</td>";
       					 			echo "</tr>"
       					 	."</tbody>
        				</table>"
        			}
        			elseif ($_SESSION['UserType']==admin) {
        				# code...
        			}
        			echo"<p>Note:Dummy fields are used for now</p>"
        		?>
        	</div>  
        </div>

        
        <div id="footer">
            <div class="container">
                <p class="text-muted credit">Banan hauling prototype website</p>
            </div>
        </div>

		<script src="js/jquery.js" type="text/javascript"></script>   
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script type="text/javascript">
	  		$(document).ready(function() {
   		 		$('#tbl').dataTable( {
      		  		"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>"
   			 	} );
			} );
    	</script>
   	</body>
</html>