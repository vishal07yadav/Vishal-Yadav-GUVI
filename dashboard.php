<?php
	session_start();
	include("fetch.php");
?>
<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
	<title>GUVI | Dashboard</title>
	<link rel="shortcut icon" href="images/logo.ico">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
  </head>

  <body class="size-1280">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <?php
	 if(isset($_SESSION['id']))
	  {
	  ?>
	  <nav class="background-transparent background-primary-dott full-width sticky">          
        <div class="top-nav"> 
          <!-- mobile version logo -->              
          <div class="logo hide-l hide-xl hide-xxl">
             <a href="http://www.guvi.in/" class="logo" title="GUVI">
              <img class="logo-white" src="images/logo.png" alt="GUVI-logo">
			  <img class="logo-dark" src="images/logo.png" alt="GUVI-logo">
            </a>
          </div>                  
          <p class="nav-text"></p>
          
          <!-- left menu items -->
           <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
                <li><a href="index.php" style="font-size: 140%; color: black">Home</a></li>
				<li><a href="dashboard.php" style="font-size: 140%; color: black">Dashboard</a></li>
				<li><a href="update.php" style="font-size: 140%; color: black">Update</a></li>
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
				<li><a href="queries.php" style="font-size: 140%; color: black">Queries</a></li>
				<li><a href="password.php" style="font-size: 140%; color: black">Change Password</a></li>
				<li><a href="logout.php" style="font-size: 140%; color: black">Logout</a></li>
             </ul> 
          </div>
        </div>
      </nav>
	  <?php
	}
	else
	  {	
		header('Location: index.php');
	  }
	  ?>
    </header>

    <!-- MAIN -->
    <main role="main">    
      <!-- Header -->
      <header class="section-top-padding background-image text-center">
        <h1 class="text-extra-thin text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-100 margin-top-250" style="font-weight: bold;">
          Hi <?php echo $name."!";?><br><br>
		  Welcome to your Dashboard
        </h1><br><br>
		 <a target="_blank" href="images/User-Photo.jpg">
			<img id="thumbnail" src="images/User-Photo.jpg" class="center" alt="User" height="150px" width="150px" style="border-radius: 150px; z:1; border: 5px solid black;">
		</a>
       <i class="slow icon-sli-arrow-down text-white margin-top-20 text-size-30"></i>
      </header>
 
      <section class="section-top-padding background-white" style="padding-bottom: 100px;">
        <div class="line">
			<h2 class="text-dark text-size-40 text-center text-m-size-30"><b>PERSONAL DETAILS</b></h2>
			<hr class="break background-primary break-small break-center margin-bottom-50">	
			
		<div class="row" style=" padding-left: 0; margin-left: 0;">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="margin: 2% 2% 0 10%;">
				<table class="text-size-20">
				<tr style="background-color: white; border: none;">
					<td>     </td>
					<td class="text-left" style="background-color: white">Name</td>
					<td class="text-left"><?php echo $name;?></td>
				</tr>
				<tr style="background-color: white">
					<td>     </td>
					<td class="text-left" >Email ID</td>
					<td class="text-left" ><?php echo $email;?></td>
				</tr>
				<tr style="background-color: white">
					<td>     </td>
					<td class="text-left" >Mobile No.</td>
					<td class="text-left" ><?php echo $mobile;?></td>
				</tr>
				<tr style="background-color: white">
					<td>     </td>
					<td class="text-left" >Gender</td>
					<td class="text-left" ><?php 
					if($gender=="M")
						echo "Male";
					else
						echo "Female";
					?></td>
				</tr>
				<tr style="background-color: white">
					<td>     </td>
					<td class="text-left" >Type</td>
					<td class="text-left" ><?php 
					if($profession=="S")
						echo "Student";
					else
						echo "Professional";?></td>
				</tr>
				<tr style="background-color: white">
					<td>     </td>
					<td class="text-left" >Languge</td>
					<td class="text-left" ><?php 
					if($language=="En")
						echo "English";
					if($language=="Hi")
						echo "Hindi";
					if($language=="Be")
						echo "Bengali";
					if($language=="Ta")
						echo "Tamil";
					if($language=="Te")
						echo "Telugu";
					if($language=="")
						echo "Kannada";
					?></td>
				</tr>
				<tr style="background-color: white">
					<td>     </td>
					<td class="text-left" >D.O.B.</td>
					<td class="text-left" ><?php echo $dob;?></td>
				</tr>
				</table>
				<br><br><br>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
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
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
	</body>
</html>