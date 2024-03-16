<!DOCTYPE html>
<?php 
  include_once 'config.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/package.css">
	<title>Packages</title>
	<div class="topnav">

            <a href="#home">Home</a>

            <a href="#Gallery">Gallery</a>

            <a class="active" href="#Package">Packages</a>

            <a href="#AboutUs">About Us</a>

        </div>
</head>
<body>
		<h2 Class="heading">Select the Package that Suits You</h3>
			<p>All packages will include:<br/>
				DVD with High-Resolution Images and Print Release<br/>
				Onlike Gallery for Viewing and Ordering<br/>
				Phluffy and an Assistant.</p><br/><br/>

<div class="pkgcards">
<!-- going to add the packages with pretty js code -->	
				<div class="card" data-tilt data-tilt-scale="1.1" data-tilt-glare data-tilt-max-glare="0.5" data-tilt-easing="cubic-bezier(.03,.98,.52,.99)">
			<div class="card-image"></div>

			<div class="card-text">
				<span class="date">Simple half day Package</span>
				<h2>Package 1</h2>
				<p>6 Hours Continuous Coverage<br/>Rs.49,000</p>
			</div>
			<div class="card-stats">
				<div class="stat">
					<div class="value"> 6<sup></sup> </div>
					<div class="type"> Hours </div>
				</div>
				<div class="stat border">
					<div class="value"><sup></sup>1000 </div>
					<div class="type"> Pictures </div>
				</div>
				<div class="stat">
					<div class="value">45,000 </div>
					<div class="type"> Rupees </div>
				</div>		
			</div>
		</div>
		     
			   
<!-- 2nd card -->
		<div class="card" data-tilt>


			<div class="card-image"></div>
			<div class="card-text">
				<span class="date">half day and more</span>
				<h2>Package 2</h2>
				<p>8 Hours Continuous Coverage<br/>Engagement Session<br/>Rs.69,000</p>
			</div>
			<div class="card-stats">
				<div class="stat">
					<div class="value"> 8 </div>
					<div class="type"> Hours</div>
				</div>
				<div class="stat border">
					<div class="value"> Total </div>
					<div class="type"> Engagement </div>
				</div>
				<div class="stat">
					<div class="value"> 69,000 </div>
					<div class="type"> Rupees </div>
				</div>		
			</div>
		</div>				<div class="card" data-tilt data-tilt-scale="1.1" data-tilt-glare data-tilt-max-glare="0.5" data-tilt-easing="cubic-bezier(.03,.98,.52,.99)">
			<div class="card-image"></div>
<!-- 3st card -->
			<div class="card-text">
				<span class="date">Full day Package</span>
				<h2>Package 3</h2>
				<p>10 Hours Continuous Coverage<br/>Engagement Session<br/>Fine Art Album<br/>Rs.89,000</p>
			</div>
			<div class="card-stats">
				<div class="stat">
					<div class="value"> 10<sup></sup> </div>
					<div class="type"> Hours </div>
				</div>
				<div class="stat border">
					<div class="value"><sup></sup>Album </div>
					<div class="type"> Included </div>
				</div>
				<div class="stat">
					<div class="value">89,000 </div>
					<div class="type"> Rupees </div>
				</div>		
			</div>
		</div>
		     
			   
<!-- 4nd card -->
		<div class="card" data-tilt>


			<div class="card-image"></div>
			<div class="card-text">
				<span class="date">The Complete Capture</span>
				<h2>Package 4</h2>
				<p>12 Hours Continuous Coverage<br/>Engagement Session<br/>Fine Art Album, Canvas<br/>2 Parent Albums<br/> Rs.99,000</p>
			</div>
			<div class="card-stats">
				<div class="stat">
					<div class="value"> 12 </div>
					<div class="type"> Hours</div>
				</div>
				<div class="stat border">
					<div class="value"> Happy </div>
					<div class="type"> Ever After</div>
				</div>
				<div class="stat">
					<div class="value"> 99,000 </div>
					<div class="type"> Rupees </div>
				</div>		
			</div>
		</div>
</div>
		<script type="text/javascript" src="javascript/vanilla-tilt.min.js"></script>



<!-- the form starts here -->
		<div class="body" >
			<form class="form" method="POST">
				<h3>Select</h3>
				<div class="textbox">
					<label for="fname">First Name</label><br/>
					<input type="text" name="fname" value="" id="fname" placeholder="e.g. Dinuka"><br/>
				</div>
				<div class="textbox">
					<label for="lname">Last Name</label><br/>
					<input type="text" name="lastname" value="" id="lname" placeholder="e.g. Vidushan"><br/>
				</div>
				<div class="textbox">
					<label for="number">Contact No*:</label><br/>
					<input type="text" name="number" placeholder="076 385 9990" id="number"><br>
				</div>
				<div class="textbox">	
					<label for="email"></label>Email Address: <br/> 
					<input type="text" name="email" id="email" placeholder="e.g. DinugawithBigLense@gmail.com"><br>
				</div>
				<div class="radio">
					<label for="pkg">Selection:</label><br><br>
					<label for="pkg01"> package 01: </label>
					<input type="radio" name="pkg" value="pkg01"><br>
					<label for="pkg01"> package 02: </label>
					<input type="radio" name="pkg" value="pkg02"><br>
					<label for="pkg01"> package 03: </label>
					<input type="radio" name="pkg" value="pkg03"><br>
					<label for="pkg01"> package 04: </label>
					<input type="radio" name="pkg" value="pkg04"><br><br/><br>	
				</div>
				

				<label for="type">Select the type of the Event</label><br/>
					<select name="type">
						<option>Birthdays</option>
						<option>Interviews</option>
						<option>Weddings</option>
						<option>Events</option>
						<option>other</option>
					</select>
					<br/>
				<div class="cal">
					<label for="date">Select a date:</label><br>
  					<input type="date" id="date" name="date">
				</div>


					 <input class="submit" type="submit" value="Book">

			
			</form>

			<?php 
				if(isset($_REQUEST['submit'])){
					$fname = $_REQUEST['fname'];
					$lname = $_REQUEST['lname'];
					$number = $_REQUEST['number'];
					$email = $_REQUEST['email'];
					$pkg = $_REQUEST['pkg'];
					$type = $_REQUEST['type'];
					$date = $_REQUEST['date'];
				}

				$addDB = "INSERT INTO 'mydb'('No', 'FirstName', 'LastName', 'number', 'email', 'email', 'pkg', 'event', 'date') VALUES ( '', '$fname', '$lname', '$number', '$email', '$pkg', '$type', '$pkg')";
				
				if(mysqli_querry($conn, $toDB)){
					header("Refrest: 0.5; = package.php");
					echo "<script> alert('Succesfully Booked.')</script>";
				}else{
            		echo "<script>alert('Error Occured While Submission.')</script>";
			?>

		</div>	
</body>
</html>


<!-- things with all the divs for later -->
		<!-- <form method="">
			<div class="value">
				<label for="fname">First Name</label><br/>
				<div class="textbox">
					<input type="text" name="fname" value="" id="fname" placeholder="e.g. Dinuka"><br/>	
				</div>
			</div>
			
			<div class="value">
				<label for="lname">Last Name</label><br/>
				<div class="textbox">
					<input type="text" name="lastname" value="" id="lname" placeholder="e.g. Vidushan"><br/>
				</div>
			</div>
			
			<div class="value">
				<label for="number">Contact No*:</label><br/>
				<div>
				<input type="text" name="number" placeholder="076 385 9990" id="number"><br>
				</div>
			</div>
			
			<div class="value">
				<label for="email">Email Address:</label> <br/> 
				<div>
					<input type="text" name="email" id="email" placeholder="e.g. cameramen@gmail.com">
				</div>
			</div>
			
			<div>
				<p>select a package</p>
					<label for="pkg01"> package 01: </label>
					<input type="radio" name="pkg" value="pkg01"><br>
					<label for="pkg01"> package 02: </label>
					<input type="radio" name="pkg" value="pkg02"><br>
					<label for="pkg01"> package 03: </label>
					<input type="radio" name="pkg" value="pkg03"><br>
			</div>
			
			<div>
			<label for="type">Select the type of the Event</label>
				<select name="type">
					<option>Birthdays</option>
					<option>Interviews</option>
					<option>Weddings</option>
					<option>Events</option>
					<option>other</option>
				</select>				
				<br/>
			</div>
			
			<div class="book">
				 <input type="submit" value="Book">
			</div>	 -->

<!-- code that we might use for later //-->

		<!--<p>Select package 
			<select name="package">
				<option>Option 01</option>
				<option>Option 02</option>
				<option>Option 03</option>
			</select> 
		</p>
		<p>select what you need</p>//-->


	<!--
	<form method="GET" action="nextpage.html">
		<p> Enter username: <input type="text" size="20" maxlength="30" name="firstname"></p>
		<p> Enter Password: <input type="password" size="20" maxlength="12" name="password"> </p>
		<p>I agree to the terms and Conditions <input type="checkbox" name="t&c" value="t&c"></p>
		<p><input type="radio" name="card" value="v" >Visa</p>
		<p><input type="radio" name="card" value="m" >Master Card</p>
		
		<select name="extras" >
				<option selected>Electric windows</option>
				<option>AM/FM radio</option>
				<option>Turbocharger</option>
		</select>

		<input type="hidden" name="mail_to" value="myvalue">
		

		<textarea name="commens" rows=4 cols=20> Please send more infromation</textarea>
		<br><br>
		<input type="submit" name="submit" value="submit">
		<input type="reset" value="clear">

	</form>
	//-->