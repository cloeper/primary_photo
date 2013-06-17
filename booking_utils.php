<?php

//---- BOOKINGS ----------------------------------------------------------------
function displayBookingForm() {
echo '<form class="well" method="post" action="index.php">

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
        <div class="small_form_text">
            <label for="tandc_checkbox">I have read and agree to the <a href="../terms_and_conditions_for_classes.txt" target="_blank">Terms and Conditions</a></label>
            <input type="checkbox" required="required" id="tandc_checkbox" name="tandc_checkbox">
        </div>
        <div style="clear: both;">&nbsp;</div>
        <br/>
        <input id="submit" name="submit" type="submit" value="Proceed to Payment">
	</form>';
}

function displayBookingSentMessage() {
	$human = $_POST['human'];

	if ($_POST['submit'] && $human == '4') {
		$headers = "From: Primary Photo Education Website\r\n";
		$headers .= "Reply-To: noreply@primaryphoto.net\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    	$from 		= 'From: Primary Photo Education Website';
    	$to 		= 'keith@primaryphoto.net';
    	$subject 	= 'Booking Request';

		$first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
		$phone 		= $_POST['phone'];
		$camera 	= $_POST['camera'];
	    $email 		= $_POST['email'];
	    $date 		= $_POST['date'];
	    $time 		= $_POST['time'];
	    $location 	= $_POST['location'];
    	$lesson 	= $_POST['desired_learning'];

		$body =  "<html><body>";
		$body .= "<img src='http://www.primaryphoto.net/images/primary_photo_logo.jpg' alt='Primary Photography Education Services LLC' />";
		$body .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
		$body .= "<tr><td colspan='2'><strong>ONE-ON-ONE REQUEST</strong></td></tr>";
    	$body .= "<tr><td><strong>From:</strong></td><td>$first_name $last_name</td></tr>";
    	$body .= "<tr><td><strong>Email:</strong></td><td>$email</td></tr>";
    	$body .= "<tr><td><strong>Phone:</strong></td><td>$phone</td></tr>";
		$body .= "<tr><td><strong>Camera:</strong></td><td>$camera</td></tr>";
		$body .= "<tr><td><strong>Date Requested:</strong></td><td>$date</td></tr>";
		$body .= "<tr><td><strong>Time Requested:</strong></td><td>$time</td></tr>";
		$body .= "<tr><td><strong>Desired Location:</strong></td><td>$location</td></tr>";
		$body .= "<tr><td colspan='2'><strong>$first_name $last_name would like to learn about:</td></tr>";
		$body .= "<tr><td colspan='2'>$lesson</td></tr>";
		$body .= "</table>";
		$body .= "</body></html>";

	    if (mail ($to, $subject, $body, $headers)) {
	        echo '<h3>Your booking request has been sent!</h3>
	        	  <p>One of our instructors will contact you within 24 hours once payment has been confirmed below.</p>
	        	  <p></p>
					<form id="paypal_form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="KH5HJK3VPTCA4">
						<table>
						<tr>
						    <td>
						        <input type="hidden" name="on0" value="Pricing">Pricing
						    </td>
						</tr>
						    <tr>
						        <td>
						            <select name="os0">
						                <option value="Non-Member Price">Non-Member Price $149.00 USD</option>
						                <option value="Member Price">Member Price $99.00 USD</option>
						                <option value="Indiegogo Redemption">Indiegogo Redemption $0.00 USD</option>
						            </select>
						        </td>
						    </tr>
						</table>
						<input type="hidden" name="currency_code" value="USD">
						<input style="width: 100px;" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>';
	    } else {
	        echo '<p>Something went wrong, go back and try again!</p>';
	    }
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}

	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
}

//---- WORKSHOPS ---------------------------------------------------------------
function displayWorkshop1BookingForm() {
echo '<form class="well" method="post" action="book_workshop1.php">

        <label for="first_name">First Name</label>
        <input name="first_name" type="text" placeholder="first name" required>

        <label for="last_name">Last Name</label>
        <input name="last_name" type="text" placeholder="last name" required>

        <label for="phone">Phone Number</label>
        <input name="phone" type="tel" placeholder="phone number" required>

        <label for="email">Email</label>
        <input name="email" type="email" placeholder="email address" required>

        <label for="camera">What camera are you using?</label>
        <input name="camera" type="text" placeholder="name of camera" required>

        <p>
			We’re bringing professionally proffered photo accessories for you to try out, so make sure we have as much info about your camera as possible.
        </p>

        <label for="human">What is 2+2? (Anti-spam)</label>
        <input name="human" type="text" placeholder="type here">
        <div class="small_form_text">
            <label for="tandc_checkbox">I have read and agree to the <a href="../terms_and_conditions_for_classes.txt" target="_blank">Terms and Conditions</a></label>
            <input type="checkbox" required="required" id="tandc_checkbox" name="tandc_checkbox">
        </div>
        <div style="clear: both;">&nbsp;</div>
        <br/>
        <input id="submit" name="submit" type="submit" value="Proceed to Payment">
	</form>';
}

function displayWorkshop2BookingForm() {
echo '<form class="well" method="post" action="book_workshop2.php">

        <label for="first_name">First Name</label>
        <input name="first_name" type="text" placeholder="first name" required>

        <label for="last_name">Last Name</label>
        <input name="last_name" type="text" placeholder="last name" required>

        <label for="phone">Phone Number</label>
        <input name="phone" type="tel" placeholder="phone number" required>

        <label for="email">Email</label>
        <input name="email" type="email" placeholder="email address" required>

        <label for="camera">What camera are you using?</label>
        <input name="camera" type="text" placeholder="name of camera" required>

        <p>
			We’re bringing professionally proffered photo accessories for you to try out, so make sure we have as much info about your camera as possible.
        </p>

        <label for="human">What is 2+2? (Anti-spam)</label>
        <input name="human" type="text" placeholder="type here">
        <div class="small_form_text">
            <label for="tandc_checkbox">I have read and agree to the <a href="../terms_and_conditions_for_classes.txt" target="_blank">Terms and Conditions</a></label>
            <input type="checkbox" required="required" id="tandc_checkbox" name="tandc_checkbox">
        </div>
        <div style="clear: both;">&nbsp;</div>
        <br/>
        <input id="submit" name="submit" type="submit" value="Proceed to Payment">
	</form>';
}

function displayWorkshop1BookingSentMessage() {
	$human = $_POST['human'];

	if ($_POST['submit'] && $human == '4') {
		$headers = "From: Primary Photo Education Website\r\n";
		$headers .= "Reply-To: noreply@primaryphoto.net\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    	$from 		= 'From: Primary Photo Education Website';
    	$to 		= 'keith@primaryphoto.net';
    	$subject 	= 'Booking Request';

		$first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
		$phone 		= $_POST['phone'];
		$camera 	= $_POST['camera'];
	    $email 		= $_POST['email'];

		$body =  "<html><body>";
		$body .= "<img src='http://www.primaryphoto.net/images/primary_photo_logo.jpg' alt='Primary Photography Education Services LLC' />";
		$body .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
		$body .= "<tr><td colspan='2'><strong>WORKSHOP REQUEST (Bugs and Blooms 10am)</strong></td></tr>";
    	$body .= "<tr><td><strong>From:</strong></td><td>$first_name $last_name</td></tr>";
    	$body .= "<tr><td><strong>Email:</strong></td><td>$email</td></tr>";
    	$body .= "<tr><td><strong>Phone:</strong></td><td>$phone</td></tr>";
		$body .= "<tr><td><strong>Camera:</strong></td><td>$camera</td></tr>";
		$body .= "</table>";
		$body .= "</body></html>";

	    if (mail ($to, $subject, $body, $headers)) {
	        echo '<h3>Your booking request has been sent!</h3>
	        	  <p>One of our instructors will contact you within 24 hours once payment has been confirmed below.</p>
	        	  <p></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					    <input type="hidden" name="cmd" value="_s-xclick">
					    <input type="hidden" name="hosted_button_id" value="CLPWUEM9RB2V8">
					    <table>
					        <tr>
					            <td><input type="hidden" name="on0" value="Pricing">Pricing</td>
					        </tr>
					        <tr>
					            <td>
					                <select name="os0">
					                    <option value="Non-Member Price">Non-Member Price $150.00 USD</option>
					                    <option value="Member Price">Member Price $100.00 USD</option>
					                    <option value="Living Social Voucher">Living Social Voucher $0.00 USD</option>
					                    <option value="Indiegogo Redemption">Indiegogo Redemption $0.00 USD</option>
					                </select>
					            </td>
					        </tr>
					    </table>

					    <input type="hidden" name="currency_code" value="USD">
					    <input style="width: 100px;" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

					</form>';
	    } else {
	        echo '<p>Something went wrong, go back and try again!</p>';
	    }
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}

	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
}

function displayWorkshop2BookingSentMessage() {
	$human = $_POST['human'];

	if ($_POST['submit'] && $human == '4') {
		$headers = "From: Primary Photo Education Website\r\n";
		$headers .= "Reply-To: noreply@primaryphoto.net\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    	$from 		= 'From: Primary Photo Education Website';
    	$to 		= 'keith@primaryphoto.net';
    	$subject 	= 'Booking Request';

		$first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
		$phone 		= $_POST['phone'];
		$camera 	= $_POST['camera'];
	    $email 		= $_POST['email'];

		$body =  "<html><body>";
		$body .= "<img src='http://www.primaryphoto.net/images/primary_photo_logo.jpg' alt='Primary Photography Education Services LLC' />";
		$body .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
		$body .= "<tr><td colspan='2'><strong>WORKSHOP REQUEST (Bugs and Blooms 1pm)</strong></td></tr>";
    	$body .= "<tr><td><strong>From:</strong></td><td>$first_name $last_name</td></tr>";
    	$body .= "<tr><td><strong>Email:</strong></td><td>$email</td></tr>";
    	$body .= "<tr><td><strong>Phone:</strong></td><td>$phone</td></tr>";
		$body .= "<tr><td><strong>Camera:</strong></td><td>$camera</td></tr>";
		$body .= "</table>";
		$body .= "</body></html>";

	    if (mail ($to, $subject, $body, $headers)) {
	        echo '<h3>Your booking request has been sent!</h3>
	        	  <p>One of our instructors will contact you within 24 hours once payment has been confirmed below.</p>
	        	  <p></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					    <input type="hidden" name="cmd" value="_s-xclick">
					    <input type="hidden" name="hosted_button_id" value="TZRTESLGPFSGW">
					    <table>
					        <tr>
					            <td><input type="hidden" name="on0" value="Pricing">Pricing</td>
					        </tr>
					        <tr>
					            <td>
					                <select name="os0">
					                    <option value="Non-Member Price">Non-Member Price $150.00 USD</option>
					                    <option value="Member Price">Member Price $100.00 USD</option>
					                    <option value="Living Social Voucher">Living Social Voucher $0.00 USD</option>
					                    <option value="Indiegogo Redemption">Indiegogo Redemption $0.00 USD</option>
					                </select>
					            </td>
					        </tr>
					    </table>

					    <input type="hidden" name="currency_code" value="USD">
					    <input style="width: 100px;" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

					</form>';
	    } else {
	        echo '<p>Something went wrong, go back and try again!</p>';
	    }
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}

	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
}

function sendEmailToInstructors() {

}

function sendEmailToStudent() {

}
?>
