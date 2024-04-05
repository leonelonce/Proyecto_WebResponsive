<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
}

$destinatario = "facundocardozotatuajes@gmail.com";

$cuerpo = "De: $nombre\n".
        "Correo: $email\n".
        "Mensaje: $mensaje\n"."";

$mailencabezado = "MIME-Version: 1.0\r\n";
$mailencabezado .= " Content-type: tex/html; charset=UTF-8\r\n";


$mailencabezado = "De: ".$nombre."<".$email.">\r\n";

if(mail($destinatario, $asunto, $cuerpo, $mailencabezado)){
    echo'

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" href="contactoEstilos.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@100&display=swap" rel="stylesheet">
        <title>Contacto</title>
    </head>
    <body>
        <header>
            <a href="home.html" class="logo">
                <img src="imagenes/logo1.png" alt="logo">
            </a>
            <nav>
                <a href="index.html" class="nav-link">INICIO</a>
                <a href="sobreMi.html" class="nav-link">SOBRE MI</a>
                <a href="contacto.html" class="nav-link">CONTACTO</a>
                <a href="pregFrecuentes.html" class="nav-link">?</a>
            </nav>
        </header>
        <div class="contenedor">
            <h1>Gracias por contactarte. Te voy a responder lo antes posible! Revisa tu correo ;)</h1>
            <p class="volver">Volver al<a href="home.html"> Inicio.</a></p>    
        </div>
    </body>
    </html>';
} else {
    echo ' <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" href="contactoEstilos.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@100&display=swap" rel="stylesheet">
        <title>Contacto</title>
    </head>
    <body>
        <header>
            <a href="home.html" class="logo">
                <img src="imagenes/logo1.png" alt="logo">
            </a>
            <nav>
                <a href="home.html" class="nav-link">INICIO</a>
                <a href="" class="nav-link">SOBRE MI</a>
                <a href="" class="nav-link">CONTACTO</a>
            </nav>
        </header>
        <div class="contenedor">
            <h1>Hubo un error al enviar el correo. Por favor, inténtalo de nuevo más tarde.
            <p class="volver">Volver al<a href="index.html"> Inicio.</a></p>    
        </div>
    </body>
    </html>';
}


?> 