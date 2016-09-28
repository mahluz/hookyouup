<?php

$result = mysqli_query($Open,"select * from user where email='$_SESSION[user]'");

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo"
			<div class=row>
				<div class=col-sm-5>
					<img src=images/zulham.jpg class=img-rounded img-responsive />
				</div>
				<div class=col-sm-4>
					<blockquote>
						<p>$row[name]</p> <small><cite title=Source Title> Alamat taruh disini<i class=glyphicon glyphicon-map-marker></i></cite></small>
					</blockquote>
					<p><i class=glyphicon glyphicon-envelope></i> $row[email]
						<br /> <span class=glyphicon glyphicon-globe></span> $row[id_comm]
						<br /> <i class=glyphicon glyphicon-gift></i> Tanggal taruh disini</p>
				</div>
			</div>
		";
    }
} else {
    echo "0 results";
}

mysqli_close($Open);
?>