<?php

    include 'redirect.php' ;
	
	$db = new mysqli($db_server,$db_user,$db_pass,$db);
	if(isset($_COOKIE['NITK']))
	{
		$value = $_COOKIE['NITK'];
		$result = $db->query("SELECT * FROM `lg_details` WHERE `cookie` = '$value'");

		if(mysqli_num_rows($result)==0)
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







<!DOCTYPE html>	
<html>
<html lang="en">
<head>
  <title>
			NITK PORTAL
		</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="bootstrap-3.3.6/css/bootstrap.min.css">
  		<script src="jquery/jquery.js"></script>
  		<script src="bootstrap-3.3.6/js/bootstrap.min.js"></script>
        
</head>
<body>

	<div class="col-sm-4"></div>
    
    <div class="jumbotron col-sm-4">
    
            Please Verify Your Email to Fill the forms.
            
        
    </div>
    

</body>
</html>