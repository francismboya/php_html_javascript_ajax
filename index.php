
<?php 
require 'connect.php';
if(isset($_POST['email']) && isset($_POST['fname'])
	&& isset($_POST['lname']) && isset($_POST['contact'])
	&& isset($_POST['password'])&& isset($_POST['address']) && isset($_POST['contact'])
	 && isset($_POST['item']) && isset($_POST['comment']))
	{
		if(!empty($_POST['email']) && !empty($_POST['fname'])
	&& !empty($_POST['lname']) && !empty($_POST['contact'])
	&& !empty($_POST['password'])&& !empty($_POST['address']) && !empty($_POST['contact'])
	 && !empty($_POST['item']) && !empty($_POST['comment']))
	{
	$email=$_POST['email'];
	 $fname=strtolower($_POST['fname']);
	$lname=strtolower($_POST['lname']);
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$item=$_POST['item'];
	$address=$_POST['address'];
	$comment=$_POST['comment'];
	$password=md5($password);
		$sql1="select email from application where email='".$email."'";
		$run_query=mysqli_query($con, $sql1);
		if(!empty($query=mysqli_num_rows($run_query)))
		{
			
			echo "<script>alert('partial registration succesfully!')</script>";
			?>
			<script>
				 myFunction()
function myFunction() {
  location.replace("vendorloged.php")
}
</script>
 <?php
		}
		else
		{
		$sql2="INSERT INTO application (email, firstname, lastname, phonenumber, address, item, comment, password) VALUES
		 ('$email', '$fname', '$lname', '$contact', '$address', '$item', '$comment', '$password')";
		
		 if($run_result=mysqli_query($con, $sql2))
		 {

		 $sql="select email from employee where email='".mysqli_real_escape_string($con, $email)."' and password='".mysqli_real_escape_string($con, $password)."'";
		$query_run=mysqli_query($con, $sql);
		if(!empty($query=mysqli_num_rows($query_run)))
		{
		 while($result=mysqli_fetch_assoc($query_run))
			{$email=$result['email'];
				#$_SESSION['email']=$email;
				echo "<script>alert(your application with '.$email.' successifully received')</script>";
				
		 }
		}
	}
		} }
		}?>
<!DOCTYPE html>
<html>
<head>
<title>Login System</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',       
							width: 'auto', 
							fit: true 
						});
					});
				   </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="main">
		<h1 style="color: red;">VENDOR MANAGEMENT SYSTEM</h1>
	 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"><img src="images/top-lock.png" alt=""/></div><span>Login</span></li>
				  <li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab"><div class="top-img"><img src="images/top-key.png" alt=""/></div><span>Forgot Password</span></li>
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><div class="top-img"><img src="images/top-note.png" alt=""/></div><span>Register</span>
			  	  	
				</li>
				  
				  <div class="clear"></div>
			  </ul>		
			  	 
			<div class="resp-tabs-container" style="background: blue;">
					
			 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<div class="buttons">
								
								
							</div>
							<i style="color: white; font-size: 18px ">vendor panel</i>
							<form name="login" action="vendorloged.php" method="post">
								<input type="text" class="text" name="uemail" value="" placeholder="Enter your registered email"  ><a href="#" class=" icon email"></a>

								<input type="password" value="" name="password" placeholder="Enter valid password"><a href="#" class=" icon lock"></a>

								<div class="p-container">
								
									<div class="submit two">
									<input type="submit" name="login" value="LOG IN" >
									<a href='employee.php' style='color:white'><input type="button" value="employee panel"></a>
									<a href='admin.php' style='color:white'><input type="button" name="signup"  value="admin panel"></a>
									</div>
									<div class="clear"> </div>
									
								</div>

							</form>
					</div>
				</div> 
			</div> 	
						        					 
				 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							<div class="buttons">
								
								
							</div>
							<form name="login" action="" method="post">
								<input type="text" class="text" name="femail" value="" placeholder="Enter your registered email" required  ><a href="#" class=" icon email"></a>
									
										<div class="submit three">
											<input type="submit" name="send" onClick="myFunction()" value="Send Email" >
										</div>
									</form>
									</div>
				         	</div>           	      
				        </div>	
				        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
					
						<div class="register">
							<form name="registration" method="post" action="index.php" enctype="multipart/form-data">
								<p>First Name </p>
								<input type="text" class="text" value=""  name="fname" required style="background-color: white;
								color:black;">
								<p>Last Name </p>
								<input type="text" class="text" value="" name="lname"  required style="background-color: white;
								color:black;">
								<p>Email Address </p>
								<input type="email" class="text" value="" name="email" style="background-color: white;
								color:black;" >
								<p>physical address </p>
								<input type="text" class="text" value="" name="address"  required style="background-color: white;
								color:black;">
										<p>Contact No. </p>
										
								<input type="text" value="" name="contact"  required style="background-color: white;
								color: black;">
								<p>trade item </p>
								<select id='item' name="item" placeholder='item' style="background-color: green;
								color:white;">
			<option value='moto'>motocyle spare part</option>
			<option value='tyre'>car tyre</option>
			<option value='trecter'>tracter engine</option>
			<option value='toyota'>brand new toyota's car</option>
		</select><br>
		<p style="color:yellow">WHY YOU WANT TO WORK WITH US</p>
								<input type="textarea" style="background-color: white; height: 60px;
								color:black;" class="text" value="" name="comment"  required >
								<p>Password </p>
								<input type="password" value="" name="password" required style="background-color: white;
								color:black;">
								<div class="sign-up">
									<input type="reset" value="Reset">
									<input type="submit" name="signup"  value="apply" >
									<div class="clear"> </div>
								</div>
							</form>

						</div>
					</div>
				</div>	
				     </div>	
		        </div>
	        </div>
	     </div>

</body>
</html>
