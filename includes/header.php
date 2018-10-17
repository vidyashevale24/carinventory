
<head>
  <title>Mini Car Inventory System

</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = substr($actual_link, strrpos($actual_link, '/') + 1);
?>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="#">Mini Car Inventory System</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="<?= $url == 'index.php' || ''? 'active' : '' ?>"><a href="index.php">Home</a></li>
			<li class="<?= $url == 'manufacturer.php' ? 'active' : '' ?>"><a href="manufacturer.php">manufacturer</a></li>
			<li class="<?= $url == 'models.php' ? 'active' : '' ?>"><a href="#">Model </a></li>
		</ul>
	</div>
</nav>

