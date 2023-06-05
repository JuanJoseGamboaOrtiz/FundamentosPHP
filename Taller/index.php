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
            <h1>Ejercicio 13</h1>
            <form action="ejercicios.php" method="POST">
                <label for="planeta">Invertir el orden de los planetas</label>
                <input type="submit" value="Invertir Planetas">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["existe"])){

                        $texto= json_decode($_GET["existe"], true);
                        echo "El array invertido es" ; 

                        echo "<pre>";
                        var_dump($texto);
                        echo "</pre>";

                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>