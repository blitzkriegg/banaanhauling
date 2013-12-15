<?php
session_start();
require('db_con.php');
	   echo "{$_POST['Username']}";
	   echo "{$_POST['Password']}";
   if(isset($_POST['Username']) && isset($_POST['Password'])){

  		$query = "select emp_id, emp_uid, emp_name from employee where
		emp_uid = '$_POST[Username]' AND 
		emp_password = '$_POST[Password]' ";
		$res = mysql_query($query);

		if(mysql_num_rows($res) == 1){
			$row = mysql_fetch_array($res);
			$_SESSION['UserID'] = $row['emp_id'];
			$_SESSION['Username'] = $row['emp_name'];
			if($_SESSION['UserID'] =='admin'){
				$_SESSION['UserType'] = "admin";
			}else{
			$_SESSION['UserType'] = "emp";
		    }
			header('Location: index.php');
		}
	}
	else{
		echo mysql_error();	
		exit;
	}
?>