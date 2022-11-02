<?php 
session_start(); 
include "db_conn.php";
    $x=$_SESSION['user_name'];
	$sql = "SELECT * FROM allapoinments WHERE doctor_name='$x' ";

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
    <div class="backimg">
        <img src="https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77700346290.jpg">
        <!--<img src="https://www.itl.cat/pngfile/big/289-2893409_dark-pink-wallpaper-black-and-pink-desktop-backgrounds.jpg">-->
    </div>
    <div class="headline">
            <h1 class="fir">BOOKED &nbsp;</h1>
            <h1 class="sec">APPOINTMENTS</h1>
    </div>
    <div class="apointtable">
        <div class='doctor-box'>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Patient Name</p>
            <p class='heading-2' style='font-weight:bold; color:#ff3c78'>Date</p>
            <p class='heading-3' style='font-weight:bold; color:#ff3c78'>Time</p>
        </div>
        <?php 
            while ($row = $result->fetch_assoc()) {
                echo "<div class='doctor-box'>";
                //echo "<p class='heading-2'>". $row['id'] ."<p/>";
                echo "<p class='heading-1'>". $row['patient_name'] ."<p/>";
                //echo "<p class='heading-3'>". $row['patient_name']."<p/>";
                echo "</div>";
            }

        ?>
    </div>
</body>
</html>