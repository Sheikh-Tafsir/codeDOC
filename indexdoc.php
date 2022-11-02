<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body onload="myFunction()">
	<div class="box">
		<form action="logindoc.php" method="post">
			<h2 >Login Here</h2>
			
			<!--<label>User Name</label>-->
			<input type="text" name="uname" placeholder="User Name"><br>

			<!--<label>User Name</label>-->
			<input type="password" name="password" placeholder="Password"><br>

			<button type="submit">Login</button>
			<div class="errorstat">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
			</div>
			<a href="signup.php" class="gosignup" onclick="myFunction1()">Don't have an account?</a>
			<a href="index.php" class="gosignup" style='font-size:0.8em;margin-left:75%'>Login as Patient?</a>
		</form>
	</div>
	<script>
		function myFunction(){
			
			document.querySelector(".box").classList.add("box-tog");
		}
		/*function myFunction1(){
			document.querySelector(".box").classList.remove("box-tog");
			window.location.href = "signup.php";
		}*/
	</script>
</body>

</html>