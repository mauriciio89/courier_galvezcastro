<?php
    // Para capturar la info que se ingresa  en los inputs  del form tengo que crear variables 

    $email = $_POST['url'] ;

    // A quien le mando el mail
    $para = 'maugalvez89@gmail.com'
    $asunto = 'este mail fue enviado desde la web'

    // Función que envia info del form
    mail($para, $asunto, utf8_decode($mensaje));

    // Función que redirecciona  al usurio una vez que completó el form
    header('Location:gracias.html');






?>
