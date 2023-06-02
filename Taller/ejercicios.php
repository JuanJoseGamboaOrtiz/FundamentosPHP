<?php

$numPlanetas=intval($_POST['numero']);

if(isset($numPlanetas)){
    $planetas = array();

    for ($i = 0; $i < $numPlanetas; $i++) {
      $planetas[$i] = "Deshabitado";
    }

    $planetasStr = json_encode($planetas);

    header('Location: index.php?planetas='. urlencode($planetasStr));
}


?>