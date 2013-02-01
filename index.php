<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Primary Photo Education LLC</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="gradient.css" rel="stylesheet">
    <meta name="description" content="Primary Photo Education LLC">  
	<meta name="author" content="Chris Loeper">

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="Primary Photo Education LLC" />
    <meta property="fb:admins" content="682345211" />
    
	<!-- HTML5 SHIV ========================================================-->
	    
	    <!--[if lt IE 9]>  
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
	    <![endif]-->

	<!-- END HTML5 SHIV ====================================================-->



	<!-- IE9 CSS GRADIENT SUPPORT ==========================================-->
		
		<!--[if gte IE 9]>
		  <style type="text/css">
		    .gradient {
		       filter: none;
		    }
		  </style>
		<![endif]-->

	<!-- END IE9 CSS GRADIENT SUPPORT ======================================-->

</head>
<body>
<!-- FACEBOOK SDK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <div id="wrap">
        <div class="container">
            <?php include 'navheader-index.php'; ?>
            <div class="row gradient" style="margin-left: 3px; margin-right: 3px;">
                <div class="span4 right_border">
    				<h2>Learn from the best.</h2>
					<p>Primary Photo Education provides one on one tutorials for anyone who wants to learn more about their camera or just photography, videography in general. You pick the where and the when and we send an instructor to you! (Serving the greater Portland metro area)</p>
					<p><a href="/instructors/">more</a></p>
                </div>
                <div class="span3 right_border">
					<h1>How it works.</h1>
					<p>Send us an email with the following:</p>
					<ul>
						<li>Your name and phone number</li>
						<li>What camera you're using</li>
						<li>What you'd like to learn</li>
						<li>Class preferences</li>
						<li>Preferred meeting time</li>
					</ul>
					<p>Your instructor will contact you within 24 hours to finalize the details and accept payment.</p>
                </div>
                <div class="span4">
                    <h2>Pricing</h2>
                    <h3>Basic Seminar</h3>
                    <p>
						We provide comprehensive one-on-one classes to anyone who wants to learn more about photography, videography, sound, lighting, editing and more. You pick the time, topic and place, and we'll send the instructor to you! $149.00/2 hours.
                    </p>
                    <p><a href="/pricing/">more</a></p>
                    <br/>
                    <p><a href="/workshops/">Group seminar classes</a> coming soon!</p>
                </div>
            </div>
        </div>
        <div id="push"></div>
    </div>
    <?php include 'footer-index.php'; ?>
</body>
</html>