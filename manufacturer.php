<!DOCTYPE html>
<html lang="en">

<?php 
include_once "header/header.php";
require_once "config/DbFunction.php";

$obj = new DbFunction();
?>

	
<body>
	<div class="table_data">
	 	<form id="manufacturer_form">
	 		<H2>Add Manufacturer</H2>
			<input type="text" id="manf_name" name="manf_name" placeholder="Manufacturer name..">
			<input type="hidden" name="action" id="action" />  
            <input type="submit" name="action" id="button_action" value="Submit" />  
                         
		</form>
	</div>
	<div>&nbsp;</div>
	<div class="table_data" id='manf_table'>
		
	</div>    
</body>
</html>
