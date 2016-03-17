<?php

include 'redirect.php' ;

$db = new mysqli($db_server,$db_user,$db_pass,$db);

$usr = $_POST['usr'];

$pwd = $_POST['pwd'];

$pwd = hash('gost',$pwd,false);

$chk = 0;

if(isset($_POST['chk_box']))
	$chk = 1;

if(isset($_POST['usr']) && isset($_POST['pwd']))
{
	$result = $db->query("SELECT * FROM `lg_details` WHERE `usr_id` = '$usr'");

	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		if(strcmp($row['pass'],$pwd)==0 && $row['active']==1)
		{
            $days = 0.1;
			if($chk==1)
                $days = 5;
			$acc_time = time();
			$server = $_SERVER['REMOTE_ADDR'];
			$cookie_hash = $acc_time.$server;
			$cookie_hash = hash('tiger128,3',$cookie_hash,false);		
				
			$db->query("UPDATE `lg_details` SET `cookie` = '$cookie_hash' WHERE `usr_id` = '$usr'");
			setcookie('NITK', $cookie_hash, time() + (86400 * $days), "/");	
			
			header($choice);
		}
        else if($row['active']==0)
        {
            header($login_redirect);
            exit;
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
}
else
{
	header($index);
	exit;
}




?>
