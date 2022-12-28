<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['dname']) && isset($_POST['patlimit'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $dname = validate($_POST['dname']);
	$patlimit = validate($_POST['patlimit']);
    if(empty($dname)){
        header("Location: docupdate.php?error=doctor name is required");
	    exit();
	}
    else if(empty($patlimit)){
        header("Location: docupdate.php?error=patiend check limit is required");
	    exit();
	}
	else{
		$sql = "Update doctorlist set patlimit = '$patlimit' WHERE name='$dname'";
        //$sql = "INSERT INTO users (user_name, password) VALUES ('$uname','$pass') ";
		//echo phpinfo();
		$result = mysqli_query($conn, $sql);
        header("Location: viewappointmentspat.php");
		exit();

		/*if (mysqli_num_rows($result) === 1) 
        {
            header("Location: viewappointmentspat.php");
		    exit();
		}
        else{
			header("Location: docupdate.php?error=problem");
	        exit();
		}*/
	}
	
}
else{
	header("Location: docupdate.php?error=credentials empty");
	exit();
}