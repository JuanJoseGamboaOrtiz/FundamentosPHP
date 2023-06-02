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
            <h1>Ejercicio4</h1>
            <form action="ejercicios.php" method="POST">
                <label for="">Gravedades de los planetas del sistema solar</label>
                <input type="submit" value="Mostrar">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["gravedades"])) { 
                        $planetas= urldecode($_GET["gravedades"]);
                        $planetas=json_decode($planetas, true);

                        
                        foreach ($planetas as $key => $valor) {
                          echo "El planeta " . $key . "Tiene un gravedad de " . $valor ." m/s^2 <br>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>