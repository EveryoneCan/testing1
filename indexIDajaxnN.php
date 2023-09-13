<?php

include_once('nNdbCon/nnCon.php'); 


	if(isset($_POST['idNumber'])) {
		$idNumber = $_POST['idNumber'];
		$nNquery = "SELECT count(*) as cnt FROM `emp_info` WHERE empId = '".$idNumber."'";
		$nNresult = mysqli_query($nnConnString,$nNquery);	
		$nNrow = mysqli_fetch_array($nNresult,MYSQLI_ASSOC);

		if($nNrow['cnt']== 0){
			echo '<span class="text-success">This ID Number <b>'.$idNumber.'</b> is available!</span>';

		} else {
			echo '<span class="text-danger">This ID Number <b>'.$idNumber.'</b> is already taken!</span>';

		}
	}

?>