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
					<p>We are a team of professional photographers and educators dedicated to teaching you everything about photography, videography, lighting, sound, editing, and more! We offer one-on-one classes with flexible locations and times to meet even the toughest of schedules. When paired with our intensive group workshops and multi-benefit membership program, there's nothing we can't help you accomplish.</p>
					<p><a href="/instructors/">more</a></p>
				</div>
				<div class="span4 right_border">
					<h2>Let's get Started</h2>
					<p>To book a one-on-one seminar <a href="/booking">click here</a>.</p>
					<p>To learn more about our memberships <a href="/membership">click here</a>.</p>
				</div>
				<div class="span3">
					<h2>Pricing</h2>
					<ul>
						<li>2 hour one-on-one seminar are $149.00 (30% off for members)</li>
						<li>Workshops (ranging by subject) are $75 to $500 (30% off for members)</li>
						<li>Memberships are $15/month</li>
					</ul>
					<p><a href="/pricing/">more</a></p>
					<br/>
				</div>
			</div>
		</div>
		<div id="push"></div>
	</div>
	<?php include 'footer-index.php'; ?>
</body>
</html>
