<?php
	
include 'redirect.php' ;

	$chk = $_GET['chk'];
	$id = $_GET['id'];
	
	$db = new mysqli($db_server,$db_user,$db_pass,$db);
	$result = $db->query("SELECT * FROM `confirm` WHERE `usr_id` = '$id'");
	if(mysqli_num_rows($result) > 0)
	{
        
		$row = mysqli_fetch_array($result);
		if(strcmp($row['auth'],$chk)==0)
		{
			$db->query("UPDATE `lg_details` SET `active` = 1 WHERE `usr_id` = '$id'");
            $db->query("DELETE `confirm` WHERE `usr_id` = '$id'");
			header("refresh:3;url=".$index1);
             echo '
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
    
    <div class="jumbotron col-sm-4" style="margin-top:20%;">
    
            Your Email has been confirmed<br>
            Please login using Email and password to Fill the forms.<br><br>
            Redirecting to the Login Page . . . .
        
    </div>
    

</body>
</html>   ';
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



?>