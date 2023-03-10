<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set up the email
  $to = "fuad.ildarovg2@gmail.com";
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "There was an error sending your message.";
  }
}
?>
