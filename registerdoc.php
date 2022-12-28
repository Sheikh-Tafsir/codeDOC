<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['specialist'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$specialist = validate($_POST['specialist']);
	$sat = validate($_POST['sat']);
	$sun = validate($_POST['sun']);
    $mon = validate($_POST['mon']);
    $tue = validate($_POST['tue']);
    $wed = validate($_POST['wed']);
    $thu = validate($_POST['thu']);
    $fri = validate($_POST['fri']);
	$patlimit = validate($_POST['patlimit']);

	if (empty($uname)) {
		header("Location: adddoctoradm.php?error=User Name is required");
	    exit();
	}
	else if(empty($pass)){
        header("Location: adddoctoradm.php?error=Password is required");
	    exit();
	}
	else if(empty($specialist)){
        header("Location: adddoctoradm.php?error=specialist is required");
	    exit();
	}
	else if(empty($patlimit)){
        header("Location: adddoctoradm.php?error=patiend check limit is required");
	    exit();
	}
	else{
		$sql = "SELECT * FROM doctorlist WHERE name='$uname'";
        //$sql = "INSERT INTO users (user_name, password) VALUES ('$uname','$pass') ";
		//echo phpinfo();
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 0) 
        {
            $sql = "INSERT INTO doctorlist (name, specialist, password, sat, sun, mon, tue, wed, thu, fri, patlimit) VALUES ('$uname','$specialist','$pass','$sat','$sun','$mon','$tue','$wed','$thu','$fri','$patlimit') ";
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
            //$_SESSION['user_name'] = $uname;
            header("Location: viewdoctoradm.php");
		    exit();
		}
        else{
			header("Location: adddoctorlist.php?error=Username Already exists");
	        exit();
		}
	}
	
}
else{
	header("Location: adddoctorlist.php?error=credentials empty");
	exit();
}