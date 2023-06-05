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
            <h1>Ejercicio 12</h1>
            <form action="ejercicios.php" method="POST">
                <label for="planeta">Agrega un satelite a un planeta especifico</label>
                <select name="planeta" id="planeta">
                    <option value="0" selected disabled>--SELECCIONE--</option>
                    <option value="Mercurio">Mercurio</option>
                    <option value="Venus">venus</option>
                    <option value="Tierra">Tierra</option>
                    <option value="Marte">Marte</option>
                    <option value="Jupiter">Jupiter</option>
                    <option value="Saturno">Saturno</option>
                    <option value="Urano">Urano</option>
                    <option value="Neptuno">Neptuno</option>
                </select>
                <input type="text" name="satelite" placeholder="Escriba el satelite">
                <input type="submit" value="Añadir Satelite al planeta">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["existe"])){

                        $texto= json_decode($_GET["existe"], true);
                        echo "El array con los satelites del planeta selccionado es" ; 

                        echo "<pre>";
                        var_dump($texto);
                        echo "</pre>";

                        var_dump($_GET["planeta"]);
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>