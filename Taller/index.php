<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Taller</title>
</head>
<body>
    <div class="ejercicios">
        <div class="ejercicio">
            <h1>Ejercicio1</h1>
            <form action="ejercicios.php" method="POST">
                <label for="">Ingrese el número del planeta</label>
                <input type="text" placeholder="Número del planeta" name="numero"> 
                <input type="submit" value="Enviar">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["resultado"])) {
                    $resultado = $_GET["resultado"];
                    echo $resultado;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>