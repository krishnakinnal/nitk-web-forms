<?php

	$db = new mysqli('localhost', 'root', 'root', 'testdb') or die("Unable to connect");	

	$i =  hash('gost', "Hello" ,false);

	echo $i.'<br>';

	$result =$db->query("INSERT INTO `lg_details` VALUES (12345,'$i') ");
	 	
	
?>

