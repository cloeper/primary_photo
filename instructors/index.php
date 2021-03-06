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
                <h2>Instructors</h2>
                <hr>
                <!-- KEITH -->
                <div class="instructor_right_border">
                    <div style="text-align: center;">
                        <p>
                            <img src="../images/keith.jpg" height="240">
                        </p>
                    </div>
                    <h3>Keith Folz</h3>
                    <p>
                        Although Keith may be known around Portland as “The Video Guy,” his expertise expands to all aspects of photography. He has a formal education in Electronic Media and has worked professionally in the areas of radio, feature film, documentary film, series television, commercial broadcast, news, stock video and event promotion since the age of sixteen.  Since he is working constantly to keep his knowledge consistent with current shooting styles, equipment and editing software he can assist you in learning everything from simple camera use to producing your own feature length film. As the founding member of Primary Photo Keith is often praised by his clients for his patient, detailed and concise explanations to any question.
                    </p>
                </div>

                <!-- TIA -->
                <div class="instructor_right_border">
                    <div style="text-align: center;">
                        <p>
                            <img src="../images/tia.jpg" height="240" class="center">
                        </p>
                    </div>
                    <h3>Tia Brant</h3>
                    <p>
                        “Friendly, pleasant, helpful and patient.” These are just a few of the accolades Tia has received since she began teaching photography in 2005.  Along with her husband, she has also enjoyed a successful career in wedding and portrait photography with additional expertise in shooting nature and nightscapes. She has not only owned, but also mastered the use of many Canon, Nikon, Sony, Panasonic and Casio cameras.  Tia is passionate about photography, a passion that is seen in her dedication to learn each new software and camera as they are released.  She is a master Photoshop and Lightroom editor and has won several Judges Choice awards in the Washington State Exhibition of International Photography.
                    </p>
                </div>

                <!-- SHANE -->
                <div class="instructor_no_border">
                    <div style="text-align: center;">
                        <p>
                            <img src="../images/shane.jpg" height="240">
                        </p>
                    </div>
                    <h3>Shane Brant</h3>
                    <p>
                        Shane’s entire life has been centered on photography. Over the years he has developed a skill for bringing out the millions of emotions and experiences in a persons eyes; for juxtaposing a calm star-filled night with the cacophonous pace of one of the most beautiful and creatively divers cities in the world. He grew up assisting his dad, Dale R. Brant, a Master Photographer from Fort Worth, Texas and majored in photography at Sam Houston State. He has freelanced for several studios here in Portland, as well as built a successful wedding and portrait photo business with his wife. Shane is always looking for opportunities to expand his knowledge of photography, and is eager to assist you in doing the same.
                    </p>
                </div>
            </div>
        </div>
        <div id="push"></div>
    </div>
    <?php include '../footer.php'; ?>
</body>
</html>