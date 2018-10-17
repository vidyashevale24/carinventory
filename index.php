<!DOCTYPE html>
<html lang="en">
<?php 
include_once "includes/header.php";
include_once "config/DbFunction.php";
$object = new DbFunction();
echo $object->viewManufactuarers();  
?>
<body>
	<div class="container">
		<div class="jumbotron">
		    <div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Sr.No.</th>
							<th>Manufacturer Name</th>
							<th>Model Name</th>
							<th>Count</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>    
		</div>	
	</div>
	</body>
</html>
