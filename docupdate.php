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
    <link rel="stylesheet" href="docupdate.css">
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
                    <a href="dashdoc.php">Profile</a>
                    <a href="viewappointmentspat.php">Appointments</a>
                    <button class="logout"><a href="logout.php">Logout</a></button>
                    <i class="fa-solid fa-sun light" onclick="settmode()"></i>
                    <i class="fa-solid fa-moon dark" onclick="settmode()"></i>
                </div>
    </div>
    <div class="box">
		<form action="docupdateback.php" method="post">
			<h2>Update patient limit</h2>
			<input type="text" name="patlimit" placeholder="Patiend limit"><br>
            <button type="submit">Save</button></br>
			<?php 
				while ($row = $result->fetch_assoc()) {
					$x=$row['name'] ;
					echo "<input type='text' name='dname' value='$x'><br/>";
				}
			?>
			<div class="errorstat">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
			</div>
		</form>
    </div>
</body>
</html>