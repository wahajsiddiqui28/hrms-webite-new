<?php
session_start();
include('db.php'); 


// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $emailCheckQuery = "SELECT * FROM demo_requests WHERE email = '$email'";
    $result = mysqli_query($conn, $emailCheckQuery);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['message'] = "This email has already been used to submit a request.";
        $_SESSION['message_type'] = 'danger';
    } else {
        $query = "INSERT INTO demo_requests (name, email, number, subject, message) VALUES ('$name', '$email', '$number', '$subject', '$message')";
        if (mysqli_query($conn, $query)) {
            $_SESSION['message'] = "Message has been sent successfully.";
            $_SESSION['message_type'] = 'success';
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();                                           
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'no-reply@fasterpsystems.com';
                $mail->Password   = 'mmgi nfch jrjo qsqb';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                $mail->Port       = 587;
                $mail->setFrom('no-reply@fasterpsystems.com', 'Demo Request');
                $mail->addAddress('wahajsiddiqui28@gmail.com', 'Wahaj Siddiqui');
                $emailTemplate = file_get_contents('email_template.html');
                $emailTemplate = str_replace('{{name}}', $name, $emailTemplate);
                $emailTemplate = str_replace('{{email}}', $email, $emailTemplate);
                $emailTemplate = str_replace('{{number}}', $number, $emailTemplate);
                $emailTemplate = str_replace('{{subject}}', $subject, $emailTemplate);
                $emailTemplate = str_replace('{{message}}', $message, $emailTemplate);
                $mail->isHTML(true);                                          
                $mail->Subject = "New Demo Request: " . $subject;
                $mail->Body    = $emailTemplate;
                if ($mail->send()) {
                    $_SESSION['message'] = "Message has been sent successfully.";
                    $_SESSION['message_type'] = 'success';
                } else {
                    $_SESSION['message'] = "Email sending failed!";
                    $_SESSION['message_type'] = 'danger';
                }

            } catch (Exception $e) {
                $_SESSION['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                $_SESSION['message_type'] = 'danger';
            }
        } else {
            $_SESSION['message'] = "Error: " . mysqli_error($conn);
            $_SESSION['message_type'] = 'danger';
        }
    }
    mysqli_close($conn);
    $currentURL = $_SERVER['HTTP_REFERER'] ?? 'index.php';
    header("Location: $currentURL");
    exit;
}
?>
