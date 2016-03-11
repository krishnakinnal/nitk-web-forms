<?php

$db = new mysqli("localhost","root","root","testdb");

$usr = $_POST['usr'];

$pwd = $_POST['pwd'];

$chk = 0;

if(isset($_POST['chk_box']))
	$chk = 1;

if(!isset($_POST['usr']) || !isset($_POST['pwd']))
	header('Location: http://localhost/project/index.html');


$pwd = hash('gost',$pwd,false);

$result = $db->query("SELECT * FROM `lg_details` WHERE `usr_id` = '$usr'");

if(mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_array($result);
	if(strcmp($row['pass'],$pwd)==0)
	{
		header('Location: http://localhost/project/FORMS/MBA/mba-form.php');
		
		$acc_time = time();
		$server = $_SERVER['REMOTE_ADDR'];
		$cookie_hash = $acc_time.$server;
		$cookie_hash = hash('tiger128,3',$cookie_hash,false);		
				
		$db->query("UPDATE `lg_details` SET `cookie` = '$cookie_hash' WHERE `usr_id` = '$usr'");
		setcookie('NITK_PORTAL', $cookie_hash, time() + (86400 * 30), "/");	

	}
	else
		header('Location: http://localhost/project/index.html'); 
		
}
else
	header('Location: http://localhost/project/index.html');





?>
