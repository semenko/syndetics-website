<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Clickloud</title>
	<link rel="shortcut icon" href="images/favicon.png" />
	
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css"/>
    <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
	
	<script src="js/belated_png.js" type="text/javascript"></script>
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="js/events.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.2.js" type="text/javascript"></script>
	<script src="js/jquery.anythingslider.js" type="text/javascript"></script>

   <script type="text/javascript">
    
        function formatText(index, panel) {
		  return index + "";
	    }
    
        $(function () {
        
            $('.anythingSlider').anythingSlider({
                easing: "easeInOutExpo",        // Anything other than "linear" or "swing" requires the easing plugin
                autoPlay: false,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not.
                delay: 1000,                    // How long between slide transitions in AutoPlay mode
                startStopped: true,            // If autoPlay is on, this can force it to start stopped
                animationTime: 900,             // How long the slide transition takes
                hashTags: true,                 // Should links change the hashtag in the URL?
                buildNavigation: false,          // If true, builds and list of anchor links to link to each slide
        		pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
        		startText: "Go",             // Start text
		        stopText: "Stop",               // Stop text
		        navigationFormatter: formatText       // Details at the top of the file on this use (advanced use)
            });
            
            $("#slide-jump").click(function(){
                $('.anythingSlider').anythingSlider(2);
            });
            
        });
    </script>
</head>

<!--[if IE 6]>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('.fix-this');
  DD_belatedPNG.fix('.arrow');
</script>
<![endif]--> 
		
<body>
	<div id="header_decorator">
		<div id="header_clouds">
			<div id="top-decorator" class="fix-this">
				<div class="page">
					<div id="header">
						<a href="index.php">
							<img src="images/logo.png" class="logo fix-this" alt="clickloud-logo"/>
						</a>
						<div class="options">
							<form id="search-form" class="fix-this" action="#">
								<input type="text" id="search-text"/>	
								<label id="search-label">search &amp; enter</label>
							</form>
							<ul id="navigation" class="fix-this">
								<li><a href="index.php" <?php if ($location == 'index') echo 'class="active"'; ?>>Home</a></li>
								<li><a href="services.php" <?php if ($location == 'services') echo 'class="active"'; ?>>Services</a></li>
								<li><a href="products.php" <?php if ($location == 'products') echo 'class="active"'; ?>>Products</a></li>
								<li><a href="customers.php" <?php if ($location == 'customers') echo 'class="active"'; ?>>Customers</a></li>
								<li><a href="company.php" <?php if ($location == 'company') echo 'class="active"'; ?>>Company</a></li>
								<li><a href="contact.php" <?php if ($location == 'contact') echo 'class="active"'; ?>>Contact</a></li>
							</ul>
						</div>
					</div>
					<div id="banner">
						<div class="intro">
							<h1>Clickloud company intro</h1>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						</div>
						<div class="presentation fix-this">
							<div class="anythingSlider">
        
          <div class="wrapper">
            <ul>
								<li>
									<ul>
										<li>
											<h2>Have a look at our <a href="services.php">services</a></h2>
											<p>and we guarantee your time will not be wasted.</p>
										</li>
										<li>
											<h2>We may have the <a href="products.php">solution</a></h2>
											<p>to your software related problem.</p>
										</li>
										<li>
											<h2><a href="company.php">Why us</a> and not your local</h2>
											<p>software dealer?</p>
										</li>
									</ul>
								</li>
								<li>
									<ul>
										<li>
											<h2>Have a look at our <a href="services.php">services</a></h2>
											<p>and we guarantee your time will not be wasted.</p>
										</li>
										<li>
											<h2>We may have the <a href="products.php">solution</a></h2>
											<p>to your software related problem.</p>
										</li>
										<li>
											<h2><a href="company.php">Why us</a> and not your local</h2>
											<p>software dealer?</p>
										</li>
									</ul>
								</li>
								<li>
									<ul>
										<li>
											<h2>Have a look at our <a href="services.php">services</a></h2>
											<p>and we guarantee your time will not be wasted.</p>
										</li>
										<li>
											<h2>We may have the <a href="products.php">solution</a></h2>
											<p>to your software related problem.</p>
										</li>
										<li>
											<h2><a href="company.php">Why us</a> and not your local</h2>
											<p>software dealer?</p>
										</li>
									</ul>
								</li>
							</ul>
          </div>
          
        </div> <!-- END AnythingSlider -->
							<a href="#" id="follow-link"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="body_clouds">
		<div class="page">
