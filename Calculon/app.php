<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            font-size: 20pt;
        }
        table {
            border: none;
            border-collapse: collapse;
            width: 100%;
        }
        input[type="text"] {
            padding: 1%;
            width: 98%;
            font-size: 24pt;
            border: none;
            background-color: lightgray;
        }
        input[type="text"]:focus {
            border: none;
        }
        button {
            width: 100%;
            height: 100%;
            border: none;
            font-size: 24pt;
        }
        button.botonNumero {
            background-color: lightblue;
        }
        button.botonNumero:hover {
            background-color: lightcyan;
        }
        button.botonOperacion {
            background-color: lightgreen;
        }
        button.botonOperacion:hover {
            background-color: limegreen;
        }
        button.botonOpAvanzadas {
            background-color: lightpink;
        }
        button.botonOpAvanzadas:hover {
            background-color: lightsalmon;
        }
        td {
            width: 12.5%;
        }
    </style>
    <script>
        var pantalla = document.getElementById('pantalla');
        var num7 = document.getElementById('num7');
    </script>
    <title>App</title>
</head>
<body>
    <table>
        <?php
            $entrada = $_GET['pantalla']??"";
        ?>
        <form method="get" action="" id="calc-cientifica" name="calc-cientifica">
            <tr>
                <td colspan="8">
                    <input type="text" id="pantalla" name="pantalla" class="comp-calculadora">
                </td>
            </tr>
            <tr>
                <td><button type="button" id="botonExp" name="botonExp" onclick="pantalla.value = pantalla.value + 'exp('" class="botonOpAvanzadas">&ExponentialE;^x</button></td>
                <td><button type="button" id="botonLn" name="botonLn" onclick="pantalla.value = pantalla.value + 'ln('" class="botonOpAvanzadas">ln</button></td>
                <td><button type="button" id="botonLogx" name="botonLogx" onclick="pantalla.value = pantalla.value + 'log(,'" class="botonOpAvanzadas">logx</button></td>
                <td><button type="button" id="botonE" name="botonE" onclick="pantalla.value = pantalla.value + Math.E.toString()" class="botonOpAvanzadas">&ExponentialE;</button></td>
                <td><button type="button" id="num7" name="num7" onclick="pantalla.value = pantalla.value + '7'" class="botonNumero">7</button></td>
                <td><button type="button" id="num8" name="num8" onclick="pantalla.value = pantalla.value + '8'" class="botonNumero">8</button></td>
                <td><button type="button" id="num9" name="num9" onclick="pantalla.value = pantalla.value + '9'" class="botonNumero">9</button></td>
                <td><button type="button" id="botonDiv" name="botonDiv" onclick="pantalla.value = pantalla.value + '/'" class="botonOperacion">/</button></td>
            </tr>
            <tr>
                <td><button type="button" id="botonSin" name="botonSin" onclick="pantalla.value = pantalla.value + 'sin('" class="botonOpAvanzadas">sin</button></td>
                <td><button type="button" id="botonCos" name="botonCos" onclick="pantalla.value = pantalla.value + 'cos('" class="botonOpAvanzadas">cos</button></td>
                <td><button type="button" id="botonTan" name="botonTan" onclick="pantalla.value = pantalla.value + 'tan('" class="botonOpAvanzadas">tan</button></td>
                <td><button type="button" id="botonPI" name="botonPI" onclick="pantalla.value = pantalla.value + Math.PI.toString()" class="botonOpAvanzadas">&pi;</button></td>
                <td><button type="button" id="num4" name="num4" onclick="pantalla.value = pantalla.value + '4'" class="botonNumero">4</button></td>
                <td><button type="button" id="num5" name="num5" onclick="pantalla.value = pantalla.value + '5'" class="botonNumero">5</button></td>
                <td><button type="button" id="num6" name="num6" onclick="pantalla.value = pantalla.value + '6'" class="botonNumero">6</button></td>
                <td><button type="button" id="botonMul" name="botonMul" onclick="pantalla.value = pantalla.value + '*'" class="botonOperacion">&Cross;</button></td>
            </tr>
            <tr>
                <td><button type="button" id="botonCuad" name="botonCuad" onclick="pantalla.value = pantalla.value + '^2'" class="botonOpAvanzadas">x&sup2;</button></td>
                <td><button type="button" id="botonCubo" name="botonCubo" onclick="pantalla.value = pantalla.value + '^3'" class="botonOpAvanzadas">x&sup3;</button></td>
                <td><button type="button" id="botonSqrt" name="botonSqrt" onclick="pantalla.value = pantalla.value + 'sqrt('" class="botonOpAvanzadas">&Sqrt;</button></td>
                <td><button type="button" id="botonPow" name="botonPow" onclick="pantalla.value = pantalla.value + '^'" class="botonOpAvanzadas">x^y</button></td>
                <td><button type="button" id="num1" name="num1" onclick="pantalla.value = pantalla.value + '1'" class="botonNumero">1</button></td>
                <td><button type="button" id="num2" name="num2" onclick="pantalla.value = pantalla.value + '2'" class="botonNumero">2</button></td>
                <td><button type="button" id="num3" name="num3" onclick="pantalla.value = pantalla.value + '3'" class="botonNumero">3</button></td>
                <td><button type="button" id="botonResta" name="botonResta" onclick="pantalla.value = pantalla.value + '-'" class="botonOperacion">-</button></td>
            </tr>
            <tr>
                <td><button type="button" id="botonParentesisIq" name="botonParentesisIq" onclick="pantalla.value = pantalla.value + '('" class="botonOpAvanzadas">(</button></td>
                <td><button type="button" id="botonParentesisDe" name="botonParentesisDe" onclick="pantalla.value = pantalla.value + ')'" class="botonOpAvanzadas">)</button></td>
                <td><button type="button" id="botonAbs" name="botonAbs" onclick="pantalla.value = pantalla.value + 'abs('" class="botonOpAvanzadas">Abs</button></td>
                <td><button type="button" id="botonInv" name="botonInv" onclick="pantalla.value = pantalla.value + '1/('" class="botonOpAvanzadas">Inv</button></td>
                <td><button type="button" id="num0" name="num0" onclick="pantalla.value = pantalla.value + '0'" class="botonNumero">0</button></td>
                <td><button type="button" id="numPunto" name="numPunto" onclick="pantalla.value = pantalla.value + '.'" class="botonNumero">.</button></td>
                <td><button type="submit" id="botonResultado" name="botonResultado" class="botonOperacion">=</button></td>
                <td><button type="button" id="botonSuma" name="botonSuma" onclick="pantalla.value = pantalla.value + '+'" class="botonOperacion">+</button></td>
            </tr>
            <?php
                $entrada = str_replace("^","**",$entrada);
                $entrada = str_replace("ln(","log(",$entrada);
                try {
                    $resultado = eval("return $entrada;");
                } catch (Throwable $ex) {
                    $resultado = "ERROR";
                }

                echo "<p>Resultado: {$resultado}</p>"; 
            ?>
        </form>
    </table>
</body>
</html>