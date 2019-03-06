<?php

//create variables
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email'];
$event_name=$_POST['name'];
$event_idea=$_POST['idea'];
$end_date=$_POST['enddate'];
$start_date=$_POST['startdate'];

$connect=mysqli_connect("31.22.4.238", "ccconnec", "4gyJ1f44Hd", "ccconnec_booked");
if(mysqli_connect_errno($connect))
{
  echo 'Failed to connect';
}

?>
<?php
//Execute the query

mysqli_query($connect,"INSERT INTO event_ideas(fname,lname,email,idea,descr,startdate,enddate) VALUES('$first_name', '$last_name', '$email', '$event_name', '$event_idea', '$start_date', '$end_date')");

if(mysqli_affected_rows($connect) > 0) {
  readfile("events.html");
} else {
  echo "An Error Occurred!<br>";
  echo mysqli_error($connect);
  echo "<a href='https://ccconnections.info/events'>Return to Previous Page</a>";
}

// Create the email and send the message
$name = $first_name." ".$last_name;
$to2 = $email;
$to = 'cccbus@ccconnections.info'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New Event Idea";
$email_subject2 = "Thanks for Your Input!";
$email_body = "You have received a new event idea.\n\nHere are the details:\n\nName: $name\n\nEvent Name: $event_name\n\nEvent Idea: $event_idea\n\nStart Date: $start_date\n\nEnd Date: $end_date";
$email_body2 = "Thank you for submitting a new event idea. We will review it shortly, and hopefully it will become our newest event!";
$headers = "From: noreply@ccconnections.info\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";
$headers2 = "From: noreply@ccconnections.info";
mail($to,$email_subject,$email_body,$headers);
mail($to2,$email_subject2,$email_body2,$headers2);
?>
