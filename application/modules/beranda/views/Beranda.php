<!DOCTYPE html>
<html>
<head>
	<title>Selamat</title>
</head>
<body>
<h1>
	Selected Data by Id Comm
</h1>
<?php foreach ($community as $ini): ?>
	<?php 
		echo $ini->id_user;
		echo '<br>';
		echo $ini->name;
		echo '<br>';
		echo $ini->comm_name;
		echo '<br>';
 	?>
<?php endforeach ?>
</body>
</html>