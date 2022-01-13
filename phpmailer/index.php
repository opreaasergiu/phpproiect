<?php
require 'includes/PHPmailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPmailer\PHPMailer\PHPMailer;
use PHPmailer\PHPMailer\SMTP;
use PHPmailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail -> isSMTP();

$mail -> Host = "smtp.gmail.com";

$mail -> SMTPAuth = "true";

$mail -> SMTPSecure = "tls";

$mail -> Port = "587";

$mail -> Username = "bgmsgrt123@gmail.com";

$mail -> Password = "password123";

$mail -> Subject = "EvenimenteOAS";

$mail -> setFrom("bgmsgrt123@gmail.com")
    
$mail -> Body = "Email test.";

$sqlmail = "SELECT usersEmail FROM users WHERE usersUid = ?";

$mail -> addAddress($sqlmail);

$mail -> Send();

$mail -> smtpClose();