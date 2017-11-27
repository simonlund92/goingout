<!DOCTYPE html>
<html>
<?php include "includes/head.php"; ?>
<body>
<?php
$user = 'Simon';
?>
<header>
	<h1>Going out?</h1>	
</header>
<main>
	<img src="img/frontpage.jpg" alt="logo">
	<h3>Welcome <?php echo $user; ?>!</h3>
	<form action="index.php">
		<input type="submit" name="" value="Sign in!">
	</form>
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html> 