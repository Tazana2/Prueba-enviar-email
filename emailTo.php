<?php 
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "From: noreply@example.com" . "\r\n";
    $header.= "Reply-To: noreply@example.com" . "\r\n";
    $header.= "X-Mailer: PHP/" . phpversion();
    
    $bro = mail($email, $asunto, $mensaje);
    if ($bro) {
        echo "Holi" .phpversion();
    }


?>