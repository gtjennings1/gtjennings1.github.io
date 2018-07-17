<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $phone = trim(strip_tags($_POST['phone']));
       $message = htmlentities($_POST['message']);

       // set here
       $subject = "Contact form submitted!";
       $to = 'grant.jennings@gnarlygrey.com';

       $body = <<<HTML
       <b>Name:</b> $name <br/>
       <b>Email:</b> $email <br/>
       <b>Phone:</b> $phone <br/>
       <b>Message:</b> $message <br/>
       
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: contact-send.html');
?>