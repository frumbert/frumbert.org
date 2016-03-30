<?php

// used by an ajax form post
// take form post values, check certain ones exist, send an email, return a status string

$name                = $_POST['yourname'];
$email_address = $_POST['youremail'];
$phone              = $_POST['yourphone'];
$site                  = $_POST['yourwebsite'];
$message         = $_POST['yourmessage'];


if (empty($name) || empty($email_address) || empty($message) || !filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
    echo "Required arguments not provided!";
    exit;
}


// Create the email and send the message
$to                     = 'info@avide.com.au';
$email_subject  = "Avide Contact Form:  $name";

$email_body      = "Name: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nWebsite: $site\n\nMessage:\n$message";

$headers           = "From: noreply@avide.com.au\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers          .=  "Reply-To: $email_address";

// yeah, just using php mailer, nothing fancy here
mail($to,$email_subject,$email_body,$headers);

echo "sent";