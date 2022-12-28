<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body onload="myFunction()">
	<div class="box">
		<form action="register.php" method="post">
			<h2>Signup Here</h2>
			
			<!--<label>User Name</label>-->
			<input type="text" name="uname" placeholder="User Name"><br>

			<!--<label>User Name</label>-->
			<input type="password" name="password" placeholder="Password"><br>
			<input type="email" name="email" placeholder="Email"><br>
			<input type="int" name="age" placeholder="Age"><br>
			<input type="text" name="phoneno" placeholder="Phoneno"><br>

			<button type="submit">Signup</button>
			<div class="errorstat">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
			</div>
			<a href="indexpat.php">Already have an account?</a>
			
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