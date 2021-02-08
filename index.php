<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto Ramas</title>
    </head>
    <body>
        <hr>
        <form name="formulario_procesar" action="procesar.php" method="POST">
            <h2>Procesar</h2>
            <label>Introduce tu nombre:</label>
            <input type="text" name="nombre">
            <label>Introduce la edad:</label>
            <input type="text" name="edad">
            <input type="submit" value="Enviar">
        </form>
        <hr>
        <form name="formulario_sumar" action="Suma.php" method="POST">
            <h2>Sumar</h2>
            <label>Numero 1</label>
            <input type="number" name="num1">
            <label>Numero 2</label>
            <input type="number" name="num2">
            <input type="submit" value="Enviar">
        </form>
        <hr>
        <form name="formulario_restar" action="Resta.php" method="POST">
            <h2>Restar</h2>
            <label>Numero 1</label>
            <input type="number" name="num1">
            <label>Numero 2</label>
            <input type="number" name="num2">
            <input type="submit" value="Enviar">
        </form>
        <hr>
        <form name="formulario_dividir" action="Division.php" method="POST">
            <h2>Dividir</h2>
            <label>Numero 1</label>
            <input type="number" name="num1">
            <label>Numero 2</label>
            <input type="number" name="num2">
            <input type="submit" value="Enviar">
        </form>
        <hr>
        <form name="formulario_multiplicar" action="Multiplicacion.php" method="POST">
            <h2>Multiplicar</h2>
            <label>Numero 1</label>
            <input type="number" name="num1">
            <label>Numero 2</label>
            <input type="number" name="num2">
            <input type="submit" value="Enviar">
        </form>
        <hr>
    </body>
</html>
