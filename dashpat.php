<?php 
session_start(); 
include "db_conn.php";
    $x=$_SESSION['user_name'];
		$sql = "SELECT * FROM users WHERE user_name='$x' ";

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
                    <a href="home.php">Home</a>
                    <a href="doctorlist.php">Doctors</a>
                    <a href="viewappointmentsdoc.php">Appointments</a>
                    <button class="logout"><a href="logout.php">Logout</a></button>
                    <i class="fa-solid fa-sun light" onclick="settmode()"></i>
                    <i class="fa-solid fa-moon dark" onclick="settmode()"></i>
                </div>
    </div>
    <div class="headline">
            <h1 class="fir">PERSONAL &nbsp;</h1>
            <h1 class="sec">INFORMATION</h1>
    </div>
    <div class="dash">
        <h2>PROFILE</h2>
        <?php 
            while ($row = $result->fetch_assoc()) {
                echo "<div class='doctor-box'>";
                echo "<p class='heading-1'>name: <p/>";
                echo "<p class='heading-2'>". $row['user_name'] ."<p/><br/>";
                echo "<p class='heading-1'>email: <p/>";
                echo "<p class='heading-2'>". $row['email'] ."<p/><br/>";
                echo "<p class='heading-1'>age: <p/>";
                echo "<p class='heading-2'>". $row['age'] ."<p/><br/>";
                echo "<p class='heading-1'>phoneno: <p/>";
                echo "<p class='heading-2'>". $row['phoneno'] ."<p/><br/>";
                echo "</div>";
            }

        ?>
    </div>
</body>
</html>