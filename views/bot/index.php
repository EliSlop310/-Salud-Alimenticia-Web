<?php
session_start();
?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Salud del Buen comer</title>
      <link rel="stylesheet" href="public/css/default.css"> 
     <link rel="stylesheet" href="public/css/style.css">
      <link rel="stylesheet" type="text/css" href="public/css/menu.css">
  <script src="https://kit.fontawesome.com/9fec9d4dbe.js" crossorigin="anonymous"></script>

</head>

<body> 

<div id="header1">
<a class="cerrar-sesion" href="models/cerrarCuenta.php">Cerrar Sesion</a>
</div>
    <div class="container">
      <div id="platocon"><center>
            <div class="chatbox">
                    <div class="header">
                        <h4> <img src='public/img/perfil.jpg' class='imgRedonda'/> <br>PlatoBot </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="platobot">Hola! Soy el plato del buen comer, pero me puedes llamar PlatoBot, Estoy para responder preguntas sobre la salud alimenticia. Asi que espero poder ayudarte.</p>
                            <div class="scroller"></div>
                        </div>

                    <form method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Escribe tus dudas aqui" style=" font-family: cursive; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>

            <input type=button class="creador" value="Autores" onClick="mi_alerta()">
                
                
                        <script src="public/js/app.js"></script>

                
                
        </div>
    </center>
    </div>    </div>

    
        <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
        alert ("IA +"+
               "\n"+
               "\nE6");
        }
        </SCRIPT>
  
   <?php require 'views/menulateral.php'?>     
  <?php require 'views/footer.php';?>      
</body>

</html>
