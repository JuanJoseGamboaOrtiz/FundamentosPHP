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
            <h1>Ejercicio6</h1>
            <form action="ejercicios.php" method="POST">
                <label for="name">Nombre del planeta</label>
                <input type="text" name="nombre" placeholder="Ingrese el Planeta a Buscar" >
                <input type="submit" value="Buscar">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["existe"])) { 
                        echo $_GET["existe"];
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>