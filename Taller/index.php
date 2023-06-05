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
            <h1>Ejercicio 11</h1>
            <form action="ejercicios.php" method="POST">
                <label for="name">Devuelve dos arrays con los planetas unicos de cada sistema</label>
                <input type="submit" value="Generar Array">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["existe"]) && isset($_GET["existe2"])){

                        $texto= json_decode($_GET["existe"], true);
                        $texto1= json_decode($_GET["existe2"], true);
                        echo "El array con los planetas unicos del primer sistema" ; 
                        echo "<pre>";
                        var_dump($texto);
                        echo "</pre>";
                        echo "<br>";
                        echo "El array con los planetas unicos del segundo sistema" ; 
                        echo "<pre>";
                        var_dump($texto1);
                        echo "</pre>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>