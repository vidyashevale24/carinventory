
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
			<li <? $url == '' ? class="active" : class="" ?>><a href="#">Home</a></li>
			<li><a href="manufacturer.php">manufacturer</a></li>
			<li><a href="#">Model </a></li>
		</ul>
	</div>
</nav>

