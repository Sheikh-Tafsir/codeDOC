<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['pname']) && isset($_POST['dname']) && isset($_POST['slot'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$pname = validate($_POST['pname']);
	$dname = validate($_POST['dname']);
	$slot = validate($_POST['slot']);

	if (empty($pname)) {
		header("Location: doctorlist.php?error=User Name is required");
	    exit();
	}
	else if(empty($dname)){
        header("Location: doctorlist.php?error=docname is required");
	    exit();
	}
	else if(empty($slot)){
        header("Location: doctorlist.php?error=slot is required");
	    exit();
	}
	else if(strlen(strval($slot)) < 12){
		header("Location: doctorlist.php?error=slot is empty");
	    exit();
	}
	else{
		$sql = "INSERT INTO allapoinments (doctor_name, patient_name,slot) VALUES ('$dname','$pname','$slot')";
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