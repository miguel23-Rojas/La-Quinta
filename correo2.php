<?php

if (isset($_POST['Enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['Tlocal']) 
    && !empty($_POST['Telefono']) && !empty($_POST['Ciudad'])
    && !empty($_POST['interes']) && !empty($_POST['Comentarios'])
    && !empty($_POST['Email'])
    ) {
        $name = $_POST['name'];
        $Tlocal = $_POST['Tlocal'];
        $Telefono = $_POST['Telefono'];
        $Ciudad = $_POST['Ciudad'];
        $interes = $_POST['interes'];
        $Comentarios = $_POST['Comentarios'];
        $Email = $_POST['Email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/".phpversion();
        $mail = @mail($name,$Tlocal,$Telefono,$Ciudad,$interes,$Comentarios,$Email);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}