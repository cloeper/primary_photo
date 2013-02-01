<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Primary Photo Education LLC</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <link href="../gradient.css" rel="stylesheet">
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
	<?php include 'membership_utils.php'; ?>

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
			<?php include '../navheader.php'; ?>
            <div class="row gradient" style="margin-left: 3px; margin-right: 3px;">
            	<div class="center600">
                    <?php
                        if ($_POST['submit']) {
                            displayMembershipMessage();
                        } else {
                            displayMembershipForm();
                        }
                    ?>
            	</div>
            </div>
        </div>
        <div id="push"></div>
    </div>
	<?php include '../footer.php'; ?>
</body>
</html>