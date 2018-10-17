<?php  
 //action.php  
 include '../config/DbFunction.php';  
 $object = new DbFunction();  
 if(isset($_POST["action"]))  
 {  
	if($_POST["action"] == "Load")  
	{  
		echo $object->showManufacturers();  
	}  
	if($_POST["action"] == "Submit")  
	{  
		date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
		$created_date =  date('Y-m-d H:i:s');
		echo $object->add_manf(strtoupper($_POST["manf_name"]),$created_date);
	}  
 }  
 ?>  