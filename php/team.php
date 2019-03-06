<?php

//create variables
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email'];
$address_1=$_POST['adr-1'];
$address_2=$_POST['adr-2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$updates=$_POST['cb1'];
$membership_type=$_POST['memtype'];
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

mysqli_query($connect,"INSERT INTO team_application(fname,lname,email,address1,address2,city,state,zip,country,phone,updates,member_type,availstart,availend) VALUES('$first_name', '$last_name', '$email', '$address_1', '$address_2', '$city', '$state', '$zip', '$country', '$phone', '$updates', '$membership_type', '$start_date', '$end_date')");

if(mysqli_affected_rows($connect) > 0) {
  readfile("team.html");
} else {
  echo "An Error Occurred!<br>";
  echo mysqli_error($connect);
  echo "<a href='https://ccconnections.info/team'>Return to Previous Page</a>";
}

// Create the email and send the message
$name = $first_name." ".$last_name;
$to2 = $email;
$to = 'cccbus@ccconnections.info'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New Team Application";
$email_subject2 = "Thanks for Your Interest!";
$email_body = "You have received a new team application.\n\nHere are the details:\n\nName: $name\n\nProject Name: $project_name\n\nMembership Type: $membership_type\n\nStart Date: $start_date\n\nEnd Date: $end_date";
$email_body2 = "Thank you for submitting an application. We will review it shortly, and hopefully you will become our newest member!";
$headers = "From: noreply@ccconnections.info\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";
$headers2 = "From: noreply@ccconnections.info";
mail($to,$email_subject,$email_body,$headers);
mail($to2,$email_subject2,$email_body2,$headers2);
?>
