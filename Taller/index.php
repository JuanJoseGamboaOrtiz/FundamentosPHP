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
            <h1>Ejercicio2</h1>
            <form action="ejercicios.php" method="POST">
                <label for="">Ingrese el número de planetas</label>
                <input type="text" placeholder="Número de planetas" name="numero"> 
                <input type="submit" value="Enviar">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["planetas"])) { 
                        $planetas= urldecode($_GET["planetas"]);
                        $planetas=json_decode($planetas, true);

                        
                        foreach ($planetas as $key => $planeta) {
                          echo "Planeta " . $key . ": " . $planeta . "<br>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>