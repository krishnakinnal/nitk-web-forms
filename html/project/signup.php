<?php

include 'redirect.php' ;

	    require_once "MAIL/vendor/autoload.php";

		$usr = $_POST['name'];
		$pas = $_POST['pwd'];
		$pas = hash('gost',$pas,false);
		$email = $_POST['eml'];
		$mob = $_POST['mob'];
		$hsh = hash('md5',$usr.$email,false);
				
		$db = new mysqli($db_server,$db_user,$db_pass,$db);
		$db->query("INSERT INTO `lg_details` VALUES (123, '$pas', '', 0)");
		$db->query("INSERT INTO `confirm` VALUES (123, '$hsh')");

		$mail = new PHPMailer;
        $mail->isSMTP();                                  
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;                          
        $mail->Username = "unknowntohel@gmail.com";                 
        $mail->Password = "Rumour_22695";                           
        $mail->SMTPSecure = "tls";                           
        $mail->Port = 587; 

        $mail->From = "unknowntohel@gmail.com";
        $mail->FromName = "NITK PORTAL";

        $mail->addAddress($email, "Hello ".$usr);

        $mail->isHTML(true);
        
        $txt = "Please Click on the link to activate the account<br>";
		$txt = $txt."<a href=\"localhost/verify.php?chk=".$hsh."&id=123\"> Click Here</a>";

        $mail->Subject = "Email Conformation for NITK PORTAL";
        $mail->Body = $txt;
        $mail->AltBody = "This is the plain text version of the email content";
    
        if(!$mail->send()) 
        {
            header("refresh:3;url=".$index1);
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;

        } 
        else 
        {
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
    
            Email Conformation has been sent to your email<br>
            Please Verify Your Email to Fill the forms.<br>
            Redirecting to the Login Page . . . .
        
    </div>
    

</body>
</html>   
        ';
            exit;
        }	

   


?>
