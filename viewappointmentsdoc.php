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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akshar' rel='stylesheet'>
</head>
<body>
    <div class='background'>
        <img src="images/appointmentback.png">
    </div>
    <div class="header" data-aos='fade-down'>
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
                    <a href="dashpat.php">Profile</a>
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
        <div class='doctor-box' data-aos="fade-left">
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Doctor Name</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Date</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Day</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>Time</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78'>sl</p>
        </div>
        <?php 
            while ($row = $result->fetch_assoc()) {
                /*$y=$row['slot'];
                $y=strval($y);
                $ydate=substr($y,10,10);
                $yday=strtoupper(substr($y,0,3));
                $ytime=substr($y,4,5);*/
                echo "<div class='doctor-box' data-aos='fade-right'>";
                echo "<p class='heading-1'>". $row['doctor_name'] ."<p/>";
                echo "<p class='heading-1'>".$row['date'] ."<p/>";
                echo "<p class='heading-1'>".$row['day'] ."<p/>";
                echo "<p class='heading-1'>".$row['time'] ."<p/>";
                echo "<p class='heading-1'>".$row['pat_count'] ."<p/>";
                echo "</div>";
            }

        ?>
    </div>
    <br>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        easing: 'ease',
        once: true,
        anchorPlacement: 'middle-bottom',
    });
</script>
</body>
</html>