<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login With Google</title>
	<link rel="icon" type="image/png" href="images/logo.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-3">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td><img style="width: 100%;" src="<?php echo $_SESSION['picture'] ?>"><br><input type="text" class="name" readonly="yes" value="<?php echo $_SESSION['givenName'] ?>"></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-9" style="background: linear-gradient(lightgreen, lightblue);">
			<center><h1>Your Personal Details</h1></center>
			<form method="post" action="insert.php">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td>ID</td>
						<td><input type="text" name="id" readonly="yes" value="<?php echo $_SESSION['id'] ?>"></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><input type="text" name="givenName" readonly="yes" value="<?php echo $_SESSION['givenName'] ?>"></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><input type="text" name="familyName" readonly="yes" value="<?php echo $_SESSION['familyName'] ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" readonly="yes" value="<?php echo $_SESSION['email'] ?>"></td>
					</tr>
					<tr>
						<td>Picture Link</td>
						<td><input type="text" name="picture" readonly="yes" value="<?php echo $_SESSION['picture'] ?>"></td>
					</tr>
					<tr>
						<td>Link</td>
						<td><input type="text" name="link" readonly="yes" value="<?php echo $_SESSION['link'] ?>"></td>
					</tr>
				</tbody>
			</table>
			<center><button>  That's Ok  </button></center><br>
		</form>
		</div>
	</div>
</div>
</body>
</html>