<?php
    include("connection.php");
	
	$cmd = $_REQUEST['cmd'];
	
	switch($cmd){
		case "add_uuid":
		
		    $sql = "SELECT UUID()";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				$arr = array();
				$i = 0;
				while($data = mysqli_fetch_assoc($result)) {
					while(list($key,$value) = each($data))
						$arr[$i][$key] = $value;
					$i++;
				}
			  }
			  
			 $uuid =  $arr[0]['UUID()'];
			 
			
		
		    $sql = "INSERT into  persons (first_name,last_name,uuid)
			 VALUES('".$_REQUEST['first_name']."',
			       '".$_REQUEST['last_name']."','".$uuid."')";
			$result = $conn->query($sql);
			if($result)
			{
				$message = "Data has been saved";
			}
			else
			{
				$message = "Error Occured";
			}
		
		    include("form.php");
		   break;
		default:
		    include("form.php");
	}


?>