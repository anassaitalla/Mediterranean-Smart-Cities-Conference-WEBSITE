<?php
require_once('./vendor/phpmailer/src/PHPMailer.php');
require_once('./vendor/phpmailer/src/SMTP.php'); 
require_once('./vendor/phpmailer/src/Exception.php');

// Replace with your credentials
$from_email = "abdellatiftouriri3@gmail.com";
$to_email = "abdellatiftouriri3@gmail.com";
$subject = "Test Email from PHP Script with PHPMailer";
$message = "This is a test email sent using PHPMailer.";

$mail = new PHPMailer\PHPMailer\PHPMailer(true); // Set to true to enable exceptions

try {
  // Server settings (if your server is not configured as a mail server)
  $mail->SMTPDebug = 0; // Enable verbose debug output (0 for production)
  $mail->isSMTP();
  $mail->Host = 'smtp.gruporedseg.com.br'; // Replace with your SMTP server address
  $mail->Port = 587; // Standard TLS port for SMTP
  $mail->SMTPAuth = true;
  $mail->Username = 'faturamento@gruporedseg.com.br'; // Replace with your SMTP username
  $mail->Password = 'padrao135'; // Replace with your SMTP password (consider app passwords)
  $mail->SMTPSecure = 'tls'; // Enable TLS encryption
  
  // Sender and recipient information
  $mail->setFrom($from_email, 'Your Name');
  $mail->addAddress($to_email, 'Recipient Name');
  $mail->addReplyTo($from_email, 'Your Name');

  // Content
  $mail->isHTML(false); // Set email format to plain text
  $mail->Subject = $subject;
  $mail->Body = $message;

  $mail->send();
  echo "Email sent successfully!";
} catch (Exception $e) {
  echo "Error sending email: " . $e->getMessage();
}

?>
