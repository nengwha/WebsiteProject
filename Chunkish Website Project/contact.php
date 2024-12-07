<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

include 'contact_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

        if (empty($name) || empty($email) || empty($message)) {
            throw new Exception('All fields are required!');
        }

        $conn = connectToDatabase();
        $stmt = $conn->prepare("INSERT INTO contact_us (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0; 
            
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'chunkishshop@gmail.com';
            $mail->Password = 'fzrvsuqcactmlsyw';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom('leihbalbin016@gmail.com', 'Contact Form');
            $mail->addAddress('leihbalbin016@gmail.com');
            $mail->addReplyTo($email, $name);
            
            $mail->isHTML(true);
            $mail->Subject = 'Contact Form Message from ' . $name;
            $mail->Body = "
                <h3>Contact Form Message</h3>
                <p><strong>From:</strong> {$name} ({$email})</p>
                <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
            ";

            if (!$mail->send()) {
                throw new Exception('Mailer Error: ' . $mail->ErrorInfo);
            }

            $stmt->close();
            $conn->close();

            echo "<script>
                alert('Message sent successfully!');
                window.location.href = 'contact.html';
            </script>";
            exit();

        } else {
            throw new Exception("Error saving message to database");
        }

    } catch (Exception $e) {
        error_log("Contact form error: " . $e->getMessage());
        echo "<script>
            alert('Error: " . addslashes($e->getMessage()) . "');
            window.location.href = 'contact.html';
        </script>";
        exit();
    }
} else {
    header("Location: contact.html");
    exit();
}
?>