<?php
include 'db.php';
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $messageBody = $conn->real_escape_string($_POST['message']);
    $checkEmailQuery = "SELECT * FROM contact_messages WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);
    if ($result->num_rows > 0) {
        $_SESSION['message'] = "This email has already submitted a message.";
        $_SESSION['message_type'] = 'error';
    } else {
        $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$messageBody')";
        if ($conn->query($sql) === TRUE) {
            $template = file_get_contents('email-template.html');
            $emailBody = str_replace(
                ['{{name}}', '{{email}}', '{{subject}}', '{{message}}'],
                [$name, $email, $subject, nl2br($messageBody)],
                $template
            );
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'no-reply@fasterpsystems.com';
                $mail->Password = 'mmgi nfch jrjo qsqb';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->setFrom('no-reply@fasterpsystems.com', 'Contact Form');
                $mail->addAddress('wahajsiddiqui28@gmail.com', 'Wahaj Siddiqui');
                $mail->isHTML(true);
                $mail->Subject = "New Contact Form Submission: $subject";
                $mail->Body = $emailBody;
                $mail->send();
                $_SESSION['message'] = "Message has been sent successfully.";
                $_SESSION['message_type'] = 'success';
            } catch (Exception $e) {
                $_SESSION['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                $_SESSION['message_type'] = 'error';
            }
        } else {
            $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
            $_SESSION['message_type'] = 'error';
        }
    }
    $conn->close();
    $currentURL = $_SERVER['HTTP_REFERER'] ?? 'index.php';
    header("Location: $currentURL");
    exit;
}
?>
