<?php

include "../lib/php/function.php";

// $filename = "notes.json";
// $file = file_get_contents($filename);
// $notes = json_decode($file);

// $filename = "../data/users.json";
// $file = file_get_contents($filename);
// $users = json_decode($file);

$notes = getData("notes.json");
$users = getData("../data/users.json");

// print_p($users);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin: Notes</title>

	<?php include "../parts/meta.php" ?>

</head>
<body>

	<?php include "../parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Notes</h2>

			<ul>
			<?php

			for($i=0; $i<count($notes->notes); $i++) {
				echo "<li>{$notes->notes[$i]}</li>";
			}

			?>
			</ul>
		</div>
		<div class="card soft">
			<h2>Users</h2>

			<ul>
			<?php

			for($i=0; $i<count($users); $i++) {
				echo "<li>
					<strong>{$users[$i]->name}</strong>
					<span>[{$users[$i]->type}]</span>
				</li>";
			}

			?>
			
			</ul>
		</div>
	</div>
	
</body>
</html>