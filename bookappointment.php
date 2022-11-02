<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['pname']) && isset($_POST['dname'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$pname = validate($_POST['pname']);
	$dname = validate($_POST['dname']);

	if (empty($pname)) {
		header("Location: doctorlist.php?error=User Name is required");
	    exit();
	}else if(empty($dname)){
        header("Location: doctorlist.php?error=Password is required");
	    exit();
	}else{
		$sql = "INSERT INTO allapoinments (doctor_name, patient_name) VALUES ('$dname','$pname')";
		//echo phpinfo();
		$result = mysqli_query($conn, $sql);
		header("Location: viewappointments.php");
		exit();
	}
	
}
else{
	header("Location: index.php?error=dnt know");
	exit();
}