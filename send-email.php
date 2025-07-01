<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = $_POST['email'];
  $subject = "Order Confirmation - Mahaveer Enterprises";
  $message = $_POST['message'];
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: noreply@yourdomain.com" . "\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Failed to send email.";
  }
}
?>