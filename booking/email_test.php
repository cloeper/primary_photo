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
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">Primary Photo Education</a>
                    <ul class="nav">
                        <li><a href="../">Home</a></li>
                        <li><a href="../howitworks/">How it Works</a></li>
                        <li><a href="../pricing/">Pricing</a></li>
                        <li><a href="../instructors/">Instructors</a></li>
                        <li><a href="../workshops/">Workshops</a></li>
                        <li><a href="../schedule/">Schedule</a></li>
                        <li><a href="../faq/">FAQ</a></li>
                        <li class="active"><a href="../contact/">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="hero-unit image_bg">
                <div>
                    <img align="right" src="../images/primary_photo_logo.jpg" height="200">
                    <br/>
                    <div class="header_text">Primary Photo Education LLC</div>
                    <br/>
                    <a href="http://www.facebook.com/Primary.Photo.Education" target="_blank">facebook</a>
                    &nbsp;|&nbsp;
                    <a href="https://twitter.com/PrimaryPhotoEdu">twitter</a>
                    &nbsp;|&nbsp;
                    <a href="mailto:info@primaryphoto.net?subject=Customer Request">email</a>
                    &nbsp;|&nbsp;
                    <a href="../booking/">book appointment</a>
                    <br/>
                    <p style="color: #fff;">Call: (503) 862-8531</p>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
            <div class="row gradient" style="margin-left: 3px; margin-right: 3px;">
                <div class="center600">
                    <?php
                        $human = $_POST['human'];

                        if ($_POST['submit'] && $human == '4') {
                            $from       = 'From: Primary Photo Education Website'; 
                            $to         = 'chrisloeper@gmail.com'; 
                            $subject    = 'Booking Request';

                            $first_name = $_POST['first_name'];
                            $last_name  = $_POST['last_name'];
                            $phone      = $_POST['phone'];
                            $camera     = $_POST['camera'];
                            $email      = $_POST['email'];
                            $date       = $_POST['date'];
                            $time       = $_POST['time'];
                            $location   = $_POST['location'];
                            $lesson     = $_POST['desired_learning'];

                            $body = "From: $first_name $last_name\n 
                                    Email: $email\n 
                                    Phone: $phone\n 
                                    Camera: $camera\n
                                    Date Requested: $date\n
                                    Time Requested: $time\n
                                    Desired Location: $location\n
                                    \n
                                    $first_name $last_name would like to learn about:\n
                                    $lesson\n";

                            if (mail ($to, $subject, $body, $from)) { 
                                echo '<p>Your booking request has been sent! One of our instructors will contact you within 24 hours.</p>';
                            } else { 
                                echo '<p>Something went wrong, please try again!</p>'; 
                            }
                        } else if ($_POST['submit'] && $human != '4') {
                            echo '<p>You answered the anti-spam question incorrectly!</p>';
                        }
                    ?>
                    <h1>Book an Appointment</h1>
                    <form class="well" method="post" action="email_test.php">
        
                        <label for="first_name">First Name</label>
                        <input name="first_name" type="text" placeholder="first name" required>

                        <label for="last_name">Last Name</label>
                        <input name="last_name" type="text" placeholder="last name" required>

                        <label for="phone">Phone Number</label>
                        <input name="phone" type="tel" placeholder="phone number" required>

                        <label for="camera">What camera are you using?</label>
                        <input name="camera" type="text" placeholder="name of camera" required>
                                
                        <label for="email">Email</label>
                        <input name="email" type="email" placeholder="email address" required>

                        <label for="date">When would you like your lesson?</label>
                        <input name="date" type="date" required>
                        <a href="/schedule" target="_blank">Check our schedule for available dates.</a>

                        <label for="time">What time?</label>
                        <input name="time" type="text" placeholder="(e.x. 3:00pm)" required>
                        
                        <label for="location">Where would you like your lesson to happen?</label>
                        <input name="location" type="text" placeholder="location" required>

                        <label for="desired_learning">What would you like to learn?</label>
                        <textarea class="field span6" rows="6" name="desired_learning" placeholder="Type Here" required></textarea>
                        <label for="human">What is 2+2? (Anti-spam)</label>
                        <input name="human" type="text" placeholder="type here">
                        <br/>


<script type="text/javascript" src="https://static-na.payments-amazon.com/cba/js/us/sandbox/PaymentWidgets.js"></script>
<script>
RenderCBAButton = function(ordervalue) {
var standard1 = new CBA.Widgets.StandardCheckoutWidget({
merchantId: "AVRSSHXZ0SY7P",
orderInput: {
format: "XML",
value: ordervalue}
}).render("cbaxmlButton");
}
</script>

<table><tr>
<td>
<div id="cbaxmlButton">
<img src="https://payments-sandbox.amazon.com/gp/cba/button?cartOwnerId=AVRSSHXZ0SY7P&size=medium&color=orange&background=white"/><br></div>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
<!--
RenderCBAButton("type:cba-signed-order/sha1-hmac/2;order:PD94bWwgdmVyc2lvbj0nMS4wJyBlbmNvZGluZz0nVVRGLTgnPz48T3JkZXIgeG1sbnM9J2h0dHA6Ly9wYXltZW50cy5hbWF6b24uY29tL2NoZWNrb3V0LzIwMDgtMTEtMzAvJz48Q2FydD48SXRlbXM+PEl0ZW0+PFNLVT4wMDAxPC9TS1U+PE1lcmNoYW50SWQ+QVZSU1NIWFowU1k3UDwvTWVyY2hhbnRJZD48VGl0bGU+T25lLW9uLW9uZSBzZW1pbmFyICgyaHIpPC9UaXRsZT48RGVzY3JpcHRpb24+QmFzaWMgb25lLW9uLW9uZSBzZW1pbmFyLjwvRGVzY3JpcHRpb24+PFByaWNlPjxBbW91bnQ+MTQ5LjAwPC9BbW91bnQ+PEN1cnJlbmN5Q29kZT5VU0Q8L0N1cnJlbmN5Q29kZT48L1ByaWNlPjxRdWFudGl0eT4xPC9RdWFudGl0eT48V2VpZ2h0PjxBbW91bnQ+MC4xPC9BbW91bnQ+PFVuaXQ+bGI8L1VuaXQ+PC9XZWlnaHQ+PEZ1bGZpbGxtZW50TmV0d29yaz5NRVJDSEFOVDwvRnVsZmlsbG1lbnROZXR3b3JrPjwvSXRlbT48L0l0ZW1zPjwvQ2FydD48L09yZGVyPg==;signature:Y+I71UjZVxxl0lOR/Qhjc67B+TI=");
//-->
</SCRIPT>
</td></tr></table>


                        <!-- <input id="submit" name="submit" type="submit" value="Submit"> -->
                            
                    </form>
                </div>
            </div>
        </div>
        <div id="push"></div>
    </div>
    <div id="footer" class="footer">
        <div class="container">
            <div class="footer_content_left">
                <!-- YELP LINK ======================================================-->
                <a href="http://www.yelp.com/biz/primary-photo-education-llc-portland">
                    <img src="../images/yelp_icon.jpg" alt="Primary Photo Education LLC on Yelp!" /> 
                </a>
                <!-- END YELP LINK ==================================================-->
            </div>
            <div class="footer_content_right">
                <!-- FACEBOOK LINK ==================================================-->
                <div class="fb-like"
                    style="color: #fff;" 
                    data-href="http://www.facebook.com/Primary.Photo.Education" 
                    data-send="true" 
                    data-width="200"
                    data-height="70"
                    data-show-faces="false">
                </div>
                <!-- END FACEBOOK LINK ==============================================-->

                <!-- TWITTER LINK ===================================================-->
                <a href="https://twitter.com/primaryphotoedu" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @primaryphotoedu</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <!-- END TWITTER LINK ===============================================-->
            </div>
        </div>
    </div>
</body>
</html>