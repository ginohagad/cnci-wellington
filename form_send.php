<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'From: CNCI Wellington';
  $to = 'admin@cnci-wellington.org';
  $subject = 'Message from CNCI Website';

  $body = "From: $name\n Email: $email\n Message:\n $message";

  if ($_POST['submit']) {
    if (mail($to, $subject, $body, $from)) {
      echo '<p>Your message has been sent.</p>';
      echo '<span><a href="index.html">Return to main page.</a></span>';
    }
  } else {
    echo '<p>Something went wrong. Go back and try again.</p>';
  }

?>