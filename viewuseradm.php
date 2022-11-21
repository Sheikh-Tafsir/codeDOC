<?php 
session_start(); 
include "db_conn.php";
    $x=$_SESSION['user_name'];
	$sql = "SELECT * FROM users";

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
                    <a href="adddoctoradm.php">Add</a>
                    <a href="viewdoctoradm.php">Doctor</a>
                    <a href="viewappointments.php">Appointments</a>
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
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:25%'>Name</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:40%'>Email</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Age</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:25%'>PhoneNo</p>
        </div>
        <?php 
            while ($row = $result->fetch_assoc()) {
                echo "<div class='doctor-box' data-aos='fade-right'>";
                echo "<p class='heading-1' style='width:25%'>". $row['user_name'] ."<p/>";
                echo "<p class='heading-1' style='width:40%'>". $row['email'] ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $row['age'] ."<p/>";
                echo "<p class='heading-1' style='width:25%'>". $row['phoneno'] ."<p/>";
                echo "</div>";
            }

        ?>
    </div>
    <br/>
    <br/>
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