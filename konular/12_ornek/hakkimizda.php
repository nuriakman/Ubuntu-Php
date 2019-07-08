<?php
	$RENK = "black";
	if( isset( $_COOKIE['RENKTERCIHI'] ) ) $RENK = $_COOKIE['RENKTERCIHI'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookie ile renk tercihi...</title>
</head>

<body style="color:<?php echo $RENK; ?>;">

	<div class="container" style="width:60%;margin:auto;">
		<h1>Hakkımızda</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<a href="index.php">Ana sayfa</a>
	</div>

</body>

</html>
