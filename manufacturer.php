<!DOCTYPE html>
<html lang="en">

<?php 
include_once "includes/header.php";
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo substr($actual_link, strrpos($actual_link, '/') + 1);
?>
<body>
	<div class="container">
		<div class="jumbotron">
		    <div class="table-responsive table_data">
				<form class="form-inline" id="manufacturer_form">
					<H2>Add Manufacturer</H2>
				  	<div class="form-group">
				    	
				    	<input type="text" class="form-control" id="manf_name" name="manf_name" placeholder="Manufacturer name..">
				  	</div>
				  	
				  	<input type="hidden" name="action" id="action" /> 
				  	<input type="submit" class="submit btn btn-prima" name="action" id="button_action" value="Submit" />
				</form>
			 </div>
			<div>&nbsp;</div>
			<div id="manf_table"class="table_data" >
			</div>    
		</div>
	</div>
</body>
</html>
