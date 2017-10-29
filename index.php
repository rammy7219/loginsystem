<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
	<IMG class="displayed" src="120tuts.png" alt="120tuts">
		<h2>Home</h2>
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>