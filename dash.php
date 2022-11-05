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
</head>
<body>
    <div class="backimg">
        <!--<img src="https://cdn.wallpapersafari.com/48/45/e1ISRN.jpg">
        <img src="https://www.itl.cat/pngfile/big/289-2893409_dark-pink-wallpaper-black-and-pink-desktop-backgrounds.jpg">
    </div>-->
    <div class="headline">
            <h1 class="fir">PERSONAL &nbsp;</h1>
            <h1 class="sec">INFORMATION</h1>
    </div>
    <div class="dash">
        <?php 
            while ($row = $result->fetch_assoc()) {
                echo "<div class='doctor-box'>";
                echo "<p class='heading-2'>name: ". $row['user_name'] ."<p/>";
                echo "<p class='heading-2'>email: fateen12.gmail.com <p/>";
                echo "<p class='heading-2'>age: 35 <p/>";
                echo "<p class='heading-2'>phoneno: 01817375878 <p/>";
                echo "</div>";
            }

        ?>
    </div>
</body>
</html>