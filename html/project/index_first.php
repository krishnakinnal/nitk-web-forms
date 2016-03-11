<!DOCTYPE html>
<?php

	include 'redirect.php' ;

	$db = new mysqli($db_server,$db_user,$db_pass,$db);
	if(isset($_COOKIE['NITK']))
	{
		$value = $_COOKIE['NITK'];
		$result = $db->query("SELECT * FROM `lg_details` WHERE `cookie` = '$value'");

		if(mysqli_num_rows($result)!=0)
		{
			header($choice);
			exit;
		}
		
	}
	else
	{
		
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
	<style>
    
    .row.content {height: auto;}
    
    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button { 
  					  -webkit-appearance: none;
  					  -moz-appearance: none;
  					  appearance: none;
  					  margin: 0; 
			}
			textarea {
 				  resize: none;
			}
			.button1{
				margin-left:50px;
				margin-bottom:50px;
				width:100px;	
			}
			body {
				position: relative;
			}
    

	   ul.nav-pills {
				top: 20px;
				position: fixed;
			}
			.form-horizontal{
				margin-left:150px;
			}
			.btn-btn-default{
				width:100px;
				height:40px;
			}
    }
  </style>
</head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NITK PORTAL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  
			
			<img class="img-circle" src="images/nitk.jpg" alt="NITK" width="50%" height="50%">
				
 


<footer class="container-fluid" style="margin-top:10%;">
  <p>Copyright &copy; 2014 National Institute of Technology Karnataka, Surathkal.</p>
</footer>

</body>
</html>
<?php
	}
?>