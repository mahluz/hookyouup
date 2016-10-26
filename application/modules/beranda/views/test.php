<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach ($community as $ini): ?>
		<?php 
		echo $ini->name; 
		echo "<br>";
		echo $ini->id_user;
		echo "<br>";
		echo $ini->comm_name;
		echo "<br>";
		?>
	<?php endforeach ?>
</body>
</html>