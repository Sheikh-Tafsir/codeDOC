<?php 
session_start(); 
include "db_conn.php";
    $x=$_SESSION['user_name'];
	$sql = "SELECT * FROM doctorlist";

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
                    <a href="viewuseradm.php">Users</a>
                    <a href="viewappointments.php">Appointments</a>
                    <button class="logout"><a href="logout.php">Logout</a></button>
                    <i class="fa-solid fa-sun light" onclick="settmode()"></i>
                    <i class="fa-solid fa-moon dark" onclick="settmode()"></i>
                </div>
    </div>
    <div class="headline">
            <h1 class="fir">OUR &nbsp;</h1>
            <h1 class="sec">DOCTORS</h1>
    </div>
    <div class="doctorlisttable">
        <div class='doctor-box' data-aos="fade-left">
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:20%'>Name</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Specialist</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Sat</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Sun</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Mon</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Tues</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Wed</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Thur</p>
            <p class='heading-1' style='font-weight:bold; color:#ff3c78; width:10%'>Fri</p>
        </div>
        <?php 
            while ($row = $result->fetch_assoc()) {
                $s1=$row['sat'];
                $s2=$row['sun'];
                $s3=$row['mon'];
                $s4=$row['tue'];
                $s5=$row['wed'];
                $s6=$row['thu'];
                $s7=$row['fri'];
                {
                    strlen($s1)<1?$s1="--:--": $s1=$s1;
                }
                {
                    strlen($s2)<1?$s2="--:--": $s2=$s2;
                }
                {
                    strlen($s3)<1?$s3="--:--": $s3=$s3;
                }
                {
                    strlen($s4)<1?$s4="--:--": $s4=$s4;
                }
                {
                    strlen($s5)<1?$s5="--:--": $s5=$s5;
                }
                {
                    strlen($s6)<1?$s6="--:--": $s6=$s6;
                }
                {
                    strlen($s7)<1?$s7="--:--": $s7=$s7;
                }
                echo "<div class='doctor-box' data-aos='fade-right'>";
                echo "<p class='heading-1' style='width:20%'>". $row['name'] ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $row['specialist'] ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $s1 ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $s2 ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $s3 ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $s4 ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $s5 ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $s6 ."<p/>";
                echo "<p class='heading-1' style='width:10%'>". $s7 ."<p/>";

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