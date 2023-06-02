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
            <h1>Ejercicio5</h1>
            <form action="ejercicios.php" method="POST">
                <label for="">Masa de la flota de naves especiales</label>
                <input type="submit" value="Mostrar">
            </form>
            <div class="resultado">
                <?php
                    if (isset($_GET["masaFlota"])) { 
                    
                        echo "La masa total de toda la flota es " . $_GET['masaFlota'] . 'Tn';
                    
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>