<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop</title>

	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<!-- ul>li*10>a[href="#$"]>{Product $} -->
			<div>
				This is Product <?=$_GET['id']?>
			</div>
		</div>
	</div>
	
</body>
</html>