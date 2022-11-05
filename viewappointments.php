<?php 
session_start(); 
include "db_conn.php";
    $x=$_SESSION['user_name'];
	$sql = "SELECT * FROM allapoinments WHERE patient_name='$x' ";

		//echo phpinfo();
	$result = mysqli_query($conn, $sql);
        /*while ($row = $result->fetch_assoc()) {
            echo $row['user_name']."<br>";
        }*/ 
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.ico" />
    <title>Doctor List</title>
    <link rel="stylesheet" href="viewappointments.css">
</head>
<body>
    <div class="header">
                <div class="headlogo">
                    <a href="https://sheikh-tafsir.github.io/octo-journey.github.io/"><img src="images/code1.png" height="75" width="200"></a>
                </div>
                <div class="headbar">
                    <i class="fa-solid fa-xmark xmark" onclick="settmin()"></i>
                    <i class="fa fa-bars bars" onclick="settmax()"></i>
                </div>
                <div class="headmenu">
                    <a href="home.php">Home</a>
                    <a href="doctorlist.php">Doctors</a>
                    <a href="dash.php">Profile</a>
                    <button class="logout"><a href="logout.php">Logout</a></button>
                    <i class="fa-solid fa-sun light" onclick="settmode()"></i>
                    <i class="fa-solid fa-moon dark" onclick="settmode()"></i>
                </div>
    </div>
    <div class="headline">
            <h1 class="fir">BOOKED &nbsp;</h1>
            <h1 class="sec">APPOINTMENTS</h1>
    </div>
    <div class="apointtable">
        <div class='doctor-box'>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Doctor Name</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Date</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Day</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Time</p>
        </div>
        <?php 
            while ($row = $result->fetch_assoc()) {
                $y=$row['slot'];
                $y=strval($y);
                $ydate=substr($y,10,5);
                $yday=strtoupper(substr($y,0,3));
                $ytime=substr($y,4,5);
                echo "<div class='doctor-box'>";
                echo "<p class='heading-1'>". $row['doctor_name'] ."<p/>";
                echo "<p class='heading-1'>".$ydate."<p/>";
                echo "<p class='heading-1'>".$yday."<p/>";
                echo "<p class='heading-1'>".$ytime."<p/>";
                echo "</div>";
            }

        ?>
    </div>
</body>
</html>