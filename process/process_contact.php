<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require '../vendor/autoload.php';

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'sampledb');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Assuming your form data is sent using POST method
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$emailBody = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>The Purplewings - Contact Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        .success {
            color: #69418a;
            font-size: 24px;
            font-weight: bold;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class='container'>
        <p class='success'>User Info</p>
        <p>Name:- $name</p>
        <p>Email:- $email</p>
        <p>Mobile No:- $mobileno</p>
        <p>Subject:- $subject</p>
        <p>Message:- $message</p>
    </div>
</body>
</html>

    ";
// Perform database insert or any other processing as needed
// For example, let's assume a simple insert query
$sql = "INSERT INTO contact_info (name, email, mobile, subject, message) VALUES ('$name', '$email', '$mobileno', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {


    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output (change to 2 for more detailed information)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'lovetojyoti@gmail.com'; // SMTP username
        $mail->Password = 'epeofasiiythcuji'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('lovetojyoti@gmail.com');  // set From mail
        $mail->addAddress('lovetojpm@gmail.com'); // set To mail
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'The Purplewings - Contact Form-Query';
        $mail->Body = $emailBody;

        $mail->send();
        if ($mail) {
            // Data inserted successfully
            $response = array("success" => true, "message" => "Message sent successfully!");
        }
    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // Error in database operation
    $response = array("success" => false, "message" => "Error: " . $conn->error);
}

// Close the database connection
$conn->close();

// Return the response in JSON format
header('Content-Type: application/json');
echo json_encode($response);
