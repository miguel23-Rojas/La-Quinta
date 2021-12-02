<?php

if (isset($_POST['Enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['tema']) 
    && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $tema = $_POST['tema'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/".phpversion();
        $mail = @mail($email,$tema,$msg,$header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}