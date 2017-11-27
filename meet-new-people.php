<!DOCTYPE html>
<html>
<?php include "includes/head.php"; ?>
<body>
<header>
	<h1>Meet New People!</h1>
		
</header>
<main>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="#">Profile</a></li>
  	<li><a href="#">Inbox</a></li>
  	<li><a href="#">Friends</a></li>
  	<li><a href="#">Meet New People</a></li>
  	<li><a href="#">Special Offers</a></li>
</ul>
<form>
  City:<br>
  <input type="text" name="firstname"><br>
  Age:<br>
  <input type="text" name="lastname"><br>
  Gender:<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="submit" value="Search">
</form>
<section class="results">
	<!-- TODO, results from search here -->
</section>
</main>
<?php include 'includes/footer.php'; ?>
</body>
</html> 