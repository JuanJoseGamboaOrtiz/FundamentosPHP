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
            <h1>Ejercicio8</h1>
            <form action="ejercicios.php" method="POST">
                <label for="name">Seleccionar un planeta al azar para una misión espacial</label>
                <input type="submit" value="Seleccionar planeta">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["existe"])) {
                        echo "El planeta seleccionado es  ".$_GET['existe']; 
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>