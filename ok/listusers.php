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
<html>
<head>
	<title>List</title>
	<link rel="stylesheet" type="text/css" href="indexx.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .boxpnt{
            background-color: red;
            margin-bottom:4vh;
            margin-top:4vh;
        }
    </style>
</head>
<body>
	<div class="box">
    
            <?php 
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='boxpnt'>";
                    echo $row['user_name']."<br>";
                    echo $row['password']."<br>";
                    echo "</div>";
                }
            ?>
        
	</div>
</body>

</html>