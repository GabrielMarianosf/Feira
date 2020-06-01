<?php

    require_once('../Model/src/PHPMailer.php');
    require_once('../Model/src/SMTP.php');
    require_once('../Model/src/Exception.php');
    require_once('../Model/classContato.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function enviaContato($contato) {

    $mail = new PHPMailer(true);
    $mail2 = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cfaltribim@gmail.com';
        $mail->Password = '99125912';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('cfaltribim@gmail.com');
        $mail->addAddress('cfaltribim@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $contato->nome.' | Solicitando Contato';
        $mail->Body = "
<html>
<body>
<h4>Dados do Cliente</h4>
<table>
<tr><td>Nome:</td><td>$contato->nome</td></tr>
<tr><td>E-mail:</td><td>$contato->email</td></tr>
<tr><td>Telefone:</td><td>$contato->telefone</td></tr>
<br>
<h4>Mensagem:</h4>
<tr><td>$contato->mensagem</td></tr>
</table>
</body>
</html>";
        $mail->AltBody = 'nome: $contato->nome email: $contato->email telefone: $contato->telefone mensagem: $contato->mensagem';
        if ($mail->send()) { echo "Email 1 enviado !!"; }


        
        $mail2->isSMTP();
        $mail2->Host = 'smtp.gmail.com';
        $mail2->SMTPAuth = true;
        $mail2->Username = 'cfaltribim@gmail.com';
        $mail2->Password = '99125912';
        $mail2->Port = 587;
        $mail2->CharSet = 'UTF-8';

        $mail2->setFrom('cfaltribim@gmail.com');
        $mail2->addAddress($contato->email);
        $mail2->isHTML(true);
        $mail2->Subject = 'Feira dos Goianos | Email Automático !';
        $mail2->Body = "
<html>
<body>
<h4>Este é um E-mail Automático ! Por Favor não responda a este E-mail ! <br> Este E-mail e apenas para confirmar que recebemos a sua mensagem em breve entraremos em contato!</h4>
<table>
<tr><td>Nome:</td><td>$contato->nome</td></tr>
<tr><td>E-mail:</td><td>$contato->email</td></tr>
<tr><td>Telefone:</td><td>$contato->telefone</td></tr>
<br>
<h4>Mensagem:</h4>
<tr><td>$contato->mensagem</td></tr>
</table>
</body>
</html>";
        $mail->AltBody = "nome: $contato->nome email: '$contato->email' telefone: '$contato->telefone' mensagem: '$contato->mensagem'";
        if ($mail2->send()) {echo "Email 2 enviado !!"; }
        return true;
    } catch (Exception $e) {
        echo $mail->Errorinfo;
        echo $mail2->ErrorInfo;
        return false;
    }

    }

?>