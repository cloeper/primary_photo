<?php

function displayMembershipForm() {
echo '<h2>Membership</h2>
		<ol>
			<li><p>Access every year into our keeping up with the industry webinar</p></li>
			<li><p>A skills assessment to help focus your education where it\'s needed</p></li>
			<li><p>30% off one-on-one tutorials and group workshops</p></li>
			<li><p>Access to our electronic and phone support</p></li>
		</ol>
		<form class="well" method="post" action="index.php">

        <label for="first_name">First Name</label>
        <input name="first_name" type="text" placeholder="first name" required>

        <label for="last_name">Last Name</label>
        <input name="last_name" type="text" placeholder="last name" required>

        <label for="company_name">Company Name</label>
        <input name="company_name" type="text" placeholder="company name">

        <label for="phone">Phone Number</label>
        <input name="phone" type="tel" placeholder="phone number" required>

        <label for="email">Email</label>
        <input name="email" type="email" placeholder="email address" required>

        <label for="desired_learning">What would you like to learn?</label>
        <textarea class="field span6" rows="6" name="desired_learning" placeholder="Type Here" required></textarea>
        <label for="human">What is 2+2? (Anti-spam)</label>
        <input name="human" type="text" placeholder="type here">
        <div class="small_form_text">
            <label for="tandc_checkbox">I have read and agree to the <a href="../terms_and_conditions_for_members.txt" target="_blank">Terms and Conditions</a></label>
            <input type="checkbox" required="required" id="tandc_checkbox" name="tandc_checkbox">
        </div>
        <div style="clear: both;">&nbsp;</div>
        <br/>
        <input id="submit" name="submit" type="submit" value="Proceed to Payment">
	</form>';
}

function displayMembershipMessage() {
	$human = $_POST['human'];

	if ($_POST['submit'] && $human == '4') {
		$headers = "From: Primary Photo Education Website\r\n";
		$headers .= "Reply-To: noreply@primaryphoto.net\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    	$from 		= 'From: Primary Photo Education Website';
    	$to 		= 'info@primaryphoto.net';
    	$subject 	= 'Membership Request';

		$first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
        $company_name  = $_POST['company_name'];
		$phone 		= $_POST['phone'];
	    $email 		= $_POST['email'];
    	$lesson 	= $_POST['desired_learning'];

		$body =  "<html><body>";
		$body .= "<img src='http://www.primaryphoto.net/images/primary_photo_logo.jpg' alt='Primary Photography Education Services LLC' />";
		$body .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
		$body .= "<tr><td colspan='2'><strong>MEMBERSHIP REQUEST</strong></td></tr>";
    	$body .= "<tr><td><strong>From:</strong></td><td>$first_name $last_name</td></tr>";
        $body .= "<tr><td><strong>Company:</strong></td><td>$company_name</td></tr>";
    	$body .= "<tr><td><strong>Email:</strong></td><td>$email</td></tr>";
    	$body .= "<tr><td><strong>Phone:</strong></td><td>$phone</td></tr>";
		$body .= "<tr><td colspan='2'><strong>$first_name $last_name would like to learn about:</td></tr>";
		$body .= "<tr><td colspan='2'>$lesson</td></tr>";
		$body .= "</table>";
		$body .= "</body></html>";

	    if (mail ($to, $subject, $body, $headers)) {
	        echo '<h3>Almost done!</h3>
	        	  <p>Your membership will be active after your transation is complete.</p>
	        	  <p>Please click below to continue payment.</p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="N29MVYC4PT766">
						<input style="width: 100px;" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
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
