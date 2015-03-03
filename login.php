<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('koneksi_db.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = $_POST['password'];
	$status   = clean($_POST['status']);
	
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	if($status=='pakar'){
		$qry="SELECT * FROM data_pakar WHERE username='$username' AND password='".md5($_POST['password'])."'";
		$result=mysql_query($qry);
		}
		else {
		  $qry="SELECT * FROM data_user WHERE username='$username' AND password='".md5($_POST['password'])."'";
		  $result=mysql_query($qry);;
		}
		
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			if ($status=='pakar'){
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_USERNAME'] = $member['username'];
				$_SESSION['SESS_PASSWORD'] = $member['password'];
				session_write_close();
				header("location: pakar_index.php");
				exit();
				}
			else {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_USERNAME'] = $member['username'];
				$_SESSION['SESS_PASSWORD'] = $member['password'];
				session_write_close();
				header("location: user_index.php");
				exit();
				}
			
		} 
		
		else {
			if ($status=='pakar'){
				//Login failed
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=gagal_login2\">";
			exit();
				}
			else {
				//Login failed
			echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=gagal_login\">";
			exit();
				}
			
		}
		
	}else {
		die("Query failed");
	}
	$act=$_GET['act'];
	if ($act=="logout"){
	session_start();
	unset($_SESSION['SESS_USERNAME']);
	"<meta http-equiv=\"refresh\" content=\"0; url=index.php>";
}
?>