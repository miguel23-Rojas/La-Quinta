<?php

if (isset($_POST['Enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['Tlocal']) 
    && !empty($_POST['Telefono']) && !empty($_POST['Ciudad'])
    && !empty($_POST['interes']) && !empty($_POST['Comentarios'])
    && !empty($_POST['email'])
    ) {
        $name = $_POST['name'];
        $Tlocal = $_POST['Tlocal'];
        $Telefono = $_POST['Telefono'];
        $Ciudad = $_POST['Ciudad'];
        $interes = $_POST['interes'];
        $Comentarios = $_POST['Comentarios'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/".phpversion();

        $mensaje = "Este mensaje fue enviado por " . $name . " \r\n";
        $mensaje .= "Su e-mail es: " . $email . " \r\n";
        $mensaje .= "Su tipo de local" . $Tlocal . " \r\n";
        $mensaje .= "Su telefono " . $Telefono . " \r\n";
        $mensaje .= "Cual es su interes" . $interes . " \r\n";
        $mensaje .="Cual es su comentario". $Comentarios . " \r\n";
        $mensaje .= "Enviado el " . date('d/m/Y', time());

        $mail = @mail($email,$interes,utf8_decode($mensaje),$header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}