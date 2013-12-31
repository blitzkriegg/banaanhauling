<?php
session_start();
require('db_con.php');
   if(isset($_POST['Email']) && isset($_POST['Password'])){
  		$query = "select cust_id, cust_email, cust_fname from customer where
		cust_email = '$_POST[Email]' AND 
		cust_password = '$_POST[Password]' ";
		$res = mysql_query($query);

		if(mysql_num_rows($res) >= 1){
			$row = mysql_fetch_array($res);
			$_SESSION['UserID'] = $row['cust_id'];
			$_SESSION['Username'] = $row['cust_fname'];
			$_SESSION['UserType'] = "cust";
			header('Location: index.php');
		}
	}
	else{
		echo mysql_error();	
		exit;
	}
?>