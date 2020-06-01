<?php
    require_once('../utilitarios/src/PHPMailer.php');
    require_once('../utilitarios/src/SMTP.php');
    require_once('../utilitarios/src/Exception.php');

    use PHPMailer/PHPMailer/PHPMailer;
    use PHPMailer/PHPMailer/SMTP;
    use PHPMailer/PHPMailer/Exception;

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cfaltribim@gmail.com';
        $mail->Password = '99125912';
        $mail->Port = 587;

        $mail->setFrom('cfaltribim@gmail.com');
        $mail->addAddress('');
        $mail->isHTML(true);
        $mail->Subject = '';
        $mail->Body = '';
        $mail->AltBody = '';
    } catch (Exception $e) {
        echo $e;
    }



?>