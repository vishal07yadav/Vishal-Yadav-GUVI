<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
	<title>GUVI | Register</title>
	<link rel="shortcut icon" href="images/logo.ico">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
	<link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/register.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
  </head>

  <body class="size-1280">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">          
        <div class="top-nav"> 
          <!-- mobile version logo -->              
          <div class="logo hide-l hide-xl hide-xxl">
             <a href="http://www.guvi.in/" class="logo">
              <img class="logo-white" src="logo.png" alt="GUVI-logo">
			  <img class="logo-dark" src="logo.png" alt="GUVI-logo">
            </a>
          </div>                  
          <p class="nav-text"></p>
          
          <!-- left menu items -->
           <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
				<li><a href="index.php" style="font-size: 140%; color: black">Home</a></li>
				<li><a href="login.php" style="font-size: 140%; color: black">Login</a></li>
             </ul>
          </div>
		  
          <!-- logo -->
          <ul class="logo-menu">
            <a href="http://www.guvi.in/" class="logo" title="GUVI">
			  <img class="logo-white" src="images/logo.png" alt="GUVI-logo">
			  <img class="logo-dark" src="images/logo.png" alt="GUVI-logo">
            </a>
          </ul>
          
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
				<li><a href="register.php" style="font-size: 140%; color: black">Register</a></li>
				<li><a href="queries.php" style="font-size: 140%; color: black">Queries</a></li>
             </ul> 
          </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <section class="section-top-padding background-white" style="padding-bottom: 100px;">
        <div class="line text-center">
          <br><br><br><h2 class="text-dark text-size-50 text-m-size-40"><b>REGISTER</b></h2>
          <hr class="break background-primary break-small break-center margin-bottom-50">
        </div>
        <div class="line">
          <div class="margin2x">
            <div class="row" style="margin: 5% 0 5% 0; color: #28a5df">
				<div class="col-xs-4 col-lg-4"></div>
				<div class="col-xs-6 col-lg-6" style="text-align: center">
					<form id="regisform" name="regisform" method="" action="">
					<p id="message"></p>
						<input name="Name" type="text" id="Name" required class="login-form"  placeholder="Name"><br><br>
						<input name="Email" id="Email" type="email" class="login-form" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" placeholder="Email ID"><br><br>
						<input name="Mobile" type="text" id="Mobile" class="login-form"  required class="form-control" pattern="[0-9]{10}" size="10" id="mob" placeholder="Mobile"><br><br>
						<div class="gender">
							Gender: &nbsp;&nbsp;&nbsp;&nbsp;
							<input name="Gender" type="radio" id="Gender" required value="M">&nbsp;Male&nbsp;&nbsp;
							<input name="Gender" type="radio" id="Gender" required value="F">&nbsp;Female<br><br>
						</div>
						<select required class="login-form" name="Profession" id="Profession">
							<option value="S">Student</option>
							<option value="P">Professional</option>
						</select><br><br>
						<select required class="login-form" name="Language" id="Language">
							<option value="En">English</option>
							<option value="Hi">Hindi</option>
							<option value="Be">Bengali</option>
							<option value="Ta">Tamil</option>
							<option value="Te">Telugu</option>
							<option value="Ka">Kannada</option>
						</select><br><br>
						<input name="DOB" type="date" id="DOB" required class="login-form"  placeholder="Date Of Birth"><br><br>
						<input name="pwd" id="pwd" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="login-form" id="pwd" placeholder="Password"><br><br>
						<input name="Password" id="Password" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="login-form" id="conf-pwd" onblur="check()" placeholder="Re-enter Password"><br>
						<br><p id="errormsg" style="display:none;"></p><br><br>
						<p style="font-size: 110%; color: #3B5998"><strong><span style="color: red">NOTE: </span></strong> Password is case sensitive and it must contain at least one number, <br>one uppercase letter, one lowercase letter and at least 8 or more characters</p>
						<div id="formbuttons">
							<br>
							<input class="ContentButtons" type="button" onclick="insertData()" value="Register">&nbsp;
							<input name="reset" type="reset"  class="ContentButtons" id="reset" value="Reset" onclick="check()">
						</div>
					</form>
				</div>
				<div class="col-xs-2 col-lg-2"></div>
			</div>
          </div>
        </div>
      </section>
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
	  <div class="section-small-padding background-dark text-center">
		<b style="font-size: 125%; color: white;">Connect with us on:<b><br>
	  </div>
      <div class="background-primary padding text-center">
        <a href="https://www.facebook.com/guviofficial"><i class="icon-facebook_circle text-size-40"></i></a> &nbsp; 
        <a href="https://www.twitter.com/guviofficial"><i class="icon-twitter_circle text-size-40"></i></a> &nbsp;
       <a href="https://www.instagram.com/guviofficial"><i class="icon-instagram_circle text-size-40"></i></a>                                                                     
      </div>
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line"> 
          <div class="margin2x">
            <div class="s-12 m-6 l-4 xl-4">
               <h2 class="text-white text-strong">Branches</h2>
               <p>
					<b class="text-size-20">Chennai, TN: </b><br><i class="text-size-20"><span class="text-white">MAIN BRANCH </span><br>IITM Research Park - Phase 2 , <br>Module #7C , 3rd Floor, D Block, <br>Kanagam Road, Tharamani, <br>Chennai, Tamil Nadu - 600113</i> <br><br>
				</p>
            </div>
            <div class="s-12 m-6 l-4 xl-4">
               <h2 class="text-white text-strong margin-m-top-30">Support</h2>
               <a class="text-primary-hover" href="https://www.guvi.in/terms-of-service.html">Terms and Conditions</a><br>      
               <a class="text-primary-hover" href="https://www.guvi.in/jobs.html">Jobs</a><br>
			   <a class="text-primary-hover" href="https://www.guvi.in/team.html">Team</a><br>
			   <a class="text-primary-hover" href="queries.php">Submit Queries</a><br>
               <a class="text-primary-hover" href="https://www.guvi.in/career.html">Careers</a><br><br>
            </div>
            <div class="s-12 m-6 l-4 xl-4">
               
			   <h2 class="text-white text-strong margin-m-top-30">Contact Us</h2>
                <b><i class="text-white">GUVI</i><br>
				<i class="icon-sli-screen-smartphone text-primary"></i> +91 - 44 - 6646 9865</b><br>
				<b><i class="text-white">Arunprakash</i><br>
				<i class="icon-sli-screen-smartphone text-primary"></i> +91 - 9176054456</b><br>
                <a class="text-primary-hover" href="mailto:arunprakash@guvi.in"><i class="icon-sli-mouse text-primary"></i> arunprakash@guvi.in</a><br>
				<b><i class="text-white">Balamurugan</i><br>
				<i class="icon-sli-screen-smartphone text-primary"></i> +91 - 9840224594</b><br>
                <a class="text-primary-hover" href="mailto:spbalamurugan@guvi.in"><i class="icon-sli-mouse text-primary"></i> spbalamurugan@guvi.in</a><br>
				
            </div>
          </div>  
        </div>    
      </section>
      <div class="background-dark">
         <div class="line">
            <hr class="break margin-top-bottom-0" style="border-color: #777;">
         </div>
      </div>
      <!-- Bottom Footer -->
      <section class="padding-2x background-dark full-width">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-14">GUVI</p>
            <p class="text-size-14">IITM Research Park</p>
          </div>
          <div class="s-12 l-6">
            <b class="right text-size-13">Developed by <a class="text-primary-hover" href="https://www.linkedin.com/in/vishal07yadav/" title="Vishal Yadav">Vishal Yadav</a></b><br>
			<b class="right text-size-13">Copyright &copy; GUVI</a></b>
          </div>
        </div>  
      </section>
    </footer>
	
	<script type="text/javascript">
		$(function(){
			$("form[name='regisform']").validate({
				rules:{
					Name:{
						required: true,
						minlength: 3
					},
					Email:{
						required: true,
						email: true
					},
					Mobile = "required",
					Message = "required"
					Gender = "required",
					Profession = "required",
					Language = "required",
					DOB = "required",
					pwd:{
						required: true,
						minlength: 3
					},
					Password:{
						required: true,
						minlength: 3
					}
				},
				messages:{
					Name:{
						required: "Please enter your name",
						minlength: "Name should be atleast 3 characters long"
					},
					Email:{
						required: "Please enter your email address",
						email: "Please enter a valid email address"
					},
					Mobile: "Please enter your mobile number",
					Message: "Please enter the message"
				}
			});
		});
	</script>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>