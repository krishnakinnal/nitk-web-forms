<!DOCTYPE html>
<html>
	<head>
		<title>
			MBA WEB-FORM
		</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="bootstrap-3.3.6/css/bootstrap.min.css">
  		<script src="jquery/jquery.js"></script>
  		<script src="bootstrap-3.3.6/js/bootstrap.min.js"></script>
		<style>
			header { 
				background: url(images/nitk.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			.form-horizontal{
				margin-left:150px;
			}
			.btn-btn-default{
				width:100px;
				height:40px;
			}
			.panel-footer{
				margin-top:13.5%;		
			}	
			.col-sm-3-adjustment{
				width:20px;
			}
			.input[type=number]::-webkit-inner-spin-button, 
			.input[type=number]::-webkit-outer-spin-button { 
  					  -webkit-appearance: none;
  					  -moz-appearance: none;
  					  appearance: none;
  					  margin: 0; 
			}
			textarea {
 				  resize: none;
			}
			.button1{
				margin-left:300px;
				margin-bottom:50px;
				width:100px;	
			}
		</style>
		
	</head>
	<body>
		<header>
		</header>

		<div class="container">
		<div class="panel panel-primary">
      			<div class="panel-heading">Fill up the Details</div>
      		<div class="panel-body">
			<form action="test.php" method="post">
			<div class="jumbotron">
  			<fieldset class="form-group">
    				<label class="col-sm-6">Enter Your Name (AS MENTIONED IN DEGREE CERTIFICATE)</label>
    				<input type="text" class="col-sm-3" id="nme1" name="field[]" placeholder="Enter First Name">
				<input type="text" class="col-sm-3" id="nme2" name="field[]" placeholder="Enter Last Name">
    			 <!--       <small class="text-muted">We'll never share your email with anyone else.</small> -->
  			</fieldset>
			</div>
			<div class="jumbotron">
  			<fieldset class="form-group">
    				<label class="col-sm-6" for="addr">Enter Your Permanent Address</label>
				<input class="col-sm-6" id="strtaddr" name="field[]" value="" type="text">		
				<span class="col-sm-6"></span><small class="text-muted">Street Address</small><br>
				
				<div class="col-sm-6"></div>
				<input id="addrline2" class="col-sm-6" name="field[]" value="" type="text">
				<span class="col-sm-6"></span><small class="text-muted">Address Line 2</small><br>
				
				<div class="col-sm-6"></div>
				<input id="city" name="field[]" class="col-sm-3" value="" type="text">
				<input id="state" name="field[]" class="col-sm-3" value="" type="text">

				<div class="col-sm-6"></div>
				<div class="col-adjustment">
				<small class="text-muted">City</small>
				<small class="text-muted" style="margin-left:22.5%;">State</small>
				</div>

				<div class="col-sm-6"></div>
				<input id="pincode" name="field[]" class="col-sm-3" value="" type="text">
				<input id="country" name="field[]" class="col-sm-3" value="" type="text">

				<div class="col-sm-6"></div>
				<div class="col-adjustment">
				<small class="text-muted">Pincode</small>
				<small class="text-muted" style="margin-left:20.5%;">Country</small>
				</div>
			</fieldset>
			</div>
			<div class="jumbotron">
  			<fieldset class="form-group">
    				<label class="col-sm-6" for="addr">Enter Your Correspondence Address</label>
				<input class="col-sm-6" id="corraddr" name="field[]" value="" type="text">		
				<span class="col-sm-6"></span><small class="text-muted">Street Address</small><br>
				
				<div class="col-sm-6"></div>
				<input id="addrline2" class="col-sm-6" name="field[]" value="" type="text">
				<span class="col-sm-6"></span><small class="text-muted">Address Line 2</small><br>
				
				<div class="col-sm-6"></div>
				<input id="city" name="field[]" class="col-sm-3" value="" type="text">
				<input id="state" name="field[]" class="col-sm-3" value="" type="text">

				<div class="col-sm-6"></div>
				<div class="col-adjustment">
				<small class="text-muted">City</small>
				<small class="text-muted" style="margin-left:22.5%;">State</small>
				</div>

				<div class="col-sm-6"></div>
				<input id="pincode" name="field[]" class="col-sm-3" value="" type="text">
				<input id="country" name="field[]" class="col-sm-3" value="" type="text">

				<div class="col-sm-6"></div>
				<div class="col-adjustment">
				<small class="text-muted">Pincode</small>
				<small class="text-muted" style="margin-left:20.5%;">Country</small>
				</div>
			</fieldset>
			</div>
		
			<div class="jumbotron">
  			<fieldset class="form-group">
				<label class="col-sm-6" for="telephone">Telephone (with STD code) </label>
				<div></div>
				<input class="col-sm-3" id="telephone" name="field[]" type="text" maxlength="255" value=""/><br><br>
		 
				<label class="col-sm-6" for="mob">Mobile Number </label>
				<div></div>
				<input id="mob" name="field[]" class="col-sm-3" type="text" maxlength="255" value=""/> <br><br>
		 
				<label class="col-sm-6" for="email">Email </label>
				<div></div> 
				<input id="email" name="field[]" class="col-sm-3" type="email" placeholder="abc@example.com"/> 
			</fieldset>
			</div>
		
			<div class="jumbotron">
  			<fieldset class="form-group">
				<label class="col-sm-6">Name of Father/Mother (or Guardian if the parents are not alive, state relationship of Guardian)</label>
				<div></div>
				<input id="fathaddr" name="field[]" class="col-sm-6" type="text" value=""/> <br><br><br>
				
				<label class="col-sm-6" for="addr">Enter Address of Father/Mother/Guardian</label>
				<input class="col-sm-6" id="corraddr" name="field[]" value="" type="text">		
				<span class="col-sm-6"></span><small class="text-muted">Street Address</small><br>
				
				<div class="col-sm-6"></div>
				<input id="addrline2" class="col-sm-6" name="field[]" value="" type="text">
				<span class="col-sm-6"></span><small class="text-muted">Address Line 2</small><br>
				
				<div class="col-sm-6"></div>
				<input id="city" name="field[]" class="col-sm-3" value="" type="text">
				<input id="state" name="field[]" class="col-sm-3" value="" type="text">

				<div class="col-sm-6"></div>
				<div class="col-adjustment">
				<small class="text-muted">City</small>
				<small class="text-muted" style="margin-left:22.5%;">State</small>
				</div>

				<div class="col-sm-6"></div>
				<input id="pincode" name="field[]" class="col-sm-3" value="" type="text">
				<input id="country" name="field[]" class="col-sm-3" value="" type="text">

				<div class="col-sm-6"></div>
				<div class="col-adjustment">
				<small class="text-muted">Pincode</small>
				<small class="text-muted" style="margin-left:20.5%;">Country</small>	<br><br>
				</div>				  
		 
				<label class="col-sm-6" >Occupation of Father/Guardian</label>
				<div></div>
				<input name="field[]" class="col-sm-3" type="text" value=""/> <br><br><br>
		 		<label class="col-sm-6">Annual Income </label>
				<div></div>
				<input name="field[]" class="col-sm-3" type="text" value=""/> 
		 
			</fieldset>
			</div>
		
			<div class="jumbotron">
  			<fieldset class="form-group">
				<label class="col-sm-6">Religion </label>
				<div></div>
				<input name="field[]" class="col-sm-3" type="text" value=""/> <br><br>
		 	
				<label class="col-sm-6">Caste/Subcaste </label>
				<div></div>
				<input name="field[]" class="col-sm-3" type="text" value=""/> <br><br>
		 
				<label class="col-sm-6">Do you have copy of certificate?(If applicable)</label>
				<label class="checkbox-inline"><input type="checkbox" name="caste_cert[]" value="">Yes</label>
				<label class="checkbox-inline"><input type="checkbox" name="caste_cert[]" value="">No</label>
				
				
			</fieldset>
			</div>

			<div class="jumbotron">
  			<fieldset class="form-group">
				<label class="col-sm-6">Place of Domicile </label>
				<div></div>
				<input name="field[]" class="col-sm-3" type="text" maxlength="255" value=""/> <br><br>
		 
				<label class="col-sm-6">Nationality </label>
				<div></div> 
				<input id="element_21" name="field[]" class="col-sm-3" type="text" value=""/> <br><br>

				<label class="col-sm-6">Date of Birth </label>
			<input name="field[]" class="col-sm-1" size="2" maxlength="2" placeholder="DD" type="text">
			<div class="input-group-addon col-sm-1">/</div>
			<input name="field[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text">
			<div class="input-group-addon col-sm-1">/</div>
	 		<input name="field[]" class="col-sm-1" size="4" maxlength="4" placeholder="YYYY" type="text"> <br><br>

			<label class="col-sm-6">Date of Birth (in words) </label>
			<div></div>
			<input name="field[]" class="col-sm-6" type="text" maxlength="255" value=""/> <br><br>

			</fieldset>
			</div>

			<div class="jumbotron">
  			<fieldset class="form-group">
				<label class="col-sm-6" >Qualifying Examination passed </label>

				<span class="col-sm-6">
				 <label class="radio-inline"><input id="be" type="radio" name="Qexam[]">B.E</label>
				 <label class="radio-inline"><input id="btech" type="radio" name="Qexam[]">B.Tech</label>
				 <label class="radio-inline"><input id="ba" type="radio" name="Qexam[]">B.A</label> 
				 <label class="radio-inline"><input id="bcom" type="radio" name="Qexam[]">B.Com</label>
				 <label class="radio-inline"><input id="bca" type="radio" name="Qexam[]">BCA</label>
				 <label class="radio-inline"><input id="bsc" type="radio" name="Qexam[]">B.Sc</label> 
   				 <label class="radio-inline"><input id="bbm" type="radio" name="Qexam[]">BBM</label> 
				</span><br>
				<div class="col-sm-6"></div>
				<label class="col-sm-2">If any other, specify</label>
				<input id="Qexam" name="date_words" class="col-sm-2" type="text" maxlength="255" value=""/><br><br><br>
				
				<label class="col-sm-6">Institution of study </label>
				<div></div>
				<input name="field[]" class="col-sm-6" type="text" maxlength="255" value=""/> <br><br>
		 		
				<label class="col-sm-6" >Studied From</label>
				<input name="field[]" class="col-sm-1" size="2" maxlength="2" placeholder="DD" type="text">
				<div class="input-group-addon col-sm-1">/</div>
				<input name="field[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text">
				<div class="input-group-addon col-sm-1">/</div>
	 			<input name="field[]" class="col-sm-1" size="4" maxlength="4" placeholder="YYYY" type="text"><br><br>

				<label class="col-sm-6" >Studied To</label>
				<input name="field[]" class="col-sm-1" size="2" maxlength="2" placeholder="DD" type="text">
				<div class="input-group-addon col-sm-1">/</div>
				<input name="field[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text">
				<div class="input-group-addon col-sm-1">/</div>
	 			<input name="field[]" class="col-sm-1" size="4" maxlength="4" placeholder="YYYY" type="text"><br><br>	
				
				<label class="col-sm-6" >CAT Score And Percentile</label>
				<input name="field[]" class="col-sm-3" placeholder="Score" type="text">
				<input name="field[]" class="col-sm-3" placeholder="percentile" type="text"><br><br>

				<label class="col-sm-6" >GMAT Score And Percentile</label>
				<input name="field[]" class="col-sm-3" placeholder="Score" type="text">
				<input name="field[]" class="col-sm-3" placeholder="percentile" type="text"><br><br>

				<label class="col-sm-6" >CAT/GMAT Hall Ticket/ Admit Card/Test Registration No.</label>
				<input name="field[]" class="col-sm-4" type="text"><br><br>	

				<label class="col-sm-6" >No. Of Years and Months Worked</label>
				<input name="field[]" class="col-sm-1" size="2" maxlength="2" placeholder="YY" type="text">
				<input name="field[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text"><br><br>	
				
				<label class="col-sm-6">Specify choice of center for MBA selection process </label>

				<span class="col-sm-6">
				 <label class="radio-inline"><input id="Echoice1" type="radio" name="field[]">NITK, Surathkal</label>
				 <label class="radio-inline"><input id="Echoice2" type="radio" name="field[]">New Delhi</label>
				</span><br><br>	

			</fieldset>
			</div>

			<div class="jumbotron">
  			<fieldset class="form-group">
				<div style="text-align:center;">
		<h2>DECLARATION OF CANDIDATE</h2>
		I hereby declare that to the best of my knowledge, the particulars furnished in this application are correct.<br><br>
		I am willing to forfeit the seat secured for the course, if any information provided by me is false.<br><br>
		If selected for admission, I promise to abide by the condition of admission and Rules of the Institute, and the Academic 			Regulations that govern the programme of study/ research.<br><br>

				<div class="col-sm-3"></div>
				<input name="field[]" class="col-sm-3" placeholder="Place" type="text">
				<input name="field[]" class="col-sm-3" type="text" placeholder="date" >
				</div>
			</fieldset>
			</div>

		</div>
    		
  			<!--<button type="submit" class="btn btn-primary button1">Save</button>-->
			<button type="submit" class="btn btn-primary button1">Submit</button>

		</div>
  		</form>
			
		</div>
		<aside>
		</aside>
		<footer class="panel-footer">
			Copyright © 2014 National Institute of Technology Karnataka, Surathkal.
		</footer>
	</body>
</html>
