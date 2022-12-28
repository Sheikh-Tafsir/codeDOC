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
        header("Location: doctorlist.php?error=slot is empty");
	    exit();
	}
	else if(strlen(strval($slot)) < 12){
		header("Location: doctorlist.php?error=slot is unavailable");
	    exit();
	}
	else{
		$time=substr($slot,0,5);
		$dayy=substr($slot,6,2);
		$month=substr($slot,9,2);
		$year=substr($slot,12,4);
		$day=substr($slot,17,3);
		$date=strval($year."-".$month."-".$dayy);

		$sql = "SELECT * FROM allapoinments WHERE doctor_name='$dname' AND patient_name='$pname' AND day='$day' AND date='$date' AND time='$time'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 0) 
        {
			
			$sql = "SELECT * FROM allapoinments WHERE doctor_name='$dname' AND date='$date' AND time='$time'";
			$result = mysqli_query($conn, $sql);
			$pcount=mysqli_num_rows($result) +1;

			$sql = "SELECT patlimit FROM doctorlist WHERE name='$dname' ";
			$result = mysqli_query($conn, $sql);
			$plimit=mysqli_fetch_assoc($result);

			if($plimit['patlimit']<$pcount){
				header("Location: doctorlist.php?error=all slots booked");
	    		exit();
			}

			$sql = "INSERT INTO allapoinments (doctor_name, patient_name, day, date, time, pat_count) VALUES ('$dname','$pname','$day','$date','$time','$pcount')";
			//echo phpinfo();
			$result = mysqli_query($conn, $sql);
			header("Location: viewappointmentsdoc.php");
			exit();
		}
		else{
			header("Location: doctorlist.php?error=Already appointment exists");
	        exit();
		}
	}
	
}
else{
	//header("Location: index.php?error=dnt know");
	header("Location: doctorlist.php?error=slot is required");
	exit();
}