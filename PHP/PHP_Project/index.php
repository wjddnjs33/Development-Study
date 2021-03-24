<?php
	session_start();

	if($_SESSION['userid']){
?>		<script>
			location.replace("post.php");
		</script>

<?php
	}
?>

<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Login</title>
		<link href="u.css" rel="stylesheet">
	</head>
</html>

<body>
	<input id="rotated" type="checkbox" name="rotated"><label for="rotated">Welcome to PY_World!</label>
	<form method="POST" name='forname'>
		<h3 data-text="Choose Your Language">Login-V3</h3>
		<label data-text="Login">
			<center><input type="text" name="id" style='color:black' placeholder='id'></center>
		</label>
		<label data-text="Register">
			<input  type='password' name='pw' style='color:black' placeholder='password'>
		</label>
		<label>
			<input type='submit' style='color:black' value="Login" formaction="login.php">
		</label>
		<!-- Hidden Parameter : Level -->
	</form>
</body>
