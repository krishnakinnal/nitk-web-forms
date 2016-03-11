<?php
	
	$chk = $_GET['chk'];
	$id = $_GET['id'];
	
	$db = new mysqli($db_server,$db_user,$db_pass,$db);
	$result = $db->query("SELECT * FROM `confirm` WHERE `usr_id` = '$id'");
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$row = $row['auth'];
		if(strcmp($row,$chk)==0)
		{
			$db->query("UPDATE `lg_details` SET `active` = 1 WHERE `usr_id` = '$id'");
			header($index);
		}
		else
		{
			header($index); 
			exit;
		}
		
	}
	else
	{
		header($index);
		exit;
	}



?>