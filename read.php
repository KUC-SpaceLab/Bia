<!DOCTYPE html>
<html>
		<head>
			 <!--WebPage Title -->
		     <title>Bia - Question Moderation System</title>
			 
			 <!-- Meta Tags -->
			 <meta charset="UTF-8">
			 <meta name="description" content="A question moderation System">
			 <meta name="keywords" content="Bia, Question system, spacelab">
			 <meta name="author" content="SpaceLab">
			 <meta name="viewport" content="width=device-width, initial-scale=1.0">
			 <!-- Chrome, Firefox OS, Opera and Vivaldi -->
		     <meta name="theme-color" content="#0084ff">
		     <!-- Windows Phone -->
		     <meta name="msapplication-navbutton-color" content="#0084ff">
		     <!-- iOS Safari -->
		     <meta name="apple-mobile-web-app-status-bar-style" content="#0084ff">
			 
			 <!-- Style sheet --->
			 <link rel="stylesheet" type="text/css" href="assests/css/style.css">
			 
		</head>

		<body onload="checkcookie(); update();">
			
			<!-- White Backgroud behing Login Form -->
			<div id="whitebg"></div>
			
			<!-- Login Form -->
			<div id="loginbox">
				<h2>Enter Your Fullname:</h2>
				<p><input type="text" name="name" id="name" placeholder="Enter Your Fullname" class="msginput"></p>
				<br>
				<h2>Enter Name of Your School / Organization:</h2>
				<p><input type="text" name="school" id="school" placeholder="Enter Name of Your School / Organization" class="msginput"></p>
				
				<p class="buttonp">
					<button onclick="login()">Join Now</button>
				</p>
			</div>
			<!-- End of Login Form -->

			<!-- Messageges Container -->
			<div class="msg-container">
				<div class="header">
					<img src="assests/img/bia.png" width="37px">Bia
				</div>
				<div class="msg-area" id="msg-area"></div>
				
			</div>
			<!-- End of Message Container -->
			
		

			 <!-- Javascript --->
			<script src="assests/js/readfunctions.js"></script>
					

		</body>
</html>