<?php

if(isset($_POST['c_name'])){

    // Only process POST reqeusts.
   /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["c_name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["c_email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["c_message"]);
        // Check that data was sent to the mailer.
        if ( empty($c_name) OR empty($c_message) OR !filter_var($c_email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "wdev92014@gmail.com";
        // Set the email subject.
        $subject = "New website contact from $c_name";
        // Build the email content.
        $email_content = "Name: $c_name\n";
        $email_content .= "Email: $c_email\n\n";
        $email_content .= "Message:\n$c_message\n";
        // Build the email headers.
        $email_headers = "From: $c_name <$c_email>";
        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";*/

     $res['sendstatus'] = 1; // original php
     $res['message'] = 'Form Submission Succesful'; // original php
     echo json_encode($res); // original php
}

?>
