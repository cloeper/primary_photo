<?php

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
        <br/>
        <input id="submit" name="submit" type="submit" value="Submit">
            
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
    	$to 		= 'chrisloeper@gmail.com'; 
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
		$body .= "<img src='http://http://www.primaryphoto.net/images/primary_photo_logo.jpg' alt='Primary Photography Education Services LLC' />";
		$body .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
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
	        echo '<p>Your booking request has been sent! One of our instructors will contact you within 24 hours.</p>';
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