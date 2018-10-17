$(document).ready(function(){
	$("#manf_table").hide().css("visibility", "hidden");

	$('#manf_table').hide();
	load_data();  
   $('#action').val("Submit");  
   function load_data()  
   {  
        var action = "Load";  
        $.ajax({  
            url:"controllers/manufacturer.php",  
            method:"POST",  
            data:{action:action},  
            success:function(data)  
            {  
              	$("#manf_table").show().css("visibility", "visible");
	            	$('#manf_table').html(data); 
	          }  
        });  
   }  

$('#manufacturer_form').on('submit', function(event){  
        event.preventDefault();  
        var manf_name = $('#manf_name').val();  
       
        if(manf_name != '' )  
        {  
             $.ajax({  
                  url:"controllers/manufacturer.php",  
                  method:"POST",  
                  data:new FormData(this),  
                  contentType:false,  
                  processData:false,  
                  success:function(data)  
                  {  
                    console.log(data);
                       $('#manufacturer_form')[0].reset();  
                       load_data();  
                  }  
             })  
        }  
        else  
        {  
            alert("Manufacturer Name is Required");  
        }  
   });  
});  
