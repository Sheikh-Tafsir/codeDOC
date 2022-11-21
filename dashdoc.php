<?php 
session_start(); 
include "db_conn.php";
    $x=$_SESSION['name'];
		$sql = "SELECT * FROM doctorlist WHERE name='$x' ";

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
    <link rel="stylesheet" href="dash.css">
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akshar' rel='stylesheet'>
</head>
<body>
    <div class="header" data-aos='fade-down'>
                <div class="headlogo">
                    <a href="https://sheikh-tafsir.github.io/octo-journey.github.io/"><img src="images/code1.png" height="75" width="200"></a>
                </div>
                <div class="headbar">
                    <i class="fa-solid fa-xmark xmark" onclick="settmin()"></i>
                    <i class="fa fa-bars bars" onclick="settmax()"></i>
                </div>
                <div class="headmenu">
                    <a href="#">Profile</a>
                    <a href="viewappointmentspat.php">Appointments</a>
                    <button class="logout"><a href="logout.php">Logout</a></button>
                    <i class="fa-solid fa-sun light" onclick="settmode()"></i>
                    <i class="fa-solid fa-moon dark" onclick="settmode()"></i>
                </div>
    </div>
    <div class="headline">
            <h1 class="fir">PERSONAL &nbsp;</h1>
            <h1 class="sec">INFORMATION</h1>
    </div>
    <div class="dashdoc">
        <h2>PROFILE</h2>
        <?php 
            while ($row = $result->fetch_assoc()) {
                $s1=($row['sat']);
                $s2=($row['sun']);
                $s3=($row['mon']);
                $s4=($row['tue']);
                $s5=($row['wed']);
                $s6=($row['thu']);
                $s7=($row['fri']);
                    {
                        strlen($s1)<5?$s1="unavailable": $s1= $s1;
                    }
                    {
                        strlen($s2)<5?$s2="unavailable": $s2= $s2;
                    }
                    {
                        strlen($s3)<5?$s3="unavailable": $s3= $s3;
                    }
                    {
                        strlen($s4)<5?$s4="unavailable": $s4= $s4;
                    }
                    {
                        strlen($s5)<5?$s5="unavailable": $s5= $s5;
                    }
                    {
                        strlen($s6)<5?$s6="unavailable": $s6= $s6;
                    }
                    {
                        strlen($s7)<5? $s7="unavailable": $s7= $s7;
                    }
                echo "<div class='doctor-box'>";
                echo "<p class='heading-1'>name: <p/>";
                echo "<p class='heading-2'>". $row['name'] ."<p/><br/>";
                echo "<p class='heading-1'>specialist: <p/>";
                echo "<p class='heading-2'>". $row['specialist'] ."<p/><br/>";
                echo "<p class='heading-1'>Saturday: <p/>";
                echo "<p class='heading-2'>". $s1 ."<p/><br/>";
                echo "<p class='heading-1'>Sunday: <p/>";
                echo "<p class='heading-2'>". $s2 ."<p/><br/>";
                echo "<p class='heading-1'>Monday: <p/>";
                echo "<p class='heading-2'>". $s3 ."<p/><br/>";
                echo "<p class='heading-1'>Tuesday: <p/>";
                echo "<p class='heading-2'>". $s4 ."<p/><br/>";
                echo "<p class='heading-1'>Wednesday: <p/>";
                echo "<p class='heading-2'>". $s5 ."<p/><br/>";
                echo "<p class='heading-1'>Thursday: <p/>";
                echo "<p class='heading-2'>". $s6 ."<p/><br/>";
                echo "<p class='heading-1'>Friday: <p/>";
                echo "<p class='heading-2'>". $s7 ."<p/><br/>";
                echo "</div>";
            }

        ?>
    </div>
</body>
</html>