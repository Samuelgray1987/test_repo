<?php
function TnLHeader() {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Teaching and Learning</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/mPurpose-logo.png" alt="I heart T and L"></a></li>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="recentTraining.php">Recent Training</a>
						</li>
						<li class="has-submenu active">
							<a href="#">Learning Cycle +</a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner"> 
									<div>
										<h4>Lesson Model</h4>
										<ul>
											<li><a href="cycle.php">The Learning Cycle</a></li>
											<li><a href="index.php">Connect the Learning</a></li>
											<li><a href="index.phpl">Discuss Learning Objectives</a></li>
											<li><a href="index.php">Share New Information</a></li>
											<li><a href="index.php">Activate</a></li>
											<li><a href="index.php">Demonstrate New Understanding</a></li>
											<li><a href="reviewAndReflect.php">Review and Reflect</a></li>
										</ul>
									</div>
									<div>
										<h4>Underlying Elements</h4>
										<ul>
											<li><a href="#">Coop Learning</a></li>
											<li><a href="#">A2SL</a></li>
											<li><a href="#">PBL</a></li>
											<li><a href="#">ICT</a></li>
											<li><a href="#">Thinking Skills</a></li>
										</ul>
									</div>
									<div>
										<h4>T &amp; L Behaviours</h4>
										<ul>
											<li><a href="page-products-3-columns.html">Learner Behaviours (The 6 Rs)</a></li>
											<li><a href="page-products-4-columns.html">Teacher Behaviours (The 5 Es)</a></li>
										</ul>									
									</div>
								</div><!-- /mainmenu-submenu-inner -->
							</div><!-- /mainmenu-submenu -->
						</li>
						<li>
							<a href="credits.html">Learner Conversations</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

<?php
}
?>

<!--------------------------------------------------------------------------------------------------------- FOOTER --------------------------------------------------------------------------------------------------------------------->
<?php
function TnLFooter() {
?>

		    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Teaching at Walbottle</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.html"><img src="img/portfolio6.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="#page-blog-posts.html">Cooperative Learning</a></li>
							<li><a href="#page-services-3-columns.html">Connect the Learning</a></li>
							<li><a href="#page-faq.html">Recent Training</a></li>
							<li><a href="#page-products-3-columns.html">Lesson Model</a></li>
		    				<li><a href="#page-portfolio-3-columns-2.html">A2SL</a></li>		    				
		    				<li><a href="#page-pricing.html">PBL</a></li>
		    				
		    			</ul>
		    		</div>
		    		
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Contact the Team</h3>
		    			<p class="contact-us-details">
	        				<b>Mrs J Urwin<br/>
	        				<b>Mrs C Crooks<br/>
	        				<b>Mrs H Laycock<br/>
	        				<b>Mrs L Smith</b>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2014.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>

<?php
}
?>
<!--------------------------------------------------------------------------------------------------------- FOOTER --------------------------------------------------------------------------------------------------------------------->