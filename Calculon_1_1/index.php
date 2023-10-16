<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculon</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <style>
            div.app {
                width: 60%;
                height: 400px;
            }
            iframe {
                width: 100%;
                height: 100%;
                border: none;
            }
            * {
                font-family: 'Montserrat', sans-serif;
                font-size: 16pt;
            }
            button {
                margin-right: 2%;
                background-color: lightyellow;
                border: none;
                padding: 0.5%;
                border-radius: 1%;
            }
            h1 {
                font-size: 28pt;
                margin-left: 4%;
            }
            header {
                background-color: lightgreen;
            }
            hr {
                border: none;
            }
            br {
                margin-top: 4pt;
            }
            div.cabecera {
                background-color:lawngreen;
            }
            a {
                margin-left: 4%;
            }
        </style>
    </head>
    <body>
        <div class="cabecera">
            <header>
                <br>
                <h1>Calculon</h1>
                <hr>
            </header>
            <nav>
                <a href="app.php" target="app"><button>Iniciar calculadora</button></a>
                <br>
                <hr>
            </nav>
        </div>
        <div class="app">
            <iframe name="app" src="app.php">
        </div>
    </body>
</html>