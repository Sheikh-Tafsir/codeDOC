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
		header("Location: signup.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname'";
        //$sql = "INSERT INTO users (user_name, password) VALUES ('$uname','$pass') ";
		//echo phpinfo();
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 0) 
        {
            $sql = "INSERT INTO users (user_name, password) VALUES ('$uname','$pass') ";
            $result = mysqli_query($conn, $sql);
			
            /*$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	//$_SESSION['name'] = $row['name'];
            	//$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: signup.php?error=Incorect User name or password");
		        exit();
			}*/
            $_SESSION['user_name'] = $uname;
            header("Location: home.php");
		    exit();
		}
        else{
			header("Location: signup.php?error=Username Already exists");
	        exit();
		}
	}
	
}
else{
	header("Location: signup.php?error=dnt know");
	exit();
}