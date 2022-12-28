<!DOCTYPE html>
<html>
<head>
	<title>Add Doctor</title>
	<link rel="stylesheet" type="text/css" href="adddoctoradm.css">
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
                    <a href="viewappointments.php">Apointments</a>
                    <a href="viewuseradm.php">Users</a>
                    <a href="viewdoctoradm.php">Doctors</a>
                    <button class="logout"><a href="logout.php">Logout</a></button>
                    <i class="fa-solid fa-sun light" onclick="settmode()"></i>
                    <i class="fa-solid fa-moon dark" onclick="settmode()"></i>
                </div>
    </div>
	<div class="box">
		<form action="registerdoc.php" method="post">
			<h2>Doctor Info</h2>
			
			<!--<label>User Name</label>-->
			<input type="text" name="uname" placeholder="User Name"><br>

			<!--<label>User Name</label>-->
			<input type="password" name="password" placeholder="Password"><br>
			<input type="text" name="specialist" placeholder="Specialist"><br>
			<input type="text" name="sat" placeholder="Satday slot time"><br>
			<input type="text" name="sun" placeholder="Sunday slot time"><br>
            <input type="text" name="mon" placeholder="Monday slot time"><br>
            <input type="text" name="tue" placeholder="Tuesday slot time"><br>
            <input type="text" name="wed" placeholder="Wednesday slot time"><br>
            <input type="text" name="thu" placeholder="Thursday slot time"><br>
            <input type="text" name="fri" placeholder="Friday slot time"><br>
			<input type="text" name="patlimit" placeholder="patiend limit"><br>

			<button type="submit">Save</button>
			<div class="errorstat">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
			</div>
			<a href="index.php">Already have an account?</a>
			
		</form>
	</div>
	<script>
		function myFunction(){
			//alert("hi");
			document.querySelector(".box").classList.add("box-tog");
		}
	</script>
</body>

</html>