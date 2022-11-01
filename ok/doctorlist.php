<?php 
session_start(); 
include "db_conn.php";

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
    <link rel="stylesheet" href="doctorlist.css">
</head>
<body>
    <div class="headline">
            <h1 class="fir">DOCTOR &nbsp;</h1>
            <h1 class="sec">INFORMATION</h1>
    </div>
    <div class="doctor-info">
        
        <?php 

            while ($row = $result->fetch_assoc()) {
                    $x=$row['name'];
                    $y=$_SESSION['user_name'];
                    //$_SESSION['appoint_doctor_name'] = $row['user_name'];
                    echo "<div class='doctor-box-1'>";
                    echo "<img class= 'img-doc' src='images/image1.jpg' alt='doctor-1'>";
                    echo "<div class='doc-info-writing'>";
                    echo "<h3 class='heading-2'>". $row['name']."<h3/>";
                    echo "<p class='heading-3'>". $row['specialist']."<p/>";
                    echo "<form action='bookappointment.php' method='post'>";
                    echo "<input type='text' name='dname' value='$x' class='apcred'>";
                    echo "<input type='text' name='pname' value='$y' class='apcred'><br/>";
                    echo "<input type='submit' value='Select' class='but'>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
            }
        ?>
    </div>
</body>
<script>
    function getName(x){
        alert(x);
        //alert($_SESSION['appoint_doctor_name']);
        window.location.href="home.php";

    }
</script>
</html>