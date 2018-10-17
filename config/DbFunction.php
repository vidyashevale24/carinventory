<?php
require_once "Database.php";
//$db = Database::getInstance();
//$mysqli = $db->getConnection();
class DbFunction{
	
	function add_manf($manf_name,$creted_date){
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "insert into tbl_manufacturer(manf_name,created_date)values(?,?)";
		$stmt= $mysqli->prepare($query);
		if(false===$stmt){
			echo "fail";
		}else{
			$stmt->bind_param('ss',$manf_name,$creted_date);
			$stmt->execute();
			echo "Success";
		}
	}

	function showManufacturers(){
		$db = Database::getInstance();
		$mysqli = 	$db->getConnection();
		$query	= 	"SELECT * FROM tbl_manufacturer ORDER BY manf_id DESC";
		$output = 	'';  
		$result = 	$mysqli->query($query);
		$rowcount=mysqli_num_rows($result);
	    if($rowcount > 0 ){
		    $output .= 	'  
		    	<h2>Manufacturer Details</h2>
	           	<table class="table">  
	                <tr>  
	                    <th width="35%">Sr. No.</th>  
	                    <th width="35%">Manufacturer Name</th>  
	                    <th width="10%"></th>  
	                    <th width="10%"></th>  
	                </tr>  
	           ';  
	           $i = 1;	               
	           while($row = mysqli_fetch_object($result))  
	           {  
	           		$output .= '  
	                <tr>       
	                     <td>'.$i.'.</td>  
	                     <td>'.$row->manf_name.'</td>  
	                     <td><button type="button" name="update" id="'.$row->manf_id.'" class="btn btn-success">Update</button></td>  
	                     <td><button type="button" name="delete" id="'.$row->manf_id.'" class="btn btn-danger">Delete</button></td>  
	                </tr>  
	                ';  
	                $i++;
	           }  
	           $output .= '</table>';  
	           return $output; 
	       }else{
	       		return "fail"; 
	       }
	}

	function viewManufactuarers(){
		echo "here";
	}
	function login($loginid,$password){
	
      if(!ctype_alpha($loginid) || !ctype_alpha($password)){
      	
        echo "<script>alert('Either LoginId or Password is Missing')</script>";
      
      }		
   else{		
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT loginid, password FROM tbl_login where loginid=? and password=? ";
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
		
		trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
	}
	
	else{
		
		$stmt->bind_param('ss',$loginid,$password);
		$stmt->execute();
		$stmt -> bind_result($loginid,$password);
		$rs=$stmt->fetch();
		if(!$rs)
		{
			echo "<script>alert('Invalid Details')</script>";
			header('location:login.php');
		}
		else{
			
			header('location:add-course.php');
		}
	}
	
	}
	
	}
	
	function create_course($cshort,$cfull,$cdate){
		
				if($cshort==""){
			 
			echo "<script>alert('Select  Course Short Name')</script>";
		
		}
		
		
		else if($cfull==""){
			 
			echo "<script>alert('Select  Course Full Name')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into tbl_course(cshort,cfull,cdate)values(?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('sss',$manf_name);
				$stmt->execute();
				echo "<script>alert('Course Added Successfully')</script>";
					//header('location:login.php');
				
			}
		}				
	}



function showCourse1($cid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM tbl_course  where cid='".$cid."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showSubject(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM subject ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}


function showSession(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM session  ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showSubject1($sid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM subject where subid='$sid' ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}


function create_subject($cshort,$cfull,$sub1,$sub2,$sub3){
		
				if($cshort==""){
			 
			echo "<script>alert('Select  Course Short Name')</script>";
		
		}
		
		
		else if($cfull==""){
			 
			echo "<script>alert('Select  Course Full Name')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into subject(cshort,cfull,sub1,sub2,sub3)values(?,?,?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('sssss',$cshort,$cfull,$sub1,$sub2,$sub3);
				$stmt->execute();
				echo "<script>alert('Course Added Successfully')</script>";
					
				
			}
		}				
	}

	
function showCountry(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM countries ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	
function showStudents(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM registration ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	

function showStudents1($id){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM registration  where id='".$id."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	

function register($cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
				   $pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$session){
 			          
 			        $db = Database::getInstance();
		           	$mysqli = $db->getConnection();
		           	
		           //	echo $session;exit;
   $query = "INSERT INTO `registration` (`course`, `subject`, `fname`, `mname`, `lname`, `gender`, `gname`, `ocp`,
                     `income`, `category`, `pchal`, `nationality`, `mobno`, `emailid`, `country`, `state`, `dist`, 
					 `padd`, `cadd`, `board`, `board1`,`roll`,`roll1`,`pyear`,`yop1`,`sub`,`sub1`,`marks`,`marks1`,
					 `fmarks`,`fmarks1`,`session`,regno) 
                   VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			        $reg=rand();
			        $stmt= $mysqli->prepare($query);
			        if(false===$stmt){
			
			     	trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			    }
			
			    else{
			
			$stmt->bind_param('sssssssssssssssssssssssssssssssss',
		         	$cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,$nation,$mobno,
					$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,$pyear1,$pyear2,
					$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$session,$reg);
			$stmt->execute();
		   	echo "<script>alert('Successfully Registered , your registration number is $reg')</script>";
		 	//header('location:login.php');
				
		  }
				


       }


function edit_course($cshort,$cfull,$udate,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	//echo $cshort.$cfull.$udate.$id;exit;
	$query = "update tbl_course set cshort=?,cfull=? ,update_date=? where cid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('sssi',$cshort,$cfull,$udate,$id);
	$stmt->execute();
    echo '<script>'; 
    echo 'alert("Course Updated Successfully")'; 
    echo '</script>';

}


function edit_subject($sub1,$sub2,$sub3,$udate,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update subject set sub1=?,sub2=? ,sub3=?,update_date=? where subid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('ssssi',$sub1,$sub2,$sub3,$udate,$id);
	$stmt->execute();
    echo '<script>'; 
    echo 'alert("Subject Updated Successfully")'; 
    echo '</script>';

}

function edit_std($cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
				   $pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id){
  // echo $id;exit;
    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update registration set course=?,subject=?,fname=?,mname=?,lname=?,gender=?,gname=?,ocp=?
              , income=?,category=?,pchal=?,nationality=?,mobno=?,emailid=?,country=?,state=?,dist=?
         	 ,padd=?,cadd=?,board=?,roll=?,pyear=?,sub=?,marks=?,fmarks=?,board1=?,roll1=?,yop1=?,sub1=?
              ,marks1=?,fmarks1=? where id=?" ;
    //echo $query;
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
			
			     	trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			    }

	$rc=$stmt->bind_param('sssssssssssssssssssssssssssssssi',$cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
				   $pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id);
				   
    //echo $rc;
 if ( false===$rc ) {
 
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
  }		   
	$rc=$stmt->execute();
	
	if ( false==$rc ) {
          die('execute() failed: ' . htmlspecialchars($stmt->error));
    }
	else{
         echo '<script>'; 
         echo 'alert(" Successfully Updated")'; 
          echo '</script>';
		}  
  
}


function del_course($id){

   //  echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from tbl_course where cid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('s',$id);
	$stmt->execute();
    echo "<script>alert('Course has been deleted')</script>";
    echo "<script>window.location.href='view-course.php'</script>";
}

function del_std($id){

   $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from registration where id=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('i',$id);
	$stmt->execute();
    echo "<script>alert('One record has been deleted')</script>";
    echo "<script>window.location.href='view-course.php'</script>";

}

 function del_subject($id){

     //echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from subject where subid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('i',$id);
	$stmt->execute();
    echo "<script>alert('Subject has been deleted')</script>";
   // echo "<script>window.location.href='view-course.php'</script>";
}


}

?>



