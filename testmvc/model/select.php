<?php
/**
* 
*/

 	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "mes";
  
     	$conn = mysqli_connect($servername, $username, $password, $dbname);
	    //$sql = "SELECT * FROM 'broard'";
	    $result = mysqli_query($conn,"SELECT * FROM broard");
		//$result = mysqli_query($sql,$conn);
		$i=0;
		while($row = mysqli_fetch_array($result))
{
	$show[]  = array('name'=>$row['name'],'message'=>$row['message']);
}

		echo json_encode($show);
 
?>