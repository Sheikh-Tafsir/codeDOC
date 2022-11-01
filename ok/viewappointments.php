<?php 
session_start(); 
include "db_conn.php";

		$sql = "SELECT * FROM allapoinments";

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
    <div class="headline">
            <h1 class="fir">BOOKED &nbsp;</h1>
            <h1 class="sec">APPOINTMENTS</h1>
    </div>
    <div class="apointtable">
        <?php 
            while ($row = $result->fetch_assoc()) {
                echo "<div class='doctor-box'>";
                echo "<p class='heading-2'>". $row['id'] ."<p/>";
                echo "<p class='heading-2'>". $row['doctor_name'] ."<p/>";
                echo "<p class='heading-3'>". $row['patient_name']."<p/>";
                echo "</div>";
            }

        ?>
    </div>
</body>
</html>