<!DOCTYPE html>
<?php

	include '../../redirect.php' ;
	
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
<html lang="en">
<head>
  <title>
			MBA WEB-FORM
		</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="../../bootstrap-3.3.6/css/bootstrap.min.css">
  		<script src="../../jquery/jquery.js"></script>
  		<script src="../../bootstrap-3.3.6/js/bootstrap.min.js"></script>
  <style>
    
    .row.content {height: 4650px;}
    
    
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
				top: 150px;
                left: 50px;
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
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../index.php">NITK PORTAL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="../../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
	
<div class="container-fluid" style="margin-top:20px;">
  <div class="row content">
    <div class="col-sm-2 sidenav ">
            <br><br>
				<nav id="myScrollspy">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#section1">Section 1</a></li>
						<li><a href="#section2">Section 2</a></li>
						<li><a href="#section3">Section 3</a></li>
						<li><a href="#section4">Section 4</a></li>
						<li><a href="#section5">Section 5</a></li>
						<li><a href="#section6">Section 6</a></li>
						<li><a href="#section7">Section 7</a></li>
						</ul>
						</li>
					</ul>

				</nav>
					
		<br>
      <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog" style="width:50%;">
    
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">Documents(self-attested photo copies)to be enclosed(original to be submitted at the time of admission)with the application.</h3>
							</div>
							<div class="modal-body">
								
							<ol class="">
								<li> Copy of the Marks Card of Qualifying Exam (all years / all semesters)</li>
								<li> Photo copy of Hall ticket/Admit Card CAT- 2015/GMAT-2015.</li>
								<li> Copy of the CAT/GMAT 2015 Score Card.</li>
								<li> S.S.L.C./ X Std. Marks Card (for Date of Birth).</li>
								<li> Certificate by employer ascertaining the duration of Work Experience.</li>
								<li> Caste Certificate issued by competent authority for SC/ST or OBC.</li>
								<li> Certificate for the Physically Challenged, if applicable.</li>
							</ol>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
      
					</div>
				</div>
    </div>

    <div class="col-sm-10">
      <div class="panel panel-primary" style="width:100%;">
      			<div class="panel-heading">Fill up the Details</div>
      		<div class="panel-body">
			<form action="mba-generate.php" method="post">
			<div class="jumbotron" id="section1">
  			<fieldset class="form-group">
    				<label class="col-sm-5">Enter Your Name (in block letters as mentioned in Degree Certificate)</label>
    				<input type="text" class="col-sm-6" id="nme1" name="jumbo_one[]" require><br><br><br>
  			
    			<label class="col-sm-5" for="addr">Enter Your Permanent Address</label>
				<input class="col-sm-6" id="strtaddr" name="jumbo_one[]" value="" type="text" placeholder="Street Address" require><br><br>
				
				<div class="col-sm-5"></div>
				<input id="addrline2" class="col-sm-6" name="jumbo_one[]" value="" placeholder="Address Line 2" type="text" require><br><br>
				
				<div class="col-sm-5"></div>
				<input id="city" name="jumbo_one[]" class="col-sm-3" value="" placeholder="City" type="text" require>
				<input id="state" name="jumbo_one[]" class="col-sm-3" value="" placeholder="State" type="text" require><br><br>

				<div class="col-sm-5"></div>
				<input id="pincode" name="jumbo_one[]" class="col-sm-3" value="" placeholder="pincode" type="number" require>
				<input id="country" name="jumbo_one[]" class="col-sm-3" value="" placeholder="country" type="text" require><br><br><br>
			
    			<label class="col-sm-5" for="addr">Enter Your Correspondence Address</label>
				<input class="col-sm-6" id="strtaddr" name="jumbo_one[]" value="" type="text" placeholder="Street Address" require><br><br>
				
				<div class="col-sm-5"></div>
				<input id="addrline2" class="col-sm-6" name="jumbo_one[]" value="" placeholder="Address Line 2" type="text" require><br><br>
				
				<div class="col-sm-5"></div>
				<input id="city" name="jumbo_one[]" class="col-sm-3" value="" placeholder="City" type="text" require>
				<input id="state" name="jumbo_one[]" class="col-sm-3" value="" placeholder="State" type="text" require><br><br>

				<div class="col-sm-5"></div>
				<input id="pincode" name="jumbo_one[]" class="col-sm-3" value="" placeholder="pincode" type="number" require>
				<input id="country" name="jumbo_one[]" class="col-sm-3" value="" placeholder="country" type="text" require><br><br><br>
			
				<label class="col-sm-5" for="telephone">Telephone (with STD code) </label>
				<div></div>
				<input class="col-sm-3" id="telephone" name="jumbo_one[]" type="number" maxlength="10" value="" require><br><br>
		 
				<label class="col-sm-5" for="mob">Mobile Number </label>
				<div></div>
				<input id="mob" name="jumbo_one[]" class="col-sm-3" type="number" maxlength="10" value="" require> <br><br>
		 
				<label class="col-sm-5" for="email">Email </label>
				<div></div> 
				<input id="email" name="jumbo_one[]" class="col-sm-3" type="email" placeholder="abc@example.com" require> 
			</fieldset>
			</div>
			<br><br><br><br>
			<div class="jumbotron" id="section2">
  			<fieldset class="form-group">
				<label class="col-sm-5">Name of Father/Mother (or Guardian if the parents are not alive, state relationship of Guardian)</label>
				<div></div>
				<input id="fathaddr" name="jumbo_two[]" class="col-sm-6" type="text" value="" require> <br><br><br>
				
				<label class="col-sm-5" for="addr">Enter Address of Father/Mother/Guardian</label>
				<input class="col-sm-6" id="strtaddr" name="jumbo_one[]" value="" type="text" placeholder="Street Address" require><br><br>
				
				<div class="col-sm-5"></div>
				<input id="addrline2" class="col-sm-6" name="jumbo_one[]" value="" placeholder="Address Line 2" type="text" require><br><br>
				
				<div class="col-sm-5"></div>
				<input id="city" name="jumbo_one[]" class="col-sm-3" value="" placeholder="City" type="text" require>
				<input id="state" name="jumbo_one[]" class="col-sm-3" value="" placeholder="State" type="text" require><br><br>

				<div class="col-sm-5"></div>
				<input id="pincode" name="jumbo_one[]" class="col-sm-3" value="" placeholder="pincode" type="number" require>
				<input id="country" name="jumbo_one[]" class="col-sm-3" value="" placeholder="country" type="text" require><br><br><br>				  
		 
				<label class="col-sm-5" >Occupation of Father/Guardian</label>
				<div></div>
				<input name="jumbo_two[]" class="col-sm-3" type="text" value="" require> <br><br><br>
		 		<label class="col-sm-5">Annual Income </label>
				<div></div>
				<input name="jumbo_two[]" class="col-sm-3" type="number" value="" require> 
		 
			</fieldset>
			</div>
			<br><br><br><br>
			<div class="jumbotron" id="section3">
  			<fieldset class="form-group">
				<label class="col-sm-5">Religion </label>
				<div></div>
				<input name="jumbo_three[]" class="col-sm-3" type="text" value="" require> <br><br>
		 	
				<label class="col-sm-5">Caste/Subcaste </label>
				<div></div>
				<input name="jumbo_three[]" class="col-sm-3" type="text" value="" require> <br><br>
		 
				<label class="col-sm-5">Do you belong to Scheduled Caste/Tribe/OBC?</label>
				<label class="radio-inline"><input type="radio" name="jumbo_three_check1" value="Yes" require>Yes</label>
				<label class="radio-inline"><input type="radio" name="jumbo_three_check1" value="No" require>No</label><br><br>
				
				<label class="col-sm-5">If Yes above, which?</label>
				<label class="radio-inline"><input type="radio" name="jumbo_three_check2" value="SC">Scheduled Caste</label>
				<label class="radio-inline"><input type="radio" name="jumbo_three_check2" value="ST">Scheduled Tribe</label>
				<label class="radio-inline"><input type="radio" name="jumbo_three_check2" value="OBC">OBC</label>
				
				
			</fieldset>
			</div>
			<br><br><br><br>
			<div class="jumbotron" id="section4">
  			<fieldset class="form-group">
				<label class="col-sm-5">Place of Domicile </label>
				<div></div>
				<input name="jumbo_four[]" class="col-sm-3" type="text" maxlength="255" value="" require> <br><br>
		 
				<label class="col-sm-5">Nationality </label>
				<div></div> 
				<input id="element_21" name="jumbo_four[]" class="col-sm-3" type="text" value="" require> <br><br>

				<label class="col-sm-5">Date of Birth </label>
			<input name="jumbo_four[]" class="col-sm-1" size="2" maxlength="2" placeholder="DD" type="text" require>
			<div class="input-group-addon col-sm-1">/</div>
			<input name="jumbo_four[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text" require>
			<div class="input-group-addon col-sm-1">/</div>
	 		<input name="jumbo_four[]" class="col-sm-1" size="4" maxlength="4" placeholder="YYYY" type="text" require> <br><br>

			<label class="col-sm-5">Do you belong to the Phsically Challenged(PC) Group?</label>
			<label class="radio-inline"><input type="radio" name="jumbo_four_check[]" value="Yes" require>Yes</label>
			<label class="radio-inline"><input type="radio" name="jumbo_four_check[]" value="No" require>No</label><br><br>
				
			</fieldset>
			</div>
			<br><br><br><br>
			<div class="jumbotron" id="section5">
  			<fieldset class="form-group">
				<label class="col-sm-5" >Qualifying Examination passed </label>

				<span class="col-sm-6">
				 <label class="radio-inline"><input id="be" type="radio" name="jumbo_five_check[]" value="B.E">B.E</label>
				 <label class="radio-inline"><input id="btech" type="radio" name="jumbo_five_check[]" value="B.Tech">B.Tech</label>
				 <label class="radio-inline"><input id="ba" type="radio" name="jumbo_five_check[]" value="B.A">B.A</label> 
				 <label class="radio-inline"><input id="bcom" type="radio" name="jumbo_five_check[]" value="B.Com">B.Com</label>
				 <label class="radio-inline"><input id="bca" type="radio" name="jumbo_five_check[]" value="BCA">BCA</label>
				 <label class="radio-inline"><input id="bsc" type="radio" name="jumbo_five_check[]" value="B.Sc">B.Sc</label> 
   				 <label class="radio-inline"><input id="bbm" type="radio" name="jumbo_five_check[]" value="BBM">BBM</label> 
				</span><br><br>
				<div class="col-sm-5"></div>
				<label class="col-sm-2">If any other, specify</label>
				<input id="jumbo_five_chk" name="date_words" class="col-sm-2" type="text" maxlength="255" value=""/><br><br><br>
				
				<label class="col-sm-5">Institution of study </label>
				<div></div>
				<input name="jumbo_five[]" class="col-sm-5" type="text" maxlength="255" value=""  require/> <br><br>
		 		
				<label class="col-sm-5" >Studied From</label>
				<input name="jumbo_five[]" class="col-sm-1" size="2" maxlength="2" placeholder="DD" type="text" require>
				<div class="input-group-addon col-sm-1">/</div>
				<input name="jumbo_five[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text" require>
				<div class="input-group-addon col-sm-1">/</div>
	 			<input name="jumbo_five[]" class="col-sm-1" size="4" maxlength="4" placeholder="YYYY" type="text" require><br><br>

				<label class="col-sm-5" >Studied To</label>
				<input name="jumbo_five[]" class="col-sm-1" size="2" maxlength="2" placeholder="DD" type="text" require>
				<div class="input-group-addon col-sm-1">/</div>
				<input name="jumbo_five[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text" require>
				<div class="input-group-addon col-sm-1">/</div>
	 			<input name="jumbo_five[]" class="col-sm-1" size="4" maxlength="4" placeholder="YYYY" type="text" require><br><br>	
				
				<label class="col-sm-5">Institution of study</label>
				<div></div>
				<input name="jumbo_five[]" class="col-sm-5" type="text" maxlength="255" value=""  require/> <br><br>
				
				<label class="col-sm-5" >Marks obtained in the Qualifying Examination (Bachelor’s Degree):</label> <br><br><br>
				<span class="alert alert-info">INFO: While computing percentage of marks (all years/semesters) of qualifying examination, only FIRST
					ATTEMPT marks should be taken into account.</span><br><br><br>
					<table class="table table-hover">
					<thead>
					  <tr>
					    <th>Semester</th>
					    <th>Year of passing</th> 
					    <th>Marks Obtained</th>
						<th>Max. Marks</th>
						<th>Percentage</th>
						<th>Class/Division</th>
					  </tr>
					 </thead>
					 <tbody>
 					 <tr>
 					   <td>1st</td>
 					   <td><input type="number" name="jumbo_five[]" require></td> 
 					   <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="number" name="jumbo_five[]" require></td> 
 					   <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="text" name="jumbo_five[]" require></td> 
 					 </tr>
 					 <tr>
 					   <td>2nd</td>
 					   <td><input type="number" name="jumbo_five[]" require></td> 
 					   <td><input type="number" name="jumbo_five[]" require></td>
					   <td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="text" name="jumbo_five[]" require></td> 
					  </tr>
					  <tr>
					    <td>3rd</td>
					    <td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="text" name="jumbo_five[]" require></td> 
 					 </tr>
 					 <tr>
 					   <td>4th</td>
					    <td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="number" name="jumbo_five[]" require></td> 
 					   <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="text" name="jumbo_five[]" require></td> 
					  </tr>
					  <tr>
 					   <td>5th</td>
					    <td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="text" name="jumbo_five[]" require></td> 
 					 </tr>
 					 <tr>
					    <td>6th</td>
					    <td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="text" name="jumbo_five[]" require></td> 
 					 </tr>
 					 <tr>
 					   <td>7th</td>
 					   <td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="number" name="jumbo_five[]" require></td> 
					    <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="text" name="jumbo_five[]" require></td> 
					  </tr>
					  <tr>
 					   <td>8th</td>
 					   <td><input type="number" name="jumbo_five[]" require></td> 
 					   <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="number" name="jumbo_five[]" require></td> 
 					   <td><input type="number" name="jumbo_five[]" require></td>
						<td><input type="text" name="jumbo_five[]" require></td> 
 					 </tr>
					</tbody>
					</table>
					<br>
				
				<label class="col-sm-5" >CAT Score And Percentile</label>
				<input name="catscore" class="col-sm-3" placeholder="Score" type="text">
				<input name="catpercent" class="col-sm-3" placeholder="percentile" type="text"><br><br>

				<label class="col-sm-5" >GMAT Score And Percentile</label>
				<input name="gmatscore" class="col-sm-3" placeholder="Score" type="text">
				<input name="gmatpercent" class="col-sm-3" placeholder="percentile" type="text"><br><br>

				<label class="col-sm-5" >CAT/GMAT Hall Ticket/ Admit Card/Test Registration No.</label>
				<input name="jumbo_five[]" class="col-sm-4" type="text" require><br><br>	

				<label class="col-sm-5" >No. Of Years and Months Worked(Enclose a certificate from the employer). </label>
				<input name="jumbo_five[]" class="col-sm-1" size="2" maxlength="2" placeholder="YY" type="text" require>
				<input name="jumbo_five[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text" require><br><br>

				<table class="table table-hover">
					<thead>
					  <tr>
					    <th>Sl. No.</th>
					    <th>Name of the Organization</th> 
					    <th>Designation</th>
						<th>No. of Years and Months</th>
					  </tr>
					  </thead>
					  <tbody>
					  <tr>
					    <td><input type="text" name="jumbo_five[]"></td> 
					    <td><input type="text" name="jumbo_five[]"></td>
						<td><input type="text" name="jumbo_five[]"></td> 
					    <td><input type="text" name="jumbo_five[]"></td> 
					  </tr>
					  <tr>
					    <td><input type="text" name="jumbo_five[]"></td> 
					    <td><input type="text" name="jumbo_five[]"></td>
					<td><input type="text" name="jumbo_five[]"></td> 
					    <td><input type="text" name="jumbo_five[]"></td> 
					  </tr>
					  <tr>
 					   <td><input type="text" name="jumbo_five[]"></td> 
 					   <td><input type="text" name="jumbo_five[]"></td>
						<td><input type="text" name="jumbo_five[]"></td> 
 					   <td><input type="text" name="jumbo_five[]"></td>
 					 </tr>
					 </tbody>
 					</table><br><br>
				
				<label class="col-sm-5">Specify choice of center for MBA selection process </label>

				<span class="col-sm-5">
				 <label class="radio-inline"><input type="radio" name="jumbo_five_centre[]" value="NITK" require>NITK, Surathkal</label>
				 <label class="radio-inline"><input type="radio" name="jumbo_five_centre[]" value="Delhi">New Delhi</label>
				</span><br><br>	

			</fieldset>
			</div>
			<br><br><br><br>
			<div class="jumbotron" id="section6">
  			<fieldset class="form-group">
				<h3 style="text-align:center;" >Demand Draft Details</h3><br><br>
						<label class="col-sm-5">Name of Issuing Bank </label>
						<input name="jumbo_six[]" class="col-sm-4" type="text" value="" require/> <br><br>
						
						<label class="col-sm-5">Drawn At </label>
						<input name="jumbo_six[]" class="col-sm-4" type="text" maxlength="255" value="" require/> <br><br>
						
						<label class="col-sm-5">DD Number </label>
						<input name="jumbo_six[]" class="col-sm-4" type="text" maxlength="255" value="" require/><br><br>
						
						<label class="col-sm-5" >DD Date</label>
						<input name="jumbo_six[]" class="col-sm-1" size="2" maxlength="2" placeholder="DD" type="text" require>
						<div class="input-group-addon col-sm-1">/</div>
						<input name="jumbo_six[]" class="col-sm-1" size="2" maxlength="2" placeholder="MM" type="text" require>
						<div class="input-group-addon col-sm-1">/</div>
						<input name="jumbo_six[]" class="col-sm-1" size="4" maxlength="4" placeholder="YYYY" type="text" require><br><br>	
						
						<label class="col-sm-5">Rupees </label>
						<div class="col-sm-1">
						<div class="input-group-addon ">Rs</div>
						</div>
						<input name="jumbo_six[]" class="col-sm-3" type="number" value="" require/><br><br>
						
	
			</fieldset>
			</div>
			<br><br><br><br>
			<div class="jumbotron" id="section7">
  			<fieldset class="form-group">
				<div style="text-align:center;">
		<h2>DECLARATION OF CANDIDATE</h2>
		I hereby declare that to the best of my knowledge, the particulars furnished in this application are correct.<br><br>
		I am willing to forfeit the seat secured for the course, if any information provided by me is false.<br><br>
		If selected for admission, I promise to abide by the condition of admission, Rules of the Institute, and Academic Regulations that govern the programme of study/research.<br><br>

				
			</fieldset>
			</div>
				<div class="col-sm-3"></div>
					<input name="jumbo_seven[]" class="col-sm-2" placeholder="Place" type="text" require>
					<div class="col-sm-2"></div>
					<input name="jumbo_seven[]" class="col-sm-2" type="text" placeholder="date"  require>
				</div><br>
		</div>

			<br><button type="submit" value="save" class="btn btn-primary button1" style="margin-left:30%;">Save</button>
			<button type="button" class="btn btn-primary button1" style="width:15%;" data-toggle="modal" data-target="#myModal">Required Documents</button>
			<button type="submit" value="submit" class="btn btn-primary button1">Submit</button>
			
		
		</div>
  		</form>
		</div>
		</div>
		<aside>
		</aside>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Copyright © 2014 National Institute of Technology Karnataka, Surathkal.</p>
</footer>

</body>
</html>
