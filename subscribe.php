<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
include('db.php');

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $checkQuery = "SELECT * FROM subscribers WHERE email = '$email'";
        $result = mysqli_query($conn, $checkQuery);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] = "This email address is already subscribed.";
            $_SESSION['message_type'] = 'danger';
        } else {
            $query = "INSERT INTO subscribers (email) VALUES ('$email')";
            if (mysqli_query($conn, $query)) {
                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();                                           
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'no-reply@fasterpsystems.com';
                    $mail->Password   = 'mmgi nfch jrjo qsqb';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                    $mail->Port       = 587;
                    $mail->setFrom('no-reply@fasterpsystems.com', 'Subscribe Notification');
                    $mail->addAddress('wahajsiddiqui28@gmail.com', 'Wahaj Siddiqui');
                    $emailTemplate = file_get_contents('subscribe_email_template.html');
                    $mail->isHTML(true);
                    $mail->Subject = 'Subscription Confirmation';
                    $mail->Body = $emailTemplate;
                    $mail->send();
                    $_SESSION['message'] = "Subscription successful. A confirmation email has been sent.";
                    $_SESSION['message_type'] = 'success';
                } catch (Exception $e) {
                    $_SESSION['message'] = "Subscription saved, but email could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    $_SESSION['message_type'] = 'danger';
                }
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($conn);
                $_SESSION['message_type'] = 'danger';
            }
        }
    } else {
        $_SESSION['message'] = "Invalid email address. Please enter a valid email.";
        $_SESSION['message_type'] = 'danger';
    }
    mysqli_close($conn);
     $currentURL = $_SERVER['HTTP_REFERER'] ?? 'index.php';
     header("Location: $currentURL");
    exit;
}

?>
