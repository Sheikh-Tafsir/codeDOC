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
		header("Location: indexadm.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: indexadm.php?error=Password is required");
	    exit();
	}else{
        $name="shoto";
		if ($uname=="shoto" && $pass=="shoto12") {
            $_SESSION['user_name'] = $name;
        	header("Location: viewappointments.php");
		    exit();
        }
        else{
			header("Location: indexadm.php?error=Incorect User name or password");
		    exit();
		}
	}
	
}
else{
	header("Location: indexadm.php?error=dnt know");
	exit();
}