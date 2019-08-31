<!DOCTYPE>
<html lang="en">
<head>
	<title> PORTFOLIO</title>
	    <meta charset="utf-8">
	    <meta name="keywords" content="LSPU Clinic System, MedAPP">
	    <meta name="description" content="LSPU Clinic is for Scheduling medical and check up">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	    <script  src="js/jquery.min.js"></script>
	    <script  src="js/bootstrap.bundle.js"></script>
			<script>
			$(document).ready(function(){
						$("#showsb").hide();

				$("#mobnavbtn").click(function(){
					$("#showsb").toggle(200);
				});
				$("#contactea").css({"display":"none"});
				$("#contactnum").css({"display":"none"});
				$("#contactbtn").click(function(){
					$("#contactnum").toggle(200);
					$("#contactea").toggle(200);
				});
				$("#navmob").click(function(){
					$(".sidebar").toggle(2000);
				});
			});

			$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
		});
			</script>
			<style>
			a{
				color: rgb(218, 218, 218);
				text-decoration: none;
			}
			a:hover{
				color: rgb(218, 218, 218);
				text-decoration: none;
			}
			</style>
</head>
<body style="background-image: linear-gradient(rgba(162, 218, 255, 0.99),rgba(29, 66, 91, 0.99));">

		<div class="porfoliomgrid">
			<div class="porfolibox porfoliogrid1" style="background-image:url(images/a.jpg);">
				<div class="card" style="width:100%; background:transparent; border:none;">
						<img class="card-img-top" style="width:130px;  border-radius:100px; margin:auto;" src="images/myimages1.jpg" alt="jomar valenzuela" >

						<div class="card-body">
							 <h4 class="card-title">Jomar Bernadas Valenzuela</h4>
							 <div class="card-text">
							 	WEB DEVELOPER
							 </div>
									<div class="card-text A14 mb-2 mt-2">
										Bachelor of Science in Information Techonology (Fresh Graduate)
									</div>
									<div class="card-text" style="margin:0;">
										<div style="width:68%; float:left;">
										<ul class="navmob" style="width:100%;">
											<li>
											 <a href="#" title="Mobile Number (TNT)"   data-toggle="popover" data-content="+639120873557"><img src="images/cont.png" width="30px" /></a>
											</li>
											<li>
												<a href="https://www.facebook.com/good.game03"> <img src="images/fb.png" width="30px" /> </a>
											</li>
											<li>
												<a href="#" title="Mail me" data-toggle="popover" data-content="jomar.valenzuela@lspu.edu.ph"><img src="images/gmail.ico" width="30px" /></a>
											</li>
										</ul>
									</div>
									<div id="mobnavbtn">
										<span></span>
										<span></span>
										<span></span>
									</div>
									<br />
									<!-- <button class="btn btn-primary" id="navmobbtn">Menu</button> -->
									<ul class="mobnav"  id="showsb">
										<a href="index.php"><li> SERVICE OFFER</li> </a>
										<a href="portfolio.php"><li> PORTFOLIO</li> </a>
										<a href="cert.php"><li> CERTIFICATES</li> </a>
									</ul>

								</div>
									<ul class="sidebar">
										<a href="index.php"><li> SERVICE OFFER</li> </a>
										<a href="portfolio.php"><li> PORTFOLIO</li> </a>
										<a href="cert.php"><li> CERTIFICATES</li> </a>
										<li id="contactbtn"> CONTACT ME</li>
										<li id="contactnum"><span style="padding-left:5px;"> <img src="images/contnum.png" style="width:20px;" /> +639120873557 </span></li>
										<li id="contactea"><span style="padding-left:5px;"> <img src="images/contemail3x.png" style="width:20px;"/> Jomar.valenzuela@lspu.edu.ph  </span></li>
									</ul>
						</div>

				</div>
			</div>
			<div class="porfolibox porfoliogrid2">
					<div class="innnermgrid">
						<div class="innerbox innergrid1">
							<h1> MY PORTFOLIO</h1>
							<p>
							I started being a Web Developer last 2018 when i am a 3rd year student.
							</p>
							<p>
							<strong> I have maintained and developed simple project like Management System, Inventory System and Reservation System from scratch, </strong>
							 carrying the developement of its front-end and back-end.
							</p>
						 </div>
						<div class="innerbox innergrid2"> </div>
					</div>
					<div class="innnermgrid">
						<div class="innerbox innergrid1">
							<h1 style="color: rgb(15, 76, 79);"> FRONT-END WEB DEVELOPMENT</h1>
							<p>
						In Fron-End Developing im using the three primary coding languages
						and its additional tools.
							</p>
							<ul style="font-weight:bold;">
								<li>HTML</li>
								<li>CSS</li>
								<li>JavaScript</li>
								<li>Jquery Library </li>
								<li>bootstrap Framework </li>
							</ul>
						</div>
						<div class="innerbox innergrid2"></div>
					</div>

			</div>
		</div>
</body>
</html>
