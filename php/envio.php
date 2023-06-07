<?php
require 'path/to/PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $provincia = $_POST['province'];
    $comentario = $_POST['textarea'];

    // Send email
    $mail = new PHPMailer;
    $mail->setFrom($email);
    $mail->addAddress('jsquilumbaquin@espe.edu.ec');
    $mail->Subject = 'Form Submission';
    $mail->Body = "Nombre: " . $nombre . "\n"
        . "Email: " . $email . "\n"
        . "Teléfono: " . $telefono . "\n"
        . "Provincia: " . $provincia . "\n"
        . "Comentario: " . $comentario;

    if ($mail->send()) {
        echo 'Email sent successfully';
    } else {
        echo 'Error sending email: ' . $mail->ErrorInfo;
    }
}
?>

