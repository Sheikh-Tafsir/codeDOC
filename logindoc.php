<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: indexdoc.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: indexdoc.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM doctorlist WHERE name='$uname' AND password='$pass'";

		//echo phpinfo();
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['name'] = $row['name'];
            	//$_SESSION['name'] = $row['name'];
            	//$_SESSION['id'] = $row['id'];
            	header("Location: viewappointmentspat.php");
		        exit();
            }else{
				header("Location: indexdoc.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: indexdoc.php?error=iIncorect User name or password");
	        exit();
		}
	}
	
}
else{
	header("Location: indexdoc.php?error=dnt know");
	exit();
}