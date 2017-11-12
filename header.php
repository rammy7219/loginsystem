<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PHP Login System">
    <meta name="keywords" content="PHP,Login,System">
    <meta name="author" content="Wayne Ramshaw">
	<title>PHP Login System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	IMG.displayed {
	height: 200px;
    width: 400px;
    display: block;
    margin-left: auto;
    margin-right: auto;
	margin-bottom: 20px;
	}
	</style>
</head>

<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign up</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>