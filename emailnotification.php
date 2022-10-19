<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['Name']) && isset($_POST['Email'])) {
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $subject = $_POST['subject'];
  $body = $_POST['form_message'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = 'f6cb4305907c34';
  $phpmailer->Password = '0ff2519fd87c4e';

  $phpmailer->setFrom($email, $name);
  $phpmailer->addReplyTo('info@mailtrap.io', 'Mailtrap');
  $phpmailer->addAddress('recipient1@mailtrap.io', 'Tim');
  $phpmailer->addCC('cc1@example.com', 'Elena');
  $phpmailer->addBCC('bcc1@example.com', 'Alex');
  $phpmailer->AddBCC('bcc2@example.com', 'Anna');
  $phpmailer->AddBCC('bcc3@example.com', 'Mark');
  $phpmailer->Subject =  $subject;
  $phpmailer->isHTML(true);

  $phpmailer->Body = $body;

  if ($phpmailer->send()) {
    header("Location:index.php");
  } else {
    echo 'Request Appoinment is not be sent.';
  }
}
