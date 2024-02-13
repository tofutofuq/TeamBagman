<?php
	session_start();

	include "conn.php";

    $data = $_POST['data'];


	$msg = [];

	$sql = "SELECT `name`,`id`,`category` FROM `judge_3`  WHERE `id` = '$data';";

	$query = $con->query($sql);


	if ($query->num_rows > 0) {
		$row = $query->fetch_assoc();	

		$_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
		$_SESSION['category'] = $row['category'];
		
		
		$msg['status'] = true;
        $msg['message'] = "Success";
	}else{
		$msg['status'] = false;
		// $msg['message'] = "INVALID PASSWORD";
	}


	echo json_encode($msg);



	   
	// $sql1 = "SELECT * FROM `tbl_propose`";

  
       
                
	// $query1 = $con->query($sql1);

	// 	if($query1->num_rows > 0){
	// 		while($row = $query1->fetch_assoc()){
	// 			$_SESSION['event_type'] = $row['event_type'];
	// 			$_SESSION['p_location'] = $row['p_location'];
	// 			$_SESSION['p_date'] = $row['p_date'];
	// 			$_SESSION['p_time'] = $row['p_time'];
	// 		}
		

		
	// }
	



	
	
?>