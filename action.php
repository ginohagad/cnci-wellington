<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: CNCI Wellington';
    $to = 'admin@cnci-wellington.org, ginohagad@gmail.com';
    $subject = 'Message from Website';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail($to, $subject, $body, $from)) {
	    echo '<p>Your message has been sent!</p>';
      echo '<span><a href="index.html">Return to main page.</a></span>';
	} else {
	    echo '<p>Something went wrong, go back and try again!</p>';
	}
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
